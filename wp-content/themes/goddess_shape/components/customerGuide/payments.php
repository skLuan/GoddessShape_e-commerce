<?php
$classes = '';
if (isset($args['class'])) $classes = $args['class'];
?>
<div class="flex py-20 md:py-0 flex-col w-full justify-start items-center font-semibold bg-transparent relative z-20 <?= esc_attr($classes); ?>">
    <div class="flex flex-col w-[90%] lg:w-[90%] items-center py-2">
        <div class="flex flex-col items-center">
            <img class="flex h-16 lg:h-24" src="<?= get_stylesheet_directory_uri() ?>/assets/img/payments logos/pagos.png" alt="">
            <h2 class="flex font-champagne_limousinesfont-champagne_limousines text-red-semi font-bold text-2xl lg:text-3xl py-3 leading-5">Payments</h2>
        </div>
        <h3 class="flex font-champagne_limousines text-black-gs leading-5 text-xl lg:text-2xl font-light items-center">Say goodbye to payment headaches!</h3>
        <h3 class="flex font-champagne_limousines text-black-gs leading-5 text-xl lg:text-2xl font-light py-4">Our online store accepts a variety of payment methods, so you can purchase your favorite shapewear worry-free. Shop with confidence.</h3>
        <div class="grid grid-cols-2 lg:ml-0 my-4 h-30 w-full ">
            <img class="my-2 lg:col-span-1 mx-auto" src="<?= get_stylesheet_directory_uri() ?>/assets/img/payments logos/Klarna_logo-1.png" alt="">
            <img class="my-2 lg:col-span-1 mx-auto" src="<?= get_stylesheet_directory_uri() ?>/assets/img/payments logos/PayPal_horizontally_Logo_2014-1.png" alt="">
            <img class="my-2 lg:col-span-1 mx-auto" src="<?= get_stylesheet_directory_uri() ?>/assets/img/payments logos/cash-app-png-2.png" alt="">
            <img class="my-2 lg:col-span-1 mx-auto" src="<?= get_stylesheet_directory_uri() ?>/assets/img/payments logos/apple-pay-logo-4.png" alt="">
        </div>
    </div>
</div>