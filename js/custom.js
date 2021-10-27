$(document).ready(function () {
$(function () {
    $("#playlist li").on("click", function () {
        $("#videoarea").attr({
            src: $(this).attr("movieurl"),
        });
    });
    $("#videoarea").attr({
            src: $("#playlist li").eq(0).attr("movieurl"),
    });
    $("#playlist li").on("click", function () {
        $("#tutdescription").html(
            attr("moviedesc"),
        );
    });
    $("#tutdescription").html(
        $("#playlist li").eq(0).attr("moviedesc"),
    );
});
});