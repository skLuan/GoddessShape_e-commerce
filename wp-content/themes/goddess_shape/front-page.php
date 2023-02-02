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
    <div class="py-2 font-semibold">
        Ver colección
    </div>
    <!-- boton que baja a ver colección -->
    <img class=" h-3 w-3 " src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/flechashome.PNG" alt="flecha">

</div>
<!-- image-container-home -->
<div class="flex justify-center items-center w-full h-36 mt-16 bg-neutral-200">

    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/picture-icon.PNG" alt="">
</div>
<!-- titulo nuestros productos -->
<div class="flex flex-col text-center h-136 bg-white ">
    <h1 class="font-champagne_limousines text-2xl pt-16 leading-5 w-full font-semibold h-32 ">Nuestros Productos
    </h1>
</div>
<!-- boton all HOME -->
<div class="flex w-full bg-white justify-center text-center pb-4">
    <div class="flex bg-red-soft justify-center items-center w-1/6  rounded-full">
        <a class="text-white" href="#shop">All</a>
    </div>
</div>
<!-- botones nuestros productos HOME -->
<div class="flex w-full bg-white h-8 justify-between px-2">
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
<!-- cards nuestros productos -->
<div class="flex flex-col h-120 w-full mt-3 mr-2 px-2">
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
        <div class="flex flex-col z-30 h-80 px-2 py-2 justify-around mb-4 w-56 bg-white shadow-2xl rounded-lg">

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
                        <div class="flex flex-row h-3 w-3 bg-red-soft rounded-full mx-auto my-2"></div>
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
<!-- pay with -->
<div class="flex flex-col w-full justify-center items-center font-semibold h-60 bg-white-notWhite">
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
<div class="w-full h-100 bg-white-notWhite">
    <div class="flex flex-row w-full justify-around px-2 py-4">
        <div class="flex flex-col w-60">
            <h1 class="flex font-champagne_limousines text-red-semi font-semibold text-xl">Lorem ipsum odor</h1>
            <h2 class="flex font-champagne_limousines gs-black text-lg font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
        </div>
        <div class="flex items-center justify-center">
            <img class="flex h-20 w-20" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/tiempos amarillo.png.png" alt="">
        </div>
    </div>

    <div class="flex flex-row w-full justify-around px-2 py-4">
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
<div class="flex flex-col w-full h-120 bg-white">
    <div class="flex items-center justify-center">
        <h1 class="flex font-baby_aletha text-2xl pt-16 w-full items-center justify-center ">Categorias</h1>
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
<div class="flex flex-col h-120 w-full mt-3 mr-2">
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
        <div class="flex flex-col h-80 px-2 py-2 justify-around mb-4 w-56 bg-white shadow-2xl rounded-lg">

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
                        <div class="flex flex-row h-3 w-3 bg-red-soft rounded-full mx-auto my-2"></div>
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
<!-- imagen abajo de modelos -->
<div class="flex items-center justify-center w-full h-60 bg-white">
    <img class="flex h-36 w-48" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/shop_now.PNG" alt="">
</div>
<!-- Guia de prendas -->
<div class="flex items-center justify-center w-full h-44 bg-white">
    <div class="flex flex-col w-80">
        <h1 class="flex items-center justify-center font-champagne_limousines font-semibold text-2xl my-4">Guia de prendas</h1>
        <h2 class="flex text-center justify-center font-champagne_limousines gs-black text-lg font-light">Todas nuestras prendas tienen el mejor acabado y comodidad para tu día a día</h2>
        <a class="flex flex-row-reverse text-orange-400 underline font-semibold" href="#clothing-guide">Saber más</a>
    </div>
</div>
<!-- cards acabado 1 y acabado 2 -->
<div class="flex flex-row items-center justify-center w-full h-64 bg-white px-4">
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
<div class="w-full h-60 bg-white my-4 mb-9">
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
<div class="flex flex-col w-full h-200 bg-white items-center justify-around mt-6 ">
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
<div class="flex flex-col w-full h-150 bg-white" id="blog">
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
    <div class="flex flex-row w-full justify-around px-2 py-4">
        <div class="flex flex-col w-60">
            <h1 class="flex font-champagne_limousines text- text-lg font-semibold">Lorem ipsum odor</h1>
            <h2 class="flex font-champagne_limousines gs-black font-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
        </div>
        <div class="flex items-center justify-center">
            <img class="flex h-full w-20" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/fondo-gris.PNG" alt="">
        </div>
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
    <div class="flex flex-row-reverse w-full items-end">
        <div class="flex items-center justify-center h-32 w-28 bg-cover" style="background-image: url(/assets/img/Home/sol_sin_centroPNG);">
            <a class="flex text-orange-400 underline font-semibold" href="#blog">Ver blog</a>
        </div>
    </div>

</div>
<!-- imagen abajo de blog -->
<div class="flex items-center justify-center w-full h-60 bg-white mb-24">
    <img class="flex h-56 w-50" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/shop-now-full.PNG" alt="">
</div>
<!-- FAQ -->
<div class="flex flex-col w-full h-100 bg-white my-4 bg-sun bg-no-repeat" id="faq">
    <div class="flex flex-col text-center bg-white ">
        <h1 class="font-champagne_limousines text-2xl text-red-semi leading-5 w-full font-semibold h-30 mt-6">FAQ</h1>
    </div>
    <div class="flex flex-col items-center justify-around bg-white mt-6 border-1 border-y-rose-300">
        <button class="flex text-red-semi question ">This is a question number1?
            <img class="flex h-8 w-8" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/arrow-faq.PNG" alt="">
        </button>
        <div class="hidden font-base font-light text-red-semi ">Respuesta 1</div>
    </div>
    <div class="flex flex-col items-center justify-around bg-white mt-6 border-1 border-y-rose-300">
        <button class="flex text-red-semi question ">This is a question number2?

            <img class="flex h-8 w-8" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/arrow-faq.PNG" alt="">
        </button>
        <div class="hidden font-base font-light text-red-semi ">Respuesta 1</div>
    </div>
    <div class="flex flex-col items-center justify-around bg-white mt-6 border-1 border-y-rose-300">
        <button class="flex text-red-semi question ">This is a question number3?

            <img class="flex h-8 w-8" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/arrow-faq.PNG" alt="">
        </button>
        <div class="hidden font-base font-light text-red-semi ">Respuesta 1</div>
    </div>
    <div class="flex flex-col items-center justify-around bg-white mt-6 border-1 border-y-rose-300">
        <button class="flex text-red-semi question ">This is a question number4?

            <img class="flex h-8 w-8" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/arrow-faq.PNG" alt="">
        </button>
        <div class="hidden font-base font-light text-red-semi ">Respuesta 1</div>
    </div>
    <div class="flex flex-col items-center justify-around bg-white mt-6 border-2 border-y-rose-300">
        <button class="flex text-red-semi question ">This is a question number5?
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
<?php get_footer() ?>