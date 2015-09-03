$(function(){
    
    /*if($('body').hasClass('home')){*/

        var breakPoint = 12;//parseInt($('.header').css('top'));

        if(!is_mobile()){
        
            $(window).scroll(function(){

                if($(window).scrollTop() > breakPoint){

                    $('.header').addClass('fixed');

                }

                else{

                    $('.header').removeClass('fixed');

                }

            });
        }
    /*}*/
    
});