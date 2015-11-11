<?php 
define('WP_USE_THEMES', false); 
header('Content-Type: text/css');
require '../../../../../wp-load.php';

$cc_1 = get_posts(array(
    'post_type' => 'any',
    'meta_key'     => 'section_contrast',
	'posts_per_page' => -1,
));

foreach($cc_1 as $post) : $post_id = $post->ID;

?>

.post-<?php echo $post_id; ?>.cc-color,
.post-<?php echo $post_id; ?> .cc-color,
.post-<?php echo $post_id; ?>.cc-before-color:before,
.post-<?php echo $post_id; ?> .cc-before-color:before,
.post-<?php echo $post_id; ?>.cc-after-color:after,
.post-<?php echo $post_id; ?> .cc-after-color:after{
    color:<?php echo get_post_meta($post_id,'section_contrast',true) ?>;
}

.post-<?php echo $post_id; ?>.cc-bg,
.post-<?php echo $post_id; ?> .cc-bg,
.post-<?php echo $post_id; ?>.cc-before-bg:before,
.post-<?php echo $post_id; ?> .cc-before-bg:before,
.post-<?php echo $post_id; ?>.cc-after-bg:after,
.post-<?php echo $post_id; ?> .cc-after-bg:after{
    background-color:<?php echo get_post_meta($post_id,'section_contrast',true) ?>;
}

<?php endforeach; ?>
