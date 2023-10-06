/* sticky navbar */
window.onscroll = function () {};

var navbar = document.getElementsByClassName("sticky");
var sticky = navbar.offsetTop;

function functionSticky() {
    if (window.scrollY >= sticky) {
        sticky.classList.add("sticky");
    } else {
        sticky.classList.remove("sticky");
    }
};

/* preview image */
var loadFile = function(event){
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function(){
        URL.revokeObjectURL(output.src)
    }
};