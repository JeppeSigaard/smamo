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
            </div>
        </div>
    </div>
</section>