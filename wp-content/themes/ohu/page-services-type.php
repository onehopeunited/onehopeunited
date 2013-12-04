<?php
/*
Template Name: Services: Services: Main Type Page
*/
?>

<?php get_header(); ?>

		<div id="primary1">
			<div id="content1" role="main">

<div class="ohu_sidebar1">
<span style="font-weight:bold;text-transform:uppercase;color:#e41c39;">One Hope United Services</span><br />
<ul class="sidebar-links">
<li><a href="http://onehopeunited.org/services/adoption/">Adoption</a></li>
<li><a href="http://onehopeunited.org/services/foster-care/">Foster Care</a></li>
<li><a href="http://onehopeunited.org/services/residential-care/">Residential Care</a></li>
<li><a href="http://onehopeunited.org/services/family-support/">Family Support</a></li>
<li><a href="http://onehopeunited.org/services/youth-services/">Youth Services</a></li>
<li><a href="http://onehopeunited.org/services/counseling/">Counseling</a></li>
<li><a href="http://onehopeunited.org/services/early-care-and-education/">Early Childhood Centers</a></li>
</ul>

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
					
<div class="entry-content1" style="margin-top:0px;">

<div style="border-top:1px solid #ccc;padding-top:5px;border-bottom:1px solid #ccc;padding-bottom:5px;margin-bottom:10px;">
<span class="redtext" style="font-size:0.8em;font-weight:normal;">SERVICES:</span><br />
<span style="font-size:1.3em;font-weight:normal;"><?php meta('job-listing-state1'); ?><?php the_title(); ?></span><br />
<span class="graytext" style="font-weight:normal;"><a href="http://onehopeunited.org/services/">Services</a> > <a href="<?php the_permalink();?>"><?php meta('service-name'); ?></a></span>
</div> 

		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>