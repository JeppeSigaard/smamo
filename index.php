<?php 

global $post;
define('BASE_ID',$post->ID);


if ($post->post_parent)	{
    $ancestors=get_post_ancestors(BASE_ID);
    $root=count($ancestors)-1;
    $parent = $ancestors[$root];
} else {
    $parent = BASE_ID;
}

get_header(); 

?>

<article <?php post_class('sectioned-article post-'.$parent); ?>>

    <?php 
    $args = array(
        'post_parent' => $parent,
        'post_type'   => 'any', 
        'numberposts' => -1,
        'post_status' => 'publish',
        'orderby'    => 'menu_order',
        'order'       => 'ASC',
    ); 

    $children_array = get_children( $args, 'object' );

    foreach($children_array as $post) : setup_postdata($post);

    if ($post->ID == BASE_ID){ echo '<span class="scroll-anchor"></span>';}
    
    $section_type = get_post_meta(get_the_ID(),'section_type',true);

    get_template_part('section/subsection/section',$section_type);
    
    endforeach; wp_reset_postdata();

	if ('case' === get_post_type(BASE_ID)) :

    $cases = new WP_Query(array(
		'post_type' => 'case',
		'post_parent' => 0,
		'posts_per_page' => 4,
		'post__not_in' => array((defined('BASE_ID')) ? BASE_ID : ''),
	));

	?>

	<section class="grid-boxes front-cases" id="cases">
		<div class="box-container wrap">
			<div class="inner">
				<?php while ($cases->have_posts()) : $cases->the_post();  ?>
					<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' ); ?>
					<a href="<?php the_permalink(); ?>" <?php post_class('grid-box') ?> data-bg="<?php echo $image_url[0] ?>">
						<span><?php the_title() ?></span>
						<?php $client = get_post(get_post_meta(get_the_ID(),'attach_client',true)) ?>
						<span><?php echo (get_post_meta(get_the_ID(),'attach_client',true) !== '') ? $client->post_title: ''; ?></span>
					</a>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</section>
	<?php endif; ?>
</article>

<?php get_footer(); ?>
