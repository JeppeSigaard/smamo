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
<nav>
    <ul>
    <li>
        <a href="#test">Click me</a>
        <ul class="sub-menu"></ul>
    </li>
     <li>
        <a href="#test">Click me</a>
        <ul class="sub-menu"></ul>
    </li>
    </ul>
</nav>

<div class="async-load" data-load="<?php echo get_template_directory_uri() ?>/section/case-grid.php"></div>

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

<?php //get_template_part('section/show','reel'); ?>

<?php get_template_part('section/chat','form'); ?>


<?php get_footer();