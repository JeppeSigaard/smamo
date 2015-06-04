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
        <?php while ($person->have_posts()) : $person->the_post(); ?>
            <li class="box person">
                <a class="box-inner" href="<?php the_permalink(); ?>">
                    <header>
                    </header>
                    <footer>
                        <h3><?php echo get_post_meta(get_the_ID(),'titel',true); ?></h3>
                        <h4><?php the_title(); ?></h4>
                        <?php $subtitles = get_post_meta(get_the_ID(),'undertitel',true); foreach ($subtitles as $sub) : ?>
                        <span><?php echo esc_textarea($sub); ?></span>
                        <?php endforeach; ?>
                    </footer>
                </a>
            </li>
        <?php endwhile; ?>
    </ul>
</section>