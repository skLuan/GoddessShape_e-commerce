<?php
if (isset($args['product'])) {
    $product = $args['product'];
    $product_url = get_permalink($product->get_id());
}
?>
<!-- contenedor info -->
<div class="flex flex-col z-20 p-5 w-full h-full bg-white-true shadow-gs rounded-lg">

    <a href="<?= $product_url ?>">
        <h2 class=" text-black-gs uppercase text-left font-bold font-champagne_limousines text-[17px] leading-tight"><?= $product->get_name() ?></h2>
    </a>
    <!-- tallas y colores -->

    <div class="mt-3">
        <h2 class="text-xl text-left font-normal text-black-gsSoft ml-5">available in:</h2>
        <div class="flex h-7 bg-white text-black-gsSoft text-lg font-semibold">
            <?php
            $at = explode(", ", $product->get_attribute('size'));
            // var_dump($at);
            foreach ($at as $val) {
                echo '<h2 class="mx-3">' . $val . '</h2>';
            }
            ?>
        </div>
        <div class="flex w-1/2 pt-1 h-7 bg-white ">
            <div class="flex flex-row justify-around w-full">
                <!-- <div class="flex flex-row h-3 w-3 bg-orange-300 rounded-full mx-auto my-2"></div>
                            <div class="flex flex-row h-3 w-3 bg-red-soft rounded-full mx-auto my-2"></div>
                            <div class="flex flex-row h-3 w-3 bg-green-600 rounded-full mx-auto my-2"></div> -->
                <?php
                $at = explode(", ", $product->get_attribute('color'));

                foreach ($at as $key => $value) :
                    switch (strtolower($value)) {
                        case 'cocoa':
                            $bgC = '#be998d';
                            break;
                        case 'beige':
                            $bgC = '#be998d';
                            break;
                        case 'moca':
                            $bgC = '#be998d';
                            break;
                        case 'white':
                            $bgC = '#f9faff';
                            break;
                        case 'black':
                            $bgC = '#231b1b';
                            break;
                        default:
                            $bgC = '#f9faff';
                            break;
                    }
                    if ($key > 0) :
                        endif;
                ?>      
                        <div class="flex flex-row h-4 w-4 rounded-full mx-auto my-2" style="background-color: <?= $bgC ?>;"></div>
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