var adjustElemHeights = function(){
    
    $('.hero, .sectioned-header, .section-slider, .section-single_image').each(function(){
    
    
    
    
        // If not mobile, set hero height to full height
        if(!is_mobile()){

            $(this).height($(window).height());
        }

        // Else do full height minus 50 and no resize jabber
        else{
             $(this).height($(window).height() - 50);
        }
        
    });

}

$(function(){
    
    adjustElemHeights();
    
    $(window).resize(function(){
    
        adjustElemHeights();   
    
    });

});