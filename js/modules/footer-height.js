var adjustFooterHeight = function(){
    
    var footer = $('#footer'),
        inner = footer.children('.inner'),
        height = inner.innerHeight();
    
    footer.css({height:height});
    
}

$(function(){
    
    adjustFooterHeight();
    $(window).on({
        resize : function(){
            adjustFooterHeight();
        }
    });

});