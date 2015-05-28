var timer = 6000;

function eachText(){
    
    $.fn.writeText = function(content) {
        var contentArray = content.split(""),
            current = 0,
            elem = this;
        setInterval(function() {
            if(current < contentArray.length) {
                elem.text(elem.text() + contentArray[current++]);
            }
        }, 70);
    };

    $('.intro-text span').each(function(i){
        var span = $(this),
            timeout = timer + (i * timer);
        
        setTimeout(function(){
            
            text = span.text();
            
            span.addClass('active').empty().writeText(text);
            
            setTimeout(function(){
                
                span.removeClass('active');
                
            },timer - 500);
            
            
        },timeout);
    
    });
    
}

$(function(){
    
    var num = $('.intro-text span').length;
    
    eachText();
    
    setInterval(function(){
        eachText();
    },timer * 1.1 * num);
    
    
});