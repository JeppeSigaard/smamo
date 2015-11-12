<?php 

$kunde_id = get_post_meta(BASE_ID,'attach_client',true);
$tasks = get_post_meta($kunde_id,'client_task',true);
$kunde_q = new WP_Query(array(
    
    'post_type' => 'case',
    'posts_per_page' => -1,
    'meta_key'  => 'attach_client',
    'meta_value'    => $kunde_id,
    'post_parent'   => 0,
    
));

?>
   

<section class="subsection section-description cc-bg">
    <div class="inner">
        <div class="column column-left medium">
            <header>
                <h3>Smamo og kunden</h3>
            </header>
            <div class="text">
                <?php echo apply_filters('the_content',get_post_meta(get_the_ID(),'text_relation',true)); ?>
            </div>
        </div>
        <div class="column column-center medium">
            <header>
                <h3>Opgaven</h3>
            </header>
            <div class="text">
                <?php echo apply_filters('the_content',get_post_meta(get_the_ID(),'text_task',true)); ?>
            </div>
        </div>
        <div class="column column-right small">
           <header>
                <h3>Kunden</h3>
            </header>
            <div class="text">
                <p><?php echo get_post_meta($kunde_id,'name',true); ?></p>
                <p><a href="tel:<?php echo get_post_meta($kunde_id,'telefon',true); ?>"><?php echo get_post_meta($kunde_id,'telefon',true); ?></a></p>
                <p><a href="mailto:<?php echo get_post_meta($kunde_id,'email',true); ?>"><?php echo get_post_meta($kunde_id,'email',true); ?></a></p>
            </div>
            <div class="text">
                <?php if (is_array($tasks)) : foreach($tasks as $task) : ?>
                <p class="task"><?php echo $task ?></p>
                <?php endforeach; endif; ?>
            </div>
            <div class="text tasks">
                <?php while ($kunde_q->have_posts()) : $kunde_q->the_post(); ?>
                    <?php $class = (get_the_ID() === BASE_ID) ? 'current-case': ''; ?>
                    <a <?php post_class($class); ?> href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>