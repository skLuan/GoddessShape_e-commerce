// wc_cash_app_pay_object // wp_localize_script object
console.debug("wc_cash_app_pay_object", wc_cash_app_pay_object);

jQuery(document).ready(function ($) {
	$("body").on("updated_checkout", async function () {
		await loadCashAppPay();
	});
});

var checkout_url = wc_cash_app_pay_object.checkout_url;
var cart = wc_cash_app_pay_object.cart;
var cart_items = wc_cash_app_pay_object.cart_items;
var amount = wc_cash_app_pay_object.amount;
var lineItems = wc_cash_app_pay_object.lineItems ?? [];

let initCashAppPay;
let cashAppPay;
var referenceId = Math.random().toString(35).slice(2);

async function buildPaymentRequest(payments, amount) {
	try {
		// https://developer.squareup.com/reference/sdks/web/payments/objects/PaymentRequestOptions
		// const paymentRequestOptions = {
		// 	"countryCode": "US",
		// 	"currencyCode": "USD",
		// 	"lineItems": [
		// 	  {
		// 		"amount": "22.15",
		// 		"label": "Item to be purchased",
		// 		"id": "SKU-12345
		// 		"imageUrl": "https://url-cdn.com/123ABC"
		// 		"pending": true
		// 		"productUrl": "https://my-company.com/product-123ABC"
		// 	  }
		// 	],
		// 	"taxLineItems": [
		// 	  {
		// 		"label": "State Tax",
		// 		"amount": "8.95",
		// 		"pending": true
		// 	  }
		// 	],
		// 	"discounts": [
		// 	  {
		// 		"label": "Holiday Discount",
		// 		"amount": "5.00",
		// 		"pending": true
		// 	  }
		// 	],
		// 	"requestBillingContact": false,
		// 	"requestShippingContact": false,
		// 	"shippingOptions": [
		// 	  {
		// 		"label": "Next Day",
		// 		"amount": "15.69",
		// 		"id": "1"
		// 	  },
		// 	  {
		// 		"label": "Three Day",
		// 		"amount": "2.00",
		// 		"id": "2"
		// 	  }
		// 	],
		// 	// pending is only required if it's true.
		// 	"total": {
		// 	  "amount": "41.79",
		// 	  "label": "Total",
		// 	},
		//  };
		const paymentRequest = await payments.paymentRequest({
			countryCode: "US",
			currencyCode: "USD",
			total: {
				amount: amount,
				label: "Total",
			},
			lineItems,
			shippingContact: {
				givenName: document.getElementById("billing_first_name")?.value ?? "",
				familyName: document.getElementById("billing_last_name")?.value ?? "",
				addressLines: [
					document.getElementById("billing_address_1")?.value ?? "",
					document.getElementById("billing_address_2")?.value ?? "",
				],
				city: document.getElementById("billing_city")?.value ?? "",
				state: document.getElementById("billing_state")?.value ?? "",
				postalCode: document.getElementById("billing_postcode")?.value ?? "",
				countryCode: document.getElementById("billing_country")?.value ?? "",
				email: document.getElementById("billing_email")?.value ?? "",
				phone: document.getElementById("billing_phone")?.value ?? "",
			},
		});
		console.debug(paymentRequest);
		return paymentRequest;
	} catch (error) {
		console.error(error);
		wc_cash_app_pay_displayMessage(
			"<p>Unable to build Cash App Pay.<br>" + error + "</p>"
		);
		return;
	}
}

async function initializeCashAppPay(payments, amount) {
	try {
		// console.debug(amount, payments);
		const paymentRequest = await buildPaymentRequest(payments, amount);
		if (!paymentRequest) {
			throw "buildPaymentRequest error";
		}
		cashAppPay = await payments.cashAppPay(paymentRequest, {
			redirectURL: window.location.href,
			referenceId: referenceId,
		});
		if (!cashAppPay) {
			throw "Initialization error";
		}
		document.getElementById("cash-app-spinner").style.display = "none";

		console.debug(cashAppPay);
		// const cashAppPayButtonTarget = document.getElementById("cash-app-pay");
		// await cashAppPay.attach(cashAppPayButtonTarget);
		await cashAppPay.attach("#cash-app-pay");
		return cashAppPay;
	} catch (error) {
		console.error(error);
		wc_cash_app_pay_displayMessage(
			"<p>Unable to initialize Cash App Pay.<br>" + error + "</p>"
		);
		return;
	}
}

function tokenizeCashApp(cashAppPayEl) {
	try {
		cashAppPayEl.addEventListener("ontokenization", (event) => {
			console.debug("ontokenization", event);
			const { tokenResult, error } = event.detail;
			if (error) {
				console.error(error);
				throw "<p>Cash App Pay Tokenization Error<br>" + error + "</p>";
			} else if (tokenResult.status === "OK") {
				console.log("tokenResult", tokenResult);
				document.getElementById("payment_token").value = tokenResult.token;
				document.getElementById("cash-app-spinner").style.display = "none";
			} else {
				let errorMessage = `Tokenization failed with status: ${tokenResult.status}`;
				if (tokenResult.errors) {
					errorMessage += ` and errors: ${JSON.stringify(tokenResult.errors)}`;
				}
				console.error(errorMessage);
				throw (
					"<p>Cash App Pay failure after tokenization<br>" +
					errorMessage +
					"</p>"
				);
			}
		});
	} catch (error) {
		console.error(error);
		wc_cash_app_pay_displayMessage(error);
	}
	// cashAppPayEl.addEventListener("ontokenization", async function ({ detail }) {
	// 	const tokenResult = detail.tokenResult;
	// 	if (tokenResult.status === "OK") {
	// 		// change value of hidden input to token
	// 		document.getElementById("payment_token").value = tokenResult.token;
	// 		document.getElementById("cash-app-spinner").style.display = "none";
	// 	} else {
	// 		let errorMessage = `Tokenization failed with status: ${tokenResult.status}`;
	// 		if (tokenResult.errors) {
	// 			errorMessage += ` and errors: ${JSON.stringify(tokenResult.errors)}`;
	// 		}
	// 		console.error(errorMessage);
	// 		wc_cash_app_pay_displayMessage("<p>Cash App Pay Tokenization failed<br>" + errorMessage + "</p>");
	// 		throw new Error(errorMessage);
	// 	}
	// });
}

async function loadCashAppPay() {
	var amount = document.getElementById("amount")?.value ?? '';
	var environment = document.getElementById("sq_environment")?.value ?? '';
	let locationId = document.getElementById("sq_location")?.value ?? '';

	if (!amount || !environment || !locationId) {
		wc_cash_app_pay_displayMessage(
			"<p>Missing required parameters. Finish setting up properly first</p>"
		);
		console.error("Missing required parameters");
		return;
	}

	if (!window.Square) {
		wc_cash_app_pay_displayMessage("<p>square.js failed to load properly</p>");
		console.error("square.js failed to load properly");
		return;
	}

	let payments;
	const sq_appId = "sq0idp-ZXTjnM5LRS7w5XE9MaRzvQ";

	try {
		console.log(sq_appId, locationId);
		payments = Square.payments(sq_appId, locationId);
		// console.debug("payments", payments);
	} catch (error) {
		console.error("window.quare.payments Error:", error);
		wc_cash_app_pay_displayMessage(
			"<p>Cash App Pay Tokenization failed<br>" + error + "</p>"
		);
		return;
	}

	try {
		initCashAppPay = await initializeCashAppPay(payments, amount);
	} catch (error) {
		console.error("initialize CashAppPay Error:", error);
		wc_cash_app_pay_displayMessage(
			"<p>Initializing Cash App Pay failed<br>" + error + "</p>"
		);
		return;
	}
	if (initCashAppPay) {
		// console.log("Cash App Pay is ready", initCashAppPay);
		try {
			tokenizeCashApp(initCashAppPay);
		} catch (error) {
			console.error(error);
			wc_cash_app_pay_displayMessage(
				"<p>Cash App Pay failed tokenization.<br>" + error + "</p>"
			);
			return;
		}
	} else {
		wc_cash_app_pay_displayMessage(
			"<p>Unable to load Cash App Pay.<br>Please refresh or try another payment method</p>"
		);
	}
}

function wc_cash_app_pay_displayMessage(message) {
	document.getElementById("cash-app-spinner").style.display = "none";
	document.getElementById("payment-status-container").innerHTML = message;
}

// // window.onload = function () {
// // 	// document.addEventListener("init_checkout", function () {
// // 	// 	console.log("init_checkout");
// // 	// });

// // 	// document.addEventListener("payment_method_selected", function () {
// // 	// 	console.log(
// // 	// 		document.querySelector('input[name="payment_method"]').value,
// // 	// 		"Payment method selected"
// // 	// 	);
// // 	// });

// // // if (
// // // 	wc_cash_app_pay_object.checkout_url.replace(/\/$/, "") ===
// // // 	wc_cash_app_pay_object.checkout_url2.replace(/\/$/, "")
// // // ) {
// // 	(async function () {
// // 		var payment_method_cash_app_pay = document.querySelector(
// // 			"li.payment_method_cash-app-pay"
// // 		);
// // 		if (payment_method_cash_app_pay) {
// // 			// await loadCashAppPay();
// // 			setTimeout(loadCashAppPay, 3000);
// // 		} else {
// // 			console.debug("payment_method_cash-app-pay not found");
// // 			setTimeout(arguments.callee, 1000); // call myself again in 1000 msecs
// // 		}
// // 	})();

// // 	(async function () {
// // 		var spinner_display =
// // 			document.getElementById("cash-app-spinner").style.display;
// // 		if (cashAppPay && spinner_display != "none") {
// // 			document.getElementById("reattach-cashapppay").innerText = "Reload";
// // 			await reattachCashAppPay();
// // 			// setTimeout(reattachCashAppPay, 3000);
// // 		} else {
// // 			setTimeout(arguments.callee, 1500);
// // 		}
// // 	})();
// // // }
// // };

// var reloadCashAppPay = async function () {
// 	var select_cash_app_pay = document.querySelector(
// 		'input[name="payment_method"][value="cash-app-pay"]'
// 	);
// 	// console.log(select_cash_app_pay);
// 	// $.is( ":checked" )  .checked
// 	if (select_cash_app_pay && select_cash_app_pay.checked) {
// 		// $(document.body).trigger("update_checkout"); // reload checkout elements
// 		if (initCashAppPay) await initCashAppPay.destroy();
// 		await loadCashAppPay();
// 	}
// };
// // reloadCashAppPay();

// async function reattachCashAppPay() {
// 	try {
// 		var spinner_display =
// 			document.getElementById("cash-app-spinner").style.display;
// 		if (cashAppPay && spinner_display != "none") {
// 			await cashAppPay.detach("#cash-app-pay");
// 			await cashAppPay.attach("#cash-app-pay");
// 			document.getElementById("cash-app-spinner").style.display = "none";
// 			console.debug("#cash-app-pay button created");
// 		}
// 		document.getElementById("reattach-cashapppay").style.display = "none";
// 		return;
// 	} catch (error) {
// 		console.error(error);
// 		wc_cash_app_pay_displayMessage(
// 			"<p>Unable to load Cash App Pay.<br>" + error + "</p>"
// 		);
// 	}
// }

// jQuery(document).ready(function ($) {
// 	$("body").on("updated_checkout", function () { });
// 	// $(document.body).trigger("init_checkout", function () {
// 	// 	console.log("init_checkout");
// 	// });
// 	// $(document.body).trigger("payment_method_selected", function () {
// 	// 	console.log(
// 	// 		$('input[name="payment_method"]').val(),
// 	// 		"Payment method selected"
// 	// 	);
// 	// });

// 	$("form.checkout").on(
// 		"change",
// 		'input[name="payment_method"][value="cash-app-pay"]',
// 		async function () {
// 			try {
// 				await reloadCashAppPay();
// 			} catch (error) {
// 				console.error(error);
// 				wc_cash_app_pay_displayMessage(
// 					"<p>Unable to load Cash App Pay.<br>" + error + "</p>"
// 				);
// 			}
// 		}
// 	);

// 	// // 'input[name="payment_method"][value="cash-app-pay"]'
// 	// // 'form.checkout'
// 	// document.querySelector('input[name="payment_method"][value="cash-app-pay"]').addEventListener('change', async (event) => {
// 	// 	try {
// 	// 		await reloadCashAppPay();
// 	// 	} catch (error) {
// 	// 		console.error(error);
// 	// 		wc_cash_app_pay_displayMessage(
// 	// 			"<p>Unable to load Cash App Pay.<br>" + error + "</p>"
// 	// 		);
// 	// 	}
// 	// });
// });