<?php
// Obtener el nombre del producto
$product = $args['product'];
$name = get_the_title();
$short_description = $product->get_short_description();
?>
<!-- contenedor info -->
<div class="flex flex-col z-40 px-5 bg-white-true shadow-gs rounded-lg w-[90%] lg:w-[40%] lg:h-full lg:mr-auto lg:mb-5 lg:justify-evenly">
    <h2 class="text-black-gsSoft text-left font-bold font-champagne_limousines text-2xl pt-4"><?= $name ?></h2>
    <!-- enunciado del producto desktop -->
    <div class="hidden lg:flex flex-col w-full text-xl text-left">
        <p class="flex font-champagne_limousines text-black-gs leading-tight  font-base font-light"><?= $short_description ?></p>
    </div>
    <!-- precio - card -->
    <div class="flex flex-row font-bold items-center justify-between pt-1">
        <!-- <h3 class="flex text-red-soft line-through opacity-80">$60.6</h3> -->
        <div class="ml-auto flex flex-row justify-between items-center">
            <h3 class="flex ml-auto text-3xl lg:text-4xl text-red-soft mr-2"><?= $args['price'] ?></h3>
            <h3 class="flex items-center font-light text-red-soft my-auto mr-5">US </h3>
        </div>
    </div>
    <!-- tallas  -->
    <!-- <div class=" flex flex-row justify-around mt-4 "> -->
        <?php
        // if (is_product() && $args['product']->is_type('variable')) :
        //     $variations = $args['product']->get_available_variations();

        //     $colorVariations = [];
        //     $sizeVariations = [];
        //     foreach ($variations as $variation) :
        //         $color = $variation['attributes']['attribute_pa_color'];
        //         $size = $variation['attributes']['attribute_pa_size'];
        //         $colorVariations[] = $color;
        //         $sizeVariations[] = $size;


        //     // Hacer algo con el precio y el color aquí
        //     endforeach;
        //     $colors = array_unique($colorVariations);
        //     $sizes = array_unique($sizeVariations);
        // endif;

        ?>
        <!-- <h2 class="flex text-xl text-left font-normal text-black-gsSoft ml-5">size</h2>
        <div class="grid grid-cols-3 gap-2 w-2/3 text-black-gsSoft text-xl font-semibold font-champagne_limousines"> -->
            <?php
            // foreach ($sizes as $size) :
            //     $format;
            //     # code...
            //     switch ($size) {
            //         case 'medium':
            //             $format = 'M';
            //             break;
            //         case 'large':
            //             $format = 'L';
            //             break;
            //         default:
            //             $format = $size;
            //             break;
            //     }
            ?>
                <!-- <div class="text-center "><?php // $format ?></div> -->
            <?php
            //endforeach;
            ?>


            <!-- <div class="text-center">M</div>
                    <div class="text-center">L</div>
                    <div class="text-center">XL</div>
                    <div class="text-center">2XL</div>
                    <div class="bg-orange-400 text-center rounded-lg text-white">3XL</div> -->
        <!-- </div> -->
    <!-- </div> -->
    <!-- colores -->
    <!-- <div class="flex flex-row w-full my-6 h-7 justify-between">
        <div class="flex flex-row items-end justify-start">
            <h2 class="text-xl text-left font-normal text-black-gsSoft ml-5">color:</h2>
            <h3 class="text-red-soft text-xl pl-1 font-semibold">Cocoa</h3>
        </div> -->
        <!-- <div class="flex flex-row justify-center items-center w-1/2"> -->
            <?php
            // foreach ($colors as $color) :
            //     $bgC;
            //     # code...
            //     switch ($color) {
            //         case 'cocoa':
            //             $bgC = '#be998d';
            //             break;
            //         case 'beige':
            //             $bgC = '#be998d';
            //             break;
            //         case 'moca':
            //             $bgC = '#be998d';
            //             break;
            //         case 'white':
            //             $bgC = '#f9faff';
            //             break;
            //         case 'black':
            //             $bgC = '#231b1b';
            //             break;
            //         default:
            //             $bgC = '#f9faff';
            //             break;
            //     }
            ?>
                <!-- <div class="flex flex-row h-4 w-4 rounded-full mx-auto my-2" style="background-color: <?php //  $bgC ?>;"></div> -->
            <?php
            // endforeach;
            ?>
        <!-- </div> -->
    <!-- </div> -->
    <?php
    do_action('gs_cart_buton');
    ?>
</div>