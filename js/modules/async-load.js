$(window).load(function(){

    $('.async-load').each(function(){
        
        var container = $(this),
            loadContent = container.attr('data-load');
        
        container.load(loadContent,function(){
            container.find('section').unwrap();
            loadDataImages();
            SlideBoxesInit();
        });
    
    });
    
    
});