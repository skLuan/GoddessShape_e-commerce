<?php
if (isset($args['product'])) {
    $product = $args['product'];
    $product_url = get_permalink($product->get_id());
}
?>
<!-- contenedor info -->
<div class="flex flex-col z-20 p-5 w-full h-full bg-white-true shadow-gs rounded-lg">

    <a href="<?= $product_url ?>">
        <h2 class="pt-3 text-black-gs uppercase text-left font-bold font-champagne_limousines text-[17px] leading-tight"><?= $product->get_name() ?></h2>
    </a>
    <!-- tallas y colores -->

    <div class="mt-3">
        <h2 class="text-xl text-left font-normal text-black-gsSoft ml-5">available in:</h2>
        <div class="flex justify-around h-7 text-black-gsSoft text-lg font-semibold">
            <?php
            $at = explode(", ", $product->get_attribute('size'));
            // var_dump($at);
            foreach ($at as $val) {
                echo '<h2 class="">' . $val . '</h2>';
            }
            ?>
        </div>
        <div class="flex pt-1 h-7">
            <div class="flex flex-row justify-around w-full">
                <?php
                $color = $product->get_attribute('color');
                $at = explode(", ", $color);

                // $description = $term->description;

                foreach ($at as $key => $value) :
                    $v = strtolower($value);
                    $term = get_term_by('slug', $v, 'pa_color');
                    $bgC = $term->description

                ?>
                    <div class="color-card h-4 w-4 relative rounded-full my-2" style="background-color: <?= $bgC ?>;">
                        <div class="hidden absolute w-24 px-2 -left-11 -top-8 bg-white rounded-full shadow">
                            <span class="mx-auto">
                                <?= $value ?>
                            </span>
                        </div>
                    </div>
                <?php
                endforeach; ?>
            </div>
        </div>
    </div>
    <!-- precio - card -->
    <div class="flex flex-row font-bold mt-auto">
        <h3 class="flex ml-auto text-2xl text-red-soft">$<?= $product->get_price() ?></h3>
        <!-- <div class="flex w-1/3 h-7 bg-white ">
                        <h3 class="flex text-gray-400 line-through">$60.6</h3>
                    </div> -->
    </div>
</div>