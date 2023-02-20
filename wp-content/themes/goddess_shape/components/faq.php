<!-- FAQ -->
<section class="relative flex flex-col w-full bg-white pb-14 mt-20" id="faq">
    <div class="z-20">
        <div class="flex flex-col text-center ">
            <h1 class="font-champagne_limousines text-2xl text-red-soft leading-5 w-full font-semibold h-30 mt-6">FAQ</h1>
        </div>
        <div class="flex flex-col items-center justify-around bg-white-true mt-3 py-2 border border-y-secondary">
            <button class="flex text-red-soft font-semibold question "><span class="text-lg my-auto block">This is a question number1?</span>
                <img class="flex" width="24px" src="<?= IMAGE ?>Home/arrow-faq.PNG" alt="">
            </button>
            <p class="hidden font-base font-normal text-lg pt-2 text-black-gs ">Respuesta 1</p>
        </div>
        <div class="flex flex-col items-center justify-around bg-white-true mt-3 py-2 border border-y-secondary z-10">
            <button class="flex text-red-soft font-semibold question "><span class="text-lg my-auto block">This is a question number2?</span>
                <img class="flex" width="24px" src="<?= IMAGE ?>Home/arrow-faq.PNG" alt="">
            </button>
            <p class="hidden font-base font-normal text-lg pt-2 text-black-gs ">Respuesta 1</p>
        </div>
        <div class="flex flex-col items-center justify-around bg-white-true mt-3 py-2 border border-y-secondary z-10">
            <button class="flex text-red-soft font-semibold question "><span class="text-lg my-auto block">This is a question number3?</span>
                <img class="flex" width="24px" src="<?= IMAGE ?>Home/arrow-faq.PNG" alt="">
            </button>
            <p class="hidden font-base font-normal text-lg pt-2 text-black-gs ">Respuesta 1</p>
        </div>
        <div class="flex flex-col items-center justify-around bg-white-true mt-3 py-2 border border-y-secondary z-10">
            <button class="flex text-red-soft font-semibold question "><span class="text-lg my-auto block">This is a question number4?</span>
                <img class="flex" width="24px" src="<?= IMAGE ?>Home/arrow-faq.PNG" alt="">
            </button>
            <p class="hidden font-base font-normal text-lg pt-2 text-black-gs ">Respuesta 1</p>
        </div>
        <div class="flex flex-col items-center justify-around bg-white-true mt-3 py-2 border border-y-secondary z-20">
            <button class="flex text-red-soft font-semibold question"><span class="text-lg my-auto block">This is a question number5?</span>
                <img class="flex" width="24px" src="<?= IMAGE ?>Home/arrow-faq.PNG" alt="">
            </button>
            <p class="hidden font-base font-normal text-lg pt-2 text-black-gs ">Respuesta 1</p>
        </div>
        <script>
            const questions = document.querySelectorAll('.question');
            questions.forEach((question) => {
                question.addEventListener('click', (event) => {
                    question.nextElementSibling.classList.toggle('hidden');
                });
            });
        </script>
    </div>
    <picture class="absolute bottom-0">
        <img class="w-full" src="<?= IMAGE . "fondo-faq.png" ?>" alt="">
    </picture>
</section>