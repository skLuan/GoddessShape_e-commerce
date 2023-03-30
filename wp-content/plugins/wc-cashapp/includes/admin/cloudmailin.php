<?php if ( ! defined( 'ABSPATH' ) ) { exit; }

global $current_user;
$user_meta = get_user_meta( $current_user->ID );
$thisgateway = new WC_Cashapp_Gateway();

?>

<div class="container">
    <h1>How to setup automatic Cash App order updates</h1>
    <p>Visit the <a href="https://theafricanboss.com/update-cashapp-order" target="_blank">Full Detailed Tutorial with more images and videos</a> to learn more about why we chose to integrate with Cloud Mailin for this feature</p>
    <p><a href="https://theafricanboss.com/update-cashapp-order" class="btn btn-primary" target="_blank">Full Up-to-date Tutorial</a></p>

    <div>
        <h2>Tutorial: How to forward Cash App Receipts to your store</h2>
<h3>1. Cloud Mailin (or your mailbox if it allows forwarding emails to URLs)</h3>
So here are the steps to forward Cash App receipts to your store using Cloud Mailin.
<ol>
 	<li><a href="https://www.cloudmailin.com/dashboard">Sign Up or Sign in</a> to get to your dashboard where it will look like below</li>
     <br><img src="<?php echo (WCCASHAPP_PLUGIN_DIR_URL . 'assets/images/cloudmailin/new-address.jpg'); ?>" alt="Cloud Mailin Dashboard" /><br>
 	<li> Add new address using values from your <a href="<? echo admin_url('admin.php?page=wc-settings&tab=checkout&section=cashapp'); ?>" target="_blank">Cash App plugin settings</a>
     <br><img src="<?php echo (WCCASHAPP_PLUGIN_DIR_URL . 'assets/images/cloudmailin/cashapp-settings.jpg'); ?>" alt="Cash App plugin settings" /><br>
<ul>
 	<li>In the <strong><em>Enter the URL of your server (HTTP Endpoint) </em></strong>field, Enter your <a href="<? admin_url('admin.php?page=wc-settings&tab=checkout&section=cashapp'); ?>" target="_blank">Cash App Forwarding URL</a></li>
 	<li>In the <em><strong>POST Format</strong></em> field, Enter your <a href="<? admin_url('admin.php?page=wc-settings&tab=checkout&section=cashapp'); ?>" target="_blank">Cash App Forwarding Format</a></li>
     <br><img src="<?php echo (WCCASHAPP_PLUGIN_DIR_URL . 'assets/images/cloudmailin/add-address.jpg'); ?>" alt="Add address screen" /><br>
</ul>
</li>
 	<li>Click <strong>Save</strong>, and an <strong>auto-generated Cloud Mailin email</strong> (<em>******@cloudmailin.net</em>) will be created for you.</li>
     <br><img src="<?php echo (WCCASHAPP_PLUGIN_DIR_URL . 'assets/images/cloudmailin/address-created.jpg'); ?>" alt="Address created screen" /><br>
 	<li>Copy this email back into your <a href="<? echo admin_url('admin.php?page=wc-settings&tab=checkout&section=cashapp'); ?>" target="_blank">Cash App plugin settings</a> in the <strong>Cash App Forwarding Email</strong> field then save. This email will be used to authenticate receipts so anyone can't just send your store a receipt.</li>
     <br><img src="<?php echo (WCCASHAPP_PLUGIN_DIR_URL . 'assets/images/cloudmailin/cashapp-settings.jpg'); ?>" alt="Cash App plugin settings" /><br>
</ol>
And that's it for Cloud Mailin, now emails sent to Cloud Mailin can be forwarded to your store automatically.
<h3>2. Set up your Cash App Email Mailbox (example using Gmail but you can use any mailbox)</h3>
After linking Cloud Mailin to your store, you need to link the email mailbox that receives your Cash App receipts to Cloud Mailin.
I will use Gmail in this example but you can easily find a YouTube video on how to filter and forward emails using your email mailbox if you don't know it already.

To forward Cash App receipts to the auto-generated Cloud Mailin account, follow these steps:
<ol>
 	<li>First, make sure your <a href="<? admin_url('admin.php?page=wc-settings&tab=checkout&section=cashapp'); ?>" target="_blank"><strong>Receiver Cash App Owner's Email</strong></a> field in your <a href="<? echo admin_url('admin.php?page=wc-settings&tab=checkout&section=cashapp'); ?>" target="_blank">Cash App plugin settings</a> is set up with the right email</li>
 	<li>Then click on these steps to get to the forwarding tab in Gmail: <a href="https://mail.google.com/mail/u/0/#settings/fwdandpop" target="_blank" rel="noopener">Settings icon in top right > See all settings > Forwarding and POP/IMAP tab</a></li>
 	<li>On the Forwarding and POP/IMAP tab, you will see the <strong>Add a forwarding address</strong> button and input your auto-generated Cloud Mailin email and click through prompts</li>
     <br><img src="<?php echo (WCCASHAPP_PLUGIN_DIR_URL . 'assets/images/cloudmailin/gmail-filter.gif'); ?>" alt="Add forwarding at Gmail" /><br>
 	<li>Once done, it will say that an email was sent for confirmation. To find the content of this email, go to your store admin dashboard and in the left sidebar menus you should have a custom post type called <strong>Cash App receipts</strong> in your admin dashboard. If you click on it, you should see a post with the confirmation code that you need. This should serve as both confirmation message to link Gmail to Cloud Mailin but also to show that all the links are active</li>
 	<li>After authenticating with the code, leave the forwarding option to <strong>Disable Forwarding</strong>. You don't want to forward every single email to Cloud Mailin but only the emails from <em><strong>cash@square.com</strong></em> with a subject containing the <strong>"sent you"</strong>.</li>
 	<li>Create a filter by clicking in the email search bar and clicking at the advanced icon on the right inside of the search bar.
Once options appear, put <strong>cash@square.com</strong> in the <strong>From: field</strong> and <strong>"sent you"</strong> in the <strong>Subject: field </strong>and Inbox in the Search: field. Then click on <strong>Create Filter</strong>.</li>
 	<li>In the next filter window, check <strong>Forward it to</strong> and choose the auto-generated Cloud Mailin email then to stay safe, check also Never send it to Spam</li>
</ol>
<em><strong>Notice: </strong>use the double quotes to filter out emails with 'you sent' or emails with sent and you in different areas, etc.
</em><em><strong>Remember</strong> </em><a href="https://cloudmailin.com" target="_blank" rel="noopener">Cloud Mailin charges by the emails forwarded</a> so the better you filter your forwarded emails, the better your experience will be.

That's it and you are done. So from now on, all future emails from <em><strong>cash@square.com</strong></em> with a subject containing the <strong>"sent you"</strong> will be forwarded to your store through Cloud Mailin and then they will be able to update order statuses for you.
    </div>

    <h2>Quick Tutorial</h2>
    <p>Visit our website for the most up-to-date tutorial</p>
    <p><a href="https://theafricanboss.com/update-cashapp-order" class="btn btn-primary" target="_blank">Full Detailed Tutorial</a></p>


</div>