$(function(){
    
    if($('body').hasClass('home')){

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

                $('body.menu-out').removeClass('menu-out');

            }

        });
        
    }
    
});