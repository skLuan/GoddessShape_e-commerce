<section class="flex flex-col text-center">
    <h1 class="bg-white font-champagne_limousines text-2xl leading-5 w-full font-semibold p-4 pt-16">Nuevos modelos</h1>
    <div class="flex flex-row w-full p-5 overflow-x-auto">
        <?php
        $args = [
            'limit' => 3,
            'orderby' => 'date',
            'order' => 'desc'
        ];
        $products = wc_get_products($args);
        foreach ($products as $product) :
            $product_url = get_permalink($product->get_id());
        ?>
            <!-- card nuevos modelos -->
            <div class="relative flex flex-col w-56 h-120 bg-transparent rounded-lg mr-5 last:mr-0">
                <div class="relative flex w-56 h-120 rounded-lg">
                    <!-- sombra card nuestros productos -->
                    <div class="absolute bg-gray-card w-52 h-64 rounded-lg rotate-6 opacity-20 shadow-2xl"></div>
                    <div class="absolute justify-center h-56 shadow-xl w-52 ">
                        <div class=" rounded-full shadow-2xl">
                            <?= $product->get_image('full') ?>
                        </div>
                    </div>
                    <!-- boton add cart -->
                    <button class="absolute right-5 -bottom-5 h-16 w-16 z-30">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/sol-2.png" alt="">
                    </button>
                </div>
                <!-- contenedor info -->
                <div class="flex flex-col z-20 h-80 px-5 py-2 justify-around w-52 bg-white shadow-2xl rounded-lg">

                    <div class="flex">
                        <div>
                            <a href="<?= $product_url ?>">
                                <h2 class="text-color-secondary font-bold font-champagne_limousines text-lg font-base"><?= $product->get_name() ?></h2>
                            </a>
                        </div>
                    </div>
                    <!-- tallas y colores -->

                    <div class="mb-2">
                        <h2 class="font-base font-light text-gray-400">available in:</h2>
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
                    <div class="flex flex-row font-semibold">
                        <h3 class="flex ml-auto gs-black">$<?= $product->get_price() ?></h3>
                        <!-- <div class="flex w-1/3 h-7 bg-white ">
                        <h3 class="flex text-gray-400 line-through">$60.6</h3>
                    </div> -->
                    </div>
                </div>
            </div>
        <?php endforeach;
        ?>
    </div>
</section>