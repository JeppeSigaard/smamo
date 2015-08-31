<?php get_header(); ?>
<article <?php post_class('sectioned-article'); ?>>

    <?php 

    $args = array(
        'post_parent' => get_the_ID(),
        'post_type'   => 'any', 
        'numberposts' => -1,
        'post_status' => 'any',
        'orderby'    => 'menu_order',
        'order'       => 'ASC',
    ); 

    $children_array = get_children( $args, 'object' );

    foreach($children_array as $post) : setup_postdata($post);
    
    $section_type = get_post_meta(get_the_ID(),'section_type',true);

    get_template_part('section/subsection/section',$section_type);
    
    endforeach; wp_reset_postdata(); ?>

</article>

<?php get_footer(); ?>