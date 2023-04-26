<?php
$classes = '';
if (isset($args['class'])) $classes = $args['class'];

$page = get_page_by_path('goddess-policy');
if ($page) {
    $permalink = get_permalink($page->ID);
}
?>
<div class=" flex flex-col w-full items-center justify-start py-2 <?= esc_attr($classes); ?>">
    <div class="flex items-center justify-center">
        <img class="flex h-20 w-20 lg:h-28 lg:w-28" src="<?= IMAGE ?>Home/tiempo_degradado3.png" alt="">
    </div>
    <div class="flex flex-col w-[90%] lg:w-[80%] items-center">
        <h2 class=" font-champagne_limousines text-red-semi font-bold text-2xl lg:text-3xl py-3"><?= __('Delivery times', 'goddess') ?></h2>
        <h3 class=" font-champagne_limousines text-black-gs leading-5 text-xl lg:text-2xl font-light pb-2"><?= __('Getting your perfect shapewear to you is our top priority! We offer two delivery options for your convenience:', 'goddess') ?></h3>
        <h3 class=" font-champagne_limousines text-black-gs leading-5 text-xl lg:text-2xl font-light w-[85%] py-2"><span class="font-semibold "><?= __('Prior delivery:', 'goddess') ?></span> <?= __('Get your shapewear in a flash with our prior delivery option! You can expect your order to arrive within', 'goddess') ?> <span class="font-semibold "><?= __('3-8 business days.', 'goddess') ?></span></h3>
        <h3 class=" font-champagne_limousines text-black-gs leading-5 text-xl lg:text-2xl font-light w-[85%] py-2"><span class="font-semibold "><?= __('Standard delivery:', 'goddess') ?></span> <?= __('Enjoy free standard delivery and receive your order within', 'goddess') ?> <span class="font-semibold "><?= __('8-15 business days.', 'goddess') ?></span></h3>
        <h3 class=" font-champagne_limousines text-black-gs leading-5 text-xl lg:text-2xl font-light"><?= __("Please keep in mind that the estimated shipping times are not guaranteed and may be subject to unforeseen delays. Don't hesitate to contact us if you have any questions about your delivery!", 'goddess') ?></h3>
        <a target="_blank" class="font-bold underline text-xl mt-3 lg:text-3xl text-orange-400" href="<?= $permalink ?>"><?= __('Meet our policys', 'goddess') ?></a>
    </div>
</div>