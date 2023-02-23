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
                <?= get_template_part('components/product-cards/part', 'info', ['product' => $product]) ?>

            </div>
        <?php endforeach;
        ?>
    </div>
</section>