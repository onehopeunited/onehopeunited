<?php
/*
Template Name: Blue ribbon month home
*/
?>

<?php get_header(); ?>

<!--START content-block-->
<div class="content-block">

    <!--START slider-->
    <?php if ( function_exists( 'riva_slider_pro' ) ) { riva_slider_pro( 3 ); } ?>
    <!--END slider-->

    <!--content goes here blue-ribbon-month page-->
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php remove_filter ('the_content', 'wpautop'); the_content(); ?>
    <?php endwhile; ?>
    <!--content goes here blue-ribbon-month page-->
</div>
<!--END content-block-->

<?php get_footer(); ?>