<?php
/*
Template Name: Careers Referrals
*/
get_header(); ?>


<div id="primary1">
			<div id="content1" role="main">

<div class="ohu_sidebar1">


<span class="redtext" stlye="line-height:2em;">CAREERS BY REGIONS</span>
<br />
<ul class="sidebar-links">
<li><a href="http://onehopeunited.org/careers/northern/">Northern Illinois / Wisconsin</a></li>
<li><a href="http://onehopeunited.org/careers/hudelson/">Central & Southern Illinois / Missouri</a></li>
<li><a href="http://onehopeunited.org/careers/florida/">Florida Region</a></li>
</ul>
<span class="redtext" style="font-size:0.9em;">EMPLOYEE REFERRAL PROGRAM</span>
<br />
<ul class="sidebar-links">
<li><a href="http://onehopeunited.org/employee-referral-program/">Employee Referral Program</a></li>
</ul>
<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">
<span class="redtext">FIND A JOB IN YOUR AREA</span>
<br /><br />

<div style="margin-left:-20px;">
<img id="Image-Maps_8201208131652306" src="http://onehopeunited.org/wp-content/themes/ohu/images/small-map-new.gif" usemap="#Image-Maps_8201208131652306" border="0" width="250" height="324" alt="" />
<map id="_Image-Maps_8201208131652306" name="Image-Maps_8201208131652306">
<area shape="rect" coords="0,0,250,124" href="http://onehopeunited.org/careers/northern/" alt="" title=""   onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-red-new.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-new.gif';"  /> 

<area shape="rect" coords="0,125,250,230" href="http://onehopeunited.org/careers/hudelson/" alt="" title="" onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-yellow-new.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-new.gif';"  />

<area shape="rect" coords="0,231,250,324" href="http://onehopeunited.org/careers/florida/" alt="" title="" onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-blue-new.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-new.gif';"  />
</map>

</map>
</div>
</div>
</div>

				<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
					
<div class="entry-content1" style="margin-top:0px;">




<div style="margin-top:10px;width:615px;">





		<?php the_content(); ?>

	
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div>
<?php get_footer(); ?>