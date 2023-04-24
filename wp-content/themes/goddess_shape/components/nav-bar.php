<?php
$cart_count = WC()->cart->get_cart_contents_count();
$navShadow = 'shadow-gs';
if (is_shop() || is_product() || is_product_category()) {$navShadow = '';}
?>
<!-- navbar -->
<nav class="flex bg-white-true items-center border-b-red-100 border py-4 sticky top-0 z-50 w-full justify-center <?= $navShadow ?>" id="navbar">
    <div class="relative lg:max-w-screen-xl h-full items-center w-full justify-between flex mx-auto">
        <div class="flex z-0">
            <div class="flex h z-10 pl-2">
                <a href="<?= home_url() ?>">
                    <img class="h-9" src="<?= IMAGE ?>Logo.svg">
                </a>
            </div>
        </div>
        <div class="hidden md:flex md:uppercase flex-row md:w-4/5 lg:w-2/3 text-lg text-red-semi lg:justify-between md:justify-around items-center">
            <?php
            wp_nav_menu([
                'theme_location' => 'top_menu',
                'menu_class'     => 'font-extrabold  flex flex-row justify-between',
                'menu_id'        => 'navbar-Menu',
                'add_li_class' => 'lg:px-2 mx-4 md:text-lg lg:text-xl',
            ])
            ?>
            <div class="flex flex-row items-center justify-center w-52" id="">

                <!-- <form class=" hidden" id="search-bar" action="">
                    </form> -->
                <div class="flex flex-row items-center">
                    <div class="px-5 my-auto">
                        <?= do_shortcode('[fibosearch layout="flex-icon-on-desktop"]');  ?>
                    </div>
                    <a class="relative" href="<?= get_permalink(wc_get_page_id('cart')) ?>">
                        <?php if ($cart_count > 0) :
                        ?>
                            <div class="absolute flex -top-2 -right-1 text-sm text-white rounded-full h-4 w-4 justify-center items-center bg-orange-400"><?= $cart_count ?>
                            </div>
                        <?php endif; ?>
                        <iconify-icon class="flex items-center justify-center text-2xl  text-black-gsSoft" icon="material-symbols:shopping-cart-outline-rounded">
                        </iconify-icon>
                    </a>
                    <a class="px-5 flex" href="https://api.whatsapp.com/send?phone=+14075080242&text=Hello Goddess Shape%2C i'll like to make a order">
                        <iconify-icon class="text-2xl m-auto text-black-gsSoft" icon="mdi:whatsapp" style="color: green;"></iconify-icon>
                    </a>
                </div>

            </div>
            <div class="flex font-semibold space-x-2 pr-4 lg:pr-0 items-center mr-5" id="language" href="#language">
                            <?= do_shortcode('[language-switcher]') ?>
            </div>
        </div>
        <div class="aviso transition opacity-0" id="aviso">Do you need help? <br> Write us to assist you!</div>
</nav>