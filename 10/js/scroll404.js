var header = document.getElementById("header");
var homeLink = document.getElementById("HomeLink");


function ScrollFnts() {
	var scrollTop = document.documentElement.scrollTop;

	if (70 < scrollTop) {
		header.classList.add("menu-down");
		homeLink.classList.add("link-active");
	} else {
		header.classList.remove("menu-down");
		homeLink.classList.remove("link-active");
	}	
}

window.addEventListener('scroll', ScrollFnts);
