<!-- page container -->
<?php get_header() ?>
<div class="py-5">
    <?php while (have_posts()) {
        the_post();
        the_content();
    } ?>
</div>

    <!-- ver colección -->
    <div class="flex flex-col mb-5 mx-auto items-center text-base font-champagne_limousines w-36 h-12 bg-white " id="carousel-btn">
        <div class="py-2 font-semibold">
            Ver colección
        </div>
        <!-- boton que baja a ver colección -->
        <img class=" h-3 w-3 " src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/flechashome.PNG" alt="flecha">

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