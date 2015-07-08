<?php 

// If called outside context
if(!isset($post)){require '../../../../wp-load.php';}

$heroes = new WP_query(array(

    'post_type' => 'hero',
    'post_per_page' => 7,
    'post_status'   => 'publish',

));

$options = get_option('footer_options');
?>
<section class="hero" id="top">
    <div class="inner">
        <?php if($heroes->have_posts()) : while($heroes->have_posts()) : $heroes->the_post();?>
        
        <?php 
        /* Non - parallax slide */
        if (get_post_meta(get_the_ID(),'plx_active',true) !== '1') :
        ?>
        <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'widescreen' ); ?>
        <?php $data_bg = (isset($image_url[0])) ? 'data-bg="'.$image_url[0].'"' : ''; ?>    
            <div class="hero-banner" <?php echo $data_bg; ?>>
                <div class="hero-banner-text">
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                </div>
            </div>
        <?php 
         /* Parallax slide */
        else : 
        ?>
            <div class="hero-banner plx">
                <div class="plx-text-layer">
                    <?php echo get_post_meta(get_the_ID(),'plx_layer_text',true); ?>
                </div>
                <?php $images = get_post_meta(get_the_ID(),'plx_layer_img',false); $i = 0; foreach($images as $img) : $i++; $image_url = wp_get_attachment_image_src( $img, 'widescreen' );?> 
                <?php $data_bg = (isset($image_url[0])) ? 'data-bg="'.$image_url[0].'"' : ''; ?>
                <div class="plx-layer layer-<?php echo $i ?>" <?php echo $data_bg; ?>></div>
                <?php endforeach; ?>
            </div>
        <?php 
        /* end slides */
        endif; endwhile; endif; 
        ?>  
        <div class="prev-next-right">
            <a href="#" tabindex="-1" nofollow class="button-dir"></a>
            <a href="#" tabindex="-1" nofollow class="button-dir right"></a>
        </div>
    </div>
</section>
<footer class="hero-footer">
    <?php if ($options['email'] !== '') : ?>
    <a href="mailto:<?php echo $options['email'] ?>"><?php echo $options['email'] ?></a><br/>
    <?php endif; if ($options['tlf'] !== '') :?>
    <a href="tel:<?php echo str_replace(' ','',$options['tlf']); ?>"><?php echo $options['tlf']; ?></a>
    <?php endif; ?>
</footer>


