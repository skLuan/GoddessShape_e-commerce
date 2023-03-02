<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

        <?php
		/**
         * woocommerce_before_main_content hook.
		 *
         * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
         * @hooked woocommerce_breadcrumb - 20
		 */
        do_action( 'woocommerce_before_main_content' );
        ?>
        <!-- card producto-->
        <div class="flex lg:w-56 lg:h-120 flex-col min-w-[240px] bg-transparent rounded-lg mx-4 last:mr-0 items-center justify-center mt-6">
                            <div class="flex flex-col rounded-lg min-h-[220px] h-full">
                                <!-- sombra card nuestros productos -->
                                <!-- <div class="absolute bg-gray-card w-52 h-64 rounded-lg rotate-6 opacity-20"></div> -->
                                <picture class="bg-white-true flex shadow-gs h-full rounded-lg">
                                    <img width="1200" height="1200" src="http://localhost/goddess-shape.com/wp-content/uploads/woocommerce-placeholder.png" class="my-auto h-full rounded-lg" alt="Placeholder" decoding="async" loading="lazy" srcset="http://localhost/goddess-shape.com/wp-content/uploads/woocommerce-placeholder.png 1200w, http://localhost/goddess-shape.com/wp-content/uploads/woocommerce-placeholder-300x300.png 300w, http://localhost/goddess-shape.com/wp-content/uploads/woocommerce-placeholder-1024x1024.png 1024w, http://localhost/goddess-shape.com/wp-content/uploads/woocommerce-placeholder-150x150.png 150w, http://localhost/goddess-shape.com/wp-content/uploads/woocommerce-placeholder-768x768.png 768w" sizes="(max-width: 1200px) 100vw, 1200px"/>
                                </picture>
                                <!-- carrusel imagenes del producto -->
                                <div class="flex flex-row w-full items-center justify-between h-20">
                                    <picture class="flex justify-center h-16 w-20 z-30 rounded-lg shadow-xl border border-orange-400 border-solid">
                                        <img src="http://localhost/goddess-shape.com/wp-content/themes/goddess_shape/assets/img/Home/sol-2.png" alt="">
                                    </picture>
                                    <picture class="flex justify-center h-16 w-20 z-30 rounded-lg shadow-xl">
                                        <img src="http://localhost/goddess-shape.com/wp-content/themes/goddess_shape/assets/img/Home/sol-2.png" alt="">
                                    </picture>
                                    <picture class="flex justify-center h-16 w-20 z-30 rounded-lg shadow-xl">
                                        <img src="http://localhost/goddess-shape.com/wp-content/themes/goddess_shape/assets/img/Home/sol-2.png" alt="">
                                    </picture>
                                    <picture class="flex justify-center h-16 w-20 z-30 rounded-lg shadow-xl">
                                        <img src="http://localhost/goddess-shape.com/wp-content/themes/goddess_shape/assets/img/Home/sol-2.png" alt="">
                                    </picture>

                                </div>
                            </div>
                            <!-- contenedor info -->
                            <div class="flex flex-col z-20 px-8 pb-5 w-full h-56 bg-white-true shadow-gs rounded-lg">
                                <a href="http://localhost/goddess-shape.com/product/faja-larga-con-brasier/">
                                    <h2 class="text-color-secondary text-left font-bold font-champagne_limousines text-lg font-base pt-3">Faja larga con brasier</h2>
                                </a>
                                <!-- precio - card -->
                                <div class="flex flex-row font-bold items-center justify-around pt-3">
                                        <h3 class="flex text-red-soft line-through opacity-80">$60.6</h3>
                                        <div class="flex flex-row justify-between">
                                            <h3 class="flex text-2xl text-red-soft w-2/6">$41.43</h3>
                                            <h3 class="flex items-center font-ligth text-red-soft mr-4">US </h3>
                                        </div>
                                </div>
                                <!-- tallas  -->
                                <div class=" flex flex-row justify-between ">
                                    <h2 class="flex font-base text-left font-normal text-gray-400">size</h2>
                                    <div class="grid grid-cols-3 grid-rows-2 gap-2 w-28 bg-white text-gray-400 text-lg font-semibold font-baby_aletha">
                                        <div class="text-center">S</div>
                                        <div class="text-center">M</div>
                                        <div class="text-center">L</div>
                                        <div class="text-center">XL</div>
                                        <div class="text-center">2XL</div>
                                        <div class="bg-orange-400 text-center rounded-lg text-white">3XL</div>
                                    </div>
                                </div>
                                <!-- colores -->
                                    <div class="flex flex-row w-full pt-1 h-7 bg-white justify-between">
                                        <div class="flex flex-row items-center justify-start w-2/3">
                                            <h3 class="text-black-gs px-2">Color</h3>
                                            <h3 class="text-red-soft font-semibold">White</h3>
                                        </div>
                                        <div class="flex flex-row justify-end w-1/2">
                                            <!-- <div class="flex flex-row h-3 w-3 bg-orange-300 rounded-full mx-auto my-2"></div>
                                <div class="flex flex-row h-3 w-3 bg-red-soft rounded-full mx-auto my-2"></div>
                                <div class="flex flex-row h-3 w-3 bg-green-600 rounded-full mx-auto my-2"></div> -->
                                            <div class="flex flex-row h-3 w-3 bg-white border border-black-gs rounded-full mx-auto my-2"></div>
                                            <div class="flex flex-row h-3 w-3 bg-black-gs rounded-full mx-auto my-2"></div>
                                        </div>
                                    </div>
                            </div>
        </div>
        <!-- descripcion del producto -->
        <div class="flex flex-col h-60 w-full items-center justify-center">
            <div class="flex flex-row items-start justify-around w-3/4 h-40">
                <div>
                    <h3 class="font-semibold text-lg text-orange-400 underline pt-4">What is my fit?</h3>
                </div>
                <button class="h-16 w-1/2">
                <img src="http://localhost/goddess-shape.com/wp-content/themes/goddess_shape/assets/img/Home/add-cart.png" alt="">
                </button>
            </div>
            <div class="flex flex-row items-center justify-center w-1/3">
                <h3 class="flex w-full bg-red-semi rounded-full text-center justify-center text-white font-semibold text-lg">Description</h3>
            </div>
        </div>
        <!-- contenedor de la descripcion -->
        <div class="flex flex-col h-100 w-full bg-white-notWhite px-8 justify-center items-center pb-4">
            <div class="flex flex-row justify-around items-center p-4 w-full border-y-red-100 border rounded-lg pb-2">
                <h3 class="font-semibold text-lg text-red-soft">Acabados</h3>
                <h3 class="font-semibold text-lg text-red-soft">Cuidados</h3>
            </div>
            <div class="flex flex-col bg-white-true rounded-lg items-center shadow-xl h-full w-10/12 mt-2">
                <div class="p-4">
                    <h3 class="font-normal text-xl text-red-soft">Description</h3>
                    <p>Faja larga con espalda y sisa cubierta de uso diario y posquirúrgico, cuenta con brasier incorporado que brinda soporte en el busto. De compresión alta.</p>
                </div>
                <div class="p-4">
                    <h3 class="font-normal text-xl text-red-soft">How to wear</h3>
                    <p></p>
                </div>
            </div>
        </div>
        <!-- carrusel abajo de descripcion del producto -->
        <div class="flex flex-col text-center bg-transparent h-20 justify-center ">
            <h2 class="font-champagne_limousines text-28 text-red-soft pt-4 leading-5 w-full font-bold items-center ">Quizas te interese
            </h2>
        </div>
        <section class="flex flex-row bg-white-true overflow-x-auto w-full mr-2 p-5">
            <?php
            $args = [
            'limit' => -1,
            ];
            $products = wc_get_products($args);

            foreach ($products as $product) :
            ?>
                <div class="relative flex lg:w-56 lg:h-120 flex-col min-w-[240px] bg-transparent rounded-lg mr-5 last:mr-0">
                    <?= get_template_part('components/product-cards/part', 'pictureOne', ['product' => $product]) ?>
                    <?= get_template_part('components/product-cards/part', 'info', ['product' => $product]) ?>
        </div>
            <?php endforeach;  ?>
        </section>
<!--------------------------------------------------------------- nuevos modelos -->
<div class="bg-white-notWhite">
<?= get_template_part('components/loops/new-models') ?>
</div>
<!-------------------------------------------------------------------------------- -->
<!---------------------------------------------- pay with -->
<?= get_template_part('components/payments') ?>

<!-- last seen -->
    <div class="flex flex-col h-100 text-xl justify-between">
        <h3 class="font-semibold text-black-gs text-center pb-8">Last seen</h3>
        <div class="flex flex-row w-full h-36 justify-around ">
            <picture class="flex justify-center shadow-lg w-28 rounded-lg">
                <img class="rounded-lg shadow-xl w-full" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/body.png" alt="">
            </picture>
            <!-- simbolo de descuento -->
            <picture class="absolute left-[30%] ">
                <img class="bg-transparent h-12 w-12 z-30 mr-5 mt-12" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/descuento.png" alt="">
            </picture>
            <!-- contenedor info -->
            <div class="flex flex-col z-20 px-2  pb-5 w-1/2 bg-white-true shadow-gs rounded-lg">
                                <a href="http://localhost/goddess-shape.com/product/faja-larga-con-brasier/">
                                    <h2 class="text-color-secondary text-left font-bold font-champagne_limousines h-8 text-base py-2">Faja larga con brasier</h2>
                                </a>
                                <!-- tallas  -->
                                <div class="flex mt-3  justify-center">
                                    <div class="flex flex-row justify-around w-2/3 bg-transparent text-black-gs text-lg font-semibold font-baby_aletha">
                                        <div class=" text-center">S</div>
                                        <div class=" text-center">M</div>
                                        <div class=" text-center">L</div>
                                    </div>
                                </div>
                                <!-- colores -->
                                <div class="flex flex-row w-full pt-1 h-4 bg-transparent justify-center">
                                    <div class="flex flex-row justify-around w-2/3 bg-white text-black-gs text-lg font-semibold font-baby_aletha">
                                        <div class="flex flex-row h-3 w-3 bg-white border border-black-gs rounded-full mx-auto my-2"></div>
                                        <div class="flex flex-row h-3 w-3 bg-black-gs rounded-full mx-auto my-2"></div>
                                        <div class="flex flex-row h-3 w-3 bg-white border border-black-gs rounded-full mx-auto my-2"></div>
                                    </div>
                                    
                                </div>
                                <!-- precio - card -->
                                <div class="flex flex-row font-bold items-center justify-around pt-2">
                                        <h3 class="flex text-base justify-end  text-red-soft w-auto">$41.43 US</h3>
                                </div>
            </div>
                            
        </div>
        <div class="flex flex-row w-full h-36 justify-around">
            <picture class="flex justify-center shadow-lg w-28 rounded-lg">
                <img class="rounded-lg shadow-xl" src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/body.png" alt="">
            </picture>
                        <!-- contenedor info -->
                        <div class="flex flex-col z-20 px-2 pb-5 w-1/2 bg-white-true shadow-gs rounded-lg">
                                <a href="http://localhost/goddess-shape.com/product/faja-larga-con-brasier/">
                                    <h2 class="text-color-secondary text-left font-bold font-champagne_limousines h-8 text-base py-2">Faja larga con brasier</h2>
                                </a>
                                <!-- tallas  -->
                                <div class="flex mt-3  justify-center">
                                    <div class="flex flex-row justify-around w-2/3 bg-transparent text-black-gs text-lg font-semibold font-baby_aletha">
                                        <div class=" text-center">S</div>
                                        <div class=" text-center">M</div>
                                        <div class=" text-center">L</div>
                                    </div>
                                </div>
                                <!-- colores -->
                                <div class="flex flex-row w-full pt-1 h-4 bg-transparent justify-center">
                                    <div class="flex flex-row justify-around w-2/3 bg-white text-black-gs text-lg font-semibold font-baby_aletha">
                                        <div class="flex flex-row h-3 w-3 bg-white border border-black-gs rounded-full mx-auto my-2"></div>
                                        <div class="flex flex-row h-3 w-3 bg-black-gs rounded-full mx-auto my-2"></div>
                                        <div class="flex flex-row h-3 w-3 bg-white border border-black-gs rounded-full mx-auto my-2"></div>
                                    </div>
                                    
                                </div>
                                <!-- precio - card -->
                                <div class="flex flex-row font-bold items-center justify-around pt-2">
                                        <h3 class="flex text-base text-end w-auto  text-red-soft">$41.43 US</h3>
                                </div>
            </div>
                            
        </div>

    </div>

<!-- last seen -->

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		// do_action( 'woocommerce_sidebar' );
	?>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
