<section class="flex flex-col text-center relative">
    <picture class="absolute opacity-30 z-0  w-full flex">
        <img class=" mx-auto rotate-45" width="250px" src="<?= get_stylesheet_directory_uri() ?>/assets/img/home/sol_sin_centro.png" alt="">
    </picture>
    <h1 class="bg-white font-champagne_limousines text-[28px] text-red-soft leading-5 w-full font-bold p-4 pt-16 ">En descuento</h1>
    <img class="mx-auto mb-5" width="44px" src="<?= get_stylesheet_directory_uri() ?>/assets/img/discount-icon.svg" alt="">
    <div class="flex flex-row w-full flex-nowrap p-5 overflow-x-auto bg-white-notWhite z-10">
        <?php
        $today = date('Y-m-d');
        $args = [
            'limit' => 5,
            'orderby' => 'date',
            'order' => 'desc',
            'meta_query' => array(
                array(
                    'key'     => '_sale_price_dates_to',
                    'value'   => $today,
                    'compare' => '>=',
                    'type'    => 'DATE'
                )
            )
        ];
        $products = wc_get_products($args);
        foreach ($products as $product) :
            $product_url = get_permalink($product->get_id());
        ?>
            <!-- card nuevos modelos -->
            <div class="relative flex flex-col min-w-[240px] bg-transparent rounded-lg mr-5 last:mr-0">
                <div class="relative flex rounded-lg pb-5 min-h-[220px] h-full">
                    <!-- sombra card nuestros productos -->
                    <!-- <div class="absolute bg-gray-card w-52 h-64 rounded-lg rotate-6 opacity-20"></div> -->
                    <picture class=" bg-white-true flex shadow-gs h-full rounded-lg">
                        <?= $product->get_image('full', ['class' => 'my-auto rounded-lg']) ?>
                    </picture>
                    <!-- boton add cart -->
                    <button class="absolute right-2 -bottom-5 h-16 w-16 z-30">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/sol-2.png" alt="">
                    </button>
                </div>
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
            </div>
        <?php endforeach;
        ?>
    </div>
</section>