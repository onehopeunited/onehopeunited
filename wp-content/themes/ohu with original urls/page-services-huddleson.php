<?php
/*
Template Name: Services: Huddleson Specific Service
*/
?>

<?php get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

<div style="float:left;border:1px solid #757575;width:220px;margin-left:-70px;padding:20px;line-height:1.3em;color:#757575;font-size:0.9em;margin-bottom:30px;">
<span style="font-weight:bold;text-transform:uppercase;color:#e41c39;">Central & Southern Illinois / Missouri Services</span><br />
<ul class="sidebar-links">
<li><a href="http://new.onehopeunited.org/services/adoption/adoption-in-hudelson/">Adoption</a></li>
<li><a href="http://new.onehopeunited.org/services/foster-care/foster-care-in-southern-illinois-missouri/">Foster Care</a></li>
<li><a href="http://new.onehopeunited.org/services/residential-care/residential-care-in-central-southern-illinois-missouri-region/">Residential Care</a></li>
<li><a href="http://new.onehopeunited.org/services/family-support/family-support-in-central-southern-illinois-missouri/">Family Support</a></li>
<li><a href="http://new.onehopeunited.org/services/youth-services/youth-services-in-central-southern-illinois-missouri/">Youth Services</a></li>
<li><a href="http://new.onehopeunited.org/services/counseling/counseling-in-central-southern-illinois-missouri-region/">Counseling</a></li>
</ul>

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
					
<div class="entry-content" style="width:620px;float:right;margin-right:-70px;margin-top:-80px;">

<div style="border-top:1px solid #ccc;padding-top:5px;border-bottom:1px solid #ccc;padding-bottom:5px;margin-bottom:10px;">
<span class="redtext" style="font-size:0.8em;font-weight:normal;">SERVICES:</span><br />
<span style="font-size:1.3em;font-weight:normal;"><?php meta('job-listing-state1'); ?><?php the_title(); ?></span><br />
<span class="graytext" style="font-weight:normal;"><a href="http://new.onehopeunited.org/services/">Services</a> > <a href="http://new.onehopeunited.org/services/services-in-central-southern-illinois-missouri/">Southern Illinois & Central Missouri</a> > <a href="<?php the_permalink();?>"><?php meta('service-name'); ?></a></span>
</div> 

		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>