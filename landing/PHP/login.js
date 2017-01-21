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

function selectForm(formName) {
    var i, x;
    x = document.getElementsByClassName("pay");
    
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    
    document.getElementById(formName).style.display = "block";
}

if (window.location.hash) {
    document.getElementById('login').style.display = "block";
    document.getElementById('signup').style.display = "none";
}