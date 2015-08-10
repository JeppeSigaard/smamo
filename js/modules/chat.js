var smamo_chat = {ready : true};

smamo_chat.init = function(){

    if(smamo_chat.container && smamo_chat.container.length){
    
    $(smamo_chat.container).on({
        
            keypress : function(e){
                var t = $(e.target);
                smamo_chat.keyPress(e,t);
            },
        
            keyup : function(e){
                var t = $(e.target);
                smamo_chat.keyUp(e,t);
            },
            
            click : function(e){
                var t = $(e.target);
                smamo_chat.click(e,t);

            }

        });
        
        var response = {
            content : 'Hej. Vi er SmartMonkey. Hvad hedder du?',
            action : 'make',
            data : 'name',
            placeholder : 'Skriv dit navn',    
        }
        
        smamo_chat.make('monkey',response, function(){
            setTimeout(function(){
                
                smamo_chat.make('user',response);
            
            },1000);
        });
        
    }
}

smamo_chat.make = function(type,response,callback){
    
    if(type === 'typing'){
        
        var $box = $('<div class="chat-entry monkey typing"></div>"'),
            $msg = $('<span></span>');
        
        $box.append($msg);
        smamo_chat.container.append($box);
        
    }
    
    if(type === 'monkey'){
        
        if(smamo_chat.container.find('.typing').length){
            smamo_chat.container.find('.chat-entry.monkey.typing span').html(response.content);
            smamo_chat.container.find('.typing').removeClass('typing');
        }
        else{
            var $box = $('<div class="chat-entry monkey typing"></div>"'),
                $msg = $('<span>'+response.content+'</span>');

            $box.append($msg);
            smamo_chat.container.append($box);

            setTimeout(function(){
                $box.removeClass('typing');
            },700);
        }
    }
    
    else if (type === 'user'){
        
        
        
        var placeholder = '';
        if(response.placeholder){
            placeholder = ' placeholder="'+response.placeholder+'"';
        }
        
        var fieldType = '';
        if(response.fieldType){
            fieldType = ' data-field-type="'+response.fieldType+'"';
        }
        
        var dataAttr = '';
        if(response.data){
            dataAttr = ' data-field="'+response.data+'"';
        }
        
        var $box = $('<div class="chat-entry user"></div>"'),
            $msg = $('<textarea rows="1"'+placeholder+dataAttr+fieldType+'></textarea>');
        
        $box.append($msg);
        smamo_chat.container.append($box);
        
        autosize($($msg));
        $msg.focus();
    }
    
    if (typeof callback == "function"){callback();}

};

smamo_chat.click = function(e,t){

};

smamo_chat.keyPress = function(e,t){

    if(t.is(smamo_chat.containerClass+' textarea') && e.keyCode === 13){
        e.preventDefault();
        
        var content = t.val(),
            field = t.attr('data-field');
        
        smamo_chat.send(field,content);
        t.replaceWith('<span>'+content+'</span>');
         
    }
    
}

smamo_chat.keyUp = function(e,t){

};

smamo_chat.send = function(data,value){
    
    setTimeout(function(){
    
         smamo_chat.make('typing');
    
        $.ajax({
            url : smamo_chat.sendUrl,
            type : 'POST',
            data : {
                'data' : data,
                'value' : value,
            },
            dataType : 'json',
            success : function(response){

                smamo_chat.receive(response);

            },
        });
    
    },500);
    
}

smamo_chat.receive = function(response){
    
   if(response.action && response.action === 'make'){
    
       smamo_chat.make('monkey',response,function(){
        
           setTimeout(function(){
            
               smamo_chat.make('user',response);
           
           },200);
       
       });
       
   }
    if(response.action && response.action === 'make-yn'){
        
        smamo_chat.make('monkey',response,function(){
        
           setTimeout(function(){
            
               smamo_chat.make('user',response);
           
           },200);
       
       });
        
    }
    
}




$(function(){
    
    smamo_chat.containerClass = '.chat-stream';
    smamo_chat.container = $(smamo_chat.containerClass);
    
    if(smamo_chat.container.length){
    
        smamo_chat.sendUrl = smamo_chat.container.attr('data-send-url');
        smamo_chat.container.removeAttr('data-send-url');

        $(window).scroll(function(){

            if(smamo_chat.container.offset().top < ($(window).scrollTop() + $(window).height() / 1.5) && smamo_chat.ready){
                smamo_chat.ready = false;
                smamo_chat.init();
            }
        });
    
    }
    
});