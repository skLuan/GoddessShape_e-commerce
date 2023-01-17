<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header class="flex flex-column justify-center w-full h-12 bg-red-100 items-center">
        <h6 class="flex  ">Lorem Ipsum</h6>
    </header>

    <!-- navbar -->
    <div class="flex flex-column justify-between items-center border-b-red-100 border-1 h-12 " id="navbar">

        <div class="flex z-0">
            <div class="flex" id="logo">

                <img class="fixed" src="<?= get_stylesheet_directory_uri() ?>/assets/img/header deco/deco-logo-header.png" alt="">
            </div>
            <div class="flex h z-10">
                <img class="" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Logo.svg">
            </div>
        </div>

        <div class="flex font-semibold space-x-2 pr-4" id="language" href="#language">
            <p class="font-champagne_limousines">Es </p>
            <p class="font-champagne_limousines">/</p>
            <p class="font-champagne_limousines text-gray-400">En</p>
        </div>
        <?php
        get_template_part('components/tab-bar');
        ?>
    </div>
    <?php wp_body_open() ?>