<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body class="flex flex-col w-screen bg-white">
    <div id="page-container" class="absolute w-full lg:left-1/2 lg:-translate-x-1/2">
        <header class="flex flex-column swiper-container justify-center w-full h-12 bg-red-100 items-center">
            <p class="flex  ">Free shipping on orders $99+</p>
        </header>
        <?php
        get_template_part('components/sidebar');
        get_template_part('components/tab-bar');
        get_template_part('components/nav-bar');

        ?>
        <?php wp_body_open() ?>