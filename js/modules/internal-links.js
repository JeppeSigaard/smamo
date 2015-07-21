$('body').on('click',function(e){

    var t = $(e.target);
    
    if(t.is('a.internal') || t.is ('.internal a')){
        
        var h = t.attr('href').substr(t.attr('href').indexOf("#"));
        
        if(h == '#top'){
            
            $('html,body').animate({scrollTop: 0},500);        
            window.location.hash = '';
            
        }
        
        else if($(h).length){    
            e.preventDefault();
            
            $('html,body').animate({scrollTop: $(h).offset().top - 50},500);        
            window.location.hash = h;
        }
    }
});

$(function(){
    if(window.location.hash){
        
        var h = window.location.hash;
        if($(h).length){
           $('html,body').animate({scrollTop: $(h).offset().top - 50},50); 
        }
        
    }
});