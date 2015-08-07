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

        smamo_chat.make('monkey','Hej. Vi er SmartMonkey. Hvad hedder du?', null, function(){
            setTimeout(function(){
            
                smamo_chat.make('user','Indtast dit navn','name');
            
            },1000);
        });
        
    }
}

smamo_chat.make = function(type,msg,data,callback){
    
    //smamo_chat.container.children('.'+type+'.medium').removeClass('medium').addClass('small');
    //smamo_chat.container.children('.'+type+'.large').removeClass('large').addClass('medium');
    
    if(type === 'monkey'){
        
        var $box = $('<div class="chat-entry monkey large typing"></div>"'),
            $msg = $('<span class="">'+msg+'</span>');
        
        $box.append($msg);
        smamo_chat.container.append($box);
        
        setTimeout(function(){
            $box.removeClass('typing');
        },700);
        
    }
    
    else if (type === 'user'){
        
        var placeholder = '';
        if(msg){
            placeholder = ' placeholder="'+msg+'"';
        }
        
        var dataAttr = '';
        if(data){
            dataAttr = ' data-field="'+data+'"';
        }
        
        var $box = $('<div class="chat-entry user large"></div>"'),
            $msg = $('<textarea rows="1"'+placeholder+dataAttr+'></textarea>');
        
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
    
}

smamo_chat.receive = function(response){
    
   if(response.action && response.action === 'make'){
    
       smamo_chat.make('monkey',response.content,response.data,function(){
        
           setTimeout(function(){
            
               smamo_chat.make('user',null,response.data);
           
           },1000);
       
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