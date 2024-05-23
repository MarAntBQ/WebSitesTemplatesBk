var stats = document.getElementById("stats");
var operativeyears = document.getElementById("operativeyears");
var operativedays = document.getElementById("operativedays");
var ioyears = 0;
var iodays = 0;
var dateString = new Date();
var currentYear = parseInt(dateString.getFullYear());
var startYear = currentYear - 2017;
var startDays = startYear  * 360;
var restYear = startYear - 1;
var restDays = startDays - 1;

function ScrollFnts() {
    var scrollTop = document.documentElement.scrollTop;
    var statsTop = stats.offsetTop;
    var statsFinal = statsTop - 60;
    
    
    if (statsFinal < scrollTop) {
        function countOPERATIVEYEARS() {
            operativeyears.innerHTML = ioyears;
            if (ioyears <= restYear) {
                ioyears++;
                setTimeout(countOPERATIVEYEARS, 500);
            }
        }
        countOPERATIVEYEARS();
        
        function countOPERATIVEDAYS() {
            operativedays.innerHTML = iodays;
            if (iodays <= restDays) {
                iodays++;
                setTimeout(countOPERATIVEDAYS, 1);
            }
        }
        countOPERATIVEDAYS();

    }
    
}

window.addEventListener('scroll', ScrollFnts);