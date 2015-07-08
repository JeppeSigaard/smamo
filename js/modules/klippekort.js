$(function(){
    
    $('.klippekort').on({
        'click': function(e){
            
            var t = $(e.target),
            task = t.parents('.task');
            
            
            if(t.is('.task-header') || t.is('.task-header *')){
            
                if(!task.hasClass('open')){

                    $('.task').removeClass('open');
                    task.addClass('open');
                }

                else{
                    task.removeClass('open');
                }
            }
        },
    });
    
    
});