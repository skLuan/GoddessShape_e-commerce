<!-- cards acabado 1 y acabado 2 -->
<div class="grid grid-cols-1 lg:grid-cols-12">

    <div class="grid grid-cols-2 lg:col-span-7 gap-5 items-center justify-center w-full h-64 bg-white px-5 mb-10">
        <div class="relative flex flex-col px-8">
            <h2 class="flex my-2 font-champagne_limousines text-lg font-bold text-center mx-auto text-red-soft">Acabado 1</h2>
            <img class="absolute left-3 -rotate-45 -top-3 z-0 opacity-30" width="90%" src="<?= IMAGE . 'Home/sol_sin_centro.png' ?>" alt="">

            <div class="flex z-10 relative flex-row h-28 w-28 bg-gray-card rounded-full mx-auto mb-2"></div>
            <h2 class="flex ml-2 text-lg lg:font-normal leading-5 font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>

        </div>
        <div class="relative flex flex-col px-8">
            <h2 class="flex my-2 font-champagne_limousines text-lg font-bold text-center mx-auto text-red-soft">Acabado 2</h2>
            <img class="absolute left-3 -rotate-45 -top-3 z-0 opacity-30" width="90%" src="<?= IMAGE . 'Home/sol_sin_centro.png' ?>" alt="">

            <div class="flex relative z-10 h-28 w-28 bg-gray-card rounded-full mx-auto mb-2"></div>
            <h2 class="flex ml-2 text-lg lg:font-normal leading-5 font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
        </div>
    </div>
    <!-- toma tus medidas -->
    <div class="w-full lg:col-span-5 bg-white my-4 mb-9">
        <div class="w-full justify-around py-4 pl-5 grid grid-cols-7 gap-5">
            <div class="flex flex-col col-span-4 text-center">
                <a href="" class="flex font-champagne_limousines text-orange-400 underline text-lg my-2 justify-center font-semibold">Toma tus medidas</a>
                <a href="" class="flex font-champagne_limousines text-orange-400 underline text-lg my-4 justify-center font-semibold">Cuida tus prendas</a>
                <p class="flex mt-auto mb-5 font-champagne_limousines leading-5 gs-black font-base font-light text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <picture class=" col-span-3 col-start-5 flex items-center justify-center">
                <img class="flex" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/imagen.png-27.png" alt="">
            </picture>
        </div>
    </div>
</div>