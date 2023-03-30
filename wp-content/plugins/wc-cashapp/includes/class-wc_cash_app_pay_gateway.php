<?php

if ( !defined( 'ABSPATH' ) ) {
    exit;
}
use  Square\Exceptions\ApiException ;
use  Square\SquareClient ;
use  Square\Models\Money ;
use  Square\Models\CreatePaymentRequest ;
use  Square\Environment ;

if ( class_exists( 'WC_Payment_Gateway' ) ) {
    class WC_Cash_App_Pay_Gateway extends WC_Payment_Gateway
    {
        // protected $SQ_Merchant_Id;
        // protected $SQ_Refresh_Token;
        // protected $SQ_Access_Token;
        public function __construct()
        {
            $this->id = 'cash-app-pay';
            // payment gateway plugin ID
            $this->icon = WCCASHAPP_PLUGIN_DIR_URL . 'assets/images/cashapp_35.png';
            // URL of the icon that will be displayed on checkout page near your gateway name
            $this->has_fields = true;
            // in case you need a custom form
            $this->method_title = 'Cash App Pay by Square';
            $this->method_description = '<a href="https://cash.app/cash-app-pay" target="_blank">Cash App Pay</a> is the official integration for Square merchants. You need to connect an existing Square merchant account or create one to fully integrate this payment method.<br>
			<p><strong>More details about this gateway can be found at <a href="https://square.theafricanboss.com" target="_blank">square.theafricanboss.com</a></strong></p>
			<p><a href="https://square.theafricanboss.com/signup" target="_blank">Sign up to become a Square merchant using our referral link</a></p>
			<p>You will receive free processing on up to $1,000 in credit card transactions for the first 180 days* and/or whatever their current offer at signup is that will show once you click on the link</p>
			<p>See how the <a href="' . admin_url( 'admin.php?page=wc_cashapp_compared' ) . '">Cash App Pay payment method compares to Cash App Link payment method</a></p>';
            // will be displayed on the options page
            $this->init_settings();
            $this->enabled = $this->get_option( 'enabled' );
            $this->title = ( $this->get_option( 'checkout_title' ) ? $this->get_option( 'checkout_title' ) : $this->method_title );
            $this->description = ( $this->get_option( 'checkout_description' ) ? $this->get_option( 'checkout_description' ) : 'Click the button below and follow the instructions to pay with Cash App' );
            $this->SQ_Merchant_Id = $this->get_option( 'SQ_Merchant_Id' );
            $this->SQ_Refresh_Token = $this->get_option( 'SQ_Refresh_Token' );
            $this->SQ_Access_Token = $this->get_option( 'SQ_Access_Token' );
            $this->SQ_Location_Id = $this->get_option( 'SQ_Location_Id' );
            $this->disableMenu = $this->get_option( 'disableMenu' ) ?? 'no';
            $this->processOrder = $this->get_option( 'processOrder' ) ?? 'no';
            $this->toggleTutorial = $this->get_option( 'toggleTutorial' );
            global  $cashapp_fs ;
            $upgrade_url = cashapp_fs()->get_upgrade_url();
            $pro = ' <a style="text-decoration:none" href="' . $upgrade_url . '"><sup style="color:red">PRO</sup></a>';
            $edit_with_pro = ' <a style="text-decoration:none" href="' . $upgrade_url . '">APPLY CHANGES WITH PRO</a>';
            $square = ' <a href="' . $this->wc_cash_app_pay_square_url( 'access', true ) . '" target="_blank">Get it here</a>';
            $new = ' <sup style="color:#0c0">NEW</sup>';
            $newFeature = " <sup style='color:#c00;'>NEW FEATURE</sup>";
            $improvedFeature = " <sup style='color:#0c0;'>IMPROVED FEATURE</sup>";
            $comingSoon = " <sup style='color:#00c;'>COMING SOON</sup>";
            $checkout_message = array(
                'title'       => 'Checkout Page Message',
                'type'        => 'textarea',
                'description' => 'This is the description which the user sees during checkout.',
                'default'     => 'Click the button below and follow the instructions to pay with Cash App',
                'placeholder' => 'Click the button below and follow the instructions to pay with Cash App',
            );
            $pro = ' <a style="text-decoration:none" href="' . $upgrade_url . '"><sup style="color:red">PRO</sup></a>';
            $edit_with_pro = ' <a style="text-decoration:none" href="' . $upgrade_url . '">APPLY CHANGES WITH PRO</a>';
            $checkout_message = array(
                'title'       => 'Checkout Page Message' . $pro,
                'type'        => 'textarea',
                'description' => 'This is the description which the user sees during checkout.' . $edit_with_pro,
                'default'     => 'Click the button below and follow the instructions to pay with Cash App',
                'placeholder' => 'Click the button below and follow the instructions to pay with Cash App',
                'css'         => 'width:80%; pointer-events: none;',
                'class'       => 'disabled',
            );
            $this->form_fields = array(
                'enabled'              => array(
                'title'   => 'Enable Cash App Pay',
                'label'   => 'Check to Enable / Uncheck to Disable',
                'type'    => 'checkbox',
                'default' => 'no',
            ),
                'checkout_title'       => array(
                'title'       => 'Checkout Title',
                'type'        => 'text',
                'description' => 'This is the title which the user sees on the checkout page.',
                'default'     => 'Cash App Pay',
                'placeholder' => 'Cash App Pay',
            ),
                'checkout_description' => $checkout_message,
                'SQ_Merchant_Id'       => array(
                'title'       => 'Square Merchant ID<br>' . $square,
                'type'        => 'text',
                'description' => 'This is your Square Merchant ID.' . $square,
                'placeholder' => 'MXXXXXXXXXXXX',
            ),
                'SQ_Refresh_Token'     => array(
                'title'       => 'Square Refresh Token<br>' . $square,
                'type'        => 'password',
                'description' => 'This is your Square Refresh Token.' . $square,
                'placeholder' => 'token',
            ),
                'SQ_Access_Token'      => array(
                'title'       => 'Square Access Token<br>' . $square,
                'type'        => 'password',
                'description' => 'This is your Square Access Token.' . $square,
                'placeholder' => 'token',
            ),
                'SQ_Location_Id'       => array(
                'title'       => 'Square Location ID<br>' . $square,
                'type'        => 'text',
                'description' => 'This is your Square Location ID.' . $square,
                'placeholder' => 'LXXXXXXXXXXXX',
            ),
                'toggleTutorial'       => array(
                'title'       => 'Enable Tutorial on checkout',
                'label'       => 'Check to Enable / Uncheck to Disable',
                'type'        => 'checkbox',
                'description' => 'Help your customers checkout with ease',
                'default'     => 'no',
            ),
            );
            // Gateways can support subscriptions, refunds, saved payment methods
            $this->supports = array( 'products' );
            // This action hook saves the settings
            add_action( 'woocommerce_update_options_payment_gateways_' . $this->id, array( $this, 'process_admin_options' ) );
            // We need custom JavaScript to obtain a token
            add_action( 'wp_enqueue_scripts', array( $this, 'wc_cash_app_pay_payment_scripts' ) );
            // Thank you page
            add_action(
                "woocommerce_thankyou_{$this->id}",
                array( $this, 'wc_cash_app_pay_thankyou_page' ),
                10,
                1
            );
            add_action(
                'woocommerce_checkout_order_processed',
                array( $this, 'wc_cash_app_pay_processed' ),
                10,
                3
            );
        }
        
        function wc_cash_app_pay_square_url( $string = false, $extension = false )
        {
            $square_url = '';
            if ( !$string ) {
                return $square_url;
            }
            if ( !is_admin() ) {
                return $square_url;
            }
            
            if ( $extension ) {
                $extension = ".php";
            } else {
                $extension = "";
            }
            
            
            if ( $string == "access" || $string == "info" || $string == "refresh" || $string == "revoke" ) {
                global  $current_user ;
                $first_name = '';
                $last_name = '';
                $phone = '';
                
                if ( $current_user && is_php_version_compatible( '7.0' ) ) {
                    $first_name = $current_user->user_firstname ?? get_user_meta( get_current_user_id(), 'first_name', true ) ?? '';
                    $last_name = $current_user->user_lastname ?? get_user_meta( get_current_user_id(), 'last_name', true ) ?? '';
                    $phone = get_user_meta( get_current_user_id(), 'billing_phone', true ) ?? '';
                } else {
                    
                    if ( $current_user ) {
                        $first_name = ( $current_user->user_firstname ? $current_user->user_firstname : get_user_meta( get_current_user_id(), 'first_name', true ) );
                        $last_name = ( $current_user->user_lastname ? $current_user->user_lastname : get_user_meta( get_current_user_id(), 'last_name', true ) );
                        $phone = get_user_meta( get_current_user_id(), 'billing_phone', true );
                    }
                
                }
                
                $sn = urlencode( get_bloginfo( "name" ) );
                $su = urlencode( get_site_url() );
                $fn = urlencode( $first_name );
                $ln = urlencode( $last_name );
                $ph = urlencode( $phone );
                $em = urlencode( get_bloginfo( "admin_email" ) );
                $th = urlencode( get_site_icon_url() );
                $_wpnonce = urlencode( wp_create_nonce( 'connect_store_to_emailreceipts' ) );
                $ref = WCCASHAPP_PLUGIN_SLUG;
                // $square = ' <a href="https://square.theafricanboss.com/access.php?sn=' . urlencode(get_bloginfo("name")) . '&su=' . urlencode(get_site_url()) . '&fn=' . urlencode($first_name) . '&ln=' . urlencode($last_name) . '&em=' . urlencode(get_bloginfo("admin_email")) . '&ph=' . urlencode($phone) . '&th=' . urlencode(get_site_icon_url()) . '&_wpnonce=' . urlencode(wp_create_nonce( 'connect_store_to_emailreceipts' )) . '&ref=' . WCCASHAPP_PLUGIN_SLUG . '" target="_blank">Get it here</a>';
                $square_url = "https://square.theafricanboss.com/{$string}{$extension}?sn={$sn}&su={$su}&fn={$fn}&ln={$ln}&em={$em}&ph={$ph}&th={$th}&_wpnonce={$_wpnonce}&ref={$ref}";
            }
            
            return $square_url;
        }
        
        // /**
        //  * Logging method.
        //  *
        //  * @param string $message Log message.
        //  * @param string $level Optional. Default 'info'. Possible values:
        //  *                      emergency|alert|critical|error|warning|notice|info|debug.
        //  */
        // public static function log( $message, $level = 'info' ) {
        // 	if ( self::$log_enabled ) {
        // 		if ( empty( self::$log ) ) {
        // 			self::$log = wc_get_logger();
        // 		}
        // 		self::$log->log( $level, $message, array( 'source' => 'cash_app_pay' ) );
        // 	}
        // }
        // /**
        //  * Check if this gateway is available in the user's country based on currency.
        //  *
        //  * @return bool
        //  */
        // public function is_valid_for_use() {
        // 	return in_array(
        // 		get_woocommerce_currency(),
        // 		apply_filters(
        // 			'woocommerce_cash_app_pay_supported_currencies',
        // 			array( 'AUD', 'BRL', 'CAD', 'MXN', 'NZD', 'HKD', 'SGD', 'USD', 'EUR', 'JPY', 'TRY', 'NOK', 'CZK', 'DKK', 'HUF', 'ILS', 'MYR', 'PHP', 'PLN', 'SEK', 'CHF', 'TWD', 'THB', 'GBP', 'RMB', 'RUB', 'INR' )
        // 		),
        // 		true
        // 	);
        // }
        // /**
        //  * Admin Panel Options.
        //  * - Options for bits like 'title' and availability on a country-by-country basis.
        //  *
        //  * @since 1.0.0
        //  */
        // public function admin_options() {
        // 	if ( $this->is_valid_for_use() ) {
        // 		parent::admin_options();
        // 	} else {
        // echo '<div class="inline error"><p><strong>' . esc_html_e( 'Gateway disabled', WCCASHAPP_PLUGIN_TEXT_DOMAIN ) . '</strong>:' .
        // 		esc_html_e( 'Cash App Pay does not support your store currency.', WCCASHAPP_PLUGIN_TEXT_DOMAIN ) .
        // 		'</p></div>';
        // }
        // }
        // Payment Custom JS and CSS
        public function wc_cash_app_pay_payment_scripts()
        {
            if ( 'no' === $this->enabled || empty($this->SQ_Access_Token) ) {
                return;
            }
            
            if ( is_checkout() ) {
                $square_web = "https://web.squarecdn.com/v1/square.js";
                wp_enqueue_script( 'wc_cash_app_pay_square_web', $square_web );
                // $square_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'assets/js/square.js' ));
                wp_enqueue_script(
                    'wc_cash_app_pay_square',
                    WCCASHAPP_PLUGIN_DIR_URL . 'assets/js/square.js',
                    array( 'jquery', 'wc_cash_app_pay_square_web' ),
                    null,
                    true
                );
                global  $woocommerce ;
                $cart = $woocommerce->cart;
                $cart_items = $woocommerce->cart->get_cart();
                $amount = $woocommerce->cart->total;
                // https://developer.squareup.com/reference/sdks/web/payments/objects/PaymentRequestOptions
                // [
                // 	{
                // 	  "amount": "22.15",
                // 	  "label": "Item to be purchased",
                // 	  "id": "SKU-12345
                // 	  "imageUrl": "https://url-cdn.com/123ABC"
                // 	  "pending": true
                // 	  "productUrl": "https://my-company.com/product-123ABC"
                // 	}
                // ],
                $lineItems = array();
                foreach ( WC()->cart->get_cart() as $cart_item ) {
                    $lineItems[] = array(
                        'amount'     => $cart_item['line_total'],
                        'label'      => $cart_item['data']->get_name(),
                        'id'         => $cart_item['product_id'],
                        'imageUrl'   => wp_get_attachment_url( $cart_item['data']->get_image_id() ),
                        'productUrl' => get_permalink( $cart_item['product_id'] ),
                    );
                }
                // $buyer = array(
                // 	"givenName" => "John",
                // 	"familyName" => "Doe",
                // 	"addressLines" => array(
                // 	   "123 East Main Street",
                // 	   "#111"
                // 	),
                // 	"city" => "Seattle",
                // 	"state" => "WA",
                // 	"postalCode" => "98111",
                // 	"countryCode" => "USA",
                // 	"email" => "johndoe@example.com",
                // 	"phone" => "+12065551212"
                // );
                global  $wp ;
                wp_localize_script( 'wc_cash_app_pay_square', 'wc_cash_app_pay_object', array(
                    'checkout_url'  => get_permalink( get_the_ID() ),
                    'checkout_url2' => home_url( $wp->request ),
                    'amount'        => $amount,
                    'cart'          => $cart,
                    'cart_items'    => $cart_items,
                    'lineItems'     => $lineItems,
                ) );
                $spinner_css = 'spinner.css';
                
                if ( !wp_script_is( $spinner_css, 'enqueued' ) ) {
                    wp_register_style( $spinner_css, WCCASHAPP_PLUGIN_DIR_URL . 'assets/css/' . $spinner_css );
                    wp_enqueue_style( $spinner_css );
                    // $spinner_ver = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'assets/css/spinner.css' ));
                    // wp_register_style( 'wc_cash_app_pay_spinner', WCCASHAPP_PLUGIN_DIR_URL . 'assets/css/spinner.css' );
                    // wp_enqueue_style ( 'wc_cash_app_pay_spinner' );
                }
            
            }
        
        }
        
        // Checkout page
        public function payment_fields()
        {
            global  $woocommerce ;
            $total = $woocommerce->cart->get_total();
            // $1.00
            $amount = $woocommerce->cart->total;
            // 1.00
            $sq_environment = Environment::PRODUCTION;
            $sq_location = $this->SQ_Location_Id;
            echo  '<fieldset id="wc-', esc_attr( $this->id ), '-form" data-plugin="' . wp_kses_post( WCCASHAPP_PLUGIN_VERSION ) . '">' ;
            do_action( 'woocommerce_form_start', $this->id );
            
            if ( empty($this->SQ_Access_Token) ) {
                echo  '<p>', wp_kses_post( __( 'Please finish setting up this payment method or contact the admin to do so.', WCCASHAPP_PLUGIN_TEXT_DOMAIN ) ) . '</p>' ;
                do_action( 'woocommerce_form_end', $this->id );
                echo  '<div class="clear"></div></fieldset>' ;
                return;
            }
            
            
            if ( !empty($this->checkout_description) ) {
                echo  '<p>', wp_kses_post( __( $this->checkout_description, WCCASHAPP_PLUGIN_TEXT_DOMAIN ) ) . '</p>' ;
            } else {
                echo  '<p>', wp_kses_post( __( 'Click the button below and follow the instructions to pay with Cash App', WCCASHAPP_PLUGIN_TEXT_DOMAIN ) ) . '</p>' ;
            }
            
            // // as seen on https://squareup.com/shop/hardware/checkout
            echo  '<div class="d-flex align-items-center">
					<input type="hidden" id="amount" name="amount" value="' . $amount . '">
					<input type="hidden" id="payment_token" name="payment_token" value="">
					<input type="hidden" id="sq_environment" name="sq_environment" value="' . $sq_environment . '">
					<input type="hidden" id="sq_location" name="sq_location" value="' . $sq_location . '">

					<form id="cash-app-payment-form">
						<div id="cash-app-spinner">
						<span class="spinner-grow text-dark" role="status"></span>
						</div>
						<span id="reattach-cashapppay" onclick="reattachCashAppPay()"></span>
						<div class="d-flex justify-content-end" id="cash-app-pay"></div>
					</form>
					<div class="d-flex justify-content-center" id="payment-status-container"></div>
				</div>' ;
            // toggleTutorial
            
            if ( 'yes' === $this->toggleTutorial ) {
                echo  '<h4>Instructions</h4><p>A Cash App Pay button should appear above and once you click it, you can follow the steps by scanning with your camera or inside your Cash App mobile app as seen in the GIF below:</p>' ;
                echo  '<p><img class="tutorial" src="' . WCCASHAPP_PLUGIN_DIR_URL . 'assets/images/cash-app-pay-scan.gif" alt="A screenshot showing the dialog box of the linked Square merchant account."></p>' ;
            }
            
            do_action( 'woocommerce_form_end', $this->id );
            echo  '<div class="clear"></div></fieldset>' ;
        }
        
        // validate payment token
        public function validate_fields()
        {
            $sq_payment_token = sanitize_text_field( trim( $_POST['payment_token'] ) );
            if ( !$sq_payment_token || strlen( $sq_payment_token ) < 5 ) {
                wc_add_notice( esc_html( __( 'Invalid Cash App Pay Token. Please click again on the Cash App Pay button or refresh the page', WCCASHAPP_PLUGIN_TEXT_DOMAIN ) ), 'error' );
            }
        }
        
        // Thank you page
        public function wc_cash_app_pay_thankyou_page( $order_id )
        {
            if ( !$order_id ) {
                return;
            }
            $order = wc_get_order( $order_id );
            
            if ( $order && $this->id === $order->get_payment_method() ) {
                $square_receipt = $order->get_meta( 'square_receipt' );
                if ( $square_receipt ) {
                    echo  wp_kses_post( "<p>" . sprintf( __( 'Here is your <a href="%s" target="blank">Square receipt</a>', WCCASHAPP_PLUGIN_TEXT_DOMAIN ), $square_receipt ) . "</p>" ) ;
                }
            }
        
        }
        
        public function wc_cash_app_pay_processed( $order_id, $posted_data, $order )
        {
            if ( !$order_id || !$order ) {
                return;
            }
            if ( $this->id === $order->get_payment_method() ) {
                require_once WCCASHAPP_PLUGIN_DIR . 'includes/functions/order_processed.php';
            }
        }
        
        // Process Order
        public function process_payment( $order_id )
        {
            try {
                global  $woocommerce ;
                
                if ( !$order_id ) {
                    wc_add_notice( '<p>Something went terribly wrong.</p><p>Order information is missing</p>', 'error' );
                    return;
                }
                
                $order = wc_get_order( $order_id );
                
                if ( !$order ) {
                    wc_add_notice( '<p>Something went terribly wrong.</p><p>Order information is missing</p>', 'error' );
                    return;
                }
                
                
                if ( !is_wp_error( $order ) && $this->id === $order->get_payment_method() ) {
                    $amount = $order->get_total();
                    $currency = $order->get_currency();
                    // $total = "$amount $currency";
                    // $total = $order->get_total();
                    $total = $order->get_formatted_order_total();
                    $amount_money = new Money();
                    $amount_money->setAmount( floatval( $amount ) * 100 );
                    $amount_money->setCurrency( $currency );
                    $app_fee_money = new Money();
                    $app_fee_money->setAmount( floatval( $amount ) );
                    $app_fee_money->setCurrency( $currency );
                    $sq_payment_token = sanitize_text_field( trim( $_POST['payment_token'] ) );
                    $paymentRequest = new CreatePaymentRequest( $sq_payment_token, uniqid( "wc-c-{$order_id}" ), $amount_money );
                    // $paymentRequest->setAppFeeMoney($app_fee_money);
                    $paymentRequest->setAutocomplete( true );
                    $paymentRequest->setReferenceId( $order_id );
                    $paymentRequest->setNote( 'Payment for order #' . $order_id );
                    // Initialize Square PHP SDK OAuth API client
                    $sq_environment = Environment::PRODUCTION;
                    $sq_access_token = $this->SQ_Access_Token;
                    $apiClient = new SquareClient( [
                        'environment' => $sq_environment,
                        'accessToken' => $sq_access_token,
                    ] );
                    try {
                        $api_response = $apiClient->getPaymentsApi()->createPayment( $paymentRequest );
                        
                        if ( $api_response->isSuccess() ) {
                            $result = $api_response->getResult();
                            $order->payment_complete();
                            // $square_receipt = $result->payment->receipt_url;
                            // $order->add_meta_data( 'square_receipt', $square_receipt );
                            // 	$note = wp_kses_post( "<p>" . sprintf( __('Here is your <a href="%s" target="blank">Square receipt</a>', WCCASHAPP_PLUGIN_TEXT_DOMAIN), $square_receipt ) . "</p>" );
                            // 	$order->add_order_note( $note , true );
                            $order->reduce_order_stock();
                            // Empty cart
                            $woocommerce->cart->empty_cart();
                            // Redirect to the thank you page
                            return array(
                                'result'   => 'success',
                                'redirect' => $this->get_return_url( $order ),
                            );
                        } else {
                            $errors = $api_response->getErrors();
                            // print_r($errors);
                            wc_add_notice( " " . json_encode( $errors ), 'error' );
                            wc_add_notice( "Square Error. Please try again", 'error' );
                            return;
                        }
                    
                    } catch ( \Throwable $th ) {
                        // print_r($th);
                        wc_add_notice( " " . $th, 'error' );
                        return;
                    }
                } else {
                    wc_add_notice( 'Something went wrong. Try again', 'error' );
                    return;
                }
            
            } catch ( \Throwable $th ) {
                // print_r($th);
                wc_add_notice( " " . $th, 'error' );
                return;
            }
        }
        
        // Webhook
        public function webhook()
        {
            return;
            // $order = wc_get_order( $_GET['id'] );
            // $order->payment_complete();
            // update_option('webhook_debug', $_GET);
        }
    
    }
} else {
    require_once WCCASHAPP_PLUGIN_DIR . 'includes/notifications/woocommerce.php';
}
