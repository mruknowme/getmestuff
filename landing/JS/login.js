function openTab(evt, tabName) {
    var i;
    var x = document.getElementsByClassName("formcontent");
    var tablinks = document.getElementsByClassName("tab");

    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

function selectForm(formName, text) {
    var i, x;
    x = document.getElementsByClassName("pay");

    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }

    document.getElementById("menutitle").innerHTML = text;
    document.getElementById(formName).style.display = "block";
    document.getElementById("paymentmethod").style.display = "none";
}

function openDropDown() {
    var x = document.getElementById("paymentmethod");
    if (x.style.display == "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

$(document).click(function () {
    $("#paymentmethod").css("display", "none");
});