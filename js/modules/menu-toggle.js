$(function(){
    
    // Tryk på hamburger
        $('.hamburger').on('click',function(e){
            e.preventDefault();
            $('body').toggleClass('menu-out');
        });

    $('.top-nav').on('click',function(e){
        var t = $(e.target),
            nav = $(this);
    
    });
    
});