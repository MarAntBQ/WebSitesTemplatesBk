var header = document.getElementById("header");
var fisebl = document.getElementById("first-section-block");
//first-section-block

function ScrollFnts() {
    //alert("Saludos");
    var scrollTop = document.documentElement.scrollTop;
    var fsbTop = fisebl.offsetTop;
    var fsb = fsbTop - 60;

    if (fsb < scrollTop) {
        header.classList.add("menu-down");
        
    } else {
        header.classList.remove("menu-down");
    }
}

window.addEventListener('scroll', ScrollFnts);
