<!-- sidebar -->
<div class="flex flex-col top-0 hidden z-50 w-4/6 lg: h-screen bg-white shadow-xl" id="sidemenu">
    <!-- logo-sidebar -->
    <div class="z-0 h-44" id="silueta-logo">
        <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/sidebar/deco-sidebar-top.png" alt="">
    </div>
    <?php
    wp_nav_menu([
        'theme_location' => 'mobile_menu',
        'container'      => false,
        'menu_class'     => 'flex flex-col pl-4 text-black-gsSoft mb-52 mt-auto',
        'menu_id'        => 'sidebar-Menu'
    ])
    ?>
    <!-- contenedor lista sidebar -->
    <!-- <div class="flex flex-col pl-4 text-gray-500">
        

        <div class="flex font-champagne_limousines items-center text-2xl h-12 font-normal pb-2 gs-black" id="home" href="#home">
            <a class="" href="#home">Home</a>
            <img class="h-5 w-5 mx-2" src="<?= get_stylesheet_directory_uri() ?>/assets/img/sidebar/i-sun-select-sidebar.png" alt="">
        </div>

        <div class="h-12 font-light text-xl" id="Servicio al cliente">
            <a href="#customer-service">Servicio al cliente</a>
        </div>

        <div class="h-12 font-light text-xl" id="contactános">
            <a href="#contact">Contactános</a>
        </div>

        <div class="h-12 font-light text-xl" id="Blog">
            <a href="#blog">Blog</a>
        </div>

        <div class="h-12 font-light text-xl" id="Guia de prendas">
            <a href="#clothing-guide">Guia de prendas</a>
        </div>

        <div class="flex flex-col h-44 text-xl text-gray-500" id="Tienda">
            <a class="pb-2" href="#shop">Tienda</a>
            <div class="flex flex-col font-light text-base pl-4">
                <a href="#collection">Ver colecciones</a>
                <a href="#Post-surgical">Post-quirurgica</a>
                <a href="#daily-use">Uso diario</a>
                <a href="#complements">Complementos</a>
            </div>
        </div>
    </div> -->
    <picture class="absolute bottom-[6%]">
        <img class="" width="145px" height="151px" src="<?= get_stylesheet_directory_uri() ?>/assets/img/sidebar/deco-side-bar-close.png" alt="">
    </picture>
</div>