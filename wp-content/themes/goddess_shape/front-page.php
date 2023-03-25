<!-- page container -->
<?php get_header() ?>
<div class="py-5 mt-16">
    <?php while (have_posts()) {
        the_post();
        the_content();
    } ?>
</div>

<!-- ver colección -->

<div class="flex flex-col mb-5 mx-auto items-center text-base font-champagne_limousines w-36 h-12  " id="carousel-btn">
    <a href="#home_our_products" class="py-2 font-semibold lg:hidden ">
        Ver productos
    </a>
    <div class="hidden lg:flex py-2 font-semibold text-2xl text-red-soft">
        PRODUCTOS
    </div>
    <!-- boton que baja a ver colección -->
    <img class=" h-3 w-3 lg:hidden" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/flechashome.png" alt="flecha">
</div>
<!-- *---------------- -->
<div class="block my-24">
    <?= get_template_part('components/colections') ?>
</div>

<section id="home_our_products" class="bg-white">
    <!-- titulo nuestros productos -->
    <div class="flex flex-col text-center bg-transparent ">
        <h2 class="lg:hidden font-champagne_limousines text-28 text-red-soft pb-3 leading-5 w-full font-bold">Nuestros Productos
        </h2>
        <h2 class="hidden lg:flex justify-center font-champagne_limousines text-2xl pt-16 leading-5 w-full font-bold text-red-soft">Nuestros Productos
        </h2>
    </div>
    <!-- boton all HOME -->
    <div class="flex w-full justify-center text-center pb-4 lg:hidden pt-5">
        <div class="flex bg-red-semi justify-center items-center w-1/6  rounded-full">
            <a class="text-white" href="#shop">All</a>
        </div>
    </div>
    <!-- botones nuestros productos HOME -->
    <div class="flex w-full h-8 justify-between px-5 lg:hidden">
        <div class="flex text-lg gs-black">
            <a class="flex" href="#post-quirurgica">Post-quirurgica</a>
        </div>
        <div class="flex">
            <a class="flex text-lg" href="#complementos">Complementos</a>
        </div>
        <div class="flex">
            <a class="flex text-lg" href="#Uso-diario">Uso diario</a>
        </div>
    </div>
    <!-- botones nuestros productos HOME DESKTOP -->
    <div class="hidden lg:flex w-full h-8 justify-center px-5 my-5">
        <div class="flex bg-red-semi text-xl justify-center items-center w-1/12  rounded-full mx-6">
            <a class="text-white" href="#shop">All</a>
        </div>
        <div class="flex text-xl text-black-gs font-light mx-6">
            <a class="flex" href="#post-quirurgica">Post-quirurgica</a>
        </div>
        <div class="flex text-xl text-black-gs font-light mx-6">
            <a class="" href="#complementos">Complementos</a>
        </div>
        <div class="flex text-xl text-black-gs font-light mx-6">
            <a class="" href="#Uso-diario">Uso diario</a>
        </div>
    </div>
</section>
<!-- cards nuestros productos -->
<section class="flex flex-row bg-white-notWhite overflow-x-auto w-full mr-2 px-5 py-10 h-full">
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
<!----------------------------------------------- Colecciones-->
<div class="my-32 block">
    <?= get_template_part('components/colections') ?>
</div>
<!---------------------------------------------------------------------------------- -->
<!--------------------------------------------------------------- nuevos modelos -->
<?= get_template_part('components/loops/new-models') ?>
<!-------------------------------------------------------------------------------- -->
<!---------------------------------------------- pay with -->
<?= get_template_part('components/payments') ?>

<!-- textos abajo de pay with-->
<?= get_template_part('components/shop', 'info') ?>


<!--------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------- categorias -->
<?= get_template_part('components/categories') ?>
<!-------------------------------------------------------------------------------- -->

<!-- imagen abajo de modelos -->
<div class="flex items-center justify-center w-full h-60 bg-white">
    <a href="<?= get_permalink(wc_get_page_id('shop')) ?>">
        <img class="flex h-24" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/shop_now.png" alt="">
    </a>
</div>
<!--------------------------------------------------------------------------- Guia de prendas -->
<section id="guia_prendas">
    <div class="flex flex-col w-full bg-white justify-between">
        <div class="flex items-center justify-center w-full mb-10 bg-white">
            <div class="flex flex-col w-80">
                <h2 class="flex items-center justify-center font-champagne_limousines text-red-soft font-bold text-28 my-4">Guia de prendas</h2>
                <p class="flex text-center justify-center leading-tight font-champagne_limousines gs-black text-lg font-light">Todas nuestras prendas tienen el mejor acabado y comodidad para tu día a día</p>
                <a class="flex flex-row-reverse text-orange-400 underline font-semibold mt-2 ml-auto" href="#clothing-guide">Saber más</a>
            </div>
        </div>
    </div>
    <?= get_template_part('components/guide') ?>
</section>
<!-- blog -->
<section class="lg:hidden flex flex-col w-full h-150 bg-white" id="blog">
    <div class="flex flex-col text-center bg-white ">
        <h2 class="font-champagne_limousines text-28 text-red-soft w-full font-bold h-30">Blog</h2>

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
        <h2 class="lg:hidden font-champagne_limousines text-28 w-full font-bold text-red-soft">Blog</h2>
        <h2 class="hidden lg:flex font-champagne_limousines text-28 font-bold leading-5 w-full text-red-soft justify-center h-30">BLOG</h2>
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
<!-- imagen abajo de blog -->
<a href="<?= get_permalink(wc_get_page_id('shop')) ?>">
    <picture class="flex lg:hidden items-center justify-center w-full h-60 bg-white mb-12">
        <img class="flex h-56 w-50" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/shop-now-full.png" alt="">
    </picture>
</a>
<?= get_template_part('components/faq') ?>
<?php get_footer() ?>