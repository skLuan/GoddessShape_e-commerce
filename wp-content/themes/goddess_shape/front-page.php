<!-- page container -->
<?php get_header() ?>
<?php while (have_posts()) {
    the_post();
    the_content();
}
$blog_permalink = get_permalink(get_option('page_for_posts'));

?>

<section id="home_our_products" class="buttons-container">
    <!-- titulo nuestros productos -->
    <div class="flex flex-col text-center bg-transparent">
        <h2 class="flex justify-center font-champagne_limousines text-2xl pt-6 mb-2 leading-5 w-full font-bold text-red-soft">Our Products</h2>
    </div>
    <!-- boton all HOME -->
    <div class="flex w-full justify-center text-center pb-4 lg:hidden pt-5">
        <div class="flex w-1/6 active-products-buton text-xl text-red-soft">
            <button class="button-tab button-filter" href="#shop" data-category="all">All</button>
        </div>
    </div>
    <!-- botones nuestros productos HOME -->
    <div class="flex w-full h-8 justify-between mb-4 px-5 lg:hidden">
        <div class="flex text-red-soft text-xl">
            <button class="flex button-tab button-filter" href="#post-quirurgica" data-category="post-surgical">Post-surgical</button>
        </div>
        <div class="flex text-red-soft text-xl">
            <button class="flex text-lg button-tab button-filter" href="#complementos" data-category="complements">Complements</button>
        </div>
        <div class="flex text-red-soft text-xl">
            <button class="flex text-lg button-tab button-filter" href="#Uso-diario" data-category="daily-use">Daily-use</button>
        </div>
    </div>
    <!-- botones nuestros productos HOME DESKTOP -->
    <div id="ContainerClassDesktop" class="hidden lg:flex w-full h-8 justify-center px-5 my-5">
        <div class="flex text-xl active-products-buton mx-6">
            <button class="button-tab button-filter" href="#shop" data-category="all">All</button>
        </div>
        <div class="flex text-xl text-black-gs font-light mx-6">
            <button class="flex button-tab button-filter" href="#post-quirurgica" data-category="post-surgical">Post-surgical</button>
        </div>
        <div class="flex text-xl text-black-gs font-light mx-6">
            <button class="flex button-tab button-filter" href="#complementos" data-category="complements">Complements</button>
        </div>
        <div class="flex text-xl text-black-gs font-light mx-6">
            <button class="flex button-tab button-filter" href="#Uso-diario" data-category="daily-use">Daily-use</button>
        </div>
    </div>
</section>
<!-- cards nuestros productos -->
<section class="flex flex-row bg-white-notWhite overflow-x-auto lg:justify-start 2xl:justify-center w-full mr-2 px-5 py-8 h-full products-container">
    <?php
    function argsCat($cat = null)
    {
        $args = [
            'limit' => 6,
        ];
        if ($cat && isset($cat)) {
            $args['category'] = $cat;
        }
        return $args;
    }

    $productsAll = wc_get_products(argsCat());
    $productsPost = wc_get_products(argsCat('post-surgical'));
    $productsComplements = wc_get_products(argsCat('complements'));
    $productsDaily = wc_get_products(argsCat('daily-use'));
    $theArraysProducts = [$productsAll, $productsPost, $productsComplements, $productsDaily];
    $theCatSlugs = ['Pall', 'Ppost-surgical', 'Pcomplements', 'Pdaily-use'];


    foreach ($theArraysProducts as $key => $products) : ?>
        <div id="<?= $theCatSlugs[$key] ?>" class="containerProduct first:flex flex-row hidden">
            <?php foreach ($products as $product) : ?>
                <div class="relative flex lg:w-56 lg:h-fit flex-col min-w-[240px] bg-transparent rounded-lg mr-8 last:mr-0">
                    <?= get_template_part('components/product-cards/part', 'pictureOne', ['product' => $product]) ?>
                    <?= get_template_part('components/product-cards/part', 'info', ['product' => $product]) ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</section>
<!-- *---------------- -->
<div class="block my-24">
    <?= get_template_part('components/colections') ?>
</div>
<!---------------------------------------------------------------------------------- -->
<!--------------------------------------------------------------- nuevos modelos -->
<?= get_template_part('components/loops/new-models') ?>

<!----------------------------------------------- Colecciones-->
<div class="my-32 block">
    <?= get_template_part('components/deco', 'colombian') ?>
</div>
<!-------------------------------------------------------------------------------- -->

<!-- textos abajo de pay with-->
<section class="flex flex-col justify-between md:grid grid-cols-2 grid-rows-2 gap-1 w-full bg-white-notWhite px-5 py-16">
    <?= get_template_part('components/customerGuide/shop', 'info', null, ['class' => 'atunes !bg-red']) ?>
    <!----------------------- pay with --------------------------------------->
    <?= get_template_part('components/customerGuide/payments', null, ['class' => 'atunes !bg-red']) ?>
    <!-- delivery--------------------------------------------------- -->
    <?= get_template_part('components/customerGuide/delivery', null, ['class' => 'atunes !bg-red']) ?>
    <!--------------------------------------------------------------------------- Guia de prendas -->
    <?= get_template_part('components/customerGuide/guide') ?>
</section>


<!--------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------- categorias -->
<?= get_template_part('components/categories') ?>
<!-------------------------------------------------------------------------------- -->

<!------------------------------------------------------------------------- Blog -->
<?= get_template_part('components/loops/loop', 'blog') ?>

<div class="flex items-center justify-center w-full">
    <a href="<?= get_permalink(wc_get_page_id('shop')) ?>">
        <img class="flex h-24" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/shop_now.png" alt="">
    </a>
</div>
<?= get_template_part('components/faq') ?>
<?php get_footer() ?>