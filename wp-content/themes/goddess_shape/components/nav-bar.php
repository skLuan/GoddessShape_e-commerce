    <!-- navbar -->
    <div class="flex flex-column justify-between bg-white-true items-center border-b-red-100 border h-12 " id="navbar">
        <div class="flex z-0">
            <div class="flex h z-10 pl-2">
                <a href="<?= home_url() ?>">
                    <img class="h-9" src="<?= IMAGE ?>Logo.svg">
                </a>
            </div>
        </div>

        <div class="hidden lg:flex lg:uppercase flex-row w-2/3 text-lg text-red-semi justify-between">
            <?php
            wp_nav_menu([
                'theme_location' => 'top_menu',
                'menu_class'     => 'font-extrabold  flex flex-row justify-between',
                'menu_id'        => 'navbar-Menu',
                'add_li_class' => 'px-4 mx-4 text-xl',
            ])
            ?>
            <div class="flex flex-row items-center justify-center w-52" id="">
                <div class="flex flex-row items-center justify-between">
                    <a class="px-5 justify-between flex" href="#search">
                        <iconify-icon class="text-2xl m-auto text-black-gsSoft" icon="material-symbols:search-rounded"></iconify-icon>
                    </a>
                    <a class="px-5 justify-between flex" href="<?= get_permalink(wc_get_page_id('cart')) ?>">
                        <iconify-icon class="text-2xl m-auto text-black-gsSoft" icon="material-symbols:shopping-cart-outline-rounded"></iconify-icon>
                    </a>
                    <a class="px-5 flex" href="<?= wc_get_page_id('myaccount') ?>">
                        <iconify-icon class="text-2xl m-auto text-black-gsSoft" icon="ph:user-bold"></iconify-icon>
                    </a>
                </div>
            </div>

        </div>
        <div class="flex font-semibold space-x-2 pr-4 lg:pr-0 items-center" id="language" href="#language">
            <img class="hidden lg:flex h-5 w-6 " src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/usa-flag.png" alt="usa flag">
            <p class="font-champagne_limousines">Es </p>
            <p class="font-champagne_limousines">/</p>
            <p class="font-champagne_limousines text-gray-400 lg:text-black-gs">En</p>
        </div>
    </div>