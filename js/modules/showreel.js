function YTplayerReady(event) {

  // bind events
 $('#play-reel').on("click", function() {
    player.playVideo();
  });
}

function YTstateChange(event){
    
    if(event.data === 0){
        
        $('#player').addClass('hidden');
        $('#play-reel').removeClass('hidden');
 
    }
    
    if(event.data === 1){
        
        $('#play-reel').addClass('hidden').removeClass('loading');
        $('#player').removeClass('hidden');
        
    }
    
    if(event.data === 2){
        
        $('#play-reel').removeClass('hidden loading');
        $('#player').removeClass('hidden')
        
    } 
    
    if(event.data === 3){
        
        $('#player').addClass('hidden');
        $('#play-reel').removeClass('hidden').addClass('loading');
        
        
    }
}

    
if($('#showreel').length && !$('#showreel').hasClass('mobile')){
    // Inject YouTube API script
    var tag = document.createElement('script');
    tag.src = "//www.youtube.com/player_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;

    function onYouTubePlayerAPIReady() {

        // create the global player from the specific iframe (#video)
        player = new YT.Player('player', {
            events: {

                videoId: '8EnPThg5qKw',
                'onReady': YTplayerReady,
                'onStateChange' : YTstateChange,
            }
        });

    }
}



