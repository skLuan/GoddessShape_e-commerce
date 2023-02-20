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
<section class="flex flex-row overflow-x-auto w-full mr-2 p-5">
    <?php
    $args = [
        'limit' => -1,
    ];
    $products = wc_get_products($args);

    foreach ($products as $product) :
        $product_url = get_permalink($product->get_id());
    ?>
        <div class="relative flex flex-col w-56 h-120 bg-transparent rounded-lg mr-5 last:mr-0">
            <div class="relative flex w-56 h-120 rounded-lg">
                <!-- sombra card nuestros productos -->
                <div class="absolute bg-gray-card w-52 h-64 rounded-lg rotate-6 opacity-20 shadow-2xl"></div>
                <div class="absolute justify-center h-56 shadow-xl w-52 ">
                    <div class=" rounded-full shadow-2xl">
                        <?= $product->get_image('full') ?>
                    </div>
                </div>
                <!-- boton add cart -->
                <button class="absolute right-5 -bottom-5 h-16 w-16 z-30">
                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/sol-2.png" alt="">
                </button>
            </div>
            <!-- contenedor info -->
            <div class="flex flex-col z-20 h-80 px-5 py-2 justify-around w-52 bg-white shadow-2xl rounded-lg">

                <div class="flex">
                    <div>
                        <a href="<?= $product_url ?>">
                            <h2 class="text-color-secondary font-bold font-champagne_limousines text-lg font-base"><?= $product->get_name() ?></h2>
                        </a>
                    </div>
                </div>
                <!-- tallas y colores -->

                <div class="mb-2">
                    <h2 class="font-base font-light text-gray-400">available in:</h2>
                    <div class="flex h-7 bg-white justify-between text-black-gs text-l font-semibold">
                        <?php
                        $at = explode(", ", $product->get_attribute('size'));
                        // var_dump($at);
                        foreach ($at as $val) {
                            echo '<h2>' . $val . '</h2>';
                        }
                        ?>
                    </div>
                    <div class="flex w-1/2 pt-1 h-7 bg-white ">
                        <div class="flex flex-row justify-around w-full">
                            <!-- <div class="flex flex-row h-3 w-3 bg-orange-300 rounded-full mx-auto my-2"></div>
                            <div class="flex flex-row h-3 w-3 bg-red-soft rounded-full mx-auto my-2"></div>
                            <div class="flex flex-row h-3 w-3 bg-green-600 rounded-full mx-auto my-2"></div> -->
                            <?php
                            $at = explode(", ", $product->get_attribute('color'));

                            foreach ($at as $key => $value) :
                                if ($key > 0) {

                                    switch ($value) {
                                        case 'white':
                                            echo '<div class="flex flex-row h-3 w-3 bg-white border border-black-gs rounded-full mx-auto my-2"></div>';
                                        case 'black':
                                            echo '<div class="flex flex-row h-3 w-3 bg-black-gs rounded-full mx-auto my-2"></div>';
                                            break;
                                        default:
                                            echo "";
                                            break;
                                    }
                                }
                            ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- precio - card -->
                <div class="flex flex-row font-semibold">
                    <h3 class="flex ml-auto gs-black">$<?= $product->get_price() ?></h3>
                    <!-- <div class="flex w-1/3 h-7 bg-white ">
                        <h3 class="flex text-gray-400 line-through">$60.6</h3>
                    </div> -->
                </div>
            </div>
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

<div class="lg:hidden w-full bg-white-notWhite px-5 py-16">
    <div class="lg:hidden flex flex-row w-full justify-around pb-5">
        <div class="flex flex-col w-60">
            <h2 class="flex font-champagne_limousines text-red-semi font-bold text-xl pb-3">Lorem ipsum odor</h2>
            <h3 class="flex font-champagne_limousines text-black-gs leading-5 text-lg font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
        </div>
        <div class="flex items-center justify-center">
            <img class="flex h-20 w-20" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/tiempos amarillo.png.png" alt="">
        </div>
    </div>
    <div class="flex lg:hidden flex-row w-full justify-around pt-5">

        <div class="flex items-center justify-center">
            <img class="flex h-20 w-20" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/pedido_amarillo.png.png" alt="">
        </div>
        <div class="flex flex-col w-60">
            <h2 class="flex font-champagne_limousines text-red-semi font-bold text-xl pb-3">Shipping</h2>
            <h3 class="flex font-champagne_limousines text-black-gs text-lg font-light leading-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
        </div>
    </div>
</div>
<!--------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------- categorias -->
<?= get_template_part('components/categories') ?>
<!-------------------------------------------------------------------------------- -->

<div class="flex flex-col w-full h-136 bg-white justify-between">
    <!-- imagen abajo de modelos -->
    <a href="<?= get_permalink(wc_get_page_id('shop')) ?>" class="flex items-center justify-center w-full h-60 bg-white">
        <img class="flex h-36 w-48" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/shop_now.PNG" alt="">
    </a>
    <!-- Guia de prendas -->
    <div class="flex items-center justify-center w-full h-44 bg-white">
        <div class="flex flex-col w-80">
            <h1 class="flex items-center justify-center font-champagne_limousines font-semibold text-2xl my-4">Guia de prendas</h1>
            <h2 class="flex text-center justify-center font-champagne_limousines gs-black text-lg font-light">Todas nuestras prendas tienen el mejor acabado y comodidad para tu día a día</h2>
            <a class="flex flex-row-reverse text-orange-400 underline font-semibold" href="#clothing-guide">Saber más</a>
        </div>
    </div>
</div>
<!-- cards acabado 1 y acabado 2 -->
<div class="flex flex-row items-center justify-center w-full h-64 bg-white px-4">
    <div class="flex flex-col w-52">
        <h1 class="flex my-2 font-champagne_limousines font-semibold ml-8">Acabado 1</h1>
        <div class="flex flex-row h-28 w-28 bg-gray-card rounded-full mx-auto mb-2"></div>
        <h2 class="flex ml-2 text-lg leading-5 font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>

    </div>
    <div class="flex flex-col w-52">
        <h1 class="flex my-2 font-champagne_limousines font-semibold ml-8">Acabado 2</h1>
        <div class="flex h-28 w-28 bg-gray-card rounded-full mx-auto mb-2"></div>
        <h2 class="flex ml-2 text-lg leading-5 font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
    </div>
</div>
<!-- toma tus medidas -->
<section class="w-full h-60 bg-white my-4 mb-9">
    <div class="flex flex-row w-full justify-around py-4">
        <div class="flex flex-col w-44 text-center">
            <h2 class="flex font-champagne_limousines text-orange-400 underline text-lg my-2 justify-center font-semibold">Toma tus medidas</h2>
            <p class="flex font-champagne_limousines text-orange-400 underline text-lg my-4 justify-center font-semibold">Cuida tus prendas</p>
            <p class="flex font-champagne_limousines leading-5 gs-black font-base font-light text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="flex items-center justify-center">
            <img class="flex h-60 w-32 scaleX-minus-1" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/imagen.png-27.png" alt="">
        </div>
    </div>
</section>

<picture class="flex w-full h-60 rounded-full item-center justify-center my-4">
    <img class="flex mx-auto h-60 scaleX-minus-1" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/brillando_es.png" alt="">
</picture>
<!-- blog -->
<section class="flex flex-col w-full h-150 bg-white" id="blog">
    <div class="flex flex-col text-center bg-white ">
        <h1 class="font-champagne_limousines text-2xl leading-5 w-full font-semibold h-30">Blog</h1>

    </div>

    <div class="flex flex-row w-full justify-around px-2 py-4">
        <div class="flex items-center justify-center">
            <img class="flex h-full w-20" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/fondo-gris.PNG" alt="">
        </div>
        <div class="flex flex-col w-60">
            <h1 class="flex font-champagne_limousines text- text-lg font-semibold">Lorem ipsum odor</h1>
            <h2 class="flex font-champagne_limousines gs-black font-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
        </div>
    </div>
    <div class="flex flex-row w-full justify-around lg:justify-start px-2 p-4 lg:pl-32">
        <div class="flex items-center justify-center">
            <img class="flex h-full w-20" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/fondo-gris.PNG" alt="">
        </div>
        <div class="flex flex-col w-60 pl-2">
            <h1 class="flex font-champagne_limousines lg:text-red-soft text-lg font-semibold ">Lorem ipsum odor</h1>
            <h2 class="flex font-champagne_limousines gs-black font-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
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
<div class="hidden lg:flex flex-col w-full h-150 bg-white pb-32" id="blog">
    <div class="flex flex-col text-center bg-white ">
        <h1 class="lg:hidden font-champagne_limousines text-2xl leading-5 w-full font-semibold h-30">Blog</h1>
        <h1 class="hidden lg:flex font-champagne_limousines text-2xl leading-5 w-full font-semibold text-red-soft justify-center h-30">BLOG</h1>
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
</div>
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
<picture class="flex lg:hidden items-center justify-center w-full h-60 bg-white mb-24">
    <img class="flex h-56 w-50" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/shop-now-full.png" alt="">
</picture>
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
<picture class="relative h-60">
    <img class="absolute inset-0 h-100 w-2/3 items-center m-auto opacity-80" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/sol_sin_centro.png" alt="">
</picture>
<!-- FAQ -->
<div class="flex flex-col w-full h-120 bg-white my-4" id="faq">
    <div class="z-20">
        <div class="flex flex-col text-center bg-white ">
            <h1 class="font-champagne_limousines text-2xl text-red-semi leading-5 w-full font-semibold h-30 mt-6">FAQ</h1>
        </div>
        <div class="flex flex-col items-center justify-around bg-white mt-6 border border-y-secondary">
            <button class="flex text-red-semi font-semibold question ">This is a question number1?
                <img class="flex h-8 w-8" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/arrow-faq.PNG" alt="">
            </button>
            <div class="hidden font-base font-light text-red-semi ">Respuesta 1</div>
        </div>
        <div class="flex flex-col items-center justify-around bg-white mt-6 border border-y-secondary z-10">
            <button class="flex text-red-semi font-semibold question ">This is a question number2?


                <img class="flex h-8 w-8" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/arrow-faq.PNG" alt="">
            </button>
            <div class="hidden font-base font-light text-red-semi ">Respuesta 1</div>
        </div>
        <div class="flex flex-col items-center justify-around bg-white mt-6 border border-y-secondary z-10">
            <button class="flex text-red-semi font-semibold question ">This is a question number3?

                <img class="flex h-8 w-8" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/arrow-faq.PNG" alt="">
            </button>
            <div class="hidden font-base font-light text-red-semi ">Respuesta 1</div>
        </div>
        <div class="flex flex-col items-center justify-around bg-white mt-6 border border-y-secondary z-10">
            <button class="flex text-red-semi font-semibold question ">This is a question number4?

                <img class="flex h-8 w-8" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/arrow-faq.PNG" alt="">
            </button>
            <div class="hidden font-base font-light text-red-semi ">Respuesta 1</div>
        </div>
        <div class="flex flex-col items-center justify-around bg-white mt-6 border border-y-secondary z-20">
            <button class="flex text-red-semi font-semibold question  ">This is a question number5?
                <img class="flex h-8 w-8" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/arrow-faq.PNG" alt="">
            </button>
            <div class="hidden font-base font-light text-red-semi ">Respuesta 1</div>
        </div>
        <script>
            const questions = document.querySelectorAll('.question');
            questions.forEach((question) => {
                question.addEventListener('click', (event) => {
                    event.target.nextElementSibling.classList.toggle('hidden');
                });
            });
        </script>
    </div>
    <picture>
        <img class="relative bottom-40 h-60 w-full" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/medio-sol.png" alt="">
    </picture>
</div>
<?php get_footer() ?>