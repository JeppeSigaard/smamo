replaceholdWeekDay = function(){

    var d = new Date();
    var weekday = new Array(7);
    weekday[0]=  "søndag";
    weekday[1] = "mandag";
    weekday[2] = "tirsdag";
    weekday[3] = "onsdag";
    weekday[4] = "torsdag";
    weekday[5] = "fredag";
    weekday[6] = "lørdag";

    var n = weekday[d.getDay()];
    
    $('.rph-weekday').each(function(){
        $(this).html(n);
    });
    
}

var replaceHolders = function(){

    
    replaceholdWeekDay();
    

};


$(function(){
    replaceHolders();
});