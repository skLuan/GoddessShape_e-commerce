<?php
$cart_count = WC()->cart->get_cart_contents_count();
?>
<!-- tabBar -->
<div class="flex md:hidden items-center justify-between w-5/6 px-5 pt-3 pb-2 translate-x-1/2 right-1/2 fixed bottom-[10%] shadow-xl rounded-lg bg-white-true z-50" id="tab_bar">
    <div class="flex items-center">

        <div class="h-7 w-7 sidebar" id="sideBar">
            <img class="w-7 h-7 hidden bmenu" id="bmenu" href="#sidebar" src="<?= get_stylesheet_directory_uri() ?>/assets/img/tabBar icons/toogle.png">
            <img class="h-7 w-7 toogle" id="toogle" src="<?= get_stylesheet_directory_uri() ?>/assets/img/tabBar icons/i-menu-2.svg" alt="">
        </div>
    </div>
    <div class="relative">
        <a class="" href="<?= wc_get_cart_url() ?>">
        <?php
        if($cart_count > 0): 
        ?>
            <div class="flex text-sm text-white mt-1 rounded-full absolute -right-1 -top-3 h-4 w-4 justify-center items-center bg-orange-400"><?= $cart_count ?>
            </div>
        <?php endif; ?>
            <svg class="" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" xmlns="http://www.w3.org/2000/svg" height="24" id="screenshot-7569143b-d70d-8022-8001-bd2e684af13b" viewBox="0 0 24 24" style="-webkit-print-color-adjust: exact;" fill="none" version="1.1">
                <g xmlns:xlink="http://www.w3.org/1999/xlink" width="24" xml:space="preserve" height="24" id="shape-7569143b-d70d-8022-8001-bd2e684af13b" baseProfile="full" style="fill: rgb(0, 0, 0);" ry="0" rx="0" version="1.1" enable-background="new 0 0 24.00 24.00">
                    <g id="shape-7569143b-d70d-8022-8001-bd2e684b2a36">
                        <g id="fills-7569143b-d70d-8022-8001-bd2e684b2a36">
                            <rect width="23.999999999999886" height="24" x="0" transform="matrix(1,0,0,1,0,0)" style="fill: none;" ry="0" fill="none" rx="0" y="0" />
                        </g>
                    </g>
                    <g id="shape-7569143b-d70d-8022-8001-bd2e684b2a37">
                        <g id="fills-7569143b-d70d-8022-8001-bd2e684b2a37">
                            <path stroke-linejoin="round" rx="0" ry="0" d="M16,18C17.105,18,18,18.895,18,20C18,21.105,17.105,22,16,22C14.895,22,14,21.105,14,20C14,18.895,14.895,18,16,18ZZM16,19C15.448,19,15,19.448,15,20C15,20.552,15.448,21,16,21C16.552,21,17,20.552,17,20C17,19.448,16.552,19,16,19ZZM7,18C8.105,18,9,18.895,9,20C9,21.105,8.105,22,7,22C5.895,22,5,21.105,5,20C5,18.895,5.895,18,7,18ZZM7,19C6.448,19,6,19.448,6,20C6,20.552,6.448,21,7,21C7.552,21,8,20.552,8,20C8,19.448,7.552,19,7,19ZZM18,6L4.273,6L6.82,12L15,12C15.328,12,15.619,11.842,15.8,11.598L18.8,7.598L18.801,7.598C18.926,7.431,19,7.224,19,7C19,6.448,18.552,6,18,6ZZM15,13L6.865,13L6.101,14.561L6,15C6,15.552,6.448,16,7,16L18,16L18,17L7,17C5.895,17,5,16.105,5,15C5,14.648,5.091,14.317,5.25,14.03L5.97,12.555L2.338,4L1,4L1,3L3,3L3.849,5L18,5C19.105,5,20,5.895,20,7C20,7.477,19.833,7.916,19.553,8.26L16.639,12.146C16.278,12.662,15.678,13,15,13ZZ" style="fill: rgb(35, 27, 27); fill-opacity: 1;" />
                        </g>
                        <g id="strokes-7569143b-d70d-8022-8001-bd2e684b2a37">
                            <g class="stroke-shape">
                                <path stroke-linejoin="round" rx="0" ry="0" d="M16,18C17.105,18,18,18.895,18,20C18,21.105,17.105,22,16,22C14.895,22,14,21.105,14,20C14,18.895,14.895,18,16,18ZZM16,19C15.448,19,15,19.448,15,20C15,20.552,15.448,21,16,21C16.552,21,17,20.552,17,20C17,19.448,16.552,19,16,19ZZM7,18C8.105,18,9,18.895,9,20C9,21.105,8.105,22,7,22C5.895,22,5,21.105,5,20C5,18.895,5.895,18,7,18ZZM7,19C6.448,19,6,19.448,6,20C6,20.552,6.448,21,7,21C7.552,21,8,20.552,8,20C8,19.448,7.552,19,7,19ZZM18,6L4.273,6L6.82,12L15,12C15.328,12,15.619,11.842,15.8,11.598L18.8,7.598L18.801,7.598C18.926,7.431,19,7.224,19,7C19,6.448,18.552,6,18,6ZZM15,13L6.865,13L6.101,14.561L6,15C6,15.552,6.448,16,7,16L18,16L18,17L7,17C5.895,17,5,16.105,5,15C5,14.648,5.091,14.317,5.25,14.03L5.97,12.555L2.338,4L1,4L1,3L3,3L3.849,5L18,5C19.105,5,20,5.895,20,7C20,7.477,19.833,7.916,19.553,8.26L16.639,12.146C16.278,12.662,15.678,13,15,13ZZ" style="fill: none; stroke-width: 0.2;" />
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </a>
    </div>
    <div class=" flex items-center justify-center w-auto">
        <a class="" href="https://api.whatsapp.com/send?phone=+573148009355&text=Hola%20Quisiera%20hacer%20un%20pedido">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="green" d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2m.01 1.67c2.2 0 4.26.86 5.82 2.42a8.225 8.225 0 0 1 2.41 5.83c0 4.54-3.7 8.23-8.24 8.23c-1.48 0-2.93-.39-4.19-1.15l-.3-.17l-3.12.82l.83-3.04l-.2-.32a8.188 8.188 0 0 1-1.26-4.38c.01-4.54 3.7-8.24 8.25-8.24M8.53 7.33c-.16 0-.43.06-.66.31c-.22.25-.87.86-.87 2.07c0 1.22.89 2.39 1 2.56c.14.17 1.76 2.67 4.25 3.73c.59.27 1.05.42 1.41.53c.59.19 1.13.16 1.56.1c.48-.07 1.46-.6 1.67-1.18c.21-.58.21-1.07.15-1.18c-.07-.1-.23-.16-.48-.27c-.25-.14-1.47-.74-1.69-.82c-.23-.08-.37-.12-.56.12c-.16.25-.64.81-.78.97c-.15.17-.29.19-.53.07c-.26-.13-1.06-.39-2-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.12-.24-.01-.39.11-.5c.11-.11.27-.29.37-.44c.13-.14.17-.25.25-.41c.08-.17.04-.31-.02-.43c-.06-.11-.56-1.35-.77-1.84c-.2-.48-.4-.42-.56-.43c-.14 0-.3-.01-.47-.01Z"/></svg>
        </a>
    </div>
    <div class="flex items-center justify-center">                   
        <button id="search-btn" class="flex items-center lg:hidden justify-center  rounded-full text-gray-700 focus:outline-none">
            <?php echo do_shortcode('[fibosearch]'); ?>
        </button>
    </div>
</div>
