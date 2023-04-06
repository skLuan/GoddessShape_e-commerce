<?php
$classes = '';
if (isset($args['class'])) $classes = $args['class'];
?>
<div class="flex flex-col w-full items-center justify-start py-2 <?= esc_attr($classes); ?>">

    <div class="flex items-center justify-center">
        <img class="flex h-20 lg:h-28" src="<?= IMAGE ?>Home/pedido_degradado3.png" alt="">
    </div>
    <div class="flex flex-col w-[90%] lg:w-[60%] items-center text-left">
        <h2 class="flex font-champagne_limousines text-red-semi  text-2xl lg:text-3xl  font-bold items-center py-3">Shipping</h2>
        <h3 class="font-champagne_limousines text-black-gs text-xl font-light leading-5">We're delighted to offer <span class="font-semibold ">free shipping</span> on orders over $99, because we know you deserve the best.</h3>
        <h3 class="flex font-champagne_limousines text-black-gs text-xl font-light leading-5 py-4">Treat yourself to a little luxury and enjoy our hassle-free shipping, just for you!</h3>
        <h2 class="flex font-champagne_limousines text-black-gs  text-xl lg:text-3xl  font-bold items-center py-3">Track your order  <a target="_blank" class="ml-3 hover:underline transition text-orange-400" href="https://es-tools.usps.com/go/TrackConfirmAction_input"> here</a></h2>
    </div>
</div>