<?php
$post_type = get_post_type( get_the_ID() );
$image_url = '';
if ($post_type == 'team'){
    
    $image_url = wp_get_attachment_image_src( get_post_meta(get_the_ID(),'profile_img',true), 'full' );
    $img_bg = 'style="background-image:url('.$image_url[0].');"';
    $email = get_post_meta(get_the_ID(),'email',true);
    $tlf = get_post_meta(get_the_ID(),'telefon',true);
    
    $subtitle = '<div><a href="mailto:'.$email.'">'.$email.'</a></div>';
    $subtitle_2 = '<div><a href="tel:'.str_replace(' ','',$tlf).'">'.$tlf.'</a></div>';
}

elseif ($post_type == 'product'){
    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    $img_bg = 'style="background-image:url('.$image_url[0].');"';
    $sale = get_post_meta( get_the_ID(), '_sale_price', true); 
    $price = ($sale !== '') ? $sale : get_post_meta( get_the_ID(), '_regular_price', true); 
    $subtitle = '<div><span>'.$price.',-</span></div>';
}

elseif ($post_type == 'case'){
    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    $img_bg = 'style="background-image:url('.$image_url[0].');"';
    $client = get_post(get_post_meta(get_the_ID(),'attach_client',true));
    $subtitle = '<div><span>'.$client->post_title.'</span></div>';
}

else{
    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    $img_bg = 'style="background-image:url('.$image_url[0].');"';
}
?>

<section class="page-header" <?php echo $img_bg ?>>
    <div class="inner">
        <h1><?php the_title(); ?></h1>
        <?php if(isset($subtitle)){ echo $subtitle;} ?>
        <?php if(isset($subtitle_2)){ echo $subtitle_2;} ?>
    </div>
</section>