<?php
$queryArgs = array(
    'post_type' => 'preguntas_frecuentes', // Nombre del Custom Post Type
    'posts_per_page' => -1, // Mostrar todos los posts
);
$loopFaq = new WP_Query($queryArgs);
?>
<!-- FAQ -->
<section class="relative flex flex-col w-full mt-20 bg-white pb-14" id="faq">
    <div class="z-20">
        <div class="flex flex-col text-center ">
            <h1 class="w-full mt-6 text-2xl font-semibold leading-5 font-champagne_limousines text-red-soft h-30"><?= __('FAQ', 'goddess') ?></h1>
        </div>
        <?php
            // echo var_dump($loopFaq);
        if ($loopFaq->have_posts()):
            while ($loopFaq->have_posts()):
                $loopFaq->the_post();
                $compoArgs = [
                    'faq-title' => get_the_title(),
                    'faq-text' => get_the_content(),  
                ];
                get_template_part('components/_faq', 'question', $compoArgs);
            endwhile;
            wp_reset_postdata();
        else:
            // No se encontraron preguntas frecuentes
        endif;
        ?>
    </div>
</section>