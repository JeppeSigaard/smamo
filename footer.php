<?php $options = get_option('footer_options'); ?>
<footer id="footer" class="footer">
    <div class="footer-before">
        <span class="heart"></span>
    </div>
    <a href="<?php bloginfo('url') ?>" class="smartmonkey">
        <?php include 'libs/img/smartmonkey.svg'; ?>
    </a>
    <div class="center">
    <span><?php echo $options['adresse'] ?> · <?php echo $options['postby'] ?> · CVR <?php echo $options['cvr'] ?></span>
    </div>
    <div class="center">
        <a href="tel:<?php echo str_replace(' ','',$options['tlf']) ?>"><?php echo $options['tlf'] ?></a> · 
        <a href="mailto:<?php echo $options['email'] ?>"><?php echo $options['email'] ?></a>
    </div>
    <div class="center">
        <a class="button-dir up internal" href="#top"></a>
    </div>
</footer>

<?php wp_footer(); ?>    
</body>
</html>