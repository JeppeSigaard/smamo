$(function(){

    var breakPoint = parseInt($('.header').css('top'));
    
    $(window).resize(function(){
        breakPoint = parseInt($('.header').css('top'));
    });
    
    $(window).scroll(function(){
        
        if($(window).scrollTop() > breakPoint){
            
            
        
            $('.header').addClass('fixed');
            
        }
        
        else{
            
            $('.header').removeClass('fixed');
        
        }
    
    });
    
});