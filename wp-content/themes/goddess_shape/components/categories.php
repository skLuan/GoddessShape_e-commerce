<section class="flex flex-col w-full h-120 bg-white px-5">
    <h2 class="text-28 text-red-soft font-bold pt-16 pb-10 w-full text-center">Categorias</h2>
    <div class="mx-auto">
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
                <a class="flex flex-row h-20 w-full items-center my-4 " href="<?= $category_link ?>">
                    <img class="flex w-16 h-16" src="<?= $image_url ?>" alt="">
                    <h1 class="font-champagne_limousines px-4  text-xl font-bold text-red-semi"><?= $category->name ?></h1>
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>