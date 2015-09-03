var adjustElemHeights = function(){
    $('.sectioned-header, .section-slider, .section-single_image').each(function(){
        $(this).height($(window).height() - 24);
    });
}
$(function(){
    adjustElemHeights();
    if(!is_mobile()){
        $(window).resize(function(){
            adjustElemHeights();   
        });
    }
});