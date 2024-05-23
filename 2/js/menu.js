function menuaparecer() {
    var menu = document.getElementById("mainmenu");
    menu.classList.toggle("menuactivo");
}

/*function analizarmenu() {
    var menu = document.getElementById("mainmenu");
    if (menu.classList == "menuactivo") {
        menu.classList.remove("menuactivo");
    }
}*/


function menu_position() {
    var urlString, urlArray, pageHREF, menu, i, currentURL;
            urlString = document.location.href;
            urlArray = urlString.split('/');
            pageHREF = urlArray[urlArray.length - 1];

            if (pageHREF !== "") {
                menu = document.querySelectorAll('#mainmenu li a');
                for (i = 0; i < menu.length; i++) {
                    currentURL = (menu[i].getAttribute('href'));
                    menu[i].className = '';
                    if (currentURL === pageHREF) {
                        menu[i].className = 'pagina-actual';
                    }
                }
            }
}