<?php
$classes = '';
if (isset($args['class'])) $classes = $args['class'];
?>
<div class="flex py-20 md:py-0 flex-col w-full justify-start items-center font-semibold bg-transparent relative z-20 <?= esc_attr($classes); ?>">
    <div class="flex flex-col w-[90%] lg:w-[90%] items-center py-2">
        <div class="flex flex-col items-center">
            <img class="flex h-16 lg:h-24" src="<?= get_stylesheet_directory_uri() ?>/assets/img/payments logos/pagos.png" alt="">
            <h2 class="flex py-3 text-2xl font-bold leading-5 font-champagne_limousinesfont-champagne_limousines text-red-semi lg:text-3xl"><?= __('Payments', 'goddess') ?></h2>
        </div>
        <h3 class="flex items-center text-xl font-light leading-5 font-champagne_limousines text-black-gs lg:text-2xl"><?= __('Say goodbye to payment headaches!', 'goddess') ?></h3>
        <h3 class="flex py-4 text-xl font-light leading-5 font-champagne_limousines text-black-gs lg:text-2xl"><?= __('Our online store accepts a variety of payment methods, so you can purchase your favorite shapewear worry-free. Shop with confidence.') ?></h3>
        <div class="grid w-full grid-cols-2 my-4 lg:ml-0 h-30 ">
            <img class="w-4/6 mx-auto my-3 lg:w-1/2 lg:col-span-1" src="<?= get_stylesheet_directory_uri() ?>/assets/img/payments logos/Klarna_logo-1.png" alt="">
            <img class="w-4/6 mx-auto my-3 lg:w-1/2 lg:col-span-1" src="<?= get_stylesheet_directory_uri() ?>/assets/img/payments logos/logo-Paypal.png" alt="">
            <div class="flex flex-row items-center w-4/6 mx-auto my-3 lg:w-2/3 lg:col-span-1 justify-evenly">
                <iconify-icon class="text-1xl lg:text-3xl" icon="logos:visa"></iconify-icon>
                <iconify-icon class="text-4xl lg:text-5xl" icon="logos:mastercard"></iconify-icon>
            </div>
            <img class="w-3/6 mx-auto my-3 lg:w-1/3 lg:col-span-1" src="<?= get_stylesheet_directory_uri() ?>/assets/img/payments logos/Apple_Pay_logo.svg" alt="">
        </div>
    </div>
</div>