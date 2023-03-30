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

if ( !empty($amount) && $amount != '0' ) {
    $payment_url = 'https://cash.app/' . esc_attr( wp_kses_post( $this->ReceiverCashApp ) ) . '/' . esc_attr( wp_kses_post( $amount ) );
} else {
    $payment_url = 'https://cash.app/' . esc_attr( wp_kses_post( $this->ReceiverCashApp ) );
}

$qr_code_url = "https://chart.googleapis.com/chart?cht=qr&chld=L|0&chs=150x150&chl=" . urlencode( $payment_url );
$qr_code = '<a class="logo_qr" href="' . esc_attr( wp_kses_post( $payment_url ) ) . '" target="_blank"><img style="float: none!important; max-height:150px!important; max-width:100px!important;" alt="payment wallet link" src="' . $qr_code_url . '"></a>';
echo  '<h2>' . esc_html__( 'Cash App Notice', WCCASHAPP_PLUGIN_TEXT_DOMAIN ) . '</h2>' ;
echo  '<p>' . esc_html__( 'Send', WCCASHAPP_PLUGIN_TEXT_DOMAIN ) . ' <a style="color: #00d632" href="' . $payment_url . '" target="_blank">' . wp_kses_post( $total ) . ' ' . esc_html__( 'to', WCCASHAPP_PLUGIN_TEXT_DOMAIN ) . ' ' . esc_attr( wp_kses_post( $this->ReceiverCashApp ) ) . '</a> ' . esc_html__( 'or click the Cash App button below', WCCASHAPP_PLUGIN_TEXT_DOMAIN ) . '</p>' ;
echo  '<p><a href="' . $payment_url . '" target="_blank"><img width="150" height="150" alt="Cash App Link" src="' . esc_attr( WCCASHAPP_PLUGIN_DIR_URL . 'assets/images/cashapp.png' ) . '"></a></p>' ;