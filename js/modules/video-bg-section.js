function youtube_parser(url){
    var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
    var match = url.match(regExp);
    if (match&&match[7].length==11){
        return match[7];
    }else{
        alert("Url incorrecta");
    }
}

var set_video_play = function(){
    
    $('.subsection-video-bg iframe').each(function(){
    
     /* Tilføj autoplay, loop og playlist til url, hvis youtube ID findes */
        var video = $(this);
        var source = video.attr('src');
        if(source){
            var ytID = youtube_parser(source);
            video.attr('src',source+'&autoplay=1&loop=1&playlist='+ytID);

        }

        setTimeout(function(){
            video.animate({opacity:1},500);
            video.next('.video-bg-fallback').stop().animate({opacity:0},500);
        },2500);

    });
}

var set_video_bg_size = function(){
    var windowSize = {
                h : $(window).height() + 60,
                w : $(window).width() + 60,
            };
    
    
    $('.subsection-video-bg iframe').each(function(){
        
        var vid = $(this);
        
        // Højere end 16:9
        if(windowSize.h > (windowSize.w / 16 * 9)){

            var vidW = windowSize.h * 16 / 9,
                vidM = (windowSize.w - vidW) / 2; 

            vid.css({
                height : windowSize.h,
                width : vidW,
                left : vidM,
                top : 0,
            });

        }

        // lavere end 16:9
        else{

            var vidH = windowSize.w * 9 / 16,
                vidM = (windowSize.h - vidH) / 2; 

            vid.css({
                height : vidH,
                width : windowSize.w,
                top : vidM,
                left : 0,
            });

        }
            
    });

}

$(function(){

    set_video_bg_size();
    set_video_play();
    
    if(!is_mobile()){
        $(window).resize(function(){
            
            set_video_bg_size();
        
        });
    }
    
});
