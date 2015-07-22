var parallaxHero = function(){ 
    
    // Only parallax when $('.hero') is present and in sight
    if($('.hero').length && $(window).scrollTop() < $('.hero').height() + $('.hero').offset().top){
        
        
        // Define paralaxed element as false
        var plxCont = false;
        
        // Is it part of a slideshow?
        if ($('.hero-banner.plx.is-selected').length){
            plxCont = $('.hero-banner.plx.is-selected');
        }
        
        // Or alone?
        else if($('.hero-banner.plx').length){
            plxCont = $('.hero-banner.plx');
        }

        // if either or, run plx
        if(plxCont){

            // Foreach layer
            plxCont.find('.plx-layer').each(function(i){

                // Define translate degree
                var translate = Math.floor( $(window).scrollTop() *  ((2 + i) / 5));

                // And apply css
                $(this).css({
                    'transform' : 'translateY('+ translate +'px) translateZ(0)',
                    '-moz-transform' : 'translateY('+ translate +'px) translateZ(0)',
                    '-ms-transform' : 'translateY('+ translate +'px) translateZ(0)',
                    '-webkit-transform' : 'translateY('+ translate +'px) translateZ(0)',
                    '-o-transform' : 'translateY('+ translate +'px) translateZ(0)',
                });
            });
        }
    }
};

// When ready
$(function(){
    
    if($('.hero').length){
        
        // Define breakPointHero
        var breakPointHero; 
        
        // On scroll
        $(window).scroll(function(){
            
            // If is slideshow
            if($('.hero .hero-banner').length > 1){
                
                // Show and hide prev-next-buttons
                breakPointHero = $('.hero .prev-next-right').offset().top - 100;
                if($(window).scrollTop() > breakPointHero){
                    $('.hero .prev-next-right').addClass('hide');
                }

                else{
                    $('.hero .prev-next-right').removeClass('hide');
                }
            }
            
            // Do plx from above
            parallaxHero();
            
        });

        
        // If is slideshow
        if($('.hero .hero-banner').length > 1){
            
            // Make slideshow
            var $herobanner = $('.hero .inner').flickity({
                cellSelector: '.hero-banner',
                prevNextButtons: false,
                pageDots: true,
                wrapAround: true,
                setGallerySize: false,

            });
       
            // Attach handlers to prev-next-buttons
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
        }
        
        // If not mobile, set hero height to full height
        if(!is_mobile()){
            
            $('.hero').height($(window).height());
            
            // & reapply on resize
            $(window).resize(function(){
                $('.hero').height($(window).height());

            });
        }
        
        // Else do full height minus 50 and no resize jabber
        else{
             $('.hero').height($(window).height() - 50);
        }
    }
});