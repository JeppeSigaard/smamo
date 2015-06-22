$(function(){

    if($('.slide-boxes').length){
        
        $('.box-slider').each(function(){
            $(this).flickity({
                cellSelector: 'a',
                prevNextButtons: false,
                pageDots: false,
                wrapAround: true,
                setGallerySize: false,
                cellAlign: 'left'
            });
        });
    
        
        $('.slide-boxes').on('click',function(e){
            
            
            var target = $(e.target),
                slideContainer = target.parents('.slide-boxes .inner'),
                slider = slideContainer.children('.box-slider');;
            
            if(target.is('.slide-boxes nav a')){
                e.preventDefault();
                if(target.hasClass('next')){
                    slider.flickity('next');
                }
                else{
                    slider.flickity('previous');
                }
                target.blur();
            }
            
        });    
        
        $('.box-slider a').on('touchstart',function(e){
            var t = $(e.target);
            if (!$(this).hasClass('go')){
                
                e.preventDefault();
                
                $('.box-slider a').removeClass('go');
                $(this).addClass('go');
            }
        });
    }

    
});