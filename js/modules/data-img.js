var loadDataImages = function(){
    
    $('[data-bg]').each(function(e){
        
            var $img = $(this),
                $imgSrc = $(this).attr('data-bg'),
                $imgPlaceholder = new Image();
            
            $imgPlaceholder.src = $imgSrc;
            $imgPlaceholder.onload = function(){
                 $img.removeAttr('data-bg').css({
                    backgroundImage: 'url('+$imgSrc+')',
                });   
            };
            
            
        });
        
        $('img[data-src]').each(function(e){
            
            var $img = $(this),
                $imgSrc = $(this).attr('data-src'),
                $imgPlaceholder = new Image();
            
            $imgPlaceholder.src = $imgSrc;
            $imgPlaceholder.onload = function(){
                $img.removeAttr('data-src').attr('src',$imgSrc);   
            };
        });


}

$(function(){
    $(window).on('load',function(){loadDataImages();});
});