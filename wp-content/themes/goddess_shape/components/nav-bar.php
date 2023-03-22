    <!-- navbar -->
    <div class="flex flex-column justify-between bg-white-true items-center border-b-red-100 border h-12 w-full " id="navbar">
        <div class="flex z-0">
            <div class="flex h z-10 pl-2">
                <a href="<?= home_url() ?>">
                    <img class="h-9" src="<?= IMAGE ?>Logo.svg">
                </a>
            </div>
        </div>

        <div class="hidden md:flex md:uppercase flex-row w-2/3 text-lg text-red-semi justify-between">
            <?php
            wp_nav_menu([
                'theme_location' => 'top_menu',
                'menu_class'     => 'font-extrabold  flex flex-row justify-between items-center',
                'menu_id'        => 'navbar-Menu',
                'add_li_class' => 'lg:px-4 mx-4 text-xl',
            ])
            ?>
            <div class="flex flex-row items-center justify-center w-52" id="">
                <div class="flex flex-row items-center justify-between">
                    <button class="px-5 justify-between flex search-btn" href="#search" id="search">
                        <iconify-icon class="text-2xl m-auto text-black-gsSoft" icon="material-symbols:search-rounded"></iconify-icon>
                    </button>
                    <a class="px-5 justify-between flex" href="<?= get_permalink(wc_get_page_id('cart')) ?>">
                        <iconify-icon class="text-2xl m-auto text-black-gsSoft" icon="material-symbols:shopping-cart-outline-rounded"></iconify-icon>
                    </a>
                    <a class="px-5 flex" href="<?= wc_get_page_id('myaccount') ?>">
                        <iconify-icon class="text-2xl m-auto text-black-gsSoft" icon="ph:user-bold"></iconify-icon>
                    </a>
                </div>
            </div>

        </div>
        <div class="flex font-semibold space-x-2 pr-4 lg:pr-0 items-center mr-5" id="language" href="#language">
            <p class="font-champagne_limousines">Es </p>
            <p class="font-champagne_limousines">/</p>
            <p class="font-champagne_limousines text-gray-400 lg:text-black-gs">En</p>
        </div>
        <input id="search-bar" type="text" placeholder="Buscar" class="relative mt-2 text-center w-[30%] h-8 border rounded-full text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-soft border-red-semi focus:border-transparent hidden">

    </div>