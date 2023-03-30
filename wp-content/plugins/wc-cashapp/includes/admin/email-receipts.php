<?php

if ( !defined( 'ABSPATH' ) ) {
    exit;
}
global  $current_user ;
$user_meta = get_user_meta( $current_user->ID );
$thisgateway = new WC_Cashapp_Gateway();
global  $cashapp_fs ;
$upgrade_url = cashapp_fs()->get_upgrade_url();
$connect_button_text = 'Connect ' . get_bloginfo( 'name' ) . ' to emailreceipts.io';
$upgrade = null;
$connect_button_text .= ' - LIMITED FEATURE FOR FREE USERS';
$upgrade = 'As a free user, you are limited on how many orders get processed. <a href="' . $upgrade_url . '">Upgrade for more automation and so much more</a><br>Once upgraded, reconnect again to update emailreceipts.io systems';
?>

<section>
    <div class="container">
        <div class="text-white bg-success border rounded border-0 p-4 py-5">
            <div class="row">
                <div class="col-md-10 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div>
                        <h2 class="text-uppercase fw-bold text-white mb-3">Easily extract <?php 
echo  wp_kses_post( $thisgateway->title ) ;
?> transaction information from your email receipts to automatically update the order status<br>from on-hold -> processing/complete<br>for physical or digital products accordingly</h2>
                        <p class="mb-4">Anytime you receive a Cash App payment, emailreceipts.io will extract the order number and cashtag</p>
                        <p class="mb-4">Once the information has been extracted, it will be sent to <?php 
echo  get_bloginfo( 'name' ) ;
?></p>
                        <p class="mb-4"><?php 
echo  get_bloginfo( 'name' ) ;
?> will then search for the corresponding order, confirm the amount and if everything is accurate, the order will be updated from on-hold -> processing for physical orders and on-hold -> complete for digital orders</p>
                        <p class="mb-4">Also regular notifications to your customer will be sent accordingly</p>

                        <p class="mb-4">Say goodbye to the time spent manually updating inventory and doing status updates from now on.</p>
                        <form class="my-4" id="store-connect-form" name="store-connect-form" data-name="Store Connect Form" action="https://emailreceipts.io/store/connect?ref=<?php 
echo  urlencode( WCCASHAPP_PLUGIN_SLUG ) ;
?>"
                            method="POST" target="_blank" class="main-content">

                            <input type="hidden" name="fname" data-name="First Name" placeholder="First Name"
                                id="fname" value="<?php 
echo  wp_kses_post( get_user_meta( $current_user->ID, 'first_name', true ) ) ;
?>" />

                            <input type="hidden" name="lname" data-name="Last Name" placeholder="Last Name"
                                id="lname" value="<?php 
echo  wp_kses_post( get_user_meta( $current_user->ID, 'last_name', true ) ) ;
?>" />

                            <input type="hidden" name="email" data-name="Email" placeholder="Email"
                            id="email" value="<?php 
echo  wp_kses_post( get_bloginfo( "admin_email" ) ) ;
?>" />

                            <input type="hidden" name="phone" data-name="Phone Number" placeholder="Phone Number"
                                id="phone" value="<?php 
echo  wp_kses_post( get_user_meta( $current_user->ID, 'billing_phone', true ) ) ;
?>" />

                            <input type="hidden" name="name" data-name="Store Name"
                                placeholder="Store Name" id="name" value="<?php 
echo  wp_kses_post( get_bloginfo( "name" ) ) ;
?>" />

                            <input type="hidden" name="domain" data-name="Store Domain"
                                placeholder="Store Domain" id="domain" value="<?php 
echo  wp_kses_post( get_site_url() ) ;
?>" />

                            <input type="hidden" name="thumbnailUrl" data-name="Store Logo"
                                placeholder="Store Logo" id="thumbnailUrl" value="<?php 
echo  wp_kses_post( get_site_icon_url() ) ;
?>" />

                            <input type="hidden" name="institution" data-name="Financial Institution"
                                placeholder="Financial Institution" id="institution" value="<?php 
echo  wp_kses_post( "Cash App" ) ;
?>" />

                            <input type="hidden" name="accountid" data-name="Financial Account ID"
                                placeholder="Financial Account ID" id="accountid" value="<?php 
echo  wp_kses_post( $thisgateway->ReceiverCashApp ) ;
?>" />

                            <input type="hidden" name="accountname" data-name="Financial Account Name"
                                placeholder="Financial Account Name" id="accountname" value="<?php 
echo  wp_kses_post( $thisgateway->ReceiverCashAppOwner ) ;
?>" />

                            <input type="hidden" name="accountemail" data-name="Financial Account Email"
                                placeholder="Financial Account Email" id="accountemail" value="<?php 
echo  wp_kses_post( $thisgateway->ReceiverCASHAPPEmail ) ;
?>" />

                            <input type="hidden" name="webhook" data-name="Webhook URL"
                                placeholder="Webhook URL" id="webhook" value="<?php 
echo  wp_kses_post( $thisgateway->CashAppForwardingURL ) ;
?>" />

                            <input type="hidden" name="extension" id="extension" value="<?php 
echo  WCCASHAPP_PLUGIN_SLUG ;
?>" />
                            <input type="hidden" name="key" id="key" value="<?php 
echo  wp_kses_post( "" ) ;
?>" />

                            <?php 
echo  wp_nonce_field( 'connect_store_to_emailreceipts' ) ;
?>

                            <input type="submit" value="<?php 
echo  $connect_button_text ;
?>" data-wait="Please wait..." class="btn btn-light btn-lg fs-5 py-2 px-4" />
                        </form>

                        <p class="mb-4"><?php 
echo  $upgrade ;
?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>