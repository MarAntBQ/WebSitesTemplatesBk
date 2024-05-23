var header = document.getElementById("header");
var homeLink = document.getElementById("HomeLink");
var about = document.getElementById("about");
var aboutLink = document.getElementById("AboutLink");
var services = document.getElementById("services");
var servicesLink = document.getElementById("ServicesLink");
var contact = document.getElementById("contact");
var contactLink = document.getElementById("ContactLink");


function ScrollFnts() {
	var scrollTop = document.documentElement.scrollTop;
	var aboutTop = about.offsetTop;
	var aboutFinal = aboutTop - 60;
	var servicesTop = services.offsetTop;
	var servicesFinal = servicesTop - 60;
	var contactTop = contact.offsetTop;
	var contactFinal = contactTop - 60;

	if (70 < scrollTop) {
		header.classList.add("menu-down");
		homeLink.classList.add("link-active");
	} else {
		header.classList.remove("menu-down");
		homeLink.classList.remove("link-active");
	}

	if (aboutFinal < scrollTop) {
		homeLink.classList.remove("link-active");
		aboutLink.classList.add("link-active");

	} else {
		aboutLink.classList.remove("link-active");
	}

	if (servicesFinal < scrollTop) {
		homeLink.classList.remove("link-active");
		aboutLink.classList.remove("link-active");
		servicesLink.classList.add("link-active");

	} else {
		servicesLink.classList.remove("link-active");
	}
	
	if (contactFinal < scrollTop) {
		homeLink.classList.remove("link-active");
		aboutLink.classList.remove("link-active");
		servicesLink.classList.remove("link-active");
		contactLink.classList.add("link-active");

	} else {
		contactLink.classList.remove("link-active");
	}
}

window.addEventListener('scroll', ScrollFnts);
