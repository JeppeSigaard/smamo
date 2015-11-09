var validatePartial = function(form){
    
    var isOk = true;
    
    form.find('.active input').each(function(){
        
        if($(this).attr('required') && $(this).val() === ''){
            $(this).removeClass('success').addClass('error');
            isOk = false;
        }
        
        if($(this).hasClass('error')){
            isOk = false;
        }
        
    });
    
    return isOk;
}

var partialSubmitForm = function(form){

    var formData = form.serialize();
    form.addClass('loading').find('input[name="action_step"]').val('modify');
    
    $.ajax({
        url : form.attr('action'),
        type : 'POST',
        data : formData,
        dataType : 'json',
        success : function(response){
            
            form.removeClass('loading');
            
            if(response.success){
                
                form.find('input[name="booking_id"]').val(response.booking_id);
                
            }
            
            else if(response.error){
                console.log(response.error);
            }
        },
    });
    
    
    
}

$(function() {
    $('.paginated-form').on({
        click: function(e) {
            var t = $(e.target),
                form = t.parents('form'),
                group = t.parents('div').attr('data-group');

            if (t.is('.next-btn') && validatePartial(form)) {
                
                e.preventDefault();
                
                if(!form.hasClass('loading')){partialSubmitForm(form);}
                
                form.find('.active').fadeOut(100, function() {
                    $(this).removeClass('active').removeAttr('style');
                });

                setTimeout(function() {
                    group++;
                    $('div[data-group=' + group + ']').addClass('active');
                    $('form textarea:not(.no-autosize)').removeAttr('style');
                }, 120);

            }

            if (t.is('.prev-btn')) {
                
                e.preventDefault();
                form.find('.active').removeClass('active');
                group--;
                $('div[data-group=' + group + ']').addClass('active');
            }
            
            if (t.is('input[type=checkbox] + label, input[type=radio] + label')){
                
                if (t.prev('input').prop('checked')){
                    
                     t.prev('input').prop( "checked", false );
                }
                
                else{
                    if(t.is('input[type=radio] + label')){
                        t.parent('div').children('input').prop('checked',false);
                    }
                    t.prev('input').prop( "checked", true );
                }
            }
        }
    });

    $('.booking-form-open').click(function(e) {
        e.preventDefault();
        $('.booking-form').fadeIn(100);
    });

    $('.booking-form-close').click(function(e) {
        e.preventDefault();
        $('.booking-form').fadeOut(100);
    });
});