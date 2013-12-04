<?php
/*
Template Name: Careers: Northern
*/
get_header(); ?>


<div id="primary">
			<div id="content" role="main">

<div style="float:left;border:1px solid #757575;height:100%;width:220px;margin-left:-70px;padding:20px;margin-bottom:20px;">


<span class="redtext" stlye="line-height:2em;">CAREERS BY REGIONS</span>
<br />
<ul>
<li><a href="http://new.onehopeunited.org/careers/northern/" class="graytext" style="font-weight:normal;">Northern Illinois / Wisconsin</a></li>
<li><a href="http://new.onehopeunited.org/careers/hudelson/" class="graytext" style="font-weight:normal;">Central & Southern Illinois / Missouri</a></li>
<li><a href="http://new.onehopeunited.org/careers/florida/" class="graytext" style="font-weight:normal;">Central Florida</a></li>
</ul>
<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">
<span class="redtext">FIND A JOB IN YOUR AREA</span>
<br /><br />

<div style="margin-left:-20px;">
<img id="Image-Maps_8201208131652306" src="http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map.gif" usemap="#Image-Maps_8201208131652306" border="0" width="250" height="324" alt="" />
<map id="_Image-Maps_8201208131652306" name="Image-Maps_8201208131652306">
<area shape="rect" coords="0,0,250,124" href="http://new.onehopeunited.org/careers/northern/" alt="" title=""   onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map-red.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map.gif';"  /> 

<area shape="rect" coords="0,125,250,230" href="http://new.onehopeunited.org/careers/hudelson/" alt="" title="" onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map-yellow.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map.gif';"  />

<area shape="rect" coords="0,231,250,324" href="http://new.onehopeunited.org/careers/florida/" alt="" title="" onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map-blue.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map.gif';"  />
</map>

</map>
</div>
</div>
</div>




<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	

					
<div class="entry-content" style="width:620px;margin-top:-74px;float:right;margin-right:-70px;">

<div style="border-top:1px solid #ccc;padding-top:5px;border-bottom:1px solid #ccc;padding-bottom:5px;margin-bottom:24px;">
<span class="redtext" style="font-size:1.3em;font-weight:normal;">CAREERS: </span> 
<span style="font-size:1.3em;font-weight:normal;"> Northern Illinois / Southern Wisconsin</span><br />
<a href="http://new.onehopeunited.org" class="graytext" style="font-weight:normal;">Home</a> > <a href="http://new.onehopeunited.org/careers/" class="graytext" style="font-weight:normal;">Careers</span></a> > <a href="http://new.onehopeunited.org/careers/<?php meta('job-region'); ?>" class="redtext">Northern Region</a></span>
</div> 
<div style="width:600px;height:100px;">

<img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/jobs-northern.jpg" style="float:left;margin-right:20px;">

<a href="http://new.onehopeunited.org/downloads/pdfs/summary_of_benefits.pdf"><img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/bwdonate.jpg" style="float:right;margin-right:10px;"></a>

<a href="http://new.onehopeunited.org/about/agency-promises/"><img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/bwfoster.jpg" style="float:right;margin-left:10px;margin-right:10px;"></a>

<a href="http://new.onehopeunited.org/about/"><img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/bwvolunteer.jpg" style="float:right;margin-left:10px;"></a>

</div>
<div style="">
	

	

	
	<div style="margin-top:15px;">
	<table class="job-table">
	<tr><th style="border-bottom:1px solid black;">Job Title</th><th style="border-bottom:1px solid black;">Job Location</th><th style="border-bottom:1px solid black;">Job Type</th></td>
	<?php $querystr = "
SELECT wposts.*
FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta
WHERE wposts.ID = wpostmeta.post_id
AND wpostmeta.meta_key = 'job-region'
AND wpostmeta.meta_value = 'Northern'
AND wposts.post_status = 'publish'
AND wposts.post_type = 'job_listings'
ORDER BY wposts.post_date DESC
";
$pageposts = $wpdb->get_results($querystr, OBJECT);
if ($pageposts):
foreach ($pageposts as $post):
setup_postdata($post); ?>

<tr>
<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td> <td><?php meta('job-listing-city'); ?>, <?php meta('job-listing-state1'); ?></td><td><?php meta('job-listing-duration'); ?></td>
</tr>

<?php endforeach; ?>
<?php endif; ?>
</table>
</div>
	</div>
<i>One Hope United does not discriminate on the basis of race, color, religion, sex, national origin, age, disability, veteran status or any other characteristic protected by law. One Hope United is an Equal Opportunity Employer and a Drug Free Workplace.</i>
				

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>