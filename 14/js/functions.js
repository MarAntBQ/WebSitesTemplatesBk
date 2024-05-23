function menudisplayer() {
    //Until here the code it's working for example it opens and close, but in this menu for example it doesn't start after the header, It'll show you;
    var menubtn = document.getElementsByTagName("UL")[0];
    if (menubtn.classList == ""  || menubtn.classList == "desactivate-menu") {
        menubtn.classList.remove("desactivate-menu");
        menubtn.classList.add("active-menu");
    } else {
        menubtn.classList.add("desactivate-menu");
        setTimeout(function(){menubtn.classList.remove("active-menu"); menubtn.classList.remove("desactivate-menu");}, 450);
    }
}

function destroymenu() {
    var menubtn = document.getElementsByTagName("UL")[0];
    if (menubtn.classList == ""  || menubtn.classList == "desactivate-menu") {
        menubtn.classList.remove("desactivate-menu");
        menubtn.classList.add("active-menu");
    } else {
        menubtn.classList.add("desactivate-menu");
        setTimeout(function(){menubtn.classList.remove("active-menu"); menubtn.classList.remove("desactivate-menu");}, 450);
    }
}