<?php get_header() ?>
<!-- hero -->
<div class="flex flex-col items-center w-full h-132 justify-center mb-16" id="hero">

    <!-- imagen del carrusel -->
    <div class="py-4 px-8" id="heroimage">
        <img class="flex justify-center h-100" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/imagen.png-6.png" alt="">
    </div>

    <!-- boton del carrusel -->
    <div class="flex flex-row justify-between items-center w-64  h-12 bg-white" id="carousel-btn">

        <!-- flecha_izquierda -->
        <img class="w-8 h-8" src="<?= get_stylesheet_directory_uri() ?>/assets/img/flecha_izquierda.png-1.png" alt="">

        <!-- puntos del slider -->
        <div class="flex flex-row justify-between h-3 w-12 bg-blue-700">
            <div class="rounded-full   bg-red-100">o</div>
            <div class="rounded-full  bg-red-100">s</div>
            <div class="rounded-full  bg-red-100">s</div>
        </div>

        <!-- flecha derecha -->
        <img class="w-8 h-8" src="<?= get_stylesheet_directory_uri() ?>/assets/img/flecha_derecha.png-2.png" alt="">
    </div>

    <!-- ver colección -->
    <div class="flex flex-col items-center text-base font-champagne_limousines w-36 h-12 bg-white " id="carousel-btn">
        <div class="py-2 font-semibold">
            Ver colección
        </div>
        <!-- boton que baja a ver colección -->
        <img class=" h-3 w-3 " src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/flechashome.PNG" alt="flecha">

    </div>
</div>
<!-- image-container-home -->
<div class="flex justify-center items-center w-full h-36 bg-neutral-200">

    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/picture-icon.PNG" alt="">
</div>
<!-- titulo nuestros productos -->
<div class="flex flex-col text-center h-136 bg-white ">
    <h1 class="font-champagne_limousines text-2xl pt-16 leading-5 w-full font-semibold h-32 ">Nuestros Productos
    </h1>
</div>
<div class="flex w-full  justify-center text-center pb-4">
    <div class="flex bg-softred justify-center items-center w-sexto  rounded-full">
        <a class="text-white" href="#shop">All</a>
    </div>
</div>
<div class="flex w-full h-8 justify-between px-2 bg-white">

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
<?php get_footer() ?>