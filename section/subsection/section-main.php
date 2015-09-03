<?php 

$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'widescreen' );
if(!$image_url){
$image_url = wp_get_attachment_image_src( get_post_meta(get_the_ID(),'profile_img',true), 'widescreen' );
}
?>
<section class="sectioned-header" data-bg="<?php echo $image_url[0] ?>">
    <div class="page-header-title">
        <?php if (get_post_meta(get_the_ID(),'main_title',true) !== '') :?>
        <div class="center"><h1 class="light-marker"><?php echo get_post_meta(get_the_ID(),'main_title',true); ?></h1></div>
        <?php endif; if  (get_post_meta(get_the_ID(),'main_subtitle',true) !== '') :?>
        <div class="center read-width"><span class="dark-marker"><?php echo get_post_meta(get_the_ID(),'main_subtitle',true); ?></span></div>
        <?php endif; ?>
    </div>
</section>


