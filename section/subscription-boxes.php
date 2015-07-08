<?php 
$subs = new WP_Query(array(
    'post_type' => 'abonnement',
    'posts_per_page' => 3,
));
?>

<section class="subscribe">
    <div class="inner">
        <?php if($ubs->have_posts()) : while ($subs->have_posts()) : $subs->the_post(); ?>
        <?php $box_class = (has_post_thumbnail()) ? 'sub-box box-thumb': 'sub-box no-thumb'; ?>
        <div class="sub-box">
           <header>
               <h3><?php the_title(); ?></h3>
               <?php the_post_thumbnail(); ?>
           </header>
           <article <?php post_class(); ?>>
               <?php the_content(); ?>
           </article>
           <footer>
                <div class="center">
                    <a class="button">Bestil et tilbud</a>
                </div>
           </footer> 
        </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
</section>