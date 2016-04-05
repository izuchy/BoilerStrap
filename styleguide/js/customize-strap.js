$(function () {
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover();

    //展開処理の機能拡張
    var collapses = $('.collapse');
    collapses.each(function(index){
        var can_cancel_toggle = $(this).data('cancel-toggle');
        console.log(can_cancel_toggle);
        if(can_cancel_toggle){
            var cancel_collapse_target = $(this).data('cancel');
            var parent_collapse_target = $(this).data('parent');
            $(parent_collapse_target).on('click',function(){
                $(parent_collapse_target).fadeOut(100);
            });
            $(cancel_collapse_target).on('click',function(){
                if(parent_collapse_target){
                    $(parent_collapse_target).trigger('click');
                    $(parent_collapse_target).delay(200).fadeIn();
                }
            });
        }
    });
});