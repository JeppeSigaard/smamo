$(function(){

    function setDataImgSrc(){
        
        //console.log('trigger');
        
        $('img').each(function(i){    

            var src = $(this).attr('src'),
                small = $(this).attr('data-src-small'),
                large = $(this).attr('data-src');
            
            if(!src){
                
                if ($(window).width() >= 640 ){
                    $(this).attr('src',large );
                }

                if ($(window).width() < 640){
                    $(this).attr('src', small);
                }
                
            }
            
            if ($(window).width() >= 640 && src === small){
                $(this).attr('src',large );
            }
            
            if ($(window).width() < 640 && src === large){
                $(this).attr('src', small);
            }
            
        });
    }
    
    setDataImgSrc();
    $(window).on('resize',function(){
        setDataImgSrc();
    });
    
});