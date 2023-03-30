<?php if ( ! defined( 'ABSPATH' ) ) { exit; }

use Automattic\WooCommerce\Client;

if ( !class_exists( 'WC_Cashapp_Update_Order' ) && class_exists( 'WC_Cashapp_Gateway' ) ):
class WC_Cashapp_Update_Order extends WC_Cashapp_Gateway {

  function register() {
      add_action( 'init', array( $this, 'wc_cashapp_cpt' ) );
      add_action( 'rest_api_init', array( $this, 'wc_cashapp_update_order_route' ) );
  }

  // Create CPT
  function wc_cashapp_cpt() {
    if ( class_exists( 'Woocommerce' ) && !post_type_exists( 'cashapp-receipts' ) ) {
      register_post_type( 'cashapp-receipts',
      array(
        'labels' => array(
            'name' => __( 'Cash App Receipts' ),
            'singular_name' => __( 'Cash App Receipt' )
        ),
        'public' => false,
        'show_ui' => true,
        'show_in_rest' => false,
        'has_archive' => false,
        'rewrite' => array('slug' => 'cashapp-receipts'),
        'show_in_rest' => false,
        'menu_icon' => 'dashicons-money-alt',
        'menu_position' => 56,
        )
      );
    }
  }

  // Create REST API route
  function wc_cashapp_update_order_route() {
    register_rest_route( 'wc-cashapp/v1', '/update-cashapp-order', array(
      'methods' => 'POST',
      'callback' => array( $this, 'wc_cashapp_emrcpts_order_update'),
      'permission_callback' => '__return_true',
    ) );
    // register_rest_route( 'wc-cashapp/v1', '/cloudmailin/update-cashapp-order', array(
    //   'methods' => 'POST',
    //   'callback' => array( $this, 'wc_cashapp_cloudmailin_order_update'),
    //   'permission_callback' => '__return_true',
    // ) );
  }

  // Update order
  function wc_cashapp_emrcpts_order_update( $data ) {
    // header("Content-type: application/json");
    header("Content-type: text/plain");

    $body = $data->get_body_params();
    // print_r($body);

    $cashtag = wp_kses_post($body['transactionaccountid']);
    $money = wp_kses_post($body['transactionamount']);
    $currency = wp_kses_post($body['transactioncurrency']);
    $amount = wp_kses_post($body['transactionamount']);
    $order_id = wp_kses_post($body['transactionorderid']);
    $note = wp_kses_post($body['transactionnote']);
    $receipt_post_id = null;

    $origin = get_bloginfo('url');
    echo "\nResponse by: $origin\n";

    echo "Cashtag: $cashtag\n";
    echo "Money: $money\n";
    echo "Currency: $currency\n";
    echo "Amount: $amount\n";
    echo "Order ID: $order_id\n";
    echo "Note: $note\n";

    if ( $_SERVER['HTTP_HOST'] !== "emailreceipts.io" ) {
      $post_dump = print_r($body, true);
      $email_subject = null;
      $shop = wp_kses_post(get_bloginfo('url'));
      $amount = wp_kses_post(floatval($amount)); // $amount == $orderamount
      $order = $this->wc_cashapp_find_cashapp_order($money, $amount, $order_id, $cashtag, $email_subject, $receipt_post_id);
      require_once WCCASHAPP_PLUGIN_DIR . 'includes/admin/process-cashapp.php';
    } else {
      http_response_code(422);
    }
    echo "Status: " . http_response_code();
  }

  function wc_cashapp_find_cashapp_order( $money, $amount, $order_id = null, $cashtag = null, $email_subject = null, $receipt_post_id = null ) {
    $order = array();
    $post_title = null;
    $post_content = null;
    if (!empty($order_id)) {
      $order = wc_get_order( $order_id );
      $order_id = !empty($order) ? $order->get_id() : $order_id;
      $cashtag = empty($cashtag) && $order ? $order->get_meta('customer_cashtag') : $cashtag;
      $post_title = "Receipt: $money from $cashtag for $order_id";
      $post_content = "$money from $cashtag for $order_id.";
    }

    if (empty($order)) {
      // 'orderby' => '<' . ( time() - 3600 ), // ordered before the last hour
      $orders = wc_get_orders( ['limit' => 5, 'payment_method' => 'cashapp', 'orderby' => time() - 3600, 'status' => array('wc-on-hold')] );
      // print_r($orders);
      $ordercountmsg = count($orders) . " recent order(s) match(es) your criteria: payment_method: cashapp, ordered in the last hour, status: on-hold\n";
      echo $ordercountmsg;
      if (count($orders) > 0) {
        $found_order = false;
        $orderind = 0;
        while ($orderind < count($orders) && $found_order == false) {
          $order = $orders[$orderind];
          $orderid = wp_kses_post($order->get_id());
          $orderamount = wp_kses_post(floatval($order->get_total()));
          $customer_cashtag = wp_kses_post($order->get_meta('customer_cashtag'));
          echo "Recent order ". $orderid .": $orderamount vs provided: $amount from ". $customer_cashtag ."\n";
          if ( $amount == $orderamount || $customer_cashtag == $cashtag ) {
            $post_title = "Receipt: $money from $cashtag for $order_id (extracted from recent Cash App order)";
            $post_content = "$money from $cashtag for $order_id.";
            $order_id = !empty($order) ? $orderid : $order_id;
            $cashtag = empty($cashtag) ? $customer_cashtag : $cashtag;
            $found_order = true;
            echo "Recent Cash App order $order_id with cashtag: $cashtag matched amount $amount == $orderamount\n";
          }
          $orderind++;
        }

          // $order = $orders[0];
          // $orderamount = wp_kses_post(floatval($order->get_total()));
          // echo "Recent order: $orderamount vs provided: $amount\n";
          // if ($order->get_payment_method() === 'cashapp' && $amount == $orderamount) {
          //   $post_title = "Receipt: $money from $cashtag for $order_id (extracted from recent Cash App order)";
          //   $post_content = "$money from $cashtag for $order_id.";
          //   $order_id = !empty($order) ? $order->get_id() : $order_id;
          //   $cashtag = empty($cashtag) ? $order->get_meta('customer_cashtag') : $cashtag;
          //   echo "Recent Cash App order $order_id with cashtag: $cashtag matched amount $amount == $orderamount\n";
          // } else {
          //     $post_title = "Receipt: Invalid {$order->get_payment_method_title()} order";
          //     $post_content = "Since the order information was invalid, we tried looking for the most recent order to see if it was a match.<br>Invalid recent order {$order->get_id()} did not match amount or payment method.<br>{$order->get_payment_method_title()} Order of amount $orderamount";
          //     echo "Invalid {$order->get_payment_method_title()} recent order {$order->get_id()} of amount $orderamount != $amount \n";
          // }
      } else {
          $post_title = "Receipt: No valid orders matched the amount: $amount";
          $post_content = "Since the order information was invalid, we tried looking for the most recent order to see if it was a match.<br>" . $ordercountmsg;
      }
    }

    if ($post_title && $post_content && post_type_exists( 'cashapp-receipts' ) ) {
        $cashapp_receipt = array(
            'post_title' => $post_title,
            'post_content' => "$post_content.<br><br>$email_subject",
            'post_type' => 'cashapp-receipts',
            'post_status' => 'private',
        );
        $receipt_post_id = wp_insert_post( $cashapp_receipt );
        if ($receipt_post_id) {
            echo "Cash App Receipt ID: $receipt_post_id created successfully\n";
            http_response_code(201);
        } else {
            echo "Cash App Receipt creation failed\n";
            http_response_code(500);
        }
    }

    return $order;
  }

  // // Update order
  // function wc_cashapp_cloudmailin_order_update( $data ) {
  //   // Setting content-type: text/plain will allow CloudMailin to store this response if it's an error
  //   header("Content-type: text/plain");

  //   $json = $data->get_json_params();
  //   // print_r($json);

  //   $headers = $json['headers'];
  //   $email_subject = wp_kses_post($headers['subject']);
  //   $sender_email = wp_kses_post($headers['from']);
  //   $receiver_email = wp_kses_post($headers['to']);

  //   $email_body = wp_kses_post($json['plain']);
  //   $forwarding_email = wp_kses_post($json['envelope']['to']);

  //   echo "Sender email: " . $sender_email . "\n";
  //   echo "Receiver email: " . $receiver_email . "\n";
  //   echo "Email subject: " . $email_subject . "\n";
  //   echo "Email body: " . $email_body . "\n";
  //   echo "Forwarding email: " . $forwarding_email . "\n";

  //   $cashtag = null;
  //   $money = null;
  //   $currency = null;
  //   $amount = null;
  //   $order_id = null;
  //   $receipt_post_id = null;

  //   if ( $this->wc_cashapp_check_email( $sender_email, $receiver_email ) && $this->CashAppForwardingEmail == $forwarding_email ) {
  //     if (preg_match('/\bsent you\b/', $email_subject) || str_contains($email_subject, 'sent you')) {
  //       $subject_array = explode(' sent you ', $email_subject);
  //       $cashtag = wp_kses_post($subject_array[0]);
  //       $cashtag = wp_kses_post(str_replace ('Fwd: ', '', $cashtag));
  //       $money_array = explode(' for ', $subject_array[1]);
  //       $money = wp_kses_post($money_array[0]);
  //       $amount = preg_match_all('/[\d|\.|\,]+/', $money, $matches);
  //       $amount = $matches[0][0];
  //       $order_id = wp_kses_post($money_array[1]);

  //       $post_dump = $email_body;
  //       $shop = wp_kses_post(get_bloginfo('url'));
  //       $amount = wp_kses_post(floatval($amount)); // $amount == $orderamount
  //       $order = $this->wc_cashapp_find_cashapp_order($money, $amount, $order_id, $cashtag, $email_subject, $receipt_post_id);
  //       require_once WCCASHAPP_PLUGIN_DIR . 'includes/admin/process-cashapp.php';

  //     } else {
  //       if ( post_type_exists( 'cashapp-receipts' ) ) {
  //         $forwarding_receipt = array(
  //           'post_title' => wp_kses_post("Forwarded: {$email_subject}"),
  //           'post_content' => wp_kses_post($email_body),
  //           'post_type' => 'cashapp-receipts',
  //           'post_status' => 'draft',
  //         );
  //         $forwarding_post_id = wp_insert_post( $forwarding_receipt );
  //         if ($forwarding_post_id) {
  //           http_response_code(201);
  //         } else {
  //           http_response_code(500);
  //         }
  //       }
  //       http_response_code(422);
  //     }
  //   } else {
  //     if ( post_type_exists( 'cashapp-receipts' ) ) {
  //       $forwarding_receipt = array(
  //         'post_title' => wp_kses_post("Forwarded: {$email_subject}"),
  //         'post_content' => wp_kses_post($email_body),
  //         'post_type' => 'cashapp-receipts',
  //         'post_status' => 'draft',
  //       );
  //       $forwarding_post_id = wp_insert_post( $forwarding_receipt );
  //       if ($forwarding_post_id) {
  //         http_response_code(201);
  //       } else {
  //         http_response_code(500);
  //       }
  //     }
  //     http_response_code(403);
  //   }
  // }

  // function wc_cashapp_check_email( $sender_email, $receiver_email ) {
  //   $email = wp_kses_post($this->ReceiverCASHAPPEmail);
  //   $cashapp_email = "cash@square.com";
  //   if ( $email == $receiver_email && $cashapp_email == $sender_email ) {
  //     return true;
  //   }
  //   return false;
  // }

}

$WC_Cashapp_Update_Order = new WC_Cashapp_Update_Order();
$WC_Cashapp_Update_Order->register();

endif;