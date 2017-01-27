$(document).click(function () {
    $("#paymentmethod, #date, #year").hide();
});

$("#menutitle, #datetitle, #yeartitle").click(function (e) {
    e.stopPropagation();
});
