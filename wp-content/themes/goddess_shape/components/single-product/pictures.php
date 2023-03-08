<div class="flex flex-col lg:flex-row rounded-lg min-h-[220px] h-full w-full lg:w-[50%] ml-auto z-20">
    <!-- sombra card nuestros productos -->
    <div class="swiper-single-product pb-5 overflow-x-hidden px-5 lg:w-[80%]">
        <div class="swiper-wrapper ">
            <div class="swiper-slide bg-white-true shadow-gs rounded-lg">
                <picture class="h-full w-full mx-auto flex">
                    <?php
                    echo woocommerce_get_product_thumbnail('full', ['class' => 'mx-auto rounded-lg w-auto h-full']);
                    ?>
                </picture>
            </div>

            <?php
            foreach ($args['gallery_array'] as $image_id) :
                $image = wp_get_attachment_image($image_id, 'woocommerce_single', false, ['class' => 'mx-auto rounded-lg w-auto h-full']);
            ?>
                <div class="swiper-slide bg-white-true shadow-gs rounded-lg">
                    <picture class="h-full flex w-full mx-auto">
                        <?= $image ?>
                    </picture>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
    <!-- carrusel imagenes del producto -->
    <div class="swiper-single-thumb p-5 pt-0 overflow-hidden">
        <!-- <div class="flex flex-row overflow-visible w-fit"> -->
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <picture class="bg-white-true shadow-gs rounded-lg h-20 w-20 mx-auto flex">
                    <?php
                    echo woocommerce_get_product_thumbnail('thumbnail', ['class' => 'mx-auto rounded-lg w-auto h-full']);
                    ?>
                </picture>
            </div>
            <?php
            foreach ($args['gallery_array'] as $image_id) :
                $image = wp_get_attachment_image($image_id, 'woocommerce_single', false, ['class' => 'mx-auto rounded-lg w-auto h-full']);
            ?>
                <div class="swiper-slide">
                    <picture class="bg-white-true flex h-20 w-20 z-30 rounded-lg shadow-gs border-solid">
                        <?= $image ?>
                    </picture>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</div>