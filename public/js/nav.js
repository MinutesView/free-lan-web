$(".one").removeClass("active");


$(function() {
    $(".button_active").click(function() {

        $(".two").addClass("active");

        return false;
    });
});

$(function() {
    $(".button_inactive").click(function() {

        $(".two").removeClass("active");

        return false;
    });
});