const baseNavbar = document.getElementById("base-navbar");

window.addEventListener("scroll", function () {
    if (window.pageYOffset > 200) {
        baseNavbar.classList.add("fixed-top");
    } else if (window.pageYOffset < 200) {
        baseNavbar.classList.remove("fixed-top");
    }
});
