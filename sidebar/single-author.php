<?php

$user_id = $post->post_author;
$team = get_posts(array(
    'post_type' => 'team',
    'meta_key' => 'add_user',
    'meta_value'    => $user_id,
));
$author; $i = 0;
foreach($team as $member){
    $i ++;
    if($i == 1){
        $author = $member;
    }
}
?>


<div class="inner sidebar-author">
    <?php $image_url = wp_get_attachment_image_src(get_post_meta($author->ID,'profile_img',true), 'medium' ); ?>
    <img src="<?php echo $image_url[0] ?>">
</div>