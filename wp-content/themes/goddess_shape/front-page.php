<!-- page container -->
<?php get_header() ?>
<div class="py-5">
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
    <img class=" h-3 w-3 lg:hidden" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/flechashome.PNG" alt="flecha">
</div>
<!-- *---------------- -->
<div class="block my-24">
    <?= get_template_part('components/colections') ?>
</div>

<div class="hidden lg:flex justify-around items-center w-full h-36 mt-16 bg-white-Notwhite">

    <img class="h-36 w-36 " src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/category-desktop.PNG" alt="">
    <img class="h-36 w-36 " src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/category-desktop.PNG" alt="">
    <img class="h-36 w-36 " src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/category-desktop.PNG" alt="">
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
    <div class="flex w-full bg-white-notWhite justify-center text-center pb-4 lg:hidden pt-5">
        <div class="flex bg-red-semi justify-center items-center w-1/6  rounded-full">
            <a class="text-white" href="#shop">All</a>
        </div>
    </div>
    <!-- botones nuestros productos HOME -->
    <div class="flex w-full bg-white-notWhite h-8 justify-between px-2 lg:hidden">
        <div class="flex text-sm gs-black">
            <a class="flex" href="#post-quirurgica">Post-quirurgica</a>
        </div>
        <div class="flex text-sm">
            <a class="flex text-sm" href="#complementos">Complementos</a>
        </div>
        <div class="flex">
            <a class="flex text-sm" href="#Uso-diario">Uso diario</a>
        </div>
    </div>
    <!-- botones nuestros productos HOME DESKTOP -->
    <div class="hidden lg:flex w-full bg-white-notWhite h-8 justify-center px-2">
        <div class="flex bg-red-semi justify-center items-center w-1/12  rounded-full mx-6">
            <a class="text-white" href="#shop">All</a>
        </div>
        <div class="flex text-lg text-black-gs font-light mx-6">
            <a class="flex" href="#post-quirurgica">Post-quirurgica</a>
        </div>
        <div class="flex text-lg text-black-gs font-light mx-6">
            <a class="flex text-lg" href="#complementos">Complementos</a>
        </div>
        <div class="flex text-black-gs font-light mx-6">
            <a class="flex text-lg" href="#Uso-diario">Uso diario</a>
        </div>
    </div>
</section>
<!-- cards nuestros productos -->
<section class="flex flex-row bg-white-notWhite overflow-x-auto w-full mr-2 p-5">
    <?php
    $args = [
        'limit' => -1,
    ];
    $products = wc_get_products($args);

    foreach ($products as $product) :
        $product_url = get_permalink($product->get_id());
    ?>
        <div class="relative flex lg:w-56 lg:h-120 flex-col min-w-[240px] bg-transparent rounded-lg mr-5 last:mr-0">
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
        <img class="flex h-36 w-48" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/shop_now.PNG" alt="">
    </a>
</div>
<!--------------------------------------------------------------------------- Guia de prendas -->
<section id="guia_prendas">
    <div class="flex flex-col w-full h-136 bg-white justify-between">
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

<picture class="flex w-full h-60 rounded-full item-center justify-center my-20">
    <img class="flex mx-auto h-60" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/brillando_es.png" alt="">
</picture>
<!-- blog -->
<section class="lg:hidden flex flex-col w-full h-150 bg-white" id="blog">
    <div class="flex flex-col text-center bg-white ">
        <h2 class="font-champagne_limousines text-28 text-red-soft w-full font-bold h-30">Blog</h2>

    </div>

    <div class="flex flex-row w-full justify-around px-2 py-4">
        <div class="flex items-center justify-center">
            <img class="flex h-full w-20" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/fondo-gris.PNG" alt="">
        </div>
        <div class="flex flex-col w-60">
            <h2 class="flex font-champagne_limousines text-red-soft text-lg font-bold">Lorem ipsum odor</h2>
            <p class="flex font-champagne_limousines text-black-gs leading-tight  font-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <div class="flex flex-row w-full justify-around lg:justify-start px-2 p-4 lg:pl-32">
        <div class="flex items-center justify-center">
            <img class="flex h-full w-20" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/fondo-gris.PNG" alt="">
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
        <div class="flex flex-col">
            <div class="flex flex-row w-full justify-around lg:justify-start px-2 py-4 lg:pl-32">
                <div class="flex items-center justify-center">
                    <img class="flex h-36 w-36" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/fondo-gris.PNG" alt="">
                </div>
                <div class="flex flex-col w-60 pl-2">
                    <h1 class="flex font-champagne_limousines lg:text-red-soft text-lg font-semibold">Lorem ipsum odor</h1>
                    <h2 class="flex font-champagne_limousines gs-black font-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
                </div>
            </div>
            <div class="flex flex-row w-full justify-around lg:justify-start px-2 p-4 lg:pl-32">
                <div class="flex items-center justify-center">
                    <img class="flex h-36 w-36" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/fondo-gris.PNG" alt="">
                </div>
                <div class="flex flex-col w-60 pl-2">
                    <h1 class="flex font-champagne_limousines lg:text-red-soft text-lg font-semibold ">Lorem ipsum odor</h1>
                    <h2 class="flex font-champagne_limousines gs-black font-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
                </div>
            </div>
        </div>
        <div class="flex flex-row w-100 justify-around lg:justify-end px-2 py-4 lg:pr-32">
            <div class="flex flex-col w-60 justify-center text-left">
                <h1 class="flex font-champagne_limousines lg:text-red-soft  text-lg font-semibold">Lorem ipsum odor</h1>
                <h2 class="flex font-champagne_limousines gs-black font-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
            </div>
            <div class="flex items-center justify-center">
                <img class="flex h-36 w-36" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/fondo-gris.PNG" alt="">
            </div>
        </div>
    </div>
</section>
<!-- pay with DESKTOP -->
<div class="hidden lg:flex flex-col w-full justify-around items-center font-semibold h-60">
    <div class="flex flex-col items-center justify-center w-36  h-12 pb-8 ">
        <img class="flex w-16 h-16" src="<?= get_stylesheet_directory_uri() ?>/assets/img/payments logos/pagos_amarillo.png-2.png" alt="">
        <h1 class="flex font-champagne_limousines text-red-soft text-2xl leading-5  ">Pay with</h1>
    </div>
    <div class="flex flex-row my-4 h-30 w-full ">
        <img class="my-2 mx-auto" src="<?= get_stylesheet_directory_uri() ?>/assets/img/payments logos/cash-app-png-2.png" alt="">
        <img class="my-2 mx-auto" src="<?= get_stylesheet_directory_uri() ?>/assets/img/payments logos/PayPal_horizontally_Logo_2014-1.png" alt="">
        <img class="my-2 mx-auto" src="<?= get_stylesheet_directory_uri() ?>/assets/img/payments logos/apple-pay-logo-4.png" alt="">
        <img class="my-2 mx-auto" src="<?= get_stylesheet_directory_uri() ?>/assets/img/payments logos/Klarna_logo-1.png" alt="">
    </div>
</div>
<!-- imagen abajo de blog -->
<a href="<?= get_permalink(wc_get_page_id('shop')) ?>">
    <picture class="flex lg:hidden items-center justify-center w-full h-60 bg-white mb-12">
        <img class="flex h-56 w-50" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/shop-now-full.png" alt="">
    </picture>
</a>
<!-- textos abajo de pay with DESKTOP-->
<section class="hidden lg:flex flex-row w-full h-100 bg-white-notWhite justify-around">
    <div class="flex flex-col w-1/3 justify-center px-2 py-4">
        <div class="flex items-center justify-center">
            <img class="flex h-20 w-20" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/tiempos amarillo.png.png" alt="">
        </div>
        <div class="flex flex-col w-full">
            <h1 class="flex font-champagne_limousines text-red-soft font-semibold text-xl justify-center items-center">Lorem ipsum odor</h1>
            <h2 class="flex font-champagne_limousines gs-black text-lg font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
        </div>
    </div>

    <div class="flex flex-col w-1/3 justify-center px-2 py-4">
        <div class="flex items-center justify-center">
            <img class="flex h-20 w-20" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/pedido_amarillo.png.png" alt="">
        </div>
        <div class="flex flex-col w-full justify-center">
            <h1 class="flex font-champagne_limousines text-red-soft font-semibold text-xl justify-center items-center">Shipping</h1>
            <h2 class="flex font-champagne_limousines gs-black text-lg font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
        </div>
    </div>
</section>
<?= get_template_part('components/faq') ?>
<?php get_footer() ?>