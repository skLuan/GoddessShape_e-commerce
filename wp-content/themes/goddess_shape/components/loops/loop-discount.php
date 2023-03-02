<section class="flex flex-col text-center relative">
    <h1 class="bg-white font-champagne_limousines text-[28px] text-red-soft leading-5 w-full font-bold p-4 pt-16 ">En descuento</h1>
    <img class="mx-auto mb-5" width="44px" src="<?= get_stylesheet_directory_uri() ?>/assets/img/discount-icon.svg" alt="">

    <div class="flex flex-row w-full p-5 overflow-x-auto bg-white-notWhite z-10">
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
        ?>
            <!-- card nuevos modelos -->
            <div class="relative flex lg:w-56 lg:h-120 flex-col min-w-[240px] bg-transparent rounded-lg mr-5 last:mr-0">
                <?= get_template_part('components/product-cards/part', 'pictureOne', ['product' => $product]) ?>
                <?= get_template_part('components/product-cards/part', 'info', ['product' => $product]) ?>

            </div>
        <?php endforeach;
        ?>
    </div>
</section>