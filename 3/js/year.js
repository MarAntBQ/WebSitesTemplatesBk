window.onload  = function year() {
    var date = new Date();
    var mainyear = date.getFullYear();
    document.getElementById("year").innerHTML = mainyear;
    var rest = mainyear - 2008;
    document.getElementById("years").innerHTML = rest;
};