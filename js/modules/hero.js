$(function(){

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

});