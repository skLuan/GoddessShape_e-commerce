<section class="flex flex-col text-center h-fit">
    <h1 class="bg-white font-champagne_limousines text-28 text-red-soft leading-5 w-full font-bold p-4 pt-16">New Arrivals</h1>
    <div class="flex flex-row w-full py-5 overflow-x-auto pb-10 pl-5">
        <?php
        $args = [
            'limit' => 3,
            'orderby' => 'date',
            'order' => 'desc'
        ];
        $products = wc_get_products($args);
        foreach ($products as $product) :  ?>
            <!-- card nuevos modelos -->
            <div class="relative flex lg:w-56 lg:h-120 flex-col min-w-[240px] bg-transparent rounded-lg mr-5 last:mr-0">
                <?= get_template_part('components/product-cards/part', 'pictureOne', ['product' => $product]) ?>
                <?= get_template_part('components/product-cards/part', 'info', ['product' => $product]) ?>
            </div>
        <?php endforeach;
        ?>
    </div>
</section>