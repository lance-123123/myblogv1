$(function () {
    $("#prod_nav ul").tabs("#panes > div", {
        effect: 'fade',
        fadeOutSpeed: 400
    });
});

$(document).ready(function () {
    $(".pane-list li").click(function () {
        window.location = $(this).find("a").attr("href");
        return false;
    });
});

$(".button").click(function(){
	var id= $(this).attr("data");
	 $.ajax({
        type: 'POST',
        url: $("#plug_number").attr("value"),
        data: {
            'id': id
        }
    });
});
