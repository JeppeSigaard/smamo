jQuery(function($){

    var smamo_section = {
        select : $('#section_type'),
        main : $('#section_main, #postimagediv, #section_color'),
        slider : $('#section_slideshow'),
        description : $('#section_description'),
        single_image : $('#section_image'),
        snippet : $('#section_snippet'),
        hideAll : function(){
            for (var key in smamo_section) {
                if (smamo_section.hasOwnProperty(key) && typeof smamo_section[key] !== 'function' && smamo_section[key] !== smamo_section.select ) {
                smamo_section[key].hide();
                }
            }
        },
        showSection : function(select){
            var section = select.val();
        
            if(smamo_section[section]){
                smamo_section.hideAll();
                smamo_section[section].show();

            }
            else{
                smamo_section.hideAll();
            }
        }
    };
    
    
    if(smamo_section.select.length){
        smamo_section.showSection(smamo_section.select);
        smamo_section.select.change(function(){
            smamo_section.showSection(smamo_section.select);
        });
    }
});