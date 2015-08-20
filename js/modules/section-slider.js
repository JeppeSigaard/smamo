var SectionSliderInit = function(){

    if($('.section-slider').length){
        
        $('.section-slider').each(function(){
            
            var slider = $(this).children('.inner');
            
            
            if(!slider.hasClass('flickity-enabled')){
            
                slider.flickity({
                    cellSelector: '.slide',
                    prevNextButtons: false,
                    pageDots: true,
                    wrapAround: true,
                    setGallerySize: false,
                    cellAlign: 'left'
                });
            }
            
            // Attach handlers to prev-next-buttons
            slider.on('click',function(e){

                var target = $(e.target);

                if(target.is('a.button-dir')){
                    e.preventDefault();
                    target.blur();

                    if(target.hasClass('right')){
                        slider.flickity('next');
                    }
                    else{
                         slider.flickity('previous');
                    }
                }
            });
        });
    
    }
    
}

$(function(){
    
    SectionSliderInit();
    
});