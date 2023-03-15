<!-- footer -->
<footer>
    <div class="flex lg:hidden flex-col lg:flex-row w-full h-160 lg:h-100 bg-secondary ">
        <div class="flex flex-col">
            <div class="flex my-4" id="logo">
                <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Logo.svg" alt="Logo Goddess-shape">
            </div>
            <div class="flex flex-row w-36 mx-2">
                <div class="flex flex-row h-9 w-9 bg-gray-card rounded-full mx-auto my-2"></div>
                <div class="flex flex-row h-9 w-9 bg-gray-card rounded-full mx-auto my-2"></div>
                <div class="flex flex-row h-9 w-9 bg-gray-card rounded-full mx-auto my-2"></div>
            </div>
        </div>
        <div class="flex flex-col my-4 mx-5">

            <?php
            wp_nav_menu([
                'theme_location' => 'footer_menu',
                'container'      => false,
                'menu_class'     => 'flex flex-col font-champagne_limousines text-red-semi text-xl font-light',
                'menu_id'        => 'footer-Menu',
                'add_li_class' => 'arroz',
                
            ])
            ?>
            <!-- <a class="flex font-champagne_limousines text-red-semi text-2xl font-semibold " href="#Shop">Shop</a>
            <a class="flex font-champagne_limousines text-red-semi text-xl font-light" href="#Post-surgical">Post-surgical</a>
            <a class="flex font-champagne_limousines text-red-semi text-xl font-light" href="#daily-use">Daily</a>
            <a class="flex font-champagne_limousines text-red-semi text-xl font-light" href="#complements">Complements</a> -->
        </div>
        <!-- <div class="flex flex-col my-4 mx-2">
            <a class="flex font-champagne_limousines text-red-semi text-xl font-light" href="#cart">Shopping cart</a>
            <a class="flex font-champagne_limousines text-red-semi text-xl font-light" href="#my-fit">What is my fit?</a>
        </div>
        <div class="flex flex-col my-4 mx-2">
            <a class="flex font-champagne_limousines text-red-semi text-2xl font-semibold " href="#blog">Blog</a>
            <a class="flex font-champagne_limousines text-red-semi text-xl font-light" href="#my-fit">Guia de prendas</a>
        </div>
        <div class="flex flex-col my-4 mx-2">
            <a class="flex font-champagne_limousines text-red-semi text-2xl font-semibold " href="#customer-service">Customer service</a>
            <a class="flex font-champagne_limousines text-red-semi text-xl font-light" href="#contact">Contact us</a>
            <a class="flex font-champagne_limousines text-red-semi text-xl font-light" href="#faq">FAQ</a>
            <a class="flex font-champagne_limousines text-red-semi text-xl font-light" href="#shipping">Shipping</a>
        </div> -->
    </div>
    <!-- footer responsive -->
    <div class="hidden lg:flex flex-col lg:flex-row w-full h-160 lg:h-100 bg-secondary px-4">
        <div class="flex flex-col">
            <div class="flex my-4" id="logo">
                <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Logo.svg" alt="Logo Goddess-shape">
            </div>
            <div class="flex flex-row w-36 mx-2">
                <div class="flex flex-row h-9 w-9 bg-gray-card rounded-full mx-auto my-2"></div>
                <div class="flex flex-row h-9 w-9 bg-gray-card rounded-full mx-auto my-2"></div>
                <div class="flex flex-row h-9 w-9 bg-gray-card rounded-full mx-auto my-2"></div>
            </div>
        </div>
        <div class="flex flex-col my-4 mx-2 px-8 pt-14">
            <a class="flex font-champagne_limousines text-red-semi text-2xl font-semibold " href="#blog">Blog</a>
            <a class="flex font-champagne_limousines text-red-semi text-xl font-light" href="#my-fit">Guia de prendas</a>
        </div>
        <div class="flex flex-col my-4 mx-2 px-8 pt-14">

            <a class="flex font-champagne_limousines text-red-semi text-2xl font-semibold " href="#Shop">Shop</a>
            <a class="flex font-champagne_limousines text-red-semi text-xl font-light" href="#Post-surgical">Post-surgical</a>
            <a class="flex font-champagne_limousines text-red-semi text-xl font-light" href="#daily-use">Daily</a>
            <a class="flex font-champagne_limousines text-red-semi text-xl font-light" href="#complements">Complements</a>
            <a class="flex font-champagne_limousines text-red-semi text-xl font-light mt-8" href="#cart">Shopping cart</a>
            <a class="flex font-champagne_limousines text-red-semi text-xl font-light" href="#my-fit">What is my fit?</a>
        </div>
        <div class="flex flex-col my-4 mx-2 px-8 pt-14">
            <a class="flex font-champagne_limousines text-red-semi text-2xl font-semibold " href="#customer-service">Customer service</a>
            <a class="flex font-champagne_limousines text-red-semi text-xl font-light" href="#contact">Contact us</a>
            <a class="flex font-champagne_limousines text-red-semi text-xl font-light" href="#faq">FAQ</a>
            <a class="flex font-champagne_limousines text-red-semi text-xl font-light" href="#shipping">Shipping</a>
        </div>
    </div>
    <div class="flex flex-row items-center justify-center w-full h-6 border border-secondary bg-white">
        <a class="flex font-champagne_limousines text-red-semi font-base font-light underline pr-8" href="#terms">Terms</a>
        <p class="flex items-center justify-center font-champagne_limousines text-red-semi font-base font-light ">l</p>
        <a class="flex font-champagne_limousines text-red-semi font-base font-light ml-8" href="#privacy">Privacy.</a>

    </div>
    <div class="flex flex-row items-center justify-around  w-full h-6 ">
        <p class="flex  font-champagne_limousines text-red-semi font-base font-light">Copyright 2022 - Goddess Shape</p>
    </div>
</footer>
</div>


<?php wp_footer() ?>
</body>

</html>