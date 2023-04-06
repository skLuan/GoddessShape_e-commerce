<section class="flex flex-col text-center relative">
    <h1 class="font-champagne_limousines text-[28px] text-red-soft leading-5 w-full font-bold p-10 pt-10 ">You’ll love it too</h1>

    <div class="flex flex-row w-full p-5 md:justify-center overflow-x-auto bg-white-notWhite z-10">
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
            <div class="relative flex lg:w-56 flex-col min-w-[240px] bg-transparent rounded-lg mr-5 last:mr-0">
                <?= get_template_part('components/product-cards/part', 'pictureOne', ['product' => $product]) ?>
                <?= get_template_part('components/product-cards/part', 'info', ['product' => $product]) ?>

            </div>
        <?php endforeach;
        ?>
    </div>
</section>