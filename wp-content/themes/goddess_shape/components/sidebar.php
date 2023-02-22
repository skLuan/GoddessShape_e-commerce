<!-- sidebar -->
<<<<<<< HEAD
<div class="fixed flex-col top-0 hidden z-50 w-4/6 lg: h-screen bg-white shadow-xl" id="sidemenu">
=======
<div class="fixed flex flex-col top-0 hidden z-20 w-4/6 lg:w-2/6 h-screen bg-white shadow-xl" id="sidemenu">
>>>>>>> develop
    <!-- logo-sidebar -->
    <div class="z-0 h-44" id="silueta-logo">
        <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/sidebar/deco-sidebar-top.png" alt="">
    </div>
    <?php
    wp_nav_menu([
        'theme_location' => 'mobile_menu',
        'container'      => false,
        'menu_class'     => 'flex flex-col pl-4 text-black-gsSoft mb-52 mt-auto lg:mb-auto lg:mt-2',
        'menu_id'        => 'sidebar-Menu'
    ])
    ?>
    <picture class="absolute bottom-[6%]">
        <img class="" width="145px" height="151px" src="<?= get_stylesheet_directory_uri() ?>/assets/img/sidebar/deco-side-bar-close.png" alt="">
    </picture>
</div>