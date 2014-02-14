<?php
/*
Template Name: Index Home
*/
?>

<?php get_header(); ?>

<!--START content-block-->
<div class="content-block">

    <!--START left-content-->
    <div class="left-content">
        <img src="<?php bloginfo('template_directory'); ?>/images/donate-box.jpg" alt="donate-box"/>
    </div>
    <!--END left-content-->

    <!--START right-content-->
    <div class="right-content">
        <div class="homepage-post">
            <div class="homepage-post-head">
                <img src="<?php bloginfo('template_directory'); ?>/images/post-image.jpg" alt="post image"/>
                <h2>Test news title</h2>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
    <!--END right-content-->
    <div class="clear"></div><!--clearing float-->
</div>
<!--END content-block-->

<!--START homepage-links-->
<div class="homepage-links">
    <ul>
        <li>
            <a href="#">
                <img src="<?php bloginfo('template_directory'); ?>/images/post-image.jpg" alt="link image"/>
                <span>Lorem ipsum dolor sit amet,orem ipsum dolor sit amet orem ipsum dolor sit amet djwew kjssjdvc sksnd kdcjc</span>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="<?php bloginfo('template_directory'); ?>/images/post-image.jpg" alt="link image"/>
                <span>Lorem ipsum dolor sit amet,orem ipsum dolor sit amet orem ipsum dolor sit amet djwew kjssjdvc sksnd kdcjc</span>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="<?php bloginfo('template_directory'); ?>/images/post-image.jpg" alt="link image"/>
                <span>Lorem ipsum dolor sit amet,orem ipsum dolor sit amet orem ipsum dolor sit amet djwew kjssjdvc sksnd kdcjc</span>
            </a>
        </li>
        <li>
            <a href="/calendar/">
                <img src="<?php bloginfo('template_directory'); ?>/images/post-image.jpg" alt="link image"/>
                <span>Lorem ipsum dolor sit amet,orem ipsum dolor sit amet orem ipsum dolor sit amet djwew kjssjdvc sksnd kdcjc</span>
            </a>
        </li>
    </ul>
</div>
<!--END homepage-links-->

<?php get_footer(); ?>