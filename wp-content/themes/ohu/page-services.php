<?php
/*
Template Name: Services Page
*/
?>

<?php get_header(); ?>

		<div id="primary1">
			<div id="content1" role="main">

<div class="ohu_sidebar1">
<span style="font-weight:bold;text-transform:uppercase;color:#e41c39;">Services by Location</span>
<ul class="sidebar-links">
<li><a href="http://onehopeunited.org/services/services-in-northern-illinois-wisconsin/">Northern Illinois / Wisconsin</a></li>
<li><a href="http://onehopeunited.org/services/services-in-central-southern-illinois-missouri/">Central & Southern Illinois / Missouri</a></li>
<li><a href="http://onehopeunited.org/services/services-in-central-florida/">Florida Region</a></li>
</ul>

<a href="http://onehopeunited.org/about/" class="bluebutton" style="text-decoration:none;">ABOUT THE FEDERATION</a>
<br />
<br />
<div style="border-top:1px solid #ccc;padding-top:15px;margin-top:10px;">
<span class="redtext">FIND SERVICES IN YOUR AREA</span>
<br /><br />
<div style="margin-left:-20px;">
<img id="Image-Maps_8201208131652306" src="http://onehopeunited.org/wp-content/themes/ohu/images/small-map-new.gif" usemap="#Image-Maps_8201208131652306" border="0" width="250" height="324" alt="" />
<map id="_Image-Maps_8201208131652306" name="Image-Maps_8201208131652306">
<area shape="rect" coords="0,0,250,124" href="http://onehopeunited.org/services/services-in-northern-illinois-wisconsin/" alt="" title=""   onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-red-new.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-new.gif';"  /> 

<area shape="rect" coords="0,125,250,230" href="http://onehopeunited.org/services/services-in-central-southern-illinois-missouri/" alt="" title="" onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-yellow-new.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-new.gif';"  />

<area shape="rect" coords="0,231,250,324" href="http://onehopeunited.org/services/services-in-central-florida/" alt="" title="" onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-blue-new.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-new.gif';"  />
</map>

</map>
</div>


</div>

</div>

				<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
					
<div class="entry-content1" style="">


		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>