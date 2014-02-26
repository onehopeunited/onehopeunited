<?php
/*
Template Name: Blue ribbon month home
*/
?>

<?php get_header(); ?>

<!--START content-block-->
<div class="content-block">

    <?php if ( function_exists( 'riva_slider_pro' ) ) { riva_slider_pro( 3 ); } ?>

    <!--START left-content-->
    <div class="left-content">
        <a href="https://donate.onehopeunited.org/goblue">
            <img src="<?php bloginfo('template_directory'); ?>/images/goblue/2014-OHU-GoBlue-banner-microsite.jpg" alt="donate now"/>
        </a>
    </div>
    <!--END left-content-->

    <!--START right-content-->
    <div class="right-content">

        <!--show last posts from category uncomment if need to use-->
<!--        --><?php
//        global $post;
//        $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 13 );
//        $myposts = get_posts( $args );
//        foreach( $myposts as $post ) :	setup_postdata($post); ?>
<!--        <div class="homepage-post">-->
<!--            <div class="homepage-post-head">-->
<!--                <a href="--><?php //the_permalink(); ?><!--">-->
<!--                    --><?php //if ( get_post_meta($post->ID, 'thumbnail', true) ) { ?>
<!--                        <img src="--><?php //echo get_post_meta($post->ID, 'thumbnail', true) ?><!--" style="width:123px;height:81px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">-->
<!--                    --><?php //} else { ?>
<!--                        --><?php
//                        if ( in_category('everyday-heroes') ) {
//                            echo '<img src="http://onehopeunited.org/wp-content/themes/ohu/images/everyday-heroes-default.gif" style="width:123px;height:81px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">';
//                        } elseif ( in_category('newsletters') ) {
//                            echo '<img src="http://onehopeunited.org/wp-content/themes/ohu/images/in-the-news-default.gif" style="width:123px;height:81px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">';
//                        } elseif ( in_category('press-releases') ) {
//                            echo '<img src="http://onehopeunited.org/wp-content/themes/ohu/images/press-release-default.gif" style="width:123px;height:81px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">';
//                        } elseif ( in_category('stories') ) {
//                            echo '<img src="http://onehopeunited.org/wp-content/themes/ohu/images/stories-of-hope-default.gif" style="width:123px;height:81px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">';
//                        }
//                        ?>
<!--                    --><?php //} ?>
<!--                </a>-->
<!--                <h2><a title="--><?php //the_title(); ?><!--" href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></h2>-->
<!--            </div>-->
<!--            --><?php //the_excerpt(); ?>
<!--        </div>-->
<!--        --><?php //endforeach; ?>
        <!--END show last post from category-->

        <!--content goes here blue-ribbon-month page-->
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <?php remove_filter ('the_content', 'wpautop'); the_content(); ?>
        <?php endwhile; ?>
        <!--content goes here blue-ribbon-month page-->

    </div>
    <!--END right-content-->
    <div class="clear"></div><!--clearing float-->
</div>
<!--END content-block-->

<!--START homepage-links-->
<div class="homepage-links">
    <ul>
        <li>
            <a class="graytext" href="/news/">
                <img src="<?php bloginfo('template_directory'); ?>/images/goblue/the-stories-of-go-blue.jpg" alt="link image"/>
                <span>The stories of GO BLUE</span>
            </a>
        </li>
        <li>
            <a class="graytext" href="/blue-ribbon-month-host-an-event/">
                <img src="<?php bloginfo('template_directory'); ?>/images/goblue/host-a-fundraiser.jpg" alt="link image"/>
                <span>Host a Fundraiser</span>
            </a>
        </li>
        <li>
            <a class="graytext" href="/calendar/">
                <img src="<?php bloginfo('template_directory'); ?>/images/goblue/calendar-of-events.jpg" alt="link image"/>
                <span>Calendar of Events </span>
            </a>
        </li>
        <li>
            <a class="graytext" href="/blue-ribbon-month-spread-the-word/">
                <img src="<?php bloginfo('template_directory'); ?>/images/goblue/spread-the-word.jpg" alt="link image"/>
                <span>Spread the Word</span>
            </a>
        </li>
    </ul>
</div>
<!--END homepage-links-->

<?php get_footer(); ?>