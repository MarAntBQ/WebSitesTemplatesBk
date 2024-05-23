/*var about = document.getElementById("about");
var aboutLink = document.getElementById("AboutLink");*/
var header = document.getElementsByTagName("HEADER")[0];

function ScrollFnts() {
    var scrollTop = document.documentElement.scrollTop;
    if (70 < scrollTop) {
		header.classList.add("menu-down");
	} else {
		header.classList.remove("menu-down");
	}
   /* var aboutTop = about.offsetTop;
    var aboutFinal = aboutTop - 60;
 
    if (aboutFinal < scrollTop) {
        setTimeout(function () {
            aboutLink.classList.add("link-active");
        }, 200);

    } else {
        setTimeout(function () {
            aboutLink.classList.remove("link-active");
        }, 200);
    } */   
}

window.addEventListener('scroll', ScrollFnts);
