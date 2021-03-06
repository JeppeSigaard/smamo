// Load images into placeholders
// Use data-bg="" on any element to async load an image background
// Use data-src="" on images to async load an image src


var loadDataImages = function(){
    
    // For each background placeholder
    $('[data-bg]').each(function(e){
        
            // grab 'this', the data-bg attribute and make a new placeholder image object
            var $img = $(this),
                $imgSrc = $(this).attr('data-bg'),
                $imgPlaceholder = new Image();
            
            if($imgSrc !== ''){
                // render background into local storage by applying it to the placeholder
                $imgPlaceholder.src = $imgSrc;

                // When the placeholder is loaded
                $imgPlaceholder.onload = function(){

                    // Apply the source to 'this', hide 'this' and fade it in
                    $img.removeAttr('data-bg').css({
                        opacity:0,
                        backgroundImage: 'url('+$imgSrc+')',
                    }).animate({opacity:1},500);
                };
            }
            else{
                 $img.removeAttr('data-bg');
            }
        });
        
    
        // Basically same thing with images
        
        
        $('img[data-src]').each(function(e){
            
            var $img = $(this),
                $imgSrc = $(this).attr('data-src'),
                $imgPlaceholder = new Image();
            
            if($imgSrc !== ''){
            
                $imgPlaceholder.src = $imgSrc;
                $imgPlaceholder.onload = function(){
                    $img.css({opacity:0}).removeAttr('data-src').attr('src',$imgSrc).animate({opacity:1},500);
                };
            }
            
            else{
               $img.removeAttr('data-src');
            }
            
        });


}

// Run on load (and use in other scripts as needed)
$(window).on('load',function(){
    loadDataImages();
});