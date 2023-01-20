
let isNavbarVisible = window.innerHeight < window.outerHeight;

let tabBar = document.getElementById('tab_bar');
if(isNavbarVisible) {
    tabBar.classList.replace('bottom-[10%]', 'bottom-[2%]')
} else {
    tabBar.classList.replace('bottom-[2%]', 'bottom-[10%]')
}