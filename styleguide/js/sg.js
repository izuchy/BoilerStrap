$(document).ready(function () {
    $(".sg-source").hide();
    $(".sg-btn--source").click(function () {
        $(this).closest(".sg-markup").find(".sg-source").toggle();
    });
    prettyPrint();
});

window.onload = function(){
    if(typeof Clipboard === undefined)return;
    var clipboard = new Clipboard('.sg-btn--select');
};
