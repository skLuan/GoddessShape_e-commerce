
let isNavbarVisible = window.innerHeight < window.outerHeight;

let tabBar = document.getElementById('tab_bar');
if(isNavbarVisible) {
    tabBar.classList.remove("tab_bar_navbar");
} else {
    tabBar.classList.add("tab_bar_navbar");
}