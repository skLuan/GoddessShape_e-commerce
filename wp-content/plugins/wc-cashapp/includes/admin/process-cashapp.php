<?php

if ( !defined( 'ABSPATH' ) ) {
    exit;
}
$order_id = ( !empty($order) ? $order->get_id() : $order_id );
global  $cashapp_fs ;
echo  "UPGRADE TO UNLOCK AUTOMATED ORDER PROCESSING\n" ;

if ( $receipt_post_id ) {
    $receipt_post = get_post( $receipt_post_id );
    
    if ( $receipt_post ) {
        $receipt_post->post_title = wp_kses_post( $receipt_post->post_title . " - UPGRADE TO AUTOMATE FURTHER" );
        $receipt_post->post_content = wp_kses_post( $receipt_post->post_content . " - Upgrade to automated further.<br><br>{$email_subject}<br><br>{$post_dump}" );
        wp_update_post( $receipt_post );
    }

}

http_response_code( 426 );