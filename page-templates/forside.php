<?php
/*
template name: Forside
*/
get_header(); ?>

<?php get_template_part('section/parallax','hero'); ?>

<section class="page front-page-article" id="about">
    <article class="inner center read-width">
    <?php while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
    </article>
</section>

<div class="async-load" data-load="<?php echo get_template_directory_uri() ?>/section/person-gallery.php">
    <section class="person-gallery" id="team">
        <ul class="person-list box-container">
            <li class="box person">
                <header>
                    <a href="#"></a>
                </header>
                <footer>
                    <h3> _________________ </h3>
                    <h4> _________________ </h4>
                    <span> _________________ </span>
                    <a href="#"> _________________ </a>
                    <a href="#"> _________________ </a>
                </footer>
            </li>
            <li class="box person">
                <header>
                    <a href="#"></a>
                </header>
                <footer>
                    <h3> _________________ </h3>
                    <h4> _________________ </h4>
                    <span> _________________ </span>
                    <a href="#"> _________________ </a>
                    <a href="#"> _________________ </a>
                </footer>
            </li>
            <li class="box person">
                <header>
                    <a href="#"></a>
                </header>
                <footer>
                    <h3> _________________ </h3>
                    <h4> _________________ </h4>
                    <span> _________________ </span>
                    <a href="#"> _________________ </a>
                    <a href="#"> _________________ </a>
                </footer>
            </li>
            <li class="box person">
                <header>
                    <a href="#"></a>
                </header>
                <footer>
                    <h3> _________________ </h3>
                    <h4> _________________ </h4>
                    <span> _________________ </span>
                    <a href="#"> _________________ </a>
                    <a href="#"> _________________ </a>
                </footer>
            </li>
        </ul>
    </section>
</div>

<div class="async-load" data-load="<?php echo get_template_directory_uri() ?>/section/front-work.php">
    <section class="slide-boxes front-work" id="work">
        <div class="box-container wrap">
            <div class="inner inner-left double">
                <header>
                    <div class="inner">
                    <a href="#" class="button large">Cases</a>
                    <nav>
                       <a href="#" tabindex="-1" nofollow class="button-dir prev"></a>
                       <a href="#" tabindex="-1" nofollow class="button-dir right next"></a>
                    </nav>
                    </div>
                </header>
                <div class="box-slider">
                        <a href="#"></a>
                        <a href="#"></a>
                </div>
            </div>
            <div class="inner inner-right">
                <header>
                    <div class="inner">
                    <a href="#" class="button large">Shop</a>
                    <nav>
                        <a href="#" tabindex="-1" nofollow class="button-dir prev"></a>
                        <a href="#" tabindex="-1" nofollow class="button-dir right next"></a>
                    </nav>
                    </div>
                </header>
                <div class="box-slider shop">
                    <a href="#"></a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_template_part('section/show','reel'); ?>

<?php get_template_part('section/cta','form'); ?>


<?php get_footer();