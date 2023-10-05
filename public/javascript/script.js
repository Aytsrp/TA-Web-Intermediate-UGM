/* sticky navbar */
window.onscroll = function() {};

var navbar = document.getElementsByClassName("sticky");
var sticky = navbar.offsetTop;

function functionSticky() {
    if (window.scrollY >= sticky) {
        sticky.classList.add("sticky");
    } else {
        sticky.classList.remove("sticky");
    }
}

