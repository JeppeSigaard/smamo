<?php 
$base_id = get_the_ID();

if ($post->post_parent)	{
    $ancestors=get_post_ancestors($post->ID);
    $root=count($ancestors)-1;
    $parent = $ancestors[$root];
} else {
    $parent = $post->ID;
}

get_header(); 
?>

<article <?php post_class('sectioned-article post-'.$parent); ?>>

    <?php 
    $args = array(
        'post_parent' => $parent,
        'post_type'   => 'any', 
        'numberposts' => -1,
        'post_status' => 'any',
        'orderby'    => 'menu_order',
        'order'       => 'ASC',
    ); 

    $children_array = get_children( $args, 'object' );

    foreach($children_array as $post) : setup_postdata($post);

    if ($post->ID == $base_id){ echo '<span class="scroll-anchor"></span>';}
    
    $section_type = get_post_meta(get_the_ID(),'section_type',true);

    get_template_part('section/subsection/section',$section_type);
    
    endforeach; wp_reset_postdata(); ?>

</article>

<?php get_footer(); ?>