<!-- tabBar -->
<div class="flex items-center justify-between w-5/6 px-5 pt-3 pb-2 translate-x-1/2 right-1/2 fixed shadow-xl rounded-lg bg-white z-20" id="tab_bar">
    <div class="flex items-center">

        <div class="h-7 w-7 sidebar" id="sideBar">
            <img class="w-7 h-7 hidden bmenu" id="bmenu" href="#sidebar" src="<?= get_stylesheet_directory_uri() ?>/assets/img/tabBar icons/toogle.PNG">
            <img class="h-7 w-7 toogle" id="toogle" src="<?= get_stylesheet_directory_uri() ?>/assets/img/tabBar icons/i-menu-2.svg" alt="">
            <script>
                let btn = document.querySelector("#sideBar");
                let icon = btn.querySelector(".bmenu")
                let hdn = btn.querySelector(".toogle")
                let menu = document.getElementById("sidemenu")



                btn.onclick = function() {
                    if (icon.classList.contains("hidden")) {
                        icon.classList.remove("hidden")
                        hdn.classList.add("hidden")
                        menu.classList.remove("hidden")





                    } else {
                        icon.classList.add("hidden");
                        hdn.classList.remove("hidden")
                        menu.classList.add("hidden")

                    }
                }
            </script>
        </div>
    </div>
    <div class="relative">
        <a class="" href="#cart">
            <div class="flex text-sm text-white mt-1 rounded-full absolute -right-1 -top-3 h-4 w-4 justify-center items-center bg-orange-400">3
            </div>
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
    <a href="#search">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="24" xmlns="http://www.w3.org/2000/svg" height="24" id="screenshot-7569143b-d70d-8022-8001-bd2e684af13a" viewBox="0 0 24 24" style="-webkit-print-color-adjust: exact;" fill="none" version="1.1">
            <g xmlns:xlink="http://www.w3.org/1999/xlink" width="24" xml:space="preserve" height="24" id="shape-7569143b-d70d-8022-8001-bd2e684af13a" baseProfile="full" style="fill: rgb(0, 0, 0);" ry="0" rx="0" version="1.1" enable-background="new 0 0 24.00 24.00">
                <g id="shape-7569143b-d70d-8022-8001-bd2e684b2a34">
                    <g id="fills-7569143b-d70d-8022-8001-bd2e684b2a34">
                        <rect width="23.999999999999886" height="24" x="0" transform="matrix(1,0,0,1,0,0)" style="fill: none;" ry="0" fill="none" rx="0" y="0" />
                    </g>
                </g>
                <g id="shape-7569143b-d70d-8022-8001-bd2e684b2a35">
                    <g id="fills-7569143b-d70d-8022-8001-bd2e684b2a35">
                        <path stroke-linejoin="round" rx="0" ry="0" d="M9.5,4C13.09,4,16,6.91,16,10.5C16,12.117,15.409,13.596,14.432,14.734L20.076,20.378L19.369,21.085L13.724,15.44C12.588,16.413,11.113,17,9.5,17C5.91,17,3,14.09,3,10.5C3,6.91,5.91,4,9.5,4ZZM9.5,5C6.462,5,4,7.462,4,10.5C4,13.538,6.462,16,9.5,16C12.538,16,15,13.538,15,10.5C15,7.462,12.538,5,9.5,5ZZ" style="fill: rgb(35, 27, 27); fill-opacity: 1;" />
                    </g>
                    <g id="strokes-7569143b-d70d-8022-8001-bd2e684b2a35">
                        <g class="stroke-shape">
                            <path stroke-linejoin="round" rx="0" ry="0" d="M9.5,4C13.09,4,16,6.91,16,10.5C16,12.117,15.409,13.596,14.432,14.734L20.076,20.378L19.369,21.085L13.724,15.44C12.588,16.413,11.113,17,9.5,17C5.91,17,3,14.09,3,10.5C3,6.91,5.91,4,9.5,4ZZM9.5,5C6.462,5,4,7.462,4,10.5C4,13.538,6.462,16,9.5,16C12.538,16,15,13.538,15,10.5C15,7.462,12.538,5,9.5,5ZZ" style="fill: none; stroke-width: 0.2;" />
                        </g>
                    </g>
                </g>
            </g>
        </svg>
    </a>
    <a class="" href="#user">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="24" xmlns="http://www.w3.org/2000/svg" height="24" id="screenshot-7569143b-d70d-8022-8001-bd2e684af139" viewBox="0 0 24 24" style="-webkit-print-color-adjust: exact;" fill="none" version="1.1">
            <g xmlns:xlink="http://www.w3.org/1999/xlink" width="24" xml:space="preserve" height="24" id="shape-7569143b-d70d-8022-8001-bd2e684af139" baseProfile="full" style="fill: rgb(0, 0, 0);" ry="0" rx="0" version="1.1" enable-background="new 0 0 24.00 24.00">
                <g id="shape-7569143b-d70d-8022-8001-bd2e684af13d">
                    <g id="fills-7569143b-d70d-8022-8001-bd2e684af13d">
                        <rect width="24" height="24" x="0" transform="matrix(1,0,0,1,0,0)" style="fill: none;" ry="0" fill="none" rx="0" y="0" />
                    </g>
                </g>
                <g id="shape-7569143b-d70d-8022-8001-bd2e684b2a33">
                    <g id="fills-7569143b-d70d-8022-8001-bd2e684b2a33">
                        <path stroke-linejoin="round" rx="0" ry="0" d="M11.5,14C15.642,14,19,15.567,19,17.5L19,20L4,20L4,17.5C4,15.567,7.358,14,11.5,14ZZM18,17.5C18,16.119,15.09,15,11.5,15C7.91,15,5,16.119,5,17.5L5,19L18,19L18,17.5ZZM11.5,5C13.433,5,15,6.567,15,8.5C15,10.433,13.433,12,11.5,12C9.567,12,8,10.433,8,8.5C8,6.567,9.567,5,11.5,5ZZM11.5,6C10.119,6,9,7.119,9,8.5C9,9.881,10.119,11,11.5,11C12.881,11,14,9.881,14,8.5C14,7.119,12.881,6,11.5,6ZZ" style="fill: rgb(35, 27, 27); fill-opacity: 1;" />
                    </g>
                    <g id="strokes-7569143b-d70d-8022-8001-bd2e684b2a33">
                        <g class="stroke-shape">
                            <path stroke-linejoin="round" rx="0" ry="0" d="M11.5,14C15.642,14,19,15.567,19,17.5L19,20L4,20L4,17.5C4,15.567,7.358,14,11.5,14ZZM18,17.5C18,16.119,15.09,15,11.5,15C7.91,15,5,16.119,5,17.5L5,19L18,19L18,17.5ZZM11.5,5C13.433,5,15,6.567,15,8.5C15,10.433,13.433,12,11.5,12C9.567,12,8,10.433,8,8.5C8,6.567,9.567,5,11.5,5ZZM11.5,6C10.119,6,9,7.119,9,8.5C9,9.881,10.119,11,11.5,11C12.881,11,14,9.881,14,8.5C14,7.119,12.881,6,11.5,6ZZ" style="fill: none; stroke-width: 0.2;" />
                        </g>
                    </g>
                </g>
            </g>
        </svg>
    </a>
</div>