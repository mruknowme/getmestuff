var tablinks = document.getElementsByClassName("tab");
var x = document.getElementsByClassName("formcontent");

function openTab(evt, tabName) {
    var i;

    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}