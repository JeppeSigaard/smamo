<?php get_template_part('modals/booking'); ?>
<?php $options = get_option('footer_options'); ?>

<footer id="footer" class="footer">
    <div class="inner">
        <?php include get_template_directory().'/libs/img/logo.svg'; ?>
        <div class="footer-description">
            <?php bloginfo('description'); ?>
        </div>
        <div class="center">
             <a href="#" class="booking-form-open button white outline">Book et møde</a>
        </div>
        <div class="copy">
            <span><?php echo $options['firma']; ?></span>
            <span><?php echo $options['adresse']; ?></span>
            <span><?php echo $options['postby']; ?></span>
            <span><?php echo $options['cvr']; ?></span>
            <span><?php echo $options['email']; ?></span>
            <span><?php echo $options['tlf']; ?></span>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>    
</body>
</html>