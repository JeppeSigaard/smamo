$(function(){if($('.fancy-sidebars').length){

    var lastScrollTop = 0,
        fancyScroll = $('.fancy-asides'),
        fancyAside = fancyScroll.children('.aside-right');
    
    $(window).on('scroll', function () {
        
        
        var st = $(this).scrollTop(),
            diff = st - lastScrollTop,
            scrollStop = $(this).innerHeight() + $(this).scrollTop(),
            fancyHeight = $('.fancy-sidebars').offset().top + $('.fancy-sidebars').innerHeight() + 6.5,
            fancyScrollAmount = fancyScroll.scrollTop() + diff,
            fancyAsideAmount = fancyAside.scrollTop() + diff;
        
        fancyAside.scrollTop(fancyAsideAmount);
        fancyScroll.scrollTop(fancyScrollAmount);
        
        if (st > lastScrollTop){
            // downscroll code
            if(scrollStop > fancyHeight ){
                fancyScroll.addClass('stop');
                
                if($(this).width() > 1160){
                    fancyAside.addClass('stop');
                }
            }
        } else {
            // upscroll code
             if(scrollStop < fancyHeight ){
                $('.fancy-asides.stop').removeClass('stop').scrollTop($(this).scrollTop());
                 
                if($(this).width() > 1160 && fancyAside.hasClass('stop')){
                    fancyAside.removeClass('stop').scrollTop($(this).scrollTop());
                }
            }
        }
        
        lastScrollTop = st;
    });

    

}});