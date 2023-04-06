<?php
$classes = '';
if (isset($args['class'])) $classes = $args['class'];
$medidas_url = get_permalink(106);
$cuidados_url = get_permalink(737);
?>
<div id="guide" class="pt-20 md:pt-0 <?= esc_attr($classes); ?>">
    <div class="flex flex-col h-auto w-full justify-start py-2">
        <div class="flex items-center justify-center w-full">
            <div class="flex items-center flex-col w-[90%] lg:w-[60%]">
                <div class="flex items-center justify-center">
                    <img class="flex h-28" src="<?= IMAGE ?>Home/tallas_degradado3.png" alt="">
                </div>
                <h2 class="flex items-center justify-center font-champagne_limousines  text-red-semi font-bold  text-2xl lg:text-3xl py-3">Garment Guide</h2>
                <p class="items-center justify-center leading-tight font-champagne_limousines gs-black text-lg font-light lg:w-[70%]">Find your size in our clothes by following the <a class="text-orange-400 underline font-semibold mt-2 " href="<?= $medidas_url ?>">measurement chart.</a></p>
            </div>
        </div>
    </div>

    <!-- cards acabado 1 y acabado 2 -->
    <div class="flex flex-col w-full h-auto items-center">

        <div class="flex flex-col lg:flex-row items-center justify-center w-[90%] lg:w-[70%] h-auto overflow-hidden">
            <div class="flex flex-col justify-center h-full">
                <h2 class="flex my-2 font-champagne_limousines text-lg lg:text-xl font-bold text-center mx-auto text-red-soft mt-[5%]">Powernet</h2>

                <picture class="flex z-10 flex-row h-28 w-28 bg-gray-card rounded-full mx-auto mb-2">
                    <img class="flex h-28 w-28 rounded-full" src="<?= IMAGE ?>Home/powernet.png" alt="">
                </picture>
                <h2 class="flex ml-2 text-lg lg:font-normal leading-5 font-light">Powernet is a type of high compression fabric used in clothing such as shapewear to shape and reduce body measurements. It is made of a resistant and flexible elastic mesh that provides support and compression in specific areas of the body.</h2>

            </div>
            <div class="flex flex-col justify-center h-full overflow-hidden lg:ml-3">
                <h2 class="flex my-2 font-champagne_limousines text-lg font-bold text-center mx-auto lg:text-xl text-red-soft mt-[5%]">Between-leg fastener</h2>

                <picture class="flex z-10 h-28 w-28 bg-gray-card rounded-full mx-auto mb-2">
                    <img class="flex h-28 w-28 rounded-full" src="<?= IMAGE ?>Home/between-fastener.png" alt="">
                </picture>
                <h2 class="flex ml-2 text-lg lg:font-normal leading-5 font-light">The opening between the legs of women's shapewear allows for greater comfort, ventilation, and better fit in the abdominal and hip areas, making the garment more comfortable and healthy.</h2>
            </div>
        </div>
        <!-- toma tus medidas -->
        <div class="w-full lg:w-[70%] flex items-center text-center justify-center my-5 px-5">
            <p class="mt-auto mb-2 font-champagne_limousines leading-5 gs-black text-lg font-light text-left">Discover how to take care of your shapewaer in our<a href="<?= $cuidados_url ?>" class=" font-champagne_limousines text-orange-400 underline text-lg my-4 justify-center font-semibold"> Garment care guide</a></p>
        </div>
    </div>
</div>