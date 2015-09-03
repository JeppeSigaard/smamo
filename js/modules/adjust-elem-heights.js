var adjustElemHeights = function(){
    
    $('.hero, .sectioned-header, .section-slider, .section-single_image').each(function(){
    
    
    
    
        // If not mobile, set hero height to full height
        if(!is_mobile() && $(window).width() > 768){

            $(this).height($(window).height() - 24);
        }

        // Else do full height minus 50 and no resize jabber
        else{
             $(this).height($(window).height() - 84);
        }
        
    });

}

$(function(){
    
    adjustElemHeights();
    
    $(window).resize(function(){
    
        adjustElemHeights();   
    
    });

});