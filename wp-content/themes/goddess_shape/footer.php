<!-- footer -->
<footer>
    <div class="flex lg:hidden flex-col lg:flex-row w-full h-auto lg:h-100 bg-secondary ">
        <div class="flex flex-col">
            <div class="flex my-4" id="logo">
                <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Logo.svg" alt="Logo Goddess-shape">
            </div>
            <!-- redes sociales -->
            <div class="flex flex-row w-36 mx-2">
                <a href="https://api.whatsapp.com/send?phone=+14075080242&text=Hola%20Quisiera%20hacer%20un%20pedido" class="flex flex-row rounded-full mx-auto my-2">
                    <iconify-icon class="w-full text-2xl text-red-soft" icon="fa:whatsapp"></iconify-icon>
                </a>
                <a href="https://instagram.com/shop.goddessshape?igshid=YmMyMTA2M2Y=" class="flex flex-row rounded-full mx-auto my-2">
                    <iconify-icon class="w-full text-2xl text-red-soft" icon="bi:instagram"></iconify-icon>
                </a>
                <a href="https://www.facebook.com/profile.php?id=100089873754564" class="flex flex-row rounded-full mx-auto my-2">
                    <iconify-icon class="w-full text-2xl text-red-soft" icon="bi:facebook"></iconify-icon>
                </a>
                <a href="https://www.tiktok.com/@goddessshape?is_from_webapp=1&sender_device=pc" class="flex flex-row rounded-full mx-auto my-2">
                    <iconify-icon class="w-full text-2xl text-red-soft" icon="ion:logo-tiktok"></iconify-icon>
                </a>
            </div>
        </div>
        <div id="footer_menu_container" class="flex flex-col my-4 mx-5">

            <?php
            $post = get_page_by_path('goddess-policy');
            // Obtener el permalink del post
            $permalink = get_permalink($post->ID);

            wp_nav_menu([
                'theme_location' => 'footer_menu',
                'container'      => false,
                'menu_class'     => 'flex flex-col font-champagne_limousines text-red-semi text-xl font-light',
                'menu_id'        => 'footer-Menu',
                'add_li_class' => 'text-2xl'
            ])
            ?>
        </div>

        <div class="flex flex-col bottom-0 pb-20">
            <div class="flex flex-row items-center justify-center w-full h-10 border border-secondary bg-white">
                <a class="flex font-champagne_limousines text-red-semi font-lg font-light underline pr-8" href="<?= $permalink ?>">Terms</a>
                <p class="flex items-center justify-center font-champagne_limousines text-red-semi font-lg font-light ">l</p>
                <a class="flex font-champagne_limousines text-red-semi font-lg font-light ml-8" href="#privacy">Privacy.</a>

            </div>
            <div class="flex flex-row items-center justify-around  w-full h-8 bg-white">
                <p class="flex  font-champagne_limousines text-red-semi font-lg font-light">Copyright 2022 - Goddess Shape</p>
            </div>
        </div>
    </div>
    <!-- footer desktop -->
    <div class="hidden lg:flex flex-col justify-around w-full h-auto bg-secondary">
        <div class="max-w-screen-xl w-full mx-auto flex flex-row h-64">
            <div class="flex flex-col w-auto px-5">
                <div class="flex my-4 " id="logo">
                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Logo.svg" alt="Logo Goddess-shape">
                </div>
                <!-- redes sociales -->
                <div class="flex flex-row w-36 mx-2">
                    <a href="https://api.whatsapp.com/send?phone=+14075080242&text=Hello Goddess Shape%2C i'll like to make a order" class="flex flex-row rounded-full mx-auto my-2">
                        <iconify-icon class="w-full text-2xl text-red-soft" icon="fa:whatsapp"></iconify-icon>
                    </a>
                    <a href="https://instagram.com/shop.goddessshape?igshid=YmMyMTA2M2Y=" class="flex flex-row rounded-full mx-auto my-2">
                        <iconify-icon class="w-full text-2xl text-red-soft" icon="bi:instagram"></iconify-icon>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=100089873754564" class="flex flex-row rounded-full mx-auto my-2">
                        <iconify-icon class="w-full text-2xl text-red-soft" icon="bi:facebook"></iconify-icon>
                    </a>
                    <a href="https://www.tiktok.com/@goddessshape?is_from_webapp=1&sender_device=pc" class="flex flex-row rounded-full mx-auto my-2">
                        <iconify-icon class="w-full text-2xl text-red-soft" icon="ion:logo-tiktok"></iconify-icon>
                    </a>
                </div>
            </div>
            <div class="flex flex-row my-4 mx-2 px-8 w-[70%] items-center">
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer_menu',
                    'container'      => false,
                    'menu_class'     => 'grid grid-cols-3 gap-5 font-champagne_limousines text-red-semi text-2xl font-semibold justify-around',
                    'menu_id'        => 'footer-Menu',
                    'add_li_class' => ''
                ])
                ?>
            </div>
        </div>
        <div class="flex flex-col bottom-0">
            <div class="flex flex-row items-center justify-center w-full h-10 border border-secondary bg-white">
                <a class="flex font-champagne_limousines text-red-semi font-lg font-light underline pr-8" href="<?= $permalink ?>">Terms</a>
                <p class="flex items-center justify-center font-champagne_limousines text-red-semi font-lg font-light ">l</p>
                <a class="flex font-champagne_limousines text-red-semi font-lg font-light ml-8" href="#privacy">Privacy.</a>

            </div>
            <div class="flex flex-row items-center justify-around  w-full h-8 bg-white">
                <p class="flex  font-champagne_limousines text-red-semi font-lg font-light">Copyright 2022 - Goddess Shape</p>
            </div>
        </div>
    </div>
</footer>
</div>

<?php wp_footer() ?>
</body>

</html>