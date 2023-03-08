<section class="flex flex-col w-full h-120 bg-white px-5">
    <h2 class="text-28 text-red-soft font-bold pt-16 pb-10 w-full text-center">Categorias</h2>
    <div class="mx-auto lg:flex justify-around lg:w-full">
        <?php
        $product_categories = get_terms(array(
            'taxonomy'   => 'product_cat',
            'hide_empty' => false,
        ));

        // echo '<pre>';
        // echo print_r($product_categories);
        // echo '</pre>';
        foreach ($product_categories as $category) :
            $category_link = get_term_link($category);

            $term_id = $category->term_id; // ID de la categoría
            $image_id = get_term_meta($term_id, 'thumbnail_id', true);
            $image_url = wp_get_attachment_url($image_id);
            if ($term_id !== 15) :
        ?>
                <div class="mb-10 last:mb-0">
                    <a class="flex relative flex-row lg:flex-col-reverse w-full items-center my-4 " href="<?= $category_link ?>">
                        <img class="flex w-20 h-20 lg:w-36 lg:h-36" src="<?= $image_url ?>" alt="">
                        <h1 class="font-champagne_limousines px-4  text-xl lg:text-2xl lg:mb-5 font-bold text-red-semi"><?= $category->name ?></h1>
                    </a>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>