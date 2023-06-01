//Funcion que ejecuta el selector de color en single page product
function colorControl() {
  try {
    const btns = document.querySelectorAll(".label-btn");
    const theSelect = document.querySelector("#pa_color");

    function cleaning() {
      btns.forEach((btn) => {
        $btnClass = btn.classList;
        $btnClass.remove("border", "border-orange-400");
        $btnClass.add("opacity-10");
      });
    }

    btns.forEach((btn) => {
      btn.addEventListener("click", (e) => {
        e.preventDefault();
        cleaning();
        btn.classList.remove("opacity-10");
        btn.classList.add("border-2", "border-orange-400");
        theSelect.value = btn.value;
      });
    });

    console.log("sisaaaaaa");
    theSelect.addEventListener("change", () => {
      cleaning();
      btns.forEach((btn) => {
        const btnValue = btn.value;

        if (theSelect.value === "") {
            btn.classList.remove("opacity-10");
            return;
        }
        if (btnValue === theSelect.value) {
          btn.classList.remove("opacity-10");
          btn.classList.add("border-2", "border-orange-400");
        } else return;
      });
    });
  } catch (error) {}
}

colorControl();
