<?php 


get_header();

$client = wp_get_current_user();
$kort = '';

if(user_can($client->ID,'manage_options')){
    $kort = new WP_query(array(
        'post_type' => 'kort',
        'posts_per_page' => -1,
    ));
    
    
}

else{
    $kort = new WP_query(array(
        'post_type' => 'kort',
        'posts_per_page' => -1,
        'meta_query' => array(
            array(
                'key'     => 'attach_client',
                'value'   => (is_object($client)) ? $client->ID : 0,
                'compare' => 'IN',
            ),
        ),
    ));
}
?>
<section class="page fancy-sidebars">
    <main>
        <div class="inner">
            <?php while (have_posts()) : the_post(); ?>
            <header>
                <h1 class="post-title"><?php the_title(); ?></h1>
            </header>
            <article <?php post_class(); ?>>
                <?php if (is_user_logged_in()) : // Bruger er logget ind ?>
                
                <?php if($kort->have_posts()) : while ($kort->have_posts()) : $kort->the_post(); ?>
                    
                    <?php get_template_part('klippekort/render','kort'); ?>
                
                <?php endwhile; else :?>
                
                <p>Du har ingen aktive klippekort</p>
                <a class="button">Bestil nu</a>
                <?php endif; wp_reset_postdata(); ?>
                
                <?php else : // Brugeren er ikke logget ind ?>
                
                <?php the_content(); ?>
                
                
                <?php endif; ?>
            </article>
            <?php endwhile; ?>
        </div>  
    </main>
    <div class="fancy-asides start">
        <aside class="aside-right start">
        
        </aside>
        <aside class="aside-left">

        </aside>
    </div>
</section>
<?php get_footer(); ?>