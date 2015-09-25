$(function(){
    
    /*if($('body').hasClass('home')){*/

        var breakPoint = 12;//parseInt($('.header').css('top'));

        
            $(window).scroll(function(){

                if($(window).scrollTop() > breakPoint){

                    $('.header').addClass('fixed');

                }

                else{

                    $('.header').removeClass('fixed');

                }

            });
    /*}*/
    
});