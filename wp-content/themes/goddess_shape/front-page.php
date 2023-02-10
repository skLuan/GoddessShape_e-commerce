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
    <div class="py-2 font-semibold lg:hidden ">
        Ver colección
    </div>
    <div class="hidden lg:flex py-2 font-semibold text-2xl text-red-soft">
        COLECCIONES
    </div>
    <!-- boton que baja a ver colección -->
    <img class=" h-3 w-3 lg:hidden" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/flechashome.PNG" alt="flecha">

</div>
<!-- image-container-home -->
<div class="flex lg:hidden justify-center items-center w-full h-36 mt-16 bg-neutral-200">

    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/picture-icon.PNG" alt="">
</div>
<div class="hidden lg:flex justify-around items-center w-full h-36 mt-16 bg-white-Notwhite">

    <img class="h-36 w-36 " src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/category-desktop.PNG" alt="">
    <img class="h-36 w-36 " src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/category-desktop.PNG" alt="">
    <img class="h-36 w-36 " src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/category-desktop.PNG" alt="">
</div>
<!-- titulo nuestros productos -->
<div class="flex flex-col text-center h-136 bg-white-notWhite ">
    <h1 class="lg:hidden font-champagne_limousines text-2xl pt-16 leading-5 w-full font-semibold h-32">Nuestros Productos
    </h1>
    <h1 class="hidden lg:flex justify-center font-champagne_limousines text-2xl pt-16 leading-5 w-full font-semibold h-32 text-red-soft">Nuestros Productos
    </h1>
</div>
<!-- boton all HOME -->
<div class="flex w-full bg-white-notWhite justify-center text-center pb-4 lg:hidden">
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
<!-- cards nuestros productos -->
<div class="flex lg:hidden flex-col h-120 w-full mt-3 mr-2 px-2">
    <div class="flex flex-col w-56 h-120 bg-transparent rounded-lg mx-2">
        <div class="flex w-56 h-120 rounded-lg">
            <!-- sombra card nuestros productos -->
            <div class="absolute bg-gray-card w-52 h-64 rounded-lg rotate-6 opacity-20 shadow-2xl"></div>
            <div class="absolute justify-center h-56 shadow-xl w-52 ">
                <div class=" rounded-full shadow-2xl">
                <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/body.png" alt="">
                </div>
            </div>
        </div>
        <!-- boton add cart -->
        <div class="flex flex-row w-full h-3 items-center z-40">
            <div class="flex flex-row-reverse w-full">
                <div class="flex bg-sun-2 h-28 w-28 bg-cover mb-9 z-20">
                    <button class="flex h-28 w-28 bg-cover mb-9 z-20">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/sol-2.png" alt="">

                    </button>
                </div>
            </div>
        </div>
        <!-- contenedor info -->
        <div class="flex flex-col z-30 h-80 px-2 justify-around mb-4 w-52 bg-white shadow-2xl rounded-lg">

            <div class="flex">
                <div>
                    <h2 class="text-color-secondary text-lg font-base">Faja Post-quirurgica 1</h2>
                </div>
            </div>
            <div class="flex">
                <div>
                    <h2 class="font-base font-light text-gray-400">available in:</h2>
                </div>
            </div>
            <!-- tallas y colores -->
            <div class="flex flex-row items-center justify-between mb-2">
                <div class="flex w-1/3 h-7 bg-white justify-between gs-black text-xl font-semibold">
                    <h1>S</h1>
                    <h1>M</h1>
                    <h1>L</h1>
                </div>
                <div class="flex w-1/3 h-7 bg-white ">
                    <div class="flex flex-row justify-around w-full">
                        <div class="flex flex-row h-3 w-3 bg-orange-300 rounded-full mx-auto my-2"></div>
                        <div class="flex flex-row h-3 w-3 bg-black-gs rounded-full mx-auto my-2"></div>
                        <div class="flex flex-row h-3 w-3 bg-red-semi rounded-full mx-auto my-2"></div>
                        <div class="flex flex-row h-3 w-3 bg-green-600 rounded-full mx-auto my-2"></div>
                    </div>
                </div>
            </div>
            <!-- precio - card -->
            <div class="flex flex-row justify-around w-4/6 font-semibold">
                <div class="flex w-1/3 h-7 bg-white">
                    <h3 class="flex gs-black">$50.6</h3>
                </div>
                <h3 class="flex text-gray-400">us</h3>
                <div class="flex w-1/3 h-7 bg-white ">
                    <h3 class="flex text-gray-400 line-through">$60.6</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cards nuestros productos DESKTOP-->
<div class="hidden lg:flex flex-col h-96 w-full mt-3 mr-2 px-2 py-2">
    <div class="flex flex-col w-80 h-100 bg-transparent rounded-lg mx-2">
        <div class="flex flex-row w-80 h-100 rounded-lg justify-around">
            <div class="flex justify-center h-60 shadow-lg w-36 rounded-lg">
                <div class="flex rounded-2xl shadow-lg">
                <img class="rounded-lg" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/body.png" alt="">
                </div>
            </div>
            <div class="flex justify-center h-60 shadow-lg w-36 ">
                <div class="flex rounded-full shadow-lg">
                <img class="rounded-lg" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/body-card-desktop.png" alt="">
                </div>
            </div>
        </div>
        <!-- boton add cart -->
        <div class="flex flex-row w-full h-3 items-center z-40">
            <div class="flex flex-row-reverse w-full">
                <div class="flex bg-sun-2 h-28 w-28 bg-cover mb-9 z-20">
                    <button class="flex h-28 w-28 bg-cover mb-9 z-20">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/sol-2.png" alt="">

                    </button>
                </div>
            </div>
        </div>
        <!-- contenedor info -->
        <div class="flex flex-col z-30 h-44 px-2 py-2 justify-around mb-4 w-80 bg-white shadow-2xl rounded-lg">

            <div class="flex">
                <div>
                    <h2 class="text-color-secondary text-lg font-base">Faja larga con brasier</h2>
                </div>
            </div>
            <div class="flex">
                <div>
                    <h2 class="font-base font-light text-gray-400">available in:</h2>
                </div>
            </div>
            <!-- tallas y colores -->
            <div class="flex flex-row items-center justify-between mb-2">
                <div class="flex w-1/3 h-7 bg-white justify-between gs-black text-xl font-semibold font-baby_aletha">
                    <h1>M</h1>
                    <h1>L</h1>
                    <h1>XL</h1>
                </div>
                <div class="flex w-1/3 h-7 bg-white ">
                    <div class="flex flex-row justify-around w-full">
                        <div class="flex flex-row h-3 w-3 bg-orange-300 rounded-full mx-auto my-2"></div>
                        <div class="flex flex-row h-3 w-3 bg-black-gs rounded-full mx-auto my-2"></div>
                        <div class="flex flex-row h-3 w-3 bg-red-semi rounded-full mx-auto my-2"></div>
                        <div class="flex flex-row h-3 w-3 bg-green-600 rounded-full mx-auto my-2"></div>
                    </div>
                </div>
            </div>
            <!-- precio - card -->
            <div class="flex flex-row justify-center w-full font-semibold">
                <div class="flex w-1/3 h-7 bg-white ">
                    <h3 class="flex text-red-soft line-through">$60.6</h3>
                </div>
                <div class="flex w-1/3 h-7 bg-white">
                    <h3 class="flex text-red-soft text-xl">$41.43</h3>
                </div>
                <h3 class="flex text-red-soft font-extralight text:md mr-8">us</h3>
            </div>
        </div>
    </div>
</div>
<!-- imagen abajo de productos DESKTOP HOME-->
<div class="hidden lg:flex items-center justify-center w-full h-60 bg-white-notWhite">
    <img class="flex h-36 w-48 bg-white-notWhite" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/shop_now.png" alt="">
</div>

<!-- Guia de prendas Desktop -->
<div class="hidden lg:flex flex-col items-center justify-center w-full h-120 bg-white-notWhite">
    <h1 class="flex items-center justify-center text-red-soft font-champagne_limousines font-semibold text-2xl my-4 py-4">Guia de prendas</h1>
        <div class="flex flex-row w-full">
            <!-- cards acabado 1 y acabado 2 -->
            <div class="flex flex-col items-center justify-center w-full h-64 bg-white-notWhite px-4">
                <h2 class="flex text-left justify-center font-champagne_limousines gs-black text-lg font-light">Todas nuestras prendas tienen el mejor acabado y comodidad para tu día a día</h2>
                <div class="flex flex-row bg-orange-soft">
                    <div class="flex flex-col items-center justify-center w-56 bg-orange-soft bg-cover bg-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/sol_sin_centro.png ?>');">
                        <h1 class="flex my-2 font-champagne_limousines font-semibold ml-8">Acabado 1</h1>
                        <div class="flex flex-row h-28 w-28 bg-gray-card rounded-full mx-auto mb-2"></div>
                        <h2 class="flex ml-2 text-lg font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                    </div>
                    <div class="flex flex-col w-56 bg-cover bg-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/sol_sin_centro.png ?>');">
                        <h1 class="flex my-2 font-champagne_limousines font-semibold ml-8">Acabado 2</h1>
                        <div class="flex h-28 w-28 bg-gray-card rounded-full mx-auto mb-2"></div>
                        <h2 class="flex ml-2 text-lg font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                    </div>
                </div>
            </div>
            <!-- toma tus medidas desktop -->
            <div class="hidden lg:flex flex-col w-full h-60 bg-white-notWhite my-4 mb-9">
                <h2 class="flex font-champagne_limousines gs-black font-base font-light text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
                <div class="flex flex-row w-full justify-around  py-4 ">
                    <div class="flex flex-col w-44 items-center justify-center">
                        <h1 class="flex font-champagne_limousines text-orange-400 underline font-base my-2 justify-center font-semibold">Toma tus medidas</h1>
                        <h1 class="flex font-champagne_limousines text-orange-400 underline font-base my-4 justify-center font-semibold">Cuida tus prendas</h1>
                    </div>
                    <div class="flex items-center justify-center">
                        <img class="flex h-60 w-32 scaleX-minus-1" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/imagen.png-27.png" alt="">
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- pay with -->
<div class="flex lg:hidden flex-col w-full justify-center items-center font-semibold h-60 bg-white-notWhite">
    <div class="flex items-center justify-center w-36  h-12 ">
        <img class="flex w-9 h-9" src="<?= get_stylesheet_directory_uri() ?>/assets/img/payments logos/pagos_amarillo.png-2.png" alt="">
        <h1 class="flex font-champagne_limousines text-red-semi text-xl leading-5  ">Pay with</h1>
    </div>
    <div class="grid grid-cols-2  my-4 h-30 w-full ">
        <img class="my-2 mx-auto" src="<?= get_stylesheet_directory_uri() ?>/assets/img/payments logos/Klarna_logo-1.png" alt="">
        <img class="my-2 mx-auto" src="<?= get_stylesheet_directory_uri() ?>/assets/img/payments logos/PayPal_horizontally_Logo_2014-1.png" alt="">
        <img class="my-2 mx-auto" src="<?= get_stylesheet_directory_uri() ?>/assets/img/payments logos/cash-app-png-2.png" alt="">
        <img class="my-2 mx-auto" src="<?= get_stylesheet_directory_uri() ?>/assets/img/payments logos/apple-pay-logo-4.png" alt="">
    </div>
</div>
<!-- textos abajo de pay with-->
<div class=" lg:hidden w-full h-100 bg-white-notWhite">
    <div class="flex lg:hidden flex-row w-full justify-around px-2 py-4">
        <div class="flex flex-col w-60">
            <h1 class="flex font-champagne_limousines text-red-semi font-semibold text-xl">Lorem ipsum odor</h1>
            <h2 class="flex font-champagne_limousines gs-black text-lg font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
        </div>
        <div class="flex items-center justify-center">
            <img class="flex h-20 w-20" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/tiempos amarillo.png.png" alt="">
        </div>
    </div>

    <div class="flex lg:hidden flex-row w-full justify-around px-2 py-4">
        <div class="flex items-center justify-center">
            <img class="flex h-20 w-20" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/pedido_amarillo.png.png" alt="">
        </div>
        <div class="flex flex-col w-60">
            <h1 class="flex font-champagne_limousines text-red-semi font-semibold text-xl">Shipping</h1>
            <h2 class="flex font-champagne_limousines gs-black text-lg font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
        </div>
    </div>
</div>
<!-- categorias -->
<div class="flex lg:hidden flex-col w-full h-120 bg-white">
    <div class="flex items-center h-20 justify-center">
        <h1 class="flex font-baby_aletha text-5xl pt-16 pb-20 w-full items-center justify-center ">Categorias</h1>
    </div>
    <div class="flex flex-row h-20 w-full items-center my-4 justify-center">
        <img class="flex w-16 h-16" src="<?= get_stylesheet_directory_uri() ?>/assets/img/category icons/postcirugia@0.75x.png" alt="">
        <h1 class="font-champagne_limousines px-4  text-xl font-semibold text-red-semi">Postcirugia</h1>
    </div>
    <div class="flex flex-row h-20 w-full items-center my-4 justify-center">
        <img class="flex w-16 h-16" src="<?= get_stylesheet_directory_uri() ?>/assets/img/category icons/uso_diario@0.75x.png" alt="">
        <h1 class="font-champagne_limousines px-4 text-xl font-semibold text-red-semi">Uso diario</h1>
    </div>
    <div class="flex flex-row h-20 w-full items-center justify-center my-4">
        <img class="flex w-16 h-16" src="<?= get_stylesheet_directory_uri() ?>/assets/img/category icons/complementos@0.75x.png" alt="">
        <h1 class="font-champagne_limousines text-xl px-4 font-semibold text-red-semi">Complementos</h1>
    </div>
</div>
<!-- nuevos modelos -->
<div class="flex flex-col w-full h-136 bg-white justify-between">
    <div class="flex flex-col text-center h-136 bg-white ">
        <h1 class="font-champagne_limousines text-2xl leading-5 w-full font-semibold my-4 mb-4">Nuevos modelos</h1>
    </div>
<!-- cards nuevos modelos -->
<div class="flex lg:hidden flex-col h-120 w-full mt-3 mr-2">
    <div class="flex flex-col w-56 h-120 bg-transparent rounded-lg mx-2">
        <div class="flex w-56 h-120 rounded-lg">
            <div class="absolute bg-gray-card w-52 h-60 rounded-lg rotate-6 opacity-20 shadow-2xl"></div>
            <div class="absolute justify-center h-56 shadow-xl w-52 ">
                <div class=" rounded-full shadow-2xl">
                <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/body.png" alt="">
                </div>
            </div>
        </div>
        <!-- boton add cart -->
        <div class="flex flex-row w-full h-3 items-center z-20">
            <div class="flex flex-row-reverse w-full">
                <div class="flex bg-sun-2 h-28 w-28 bg-cover mb-9 z-20">
                    <button class="flex h-28 w-28 bg-cover mb-9 z-20">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/sol-2.png" alt="">

                    </button>
                </div>
            </div>
        </div>
        <!-- contenedor info -->
        <div class="flex flex-col h-80 px-2 py-2 justify-around mb-4 w-52 bg-white shadow-2xl rounded-lg">

            <div class="flex">
                <div>
                    <h2 class="text-color-secondary text-lg font-base">Faja Post-quirurgica 1</h2>
                </div>
            </div>
            <div class="flex">
                <div>
                    <h2 class="font-base font-light text-gray-400">available in:</h2>
                </div>
            </div>
            <!-- tallas y colores -->
            <div class="flex flex-row items-center justify-between mb-2">
                <div class="flex w-1/3 h-7 bg-white justify-between gs-black text-xl font-semibold">
                    <h1>S</h1>
                    <h1>M</h1>
                    <h1>L</h1>
                </div>
                <div class="flex w-1/3 h-7 bg-white ">
                    <div class="flex flex-row justify-around w-full">
                        <div class="flex flex-row h-3 w-3 bg-orange-300 rounded-full mx-auto my-2"></div>
                        <div class="flex flex-row h-3 w-3 bg-black-gs rounded-full mx-auto my-2"></div>
                        <div class="flex flex-row h-3 w-3 bg-red-semi rounded-full mx-auto my-2"></div>
                        <div class="flex flex-row h-3 w-3 bg-green-600 rounded-full mx-auto my-2"></div>
                    </div>
                </div>
            </div>
            <!-- precio - card -->
            <div class="flex flex-row justify-around w-4/6 font-semibold">
                <div class="flex w-1/3 h-7 bg-white">
                    <h3 class="flex gs-black">$50.6</h3>
                </div>
                <h3 class="flex text-gray-400">us</h3>
                <div class="flex w-1/3 h-7 bg-white ">
                    <h3 class="flex text-gray-400 line-through">$60.6</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cards nuevos modelos DESKTOP-->
<div class="hidden lg:flex flex-col h-96 w-full mt-3 mr-2 px-2 py-2">
    <div class="flex flex-col w-80 h-100 bg-transparent rounded-lg mx-2">
        <div class="flex flex-row w-72 h-100 rounded-lg justify-around">
            <div class="flex justify-center h-60 shadow-lg w-36 rounded-lg">
                <div class="flex rounded-2xl shadow-lg">
                <img class="rounded-lg" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/body.png" alt="">
                </div>
            </div>
            <div class="flex justify-center h-60 shadow-lg w-36 ">
                <div class="flex rounded-full shadow-lg">
                <img class="rounded-lg" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/body-card-desktop.png" alt="">
                </div>
            </div>
        </div>
        <!-- boton add cart -->
        <div class="flex flex-row w-full h-3 items-center z-40">
            <div class="flex flex-row-reverse w-full">
                <div class="flex bg-sun-2 h-28 w-28 bg-cover mb-9 z-20">
                    <button class="flex h-28 w-28 bg-cover mb-9 z-20">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/sol-2.png" alt="">

                    </button>
                </div>
            </div>
        </div>
        <!-- contenedor info -->
        <div class="flex flex-col z-30 h-44 px-2 py-2 justify-around mb-4 w-80 bg-white shadow-2xl rounded-lg">

            <div class="flex">
                <div>
                    <h2 class="text-color-secondary text-lg font-base">Faja larga con brasier</h2>
                </div>
            </div>
            <div class="flex">
                <div>
                    <h2 class="font-base font-light text-gray-400">available in:</h2>
                </div>
            </div>
            <!-- tallas y colores -->
            <div class="flex flex-row items-center justify-between mb-2">
                <div class="flex w-1/3 h-7 bg-white justify-between gs-black text-xl font-semibold font-baby_aletha">
                    <h1>M</h1>
                    <h1>L</h1>
                    <h1>XL</h1>
                </div>
                <div class="flex w-1/3 h-7 bg-white ">
                    <div class="flex flex-row justify-around w-full">
                        <div class="flex flex-row h-3 w-3 bg-orange-300 rounded-full mx-auto my-2"></div>
                        <div class="flex flex-row h-3 w-3 bg-black-gs rounded-full mx-auto my-2"></div>
                        <div class="flex flex-row h-3 w-3 bg-red-semi rounded-full mx-auto my-2"></div>
                        <div class="flex flex-row h-3 w-3 bg-green-600 rounded-full mx-auto my-2"></div>
                    </div>
                </div>
            </div>
            <!-- precio - card -->
            <div class="flex flex-row justify-center w-full font-semibold">
                <div class="flex w-1/3 h-7 bg-white ">
                    <h3 class="flex text-red-soft line-through">$60.6</h3>
                </div>
                <div class="flex w-1/3 h-7 bg-white">
                    <h3 class="flex text-red-soft text-xl">$41.43</h3>
                </div>
                <h3 class="flex text-red-soft font-extralight text:md mr-8">us</h3>
            </div>
        </div>
    </div>
</div>
<!-- categorias -->
<div class="hidden lg:flex flex-col w-full h-120 bg-white items-center justify-center">
        <div class="flex items-center h-20 justify-center">
            <h1 class="flex font-champagne_limousines text-3xl text-red-soft font-semibold pt-16 py-20 w-full items-center justify-center ">Categorias</h1>
        </div>
    <div class="flex flex-row w-4/6 justify-center items-center">
        <div class="flex flex-col h-24 w-full items-center my-4 justify-center">
            <h1 class="font-champagne_limousines py-2 px-4 text-xl font-semibold text-red-soft underline">Uso diario</h1>
            <img class="flex w-24 h-24" src="<?= get_stylesheet_directory_uri() ?>/assets/img/category icons/uso_diario@0.75x.png" alt="">
        </div>
        <div class="flex flex-col h-24 w-full items-center my-4 justify-center">
            <h1 class="font-champagne_limousines py-2 px-4  text-xl font-semibold text-red-soft underline">Postcirugia</h1>
            <img class="flex w-24 h-24" src="<?= get_stylesheet_directory_uri() ?>/assets/img/category icons/postcirugia@0.75x.png" alt="">
        </div>
        <div class="flex flex-col h-24 w-full items-center justify-center my-4">
            <h1 class="font-champagne_limousines py-2 text-xl px-4 font-semibold text-red-soft underline">Complementos</h1>
            <img class="flex w-24 h-24" src="<?= get_stylesheet_directory_uri() ?>/assets/img/category icons/complementos@0.75x.png" alt="">
        </div>
    </div>
</div>
<!-- ver mas -->
<a class="hidden lg:flex justify-center items-center pb-40" href="#blog">
                <img class="flex  w-28 bg-cover" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/ver-mas.png" alt="">
</a>
<!-- imagen abajo de modelos -->
<div class="flex lg:hidden items-center justify-center w-full h-60 bg-white">
    <img class="flex h-36 w-48" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/shop_now.PNG" alt="">
</div>
<!-- Guia de prendas -->
<div class="flex lg:hidden items-center justify-center w-full h-44 bg-white">
    <div class="flex flex-col w-80">
        <h1 class="flex items-center justify-center font-champagne_limousines font-semibold text-2xl my-4">Guia de prendas</h1>
        <h2 class="flex text-center justify-center font-champagne_limousines gs-black text-lg font-light">Todas nuestras prendas tienen el mejor acabado y comodidad para tu día a día</h2>
        <a class="flex flex-row-reverse text-orange-400 underline font-semibold" href="#clothing-guide">Saber más</a>
    </div>
</div>
<!-- cards acabado 1 y acabado 2 -->
<div class="flex lg:hidden flex-row items-center justify-center w-full h-64 bg-white px-4">
    <div class="flex flex-col w-52">
        <h1 class="flex my-2 font-champagne_limousines font-semibold ml-8">Acabado 1</h1>
        <div class="flex flex-row h-28 w-28 bg-gray-card rounded-full mx-auto mb-2"></div>
        <h2 class="flex ml-2 text-lg font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
    </div>
    <div class="flex flex-col w-52">
        <h1 class="flex my-2 font-champagne_limousines font-semibold ml-8">Acabado 2</h1>
        <div class="flex h-28 w-28 bg-gray-card rounded-full mx-auto mb-2"></div>
        <h2 class="flex ml-2 text-lg font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
    </div>
</div>
<!-- toma tus medidas -->
<div class="flex flex-col lg:hidden w-full h-60 bg-white my-4 mb-9">
    <div class="flex flex-row w-full justify-around  py-4 ">
        <div class="flex flex-col w-44 text-center">
            <h1 class="flex font-champagne_limousines text-orange-400 underline font-base my-2 justify-center font-semibold">Toma tus medidas</h1>
            <h1 class="flex font-champagne_limousines text-orange-400 underline font-base my-4 justify-center font-semibold">Cuida tus prendas</h1>
            <h2 class="flex font-champagne_limousines gs-black font-base font-light text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
        </div>
        <div class="flex items-center justify-center">
            <img class="flex h-60 w-32 scaleX-minus-1" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/imagen.png-27.png" alt="">
        </div>
    </div>
</div>
<!-- imagenes arriba de blog-->
<div class="flex flex-col lg:hidden w-full h-200 bg-white items-center justify-around mt-6 ">
    <div class="flex w-80 items-center justify-center  h-60 bg-gray-card rounded-lg my-4">
        <h2 class="flex font-champagne_limousines font-light text-xl pt-16">Ver colección</h2>
    </div>
    <div class="flex w-80 h-60 items-center justify-center bg-gray-card rounded-lg my-4">
        <h2 class="flex items-center font-champagne_limousines font-light text-xl pt-16">Ver colección</h2>
    </div>
    <div class="flex w-80 h-60 rounded-full item-center justify-center my-4">
        <img class="flex h-60 scaleX-minus-1" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/Brillando_de_adentro_hacia_afuera.png-1.png" alt="">
    </div>
</div>
<!-- blog -->
<div class="flex lg:hidden flex-col w-full h-150 bg-white" id="blog">
    <div class="flex flex-col text-center bg-white ">
        <h1 class="lg:hidden font-champagne_limousines text-2xl leading-5 w-full font-semibold h-30">Blog</h1>
        <h1 class="hidden lg:flex font-champagne_limousines text-2xl leading-5 w-full font-semibold text-red-soft justify-center h-30">BLOG</h1>
    </div>

    <div class="flex flex-row w-full justify-around lg:justify-start px-2 py-4 lg:pl-32">
        <div class="flex items-center justify-center">
            <img class="flex h-full w-20" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/fondo-gris.PNG" alt="">
        </div>
        <div class="flex flex-col w-60 pl-2">
            <h1 class="flex font-champagne_limousines lg:text-red-soft text-lg font-semibold">Lorem ipsum odor</h1>
            <h2 class="flex font-champagne_limousines gs-black font-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
        </div>
    </div>
    <div class="flex flex-row w-full justify-around lg:justify-end px-2 py-4 lg:pr-32">
        <div class="flex flex-col w-60">
            <h1 class="flex font-champagne_limousines lg:text-red-soft  text-lg font-semibold">Lorem ipsum odor</h1>
            <h2 class="flex font-champagne_limousines gs-black font-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
        </div>
        <div class="flex items-center justify-center">
            <img class="flex h-full w-20" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/fondo-gris.PNG" alt="">
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

</div>
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
<div class="flex lg:hidden items-center justify-center w-full h-60 bg-white mb-24">
    <img class="flex h-56 w-50" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/shop-now-full.png" alt="">
</div>
<!-- textos abajo de pay with DESKTOP-->
<div class="hidden lg:flex flex-row w-full h-100 bg-white-notWhite justify-around">
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
</div>
<div class="relative h-60">
    <img class="absolute inset-0 h-100 w-2/3 items-center m-auto" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/sol_sin_centro.png" alt="">
</div>
<!-- FAQ -->
<div class="flex flex-col w-full h-120 bg-white my-4" id="faq">
    <div class="z-20">

    
    <div class="flex flex-col text-center ">
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
    <div>
        <img class="relative lg:hidden bottom-40 h-60 w-full" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/medio-sol.png" alt="">
    </div>
</div>
<?php get_footer() ?>