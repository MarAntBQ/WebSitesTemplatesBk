function menudisplayer() {
	//window.alert("Display Message");
	var menubtn = document.getElementById("ul");
	if (menubtn.classList == "" || menubtn.classList == "desactivate-menu") {
		menubtn.classList.remove("desactivate-menu");
		menubtn.classList.add("active-menu");
	} else {
		menubtn.classList.add("desactivate-menu");
		setTimeout(function () {
			menubtn.classList.remove("active-menu");
			menubtn.classList.remove("desactivate-menu");
		}, 500);
	}
}

function destroymenu() {
	//window.alert("Display Message");
	var menubtn = document.getElementById("ul");
	if (menubtn.classList == "" || menubtn.classList == "desactivate-menu") {
		menubtn.classList.remove("desactivate-menu");
		menubtn.classList.add("active-menu");
	} else {
		menubtn.classList.add("desactivate-menu");
		setTimeout(function () {
			menubtn.classList.remove("active-menu");
			menubtn.classList.remove("desactivate-menu");
		}, 500);
	}
}

function destroymenu2() {
	//window.alert("Display Message");
	var menubtn = document.getElementById("ulv");
	if (menubtn.classList == "") {

	} else {
		menubtn.classList.add("desactivate-menu");
		setTimeout(function () {
			menubtn.classList.remove("active-menu");
			menubtn.classList.remove("desactivate-menu");
		}, 500);
	}

}

function activatepopout() {
	var popup = document.getElementById("pop-up");
	if (popup.classList == "" || popup.classList == "pop-out-desactive") {
		popup.classList.remove("pop-out-desactive");
		popup.classList.add("pop-out-active");
	} else {
		popup.classList.add("pop-out-desactive");
		setTimeout(function () {
			popup.classList.remove("pop-out-active");
			popup.classList.remove("pop-out-desactive");
		}, 400);
	}
}

/*
function activatepopout2() {
	var popup = document.getElementById("pop-up");
	if (popup.classList == "") {
		popup.classList.add("pop-out-active");
	}
}
*/
/*function destroypopout() {
	var popup = document.getElementById("pop-up");
	if (popup.classList == "pop-out-active") {
		setTimeout(function () {
			popup.classList.add("pop-out-desactive");
			popup.classList.remove("pop-out-active");
			popup.classList.remove("pop-out-desactive");
		}, 2000);
	}
}*/


//Get the Current Link
function getCurrentLink() {
	var urlString, urlArray, pageHREF, menu, i, currentURL;
	urlString = document.location.href;
	urlArray = urlString.split('/');
	pageHREF = urlArray[urlArray.length - 1];

	if (pageHREF !== "") {
		menu = document.querySelectorAll('#ul li a');
		for (i = 0; i < menu.length; i++) {
			currentURL = (menu[i].getAttribute('href'));
			menu[i].className = '';
			if (currentURL === pageHREF) {
				menu[i].className = 'link-active';
			}
		}
	}
}
