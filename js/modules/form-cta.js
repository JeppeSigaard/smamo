$(function(){

    $('.form-cta').on('click',function(e){
    
        var target = $(e.target);
        
        if (target.is('a.button-dir') && !target.hasClass('step-2')){
            e.preventDefault();
            target.parents('form').children('.hidden').slideDown('50');
            target.removeClass('down').addClass('right step-2');
        }
        
    });
    
});