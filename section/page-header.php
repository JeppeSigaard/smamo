<?php
$post_type = get_post_type( get_the_ID() );
$image_url = '';

// TEAM
if ($post_type == 'team'){
    
    $image_url = wp_get_attachment_image_src( get_post_meta(get_the_ID(),'profile_img',true), 'widescreen' );
    $img_bg = 'data-bg="'.$image_url[0].'"';
    $email = get_post_meta(get_the_ID(),'email',true);
    $tlf = get_post_meta(get_the_ID(),'telefon',true);
    
    $subtitle = '<div><a href="mailto:'.$email.'">'.$email.'</a></div>';
    $subtitle_2 = '<div><a href="tel:'.str_replace(' ','',$tlf).'">'.$tlf.'</a></div>';
}

// PRODUKT
elseif ($post_type == 'product'){
    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'widescreen' );
    $img_bg = 'data-bg="'.$image_url[0].'"';
    
    $sale = get_post_meta( get_the_ID(), '_sale_price', true); 
    $price = ($sale !== '') ? $sale : get_post_meta( get_the_ID(), '_regular_price', true); 
    $subtitle = '<div><span>'.$price.',-</span></div>';
    
    $product = new WC_Product(get_the_ID());
    $button = '<a class="button black" href="'.$product->add_to_cart_url().'">Køb nu</a>';
}

// CASE
elseif ($post_type == 'case'){
    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'widescreen' );
    $img_bg = 'data-bg="'.$image_url[0].'"';
    $client = get_post(get_post_meta(get_the_ID(),'attach_client',true));
    $subtitle = '<div><span>'.$client->post_title.'</span></div>';
}

// ALT ANDET
else{
    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'widescreen' );
    $img_bg = 'data-bg="'.$image_url[0].'"';
}
?>

<section class="page-header" <?php echo $img_bg ?>>
    <div class="inner">
        <h1><?php the_title(); ?></h1>
        <?php if(isset($subtitle)){ echo $subtitle;} ?>
        <?php if(isset($subtitle_2)){ echo $subtitle_2;} ?>
    </div>
    <?php if(isset($button)){ echo $button;} ?>
</section>