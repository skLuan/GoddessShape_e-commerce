import { throttle } from "lodash";
// window.addEventListener("resize", function () {
//     let innerHeight = window.innerHeight;
//     let isNavbarVisible = window.innerHeight < window.outerHeight;
//     // aquí puedes aplicar la regla css para posicionar la barra de navegación
//     let tabBar = document.getElementById('tab_bar');
//     console.log(innerHeight);
//     console.log('outter ->');
//     console.log(window.outerHeight);
//     if(isNavbarVisible) {
//         tabBar.classList.remove("tab_bar_navbar");
//     } else {
//         tabBar.classList.add("tab_bar_navbar");
//     }
// });

function checkNavbar() {
  let tabBar = document.getElementById("tab_bar");
  let isNavbarVisible = window.innerHeight < window.outerHeight;
  // aquí puedes aplicar la regla css para posicionar la barra de navegación
  console.log(window.innerHeight);
  //   console.log('outter ->');
  //   console.log(window.outerHeight);
  if (isNavbarVisible) {
    tabBar.classList.remove("tab_bar_navbar");
  } else {
    tabBar.classList.add("tab_bar_navbar");
  }
  requestAnimationFrame(checkNavbar);
}
window.addEventListener("scroll", throttle(checkNavbar, 100));
