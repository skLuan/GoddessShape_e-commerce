<?php
if (isset($args['product'])) {
    $product = $args['product'];
}
?>
<!-- contenedor info -->
<div class="flex flex-col z-20 p-5 w-full bg-white-true shadow-gs rounded-lg">

    <a href="<?= $product_url ?>">
        <h2 class="text-color-secondary text-left font-bold font-champagne_limousines text-lg font-base"><?= $product->get_name() ?></h2>
    </a>
    <!-- tallas y colores -->

    <div class="mt-3">
        <h2 class="font-base text-left font-light text-gray-400">available in:</h2>
        <div class="flex h-7 bg-white justify-between text-black-gs text-l font-semibold">
            <?php
            $at = explode(", ", $product->get_attribute('size'));
            // var_dump($at);
            foreach ($at as $val) {
                echo '<h2>' . $val . '</h2>';
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
                    if ($key > 0) {

                        switch ($value) {
                            case 'white':
                                echo '<div class="flex flex-row h-3 w-3 bg-white border border-black-gs rounded-full mx-auto my-2"></div>';
                            case 'black':
                                echo '<div class="flex flex-row h-3 w-3 bg-black-gs rounded-full mx-auto my-2"></div>';
                                break;
                            default:
                                echo "";
                                break;
                        }
                    }
                ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- precio - card -->
    <div class="flex flex-row font-bold">
        <h3 class="flex ml-auto text-2xl text-red-soft pt-3">$<?= $product->get_price() ?></h3>
        <!-- <div class="flex w-1/3 h-7 bg-white ">
                        <h3 class="flex text-gray-400 line-through">$60.6</h3>
                    </div> -->
    </div>
</div>