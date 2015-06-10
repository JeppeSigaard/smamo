<?php 

$person = new WP_Query(array(
    
    'posts_per_page' => 4,
    'post_type' => 'team',
    'post_status' => 'publish',
    'orderby'   => 'menu_order',
    'order' => 'ASC',
    
));

?>
   

<section class="person-gallery" id="team">
    <ul class="person-list box-container">
        <?php 
        while ($person->have_posts()) : $person->the_post(); 
        $telefon = str_replace(' ','',get_post_meta(get_the_ID(),'telefon',true));
        $email = get_post_meta(get_the_ID(),'email',true);
        ?>
        <li class="box person">
            <header>
                <?php $image_url = wp_get_attachment_image_src(get_post_meta(get_the_ID(),'profile_img',true),'front-people');?>
                <img src="<?php echo $image_url[0]; ?>">
            </header>
            <footer>
                <h3><?php echo get_post_meta(get_the_ID(),'titel',true); ?></h3>
                <h4><?php the_title(); ?></h4>
                <?php $subtitles = get_post_meta(get_the_ID(),'undertitel',true); foreach ($subtitles as $sub) : ?>
                <span><?php echo esc_textarea($sub); ?></span>
                <?php endforeach; ?>
                <a href="mailto:<?php echo $email ?>"><?php echo $email;?></a>
                <a href="tel:<?php echo $telefon ?>"><?php echo get_post_meta(get_the_ID(),'telefon',true);?></a>
            </footer>
        </li>
        <?php endwhile; ?>
    </ul>
</section>