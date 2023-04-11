try {
    const buttons = document.querySelectorAll(".button-filter");
    const productContainer = document.querySelectorAll(".containerProduct");
    function selecContainer(cat) {
      const containerSelect = Array.from(productContainer).find((container) => {
        return container.id.includes("P" + cat);
      });
      return containerSelect;
    }

    
    // Agregar un controlador de eventos para cada botón
    buttons.forEach((button, i) => {
      button.addEventListener("click", () => {
        // Remover la clase "active" de todos los botones
        buttons.forEach((button) => {
          button.parentNode.classList.remove("active-products-buton");
        });

        cat = button.getAttribute("data-category");
        containerSelect = selecContainer(cat);

        productContainer.forEach((container) => {
          container.classList.replace("flex", "hidden");
          container.classList.replace("first:flex", "hidden");
        });
        containerSelect.classList.replace("hidden", "flex");
        // Agregar la clase "active" al botón que se hizo clic
        button.parentNode.classList.add("active-products-buton");
      });
    });
} catch (error) {
    
}