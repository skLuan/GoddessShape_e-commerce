<?php get_header() ?>
    <div id="blog-page" class="flex flex-col py-4 w-[90%] lg:w-[60%] ">
        <div class="">
        <h1 class="text-center text-2xl md:text-3xl font-semibold py-2 text-red-soft  ">Blog</h1>
            <p>Para encontrar la talla correcta de faja es importante tomar medidas precisas de la cintura, cadera, muslo y torso. Use ropa ajustada y mantenga una postura recta y relajada durante la medición. Compare sus medidas con la tabla de tallas de la marca de fajas para encontrar la talla adecuada. Cada marca puede tener un ajuste diferente, por lo que es importante seguir sus recomendaciones de medición. Con la talla correcta, su faja le brindará el soporte y la forma que desea sin sentirse incómodo o restringido.</p>
        </div>
        <div class="flex flex-col ">
        <?php while (have_posts()) {
            the_post();
            ?>
            <p>arroz chino</p>
            <?php
            the_content();
        } 
            ?>
        </div>    
    </div>

<?php get_footer() ?>