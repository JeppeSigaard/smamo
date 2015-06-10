<?php 

/*
template name: Klippekort
*/

get_header();

$client = get_post(86);

?>

<section class="page">
    <main>
        <article>
        <?php var_dump($client); ?>
        </article>
    </main>
    <aside>
        
    </aside>
</section>

<?php get_footer(); ?>