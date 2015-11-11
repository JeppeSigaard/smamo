<?php if(!is_user_logged_in()) {header('location:http://facebook.com/smartmonkey.dk');} ?>
<?php $mobile = (wp_is_mobile()) ? 'mobile' : ''; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title><?php wp_title('-',true,'right'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class($mobile); ?>>
    <section class="header-section">
        <?php //get_template_part('section/page','header'); ?>
        <a class="header-logo" href="<?php bloginfo('url') ?>">
            <?php include 'libs/img/abe_hvid.svg'; ?>
        </a>
        <?php $options = get_option('footer_options'); ?>
		<footer class="header-footer">
			<?php if ($options['email'] !== '') : ?>
			<a href="mailto:<?php echo $options['email'] ?>"><?php echo $options['email'] ?></a><br/>
			<?php endif; if ($options['tlf'] !== '') :?>
			<a href="tel:<?php echo str_replace(' ','',$options['tlf']); ?>"><?php echo $options['tlf']; ?></a>
			<?php endif; ?>
		</footer>
    </section>
