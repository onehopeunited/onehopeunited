<?php
/*
Template Name: Services Page
*/
?>

<?php get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

<div style="float:left;border:1px solid #757575;width:220px;margin-left:-70px;padding:20px;line-height:1.3em;color:#757575;font-size:0.9em;">
<span style="font-weight:bold;text-transform:uppercase;color:#e41c39;">Services by Location</span>
<ul class="sidebar-links">
<li><a href="http://new.onehopeunited.org/services/services-in-northern-illinois-wisconsin/">Northern Illinois / Wisconsin</a></li>
<li><a href="http://new.onehopeunited.org/services/services-in-central-southern-illinois-missouri/">Central & Southern Illinois / Missouri</a></li>
<li><a href="http://new.onehopeunited.org/services/services-in-central-florida/">Central Florida Region</a></li>
</ul>

<a href="http://new.onehopeunited.org/about/" class="bluebutton" style="text-decoration:none;">ABOUT THE FEDERATION</a>
<br />
<br />
<div style="border-top:1px solid #ccc;padding-top:15px;margin-top:10px;">
<span class="redtext">FIND SERVICES IN YOUR AREA</span>
<br /><br />
<div style="margin-left:-20px;">
<img id="Image-Maps_8201208131652306" src="http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map.gif" usemap="#Image-Maps_8201208131652306" border="0" width="250" height="324" alt="" />
<map id="_Image-Maps_8201208131652306" name="Image-Maps_8201208131652306">
<area shape="rect" coords="0,0,250,124" href="http://new.onehopeunited.org/services/services-in-northern-illinois-wisconsin/" alt="" title=""   onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map-red.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map.gif';"  /> 

<area shape="rect" coords="0,125,250,230" href="http://new.onehopeunited.org/services/services-in-central-southern-illinois-missouri/" alt="" title="" onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map-yellow.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map.gif';"  />

<area shape="rect" coords="0,231,250,324" href="http://new.onehopeunited.org/services/services-in-central-florida/" alt="" title="" onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map-blue.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map.gif';"  />
</map>

</map>
</div>


</div>

</div>

				<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
					
<div class="entry-content" style="width:620px;float:right;margin-right:-70px;margin-top:-100px;">


		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>