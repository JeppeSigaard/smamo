$(function(){
    
    
    if($('.hero').length){
    
        $(window).scroll(function(){
            var breakPointHero = $('.hero .prev-next-right').offset().top - 100;

            if($(window).scrollTop() > breakPointHero){

                $('.hero .prev-next-right').addClass('hide');

            }

            else{

                $('.hero .prev-next-right').removeClass('hide');

            }
        });

        var $herobanner = $('.hero .inner').flickity({
            cellSelector: '.hero-banner',
            prevNextButtons: false,
            pageDots: true,
            wrapAround: true,
            setGallerySize: false,

        });

        $('.hero .prev-next-right').on('click',function(e){

            var target = $(e.target);

            if(target.is('a.button-dir')){
                e.preventDefault();

                if(target.hasClass('right')){
                    $herobanner.flickity('next');
                }
                else{
                     $herobanner.flickity('previous');
                }

            }


        });
    }
});