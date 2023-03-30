<?php
$cart_count = WC()->cart->get_cart_contents_count();
?>
    <!-- navbar -->
    <nav class="flex shadow-gs bg-white-true items-center border-b-red-100 border py-4 sticky top-0 z-50 w-full justify-center " id="navbar">
        <div class="lg:max-w-screen-xl h-full items-center w-full justify-between flex mx-auto">
            <div class="flex z-0">
                <div class="flex h z-10 pl-2">
                    <a href="<?= home_url() ?>">
                        <img class="h-9" src="<?= IMAGE ?>Logo.svg">
                    </a>
                </div>
            </div>
            <div class="hidden lg:flex lg:uppercase flex-row w-2/3 text-lg text-red-semi justify-between items-center">
                <?php
                wp_nav_menu([
                    'theme_location' => 'top_menu',
                    'menu_class'     => 'font-extrabold  flex flex-row justify-between',
                    'menu_id'        => 'navbar-Menu',
                    'add_li_class' => 'px-4 mx-4 text-xl',
                ])
                ?>
                <div class="flex flex-row items-center justify-center w-52" id="">
                    <form class=" hidden" id="search-bar" action="">                             
                        <?php echo do_shortcode('[fibosearch]'); ?>
                    </form>
                    <div class="flex flex-row items-center justify-center">
                        <button class="px-5 justify-between flex search-btn" href="#search" id="search">
                            <iconify-icon class="text-2xl m-auto text-black-gsSoft" icon="material-symbols:search-rounded"></iconify-icon>
                        </button>
                        <a class="" href="<?= get_permalink(wc_get_page_id('cart')) ?>">
                            <a class=" px-5 justify-center items-center" href="<?= wc_get_cart_url() ?>">
                                <?php
                                if($cart_count > 0):
                                ?>  
                                <div class="relative flex top-1 -right-2 text-sm text-white rounded-full h-4 w-4 justify-center items-center bg-orange-400"><?= $cart_count ?>
                                </div>
                                <?php endif; ?>
                                    
                                <iconify-icon class="flex items-center justify-center text-2xl  text-black-gsSoft" icon="material-symbols:shopping-cart-outline-rounded">
                                    
                                </iconify-icon>
                            </a>
                            <a class="px-5 flex" href="https://api.whatsapp.com/send?phone=+573148009355&text=Hola%20Quisiera%20hacer%20un%20pedido">
                            <iconify-icon class="text-2xl m-auto text-black-gsSoft" icon="mdi:whatsapp" style="color: green;"></iconify-icon>
                            </a>
                        </a>
                    </div>
                </div>
                
            </div>
            <div class="flex font-semibold space-x-2 pr-4 lg:pr-0 items-center mr-5" id="language" href="#language">
                <p class="font-champagne_limousines">Es </p>
                <p class="font-champagne_limousines">/</p>
                <p class="font-champagne_limousines text-gray-400 lg:text-black-gs">En</p>
            </div>
        </div>
    </nav>