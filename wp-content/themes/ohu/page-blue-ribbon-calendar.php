<?php
/*
Template Name: Blue Ribbon Month Calendar
*/
get_header(); ?>


<div id="primary1">
			<div id="content1" role="main">

<div class="ohu_sidebar1">

<div style="margin-top:10px;">
<span class="redtext">Calendar events</span>
<br /><br />

<div style="margin-left:-20px;">
<img id="Image-Maps_8201208131652306" src="<?php echo get_bloginfo('url');?>/wp-content/themes/ohu/images/small-map-new.gif" usemap="#Image-Maps_8201208131652306" border="0" width="250" height="324" alt="" />
<map id="_Image-Maps_8201208131652306" name="Image-Maps_8201208131652306">
<area shape="rect" coords="0,0,250,124" href="<?php echo get_bloginfo('url');?>/careers/northern/" alt="" title=""   onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= '<?php echo get_bloginfo('url');?>/wp-content/themes/ohu/images/small-map-red-new.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= '<?php echo get_bloginfo('url');?>/wp-content/themes/ohu/images/small-map-new.gif';"  />

<area shape="rect" coords="0,125,250,230" href="<?php echo get_bloginfo('url');?>/careers/hudelson/" alt="" title="" onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= '<?php echo get_bloginfo('url');?>/wp-content/themes/ohu/images/small-map-yellow-new.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= '<?php echo get_bloginfo('url');?>/wp-content/themes/ohu/images/small-map-new.gif';"  />

<area shape="rect" coords="0,231,250,324" href="<?php echo get_bloginfo('url');?>/careers/florida/" alt="" title="" onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= '<?php echo get_bloginfo('url');?>/wp-content/themes/ohu/images/small-map-blue-new.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= '<?php echo get_bloginfo('url');?>/wp-content/themes/ohu/images/small-map-new.gif';"  />
</map>

</map>
</div>
</div>
</div>
                <div class="entry-content1" style="margin-top:50px;">

                <!--content goes here blue-ribbon-month calendar page-->
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                    <?php remove_filter ('the_content', 'wpautop'); the_content(); ?>
                <?php endwhile; ?>
                <!--content goes here blue-ribbon-month calendar page-->

			</div><!-- #content -->
		</div>
<?php get_footer(); ?>