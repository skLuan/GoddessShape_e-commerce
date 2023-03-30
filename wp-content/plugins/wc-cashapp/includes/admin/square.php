<?php if ( ! defined( 'ABSPATH' ) ) { exit; }

$redirect = urlencode( $_SERVER['REQUEST_URI'] );
$next_renewal = gmdate("F jS, Y g:i a", wp_next_scheduled( 'wc_cashapp_square_renewal_token_cron_hook' ));

$WC_Cash_App_Pay_Gateway = new WC_Cash_App_Pay_Gateway();
$request_tokens = $WC_Cash_App_Pay_Gateway->wc_cash_app_pay_square_url('access', true);
?>

<div class="container px-5 py-3 d-flex flex-column justify-content-center align-items-start">
    <h1>Power your business with Cash App by Square.</h1>
    <p>Cash App is a mobile payment service developed by Block, Inc., formerly Square, Inc., that allows users to transfer money to one another.</p>

    <?php if ($WC_Cash_App_Pay_Gateway->SQ_Access_Token && $WC_Cash_App_Pay_Gateway->SQ_Refresh_Token) { ?>
        <div class="">
            <h2>Refresh/Revoke currently stored access token</h2>
            <p>Square Access tokens expire in a month for security reasons. Your site will renew your active token weekly. If it fails, click on refresh token to renew it manually and contact us.</p>
        </div>
    <?php } else { ?>
        <div class="">
            <h2>Step 1: Request Tokens from your Square merchant account</h2>
            <p>Go to <a href="<?php echo $request_tokens; ?>" target="_blank">square.emailreceipts.io to Request Tokens and connect your store</a> to get tokens from your Square merchant account</p>
        </div>
    <?php } ?>

    <?php if ($WC_Cash_App_Pay_Gateway->SQ_Access_Token && $WC_Cash_App_Pay_Gateway->SQ_Refresh_Token) { ?>
    <div class="container d-flex flex-column justify-content-start align-items-start px-5 py-3">
        <h4 class="text-success mb-3"><span class="text-dark me-3">Status: </span>Active</h4>
        <p class="mb-3">Square Access tokens expire in a month for security reasons, so your site will automatically request a renewal every week as recommended by Square in case of failure</p>
        <p class="mb-3">Your next weekly scheduled access token renewal is on <span class="text-warning me-3"><?php echo $next_renewal; ?></span></p>
        <form action="<?php echo admin_url( 'admin-post.php' ); ?>" method="post">
            <input class="form-control" type="hidden" name="action" value="refresh_square_token" />
            <?php wp_nonce_field( "refresh_square_token", 'refresh_square_token_nonce', FALSE ); ?>
            <input type="hidden" name="_wp_http_referer" value="<?php echo $redirect; ?>">
            <button class="btn btn-light btn-lg my-1" type="submit">Refresh Access Token</button>
        </form>

        <form action="<?php echo admin_url( 'admin-post.php' ); ?>" method="post">
            <input class="form-control" type="hidden" name="action" value="revoke_square_token" />
            <?php wp_nonce_field( "revoke_square_token", 'revoke_square_token_nonce', FALSE ); ?>
            <input type="hidden" name="_wp_http_referer" value="<?php echo $redirect; ?>">
            <button class="btn btn-danger btn-lg my-1" type="submit">Revoke Access Token</button>
        </form>
    </div>
    <?php } else { ?>
    <div class="container d-flex flex-column justify-content-start align-items-start px-5 py-3">
        <h4 class="text-danger mb-3"><span class="text-dark me-3">Status: </span>Inactive</h4>
        <a class="btn btn-primary btn-lg my-1" role="button" href="<?php echo $request_tokens; ?>" target="_blank">Request Tokens</a>
    </div>
    <div class="">
        <h2>Step 2: Save your location id and tokens</h2>
        <p>/Save the information you receive from emailreceipts.io/square on here and save it to complete the connection</p>
    </div>
    <div class="">
        <h3>For live/production transactions</h3>
        <form method="post" action="<?php echo admin_url( 'admin-post.php' ); ?>">
            <input name="merchant_id" class="form-control my-2" type="password" placeholder="Merchant ID" autocomplete="off" required minlength="3" maxlength="20" />
            <input name="refresh_token" class="form-control my-2" type="password" placeholder="Refresh Token" required minlength="10" autocomplete="off" maxlength="200" />
            <input name="access_token" class="form-control my-2" type="password" placeholder="Access Token" autocomplete="off" required minlength="10" maxlength="200" />
            <input name="location_id" class="form-control my-2" type="password" placeholder="Location ID" autocomplete="off" required minlength="3" maxlength="20" />
            <input class="form-control" type="hidden" name="action" value="save_live_square_env" />
            <?php wp_nonce_field( "save_live_square_env", 'save_live_square_env_nonce', FALSE ); ?>
            <input type="hidden" name="_wp_http_referer" value="<?php echo $redirect; ?>">
            <button class="btn btn-primary btn-lg mt-3" type="submit">Save</button>
        </form>
    </div>
    <?php } ?>

</div>


<div class="container px-5 py-3 d-flex flex-column justify-content-center align-items-start">
    <p>If having trouble, please <a href="https://theafricanboss.com/contact/" target="_blank">contact support</a></p>
</div>