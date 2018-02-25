var navIcon = document.getElementById("nav-icon");
var navMenu = document.getElementById("header-nav-menu");

navIcon.addEventListener("click", function() {
    this.classList.toggle("open");
    navMenu.classList.toggle("visible");
})

navMenu.addEventListener("click", function() {
    this.classList.toggle("open");
    navMenu.classList.toggle("visible");
})
