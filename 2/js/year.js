window.onload  = function year() {
    var date = new Date();
    document.getElementById("year").innerHTML = date.getFullYear();
};