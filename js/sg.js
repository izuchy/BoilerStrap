$(document).ready(function () {
    $(".sg-source").hide();
    $(".sg-btn--source").click(function () {
        $(this).closest(".sg-markup").find(".sg-source").toggle();
    });
    prettyPrint();
});

window.onload = function(){
    try{
        var clipboard = new Clipboard('.sg-btn--select');
    }catch(e){
        console.log(e);
    }
};
