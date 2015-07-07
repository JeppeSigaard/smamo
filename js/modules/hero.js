var parallaxHero = function(){ if ($('.hero-banner.plx.is-selected').length){
    
    
    var plxCont = $('.hero-banner.plx.is-selected');
    plxCont.find('.plx-layer').each(function(i){
        
        var translate = Math.floor( $(window).scrollTop() *  ((2 + i) / 5));
        
        $(this).css({
            'transform' : 'translateY('+ translate +'px) translateZ(0)',
            '-moz-transform' : 'translateY('+ translate +'px) translateZ(0)',
            '-ms-transform' : 'translateY('+ translate +'px) translateZ(0)',
            '-webkit-transform' : 'translateY('+ translate +'px) translateZ(0)',
            '-o-transform' : 'translateY('+ translate +'px) translateZ(0)',
        });
    
    });
}};

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
            
            parallaxHero();
            
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
                target.blur();

                if(target.hasClass('right')){
                    $herobanner.flickity('next');
                }
                else{
                     $herobanner.flickity('previous');
                }

            }


        });
        
        $('.hero').height($(window).height());
        $(window).resize(function(){
            $('.hero').height($(window).height());
        });
    }
});