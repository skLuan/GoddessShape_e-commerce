// import { throttle } from "lodash";

window.addEventListener("resize", function () {
  let innerHeight = window.innerHeight;
  let isNavbarVisible = window.innerHeight < window.outerHeight;
  // aquí puedes aplicar la regla css para posicionar la barra de navegación
  let tabBar = document.getElementById("tab_bar");
  if (isNavbarVisible) {
    tabBar.classList.remove("tab_bar_navbar");
  } else {
    tabBar.classList.add("tab_bar_navbar");
  }
});

// ----------------------------------------------- Este code maneja el sidebar
let btn = document.querySelector("#sideBar");
let icon = btn.querySelector(".bmenu");
let hdn = btn.querySelector(".toogle");
let menu = document.getElementById("sidemenu");

btn.onclick = function () {
  if (icon.classList.contains("hidden")) {
    icon.classList.remove("hidden");
    hdn.classList.add("hidden");
    menu.classList.remove("hidden");
  } else {
    icon.classList.add("hidden");
    hdn.classList.remove("hidden");
    menu.classList.add("hidden");
  }
};

let count = 0;
let computedStyle = window.getComputedStyle(menu);
document.addEventListener("click", function (e) {
  if (computedStyle.display !== "none") {
    count++;
    console.log(count);
    if (count > 1 && e.target != menu && !menu.contains(e.target)) {
      icon.classList.add("hidden");
      hdn.classList.remove("hidden");
      menu.classList.add("hidden");
      count = 0;
    } else {
      console.log("click adentro");
    }
  }
});
const searchButtons = document.querySelectorAll(".search-btn");
const searchBar = document.getElementById("search-bar");

searchButtons.forEach(function (searchButton) {
  searchButton.addEventListener("click", function () {
    searchBar.classList.toggle("hidden");
  });
});


window.addEventListener("load", (e) => {
  setInterval(() => {
    var aviso = document.getElementById("aviso");
    if (aviso.classList.contains("opacity-0")) {
      aviso.classList.replace("opacity-0", "opacity-100");
    } else {
      aviso.classList.replace("opacity-100", "opacity-0");
    }
  }, 6000);
});

function hoverEffectColor() {
  colors = document.querySelectorAll(".color-card");
  colors.forEach((color) => {
    // console.log(textColor);
    color.addEventListener("mouseover", (e) => {
      textColor = color.firstElementChild;
      console.log(textColor);
      textColor.classList.replace("hidden", "flex");
    });
    color.addEventListener("mouseleave", (e) => {
      textColor = color.firstElementChild;
      textColor.classList.replace("flex", "hidden");
    });
  });
}
try {
  hoverEffectColor();
} catch (error) {}
