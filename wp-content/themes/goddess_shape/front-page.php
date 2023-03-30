<!-- page container -->
<?php get_header() ?>
    <?php while (have_posts()) {
        the_post();
        the_content();
    } ?>

<section id="home_our_products" class="bg-white">
    <!-- titulo nuestros productos -->
    <div class="flex flex-col text-center bg-transparent ">
        <!-- <h2 class="lg:hidden font-champagne_limousines text-28 text-red-soft pb-3 leading-5 w-full font-bold">Our Products
        </h2> -->
        <h2 class="flex justify-center font-champagne_limousines text-2xl pt-6 mb-2 leading-5 w-full font-bold text-red-soft">Our Products
        </h2>
    </div>
    <!-- boton all HOME -->
    <div class="flex w-full justify-center text-center pb-4 lg:hidden pt-5">
        <div class="flex bg-red-semi justify-center items-center w-1/6  rounded-full">
            <a class="text-white" href="#shop">All</a>
        </div>
    </div>
    <!-- botones nuestros productos HOME -->
    <div class="flex w-full h-8 justify-between mb-4 px-5 lg:hidden">
        <div class="flex text-lg gs-black">
            <a class="flex" href="#post-quirurgica">Post-surgical</a>
        </div>
        <div class="flex">
            <a class="flex text-lg" href="#complementos">Complements</a>
        </div>
        <div class="flex">
            <a class="flex text-lg" href="#Uso-diario">Daily-use</a>
        </div>
    </div>
    <!-- botones nuestros productos HOME DESKTOP -->
    <div class="hidden lg:flex w-full h-8 justify-center px-5 my-5">
        <div class="flex bg-red-semi text-xl justify-center items-center w-1/12  rounded-full mx-6">
            <a class="text-white" href="#shop">All</a>
        </div>
        <div class="flex text-xl text-black-gs font-light mx-6">
            <a class="flex" href="#post-quirurgica">Post-surgical</a>
        </div>
        <div class="flex text-xl text-black-gs font-light mx-6">
            <a class="" href="#complementos">Complements</a>
        </div>
        <div class="flex text-xl text-black-gs font-light mx-6">
            <a class="" href="#Uso-diario">Daily-use</a>
        </div>
    </div>
</section>
<!-- cards nuestros productos -->
<section class="flex flex-row bg-white-notWhite overflow-x-auto justify-center w-full mr-2 px-5 py-8 h-full">
    <?php
    $args = [
        'limit' => 6,
    ];
    $products = wc_get_products($args);
    
    foreach ($products as $product) :
        ?>
        <div class="relative flex lg:w-56 lg:h-fit flex-col min-w-[240px] bg-transparent rounded-lg mr-8 last:mr-0">
            <?= get_template_part('components/product-cards/part', 'pictureOne', ['product' => $product]) ?>
            <?= get_template_part('components/product-cards/part', 'info', ['product' => $product]) ?>
        </div>
    <?php endforeach;  ?>
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
        <?= get_template_part( 'components/customerGuide/payments', null, ['class' => 'atunes !bg-red']) ?>
        <!-- delivery--------------------------------------------------- -->
        <?= get_template_part('components/customerGuide/delivery', null, ['class' => 'atunes !bg-red']) ?>
        <!--------------------------------------------------------------------------- Guia de prendas -->
        <?= get_template_part('components/customerGuide/guide') ?>
</section>


<!--------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------- categorias -->
<?= get_template_part('components/categories') ?>
<!-------------------------------------------------------------------------------- -->

<!-- blog -->
<section class="lg:hidden flex flex-col w-full h-150 bg-white" id="blog">
    <div class="flex flex-col text-center bg-white ">
        <h2 class="font-champagne_limousines text-28 text-red-soft w-full font-bold p-8 h-30">Blog</h2>
        
    </div>
    
    <div class="flex flex-row w-full justify-around px-2 py-4">
        <div class="flex items-center justify-center">
            <img class="flex h-full w-20" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/fondo-gris.png" alt="">
        </div>
        <div class="flex flex-col w-60">
            <h2 class="flex font-champagne_limousines text-red-soft text-lg font-bold">Lorem ipsum odor</h2>
            <p class="flex font-champagne_limousines text-black-gs leading-tight  font-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <div class="flex flex-row w-full justify-around lg:justify-start px-2 p-4 lg:pl-32">
        <div class="flex items-center justify-center">
            <img class="flex h-full w-20" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/fondo-gris.png" alt="">
        </div>
        <div class="flex flex-col w-60 pl-2">
            <h2 class="flex font-champagne_limousines text-red-soft text-lg font-bold ">Lorem ipsum odor</h2>
            <p class="flex font-champagne_limousines text-black-gs leading-tight  font-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <div class="flex flex-row-reverse w-full items-end lg:hidden">
        <div class="flex items-center justify-center h-32 w-28 bg-cover" style="background-image: url(./wp-content/themes/goddess-shape/assets/img/Home/sol_sin_centro.png)">
            <a class="flex text-orange-400 underline font-semibold" href="#blog">
                <img class="flex  w-28 bg-cover" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/ver-blog.png" alt="">
            </a>
        </div>
    </div>
</section>
<!-- blog Desktop -->
<section class="hidden lg:flex flex-col w-full h-150 bg-white pb-32" id="blog">
    <div class="flex flex-col text-center bg-white ">
        <h2 class="hidden lg:flex font-champagne_limousines p-8 text-28 font-bold leading-5 w-full text-red-soft justify-center h-30">BLOG</h2>
    </div>
    <div class="flex flex-row">
        <div class="flex flex-col lg:ml-auto">
            <div class="flex flex-row w-full justify-around lg:justify-start px-2 py-4 lg:pl-32">
                <div class="flex items-center justify-center">
                    <img class="flex h-36 w-36" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/fondo-gris.png" alt="">
                </div>
                <div class="flex flex-col w-60 pl-2">
                    <h1 class="flex font-champagne_limousines lg:text-red-soft text-lg font-semibold">Lorem ipsum odor</h1>
                    <h2 class="flex font-champagne_limousines gs-black font-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
                </div>
            </div>
            <div class="flex flex-row w-full justify-around lg:justify-start px-2 p-4 lg:pl-32">
                <div class="flex items-center justify-center">
                    <img class="flex h-36 w-36" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/fondo-gris.png" alt="">
                </div>
                <div class="flex flex-col w-60 pl-2">
                    <h1 class="flex font-champagne_limousines lg:text-red-soft text-lg font-semibold ">Lorem ipsum odor</h1>
                    <h2 class="flex font-champagne_limousines gs-black font-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
                </div>
            </div>
        </div>
        <div class="flex lg:ml-36 lg:mr-auto flex-row w-100 justify-around lg:justify-end px-2 py-4 lg:pr-32">
            <div class="flex flex-col w-60 justify-center text-left">
                <h1 class="flex font-champagne_limousines lg:text-red-soft  text-lg font-semibold">Lorem ipsum odor</h1>
                <h2 class="flex font-champagne_limousines gs-black font-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
            </div>
            <div class="flex items-center justify-center">
                <img class="flex h-36 w-36" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/fondo-gris.png" alt="">
            </div>
        </div>
    </div>
</section>
<div class="flex items-center justify-center w-full h-60 bg-white">
    <a href="<?= get_permalink(wc_get_page_id('shop')) ?>">
        <img class="flex h-24" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/shop_now.png" alt="">
    </a>
</div>
<?= get_template_part('components/faq') ?>
<?php get_footer() ?>