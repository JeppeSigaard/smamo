<?php

// If called outside context
if(!isset($post)){require '../../../../wp-load.php';}

?>
<section class="showreel">
    <div class="inner">
        <div class="video-wrap" id="showreel" <?php echo (wp_is_mobile()) ? 'class="mobile"': ''; ?>>
            <iframe <?php echo (wp_is_mobile()) ? '': 'class="hidden" '; ?>id="player" src="https://www.youtube.com/embed/8EnPThg5qKw?enablejsapi=1" frameborder="0" allowfullscreen></iframe>
            <a class="playbtn" id="play-reel"></a>
        </div>
    </div>
</section>
