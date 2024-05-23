var about = document.getElementById("about");
var menubtn = document.getElementById("menubtn");

function ScrollFnts() {
    var scrollTop = document.documentElement.scrollTop;
    var aboutTop = about.offsetTop;
    var aboutFinal = aboutTop - 150;
    //var aboutFinal = aboutTop;
   
    if (aboutFinal < scrollTop) {
       menubtn.classList.add("menu-btn-scroll");
		

    } else {
       menubtn.classList.remove("menu-btn-scroll");
		
    }
    
    
}

window.addEventListener('scroll', ScrollFnts);