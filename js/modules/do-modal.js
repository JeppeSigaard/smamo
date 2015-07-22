var modalContainer = $('<div class="modal-container"></div>'),
    modalCenter = $('<div class="modal-center"></div>');

modalContainer.append(modalCenter);


var doModal = function(content,style){
    
    modalCenter.empty().load(content,function(){
        modalContainer.prependTo('body').addClass('fadeIn');
        setTimeout(function(){
            modalContainer.removeClass('fadeIn');
            formJsInit();
        },20);
    });
    
    modalContainer.off().on('click',function(e){
        var t = $(e.target);

        if(t.is('.modal-container') || t.is('.modal-center')){
            offModal();
        }

    });
}

var offModal = function(){
    
    modalContainer.remove();

};



$('body').on('click',function(e){
    
    var t = $(e.target);
    
    if(t.is('a.modal-show')){
        
        e.preventDefault();
        
        var content = t.attr('data-modal-fetch'),
            style = t.attr('data-modal-style');
        
        doModal(content,style);
        
    }
    
});