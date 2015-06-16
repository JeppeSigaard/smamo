$(function(){

    $('.top-nav').on('click',function(e){
        e.preventDefault();
        var t = $(e.target),
            nav = $(this);
        
        // Tryk på hamburger
        if(t.is('.hamburger')){
            $('body').toggleClass('menu-out');
        }
    
    });
    
});