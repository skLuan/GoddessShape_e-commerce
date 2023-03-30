<?php

if ( !defined( 'ABSPATH' ) ) {
    exit;
}
// $order = wc_get_order( $order_id );
$amount = $order->get_total();
$currency = $order->get_currency();
// $total = "$amount $currency";
// $total = $order->get_total();
$total = $order->get_formatted_order_total();
echo  '<h2>' . esc_html__( 'Cash App Notice', WCCASHAPP_PLUGIN_TEXT_DOMAIN ) . '</h2>' ;
$payment_url = 'https://cash.app/' . esc_attr( wp_kses_post( $this->ReceiverCashApp ) ) . '/' . esc_attr( wp_kses_post( $amount ) );
$default_qrcode = '<img class="logo-qr mb-1" width="150px" height="150px" alt="Cash App QR Code" src="https://chart.googleapis.com/chart?cht=qr&chld=L|0&chs=150x150&chl=' . $payment_url . '" />';
echo  '<p><strong style="font-size:large;">' . sprintf( esc_html__( 'Please use your Order Number: %s as the payment reference', WCCASHAPP_PLUGIN_TEXT_DOMAIN ), $order_id ) . '.</strong></p>' ;
echo  '<p class="wc-cashapp">' . esc_html__( 'Click', WCCASHAPP_PLUGIN_TEXT_DOMAIN ) . ' > ' ;
echo  '<a href="' . $payment_url . '" target="_blank"><img width="150" height="150" class="logo-qr" alt=" Cash App Link" src="' . esc_attr( WCCASHAPP_PLUGIN_DIR_URL . 'assets/images/cashapp.png' ) . '"></a>' ;
echo  ' ' . esc_html__( 'or Scan', WCCASHAPP_PLUGIN_TEXT_DOMAIN ) . ' > <a href="' . $payment_url . '" target="_blank">' . $default_qrcode . '</a></p>' ;
echo  '<p><strong>' . esc_html__( 'Disclaimer', WCCASHAPP_PLUGIN_TEXT_DOMAIN ) . ': </strong>' . esc_html__( 'Your order will not be processed until funds have cleared in our Cash App account', WCCASHAPP_PLUGIN_TEXT_DOMAIN ) . '.</p>' ;
echo  '<br><hr><br>' ;