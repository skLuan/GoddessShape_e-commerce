<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body class="flex flex-col w-screen parallax bg-white">
    <div id="page-container" class="absolute w-full lg:left-1/2 lg:-translate-x-1/2">
        <header class="flex flex-column justify-center w-full h-12 bg-red-100 items-center">
            <div class="swiper-container my-slider2">
                <div class="swiper-wrapper2">
                    <div class="swiper-slide2">
                        <p class="whitespace-nowrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <!-- <div class="swiper-slide2">
                        <p>Contenido del carrusel 2</p>
                    </div>
                    <div class="swiper-slide2">
                        <p>Contenido del carrusel 3</p>
                    </div> -->
                </div>
            </div>
        </header>
        <?php   
        get_template_part('components/sidebar');
        get_template_part('components/nav-bar');
        get_template_part('components/tab-bar');
        
        ?>
        <?php wp_body_open() ?>