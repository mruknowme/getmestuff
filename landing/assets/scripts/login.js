function selectForm(formName, text) {
    var i, x;
    x = document.getElementsByClassName("pay");

    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }

    document.getElementById("menutitle").innerHTML = text;
    document.getElementById(formName).style.display = "block";
}