<?php
$title = $args['faq-title'];
$text = $args['faq-text'];
?>
<!-- -------------------------------------------------------------- Question -->
<div class="z-10 flex flex-col items-center justify-around py-2 mt-3 border bg-white-true border-y-secondary">
    <button class="flex font-semibold text-red-soft question "><span class="block my-auto text-lg"><?= $title ?></span>
        <img class="flex" width="24px" src="<?= IMAGE ?>Home/arrow-faq.png" alt="">
    </button>
    <div class="hidden px-5 py-2 text-lg font-normal faq-text font-base lg:max-w-screen-sm text-black-gs">
        <?= $text ?>
    </div>
</div>
<!-- -------------------------------------------------------------- CLOSE Question -->