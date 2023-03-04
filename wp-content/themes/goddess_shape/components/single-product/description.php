<?php
 $long_description = get_the_content();
?><!-- contenedor de la descripcion -->
<div class="flex flex-row justify-around items-center p-4 w-full border-y-red-100 border">
    <h3 class="font-semibold text-lg text-red-soft">Acabados</h3>
    <h3 class="font-semibold text-lg text-red-soft">Cuidados</h3>
</div>
<div class="flex flex-col w-full bg-white-notWhite px-5 pb-4">
    <div class="flex flex-col bg-white-true rounded-lg items-center shadow-gs w-full mt-4">
        <div class="p-4">
            <h3 class="font-normal text-2xl text-red-soft mb-2">Description</h3>
            <p class="text-lg">
                <?= $long_description ?>
            </p>
        </div>
        <!-- <div class="flex flex-col w-full p-4">
                <h3 class="font-normal text-2xl left-0 text-red-soft mr-20">How to wear</h3>
                <p></p>
            </div> -->
    </div>
</div>