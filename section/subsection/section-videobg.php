<section class="subsection subsection-video-bg">
    <div class="inner">
        <div class="video-overlay">
            <div class="inner">
                
            </div>
        </div>
        <?php echo wp_oembed_get(get_post_meta(get_the_ID(),'video_bg',true).'&modestbranding=1&enablejsapi=1&autplay=1&rel=0',array('width' => '2', 'height' => '2'));?>
    </div>
</section>