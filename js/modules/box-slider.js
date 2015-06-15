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
    
        
        $('.slide-boxes nav a').on('click',function(e){
            e.preventDefault();
            
            var target = $(e.target),
                slideContainer = target.parents('.slide-boxes .inner'),
                slider = slideContainer.children('.box-slider');;
            
                if(target.hasClass('next')){
                    slider.flickity('next');
                }
                else{
                    slider.flickity('previous');
                }
                target.blur();
        });
        
    }

    
});