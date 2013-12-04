<?php
/**
 * The Template for displaying Single job postings
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary1">
			<div id="content1" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
					

<div class="ohu_sidebar1">


<span class="redtext" stlye="line-height:2em;">CAREERS BY REGIONS</span>
<br />
<ul>
<li><a href="http://onehopeunited.org/careers/northern/" class="graytext" style="font-weight:normal;">Northern Illinois / Wisconsin</a></li>
<li><a href="http://onehopeunited.org/careers/hudelson/" class="graytext" style="font-weight:normal;">Central & Southern Illinois / Missouri</a></li>
<li><a href="http://onehopeunited.org/careers/florida/" class="graytext" style="font-weight:normal;">Florida Region</a></li>
</ul>
<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">
<span class="redtext">FIND A JOB IN YOUR AREA</span>
<br /><br />

<div style="margin-left:-20px;">
<img id="Image-Maps_8201208131652306" src="http://onehopeunited.org/wp-content/themes/ohu/images/small-map.gif" usemap="#Image-Maps_8201208131652306" border="0" width="250" height="324" alt="" />
<map id="_Image-Maps_8201208131652306" name="Image-Maps_8201208131652306">
<area shape="rect" coords="0,0,250,124" href="http://onehopeunited.org/careers/northern/" alt="" title=""   onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-red.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map.gif';"  /> 

<area shape="rect" coords="0,125,250,230" href="http://onehopeunited.org/careers/hudelson/" alt="" title="" onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-yellow.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map.gif';"  />

<area shape="rect" coords="0,231,250,324" href="http://onehopeunited.org/careers/florida/" alt="" title="" onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-blue.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map.gif';"  />
</map>

</map>
</div>
</div>
</div>


<div class="entry-content1" style="margin-top:55px;">

<div style="border-top:1px solid #ccc;padding-top:5px;border-bottom:1px solid #ccc;padding-bottom:5px;">
<span class="redtext" style="font-size:1.3em;font-weight:normal;">CAREERS: </span> 
<span style="font-size:1.3em;font-weight:normal;"><?php $jobregion = get_post_meta($post->ID,'job-region',true);
if( $jobregion == 'Northern' ) { echo 'Northern Illinois / Wisconsin'; }
elseif( $jobregion == 'Hudelson' ) { echo 'Central & Southern Illinois / Wiscinsin'; }
elseif( $jobregion == 'Florida' ) { echo 'Florida'; }
?></span><br />
<a href="http://onehopeunited.org" class="graytext" style="font-weight:normal;">Home</a> > <a href="http://onehopeunited.org/careers/" class="graytext" style="font-weight:normal;">Careers</span></a> > <a href="http://onehopeunited.org/careers/<?php meta('job-region'); ?>" class="redtext"><?php meta('job-region'); ?> Region</a></span>
</div> 

<div class="entry-content" style="width:620px;float:right;margin-right:0px;margin-top:0px;">

<div style="margin-bottom:20px;">
<img src="http://onehopeunited.org/wp-content/themes/ohu/images/<?php $jobstate = get_post_meta($post->ID,'job-listing-state1',true);
if( $jobstate == 'Florida' ) { echo 'fl-jobs'; }
elseif( $jobstate == 'Missouri' ) { echo 'mo-jobs'; }
elseif( $jobstate == 'Wisconsin' ) { echo 'wi-jobs'; }
elseif( $jobstate == 'Illinois' ) { echo 'il-jobs'; }
?>.jpg" style="float:left;margin-right:20px;">


<a href="http://onehopeunited.org/downloads/pdfs/summary_of_benefits.pdf"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/bwdonate.jpg" style="float:right;margin-right:10px;"></a>

<img src="http://onehopeunited.org/wp-content/themes/ohu/images/bwfoster.jpg" style="float:right;margin-left:10px;margin-right:10px;">

<a href="http://onehopeunited.org/about/"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/bwvolunteer.jpg" style="float:right;margin-left:10px;"></a>

	
</div>
	

	
	<br /><br /><br /><br />
	
	<div style="margin-top:20px;padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:1px;border-radius:15px;background:#ecb94c;margin-bottom:20px;">
<table><tr><td style="line-height:1em;border-bottom:1px solid white;">
	<span class="redtext">POSITION</span> <?php the_title(); ?>
	</td></tr><tr><td style="line-height:1em;border-bottom:1px solid white;">
	<span class="redtext">CITY</span> <?php meta('job-listing-city'); ?>
	</td></tr><tr><td style="line-height:1em;border-bottom:1px solid white;">
	<span class="redtext">STATE</span> <?php meta('job-listing-state1'); ?>
	</td></tr><tr><td style="line-height:1em;border-bottom:1px solid white;">
	<span class="redtext">JOB TYPE</span> <?php meta('job-listing-duration'); ?>
	</td></tr><tr><td style="line-height:1em;border-bottom:1px solid white;">
	<span class="redtext">CONTACT</span> <a href="mailto:recruiter@onehopeunited.org">recruiter@onehopeunited.org</a></td></tr></table>
	</div>
	
		<span class="bluetext">DETAILS</span> <?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
		
		<b>Post Date:</b> <?php the_date(); ?><br /><br />
		
	<span style="color:gray;"><i>	One Hope United does not discriminate on the basis of race, color, religion, sex, national origin, age, disability, veteran status or any other characteristic protected by law.
		<br /><br />
One Hope United is an Equal Opportunity Employer and a Drug Free Workplace.</i></span><br /><br />
		
	</div><!-- .entry-content -->



		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>


</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>