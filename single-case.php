<?php get_header(); ?>
<article <?php post_class('sectioned-article'); ?>>
    
    <section class="sectioned-header">
        <?php the_post_thumbnail('widescreen'); ?>
        <div class="page-header-title">
            <?php if (get_post_meta(get_the_ID(),'main_title',true) !== '') :?>
            <div class="center"><h1 class="light-marker"><?php echo get_post_meta(get_the_ID(),'main_title',true); ?></h1></div>
            <?php endif; if  (get_post_meta(get_the_ID(),'main_subtitle',true) !== '') :?>
            <div class="center read-width"><span class="dark-marker"><?php echo get_post_meta(get_the_ID(),'main_subtitle',true); ?></span></div>
            <?php endif; ?>
        </div>
    </section>

    <?php 

    $args = array(
        'post_parent' => get_the_ID(),
        'post_type'   => 'any', 
        'numberposts' => -1,
        'post_status' => 'any',
        'order_by'    => 'menu_order',
        'order'       => 'ASC',
    ); 

    $children_array = get_children( $args, 'object' );

    foreach($children_array as $post) : setup_postdata($post);
    
    $section_type = get_post_meta(get_the_ID(),'section_type',true);

    get_template_part('section/subsection/section',$section_type);
    
    endforeach; wp_reset_postdata(); ?>

</article>

<?php get_footer(); ?>