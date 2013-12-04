<?php
/*
Template Name: Careers: Northern
*/
get_header(); ?>


<div id="primary1">
			<div id="content1" role="main">

<div class="ohu_sidebar1">


<span class="redtext" stlye="line-height:2em;">CAREERS BY REGIONS</span>
<br />
<ul>
<li><a href="<?php echo get_bloginfo('url');?>/careers/northern/" class="graytext" style="font-weight:normal;">Northern Illinois / Wisconsin</a></li>
<li><a href="<?php echo get_bloginfo('url');?>/careers/hudelson/" class="graytext" style="font-weight:normal;">Central & Southern Illinois / Missouri</a></li>
<li><a href="<?php echo get_bloginfo('url');?>/careers/florida/" class="graytext" style="font-weight:normal;">Florida Region</a></li>
</ul>
<span class="redtext" style="font-size:0.9em;">EMPLOYEE REFERRAL PROGRAM</span>
<br />
<ul class="sidebar-links">
<li><a href="<?php echo get_bloginfo('url');?>/employee-referral-program/">Employee Referral Program</a></li>
</ul>

<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">
<span class="redtext">FIND A JOB IN YOUR AREA</span>
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




<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	

					
<div class="entry-content1" style="margin-top:0px;">

<div style="border-top:1px solid #ccc;padding-top:5px;border-bottom:1px solid #ccc;padding-bottom:5px;margin-bottom:24px;">
<span class="redtext" style="font-size:1.3em;font-weight:normal;">CAREERS: </span> 
<span style="font-size:1.3em;font-weight:normal;"> Northern Illinois / Southern Wisconsin</span><br />
<a href="<?php echo get_bloginfo('url');?>" class="graytext" style="font-weight:normal;">Home</a> > <a href="<?php echo get_bloginfo('url');?>/careers/" class="graytext" style="font-weight:normal;">Careers</span></a> > <a href="<?php echo get_bloginfo('url');?>/careers/<?php meta('job-region'); ?>" class="redtext">Northern Region</a></span>
</div> 
<div style="width:600px;height:100px;">

<img src="<?php echo get_bloginfo('url');?>/wp-content/themes/ohu/images/jobs-northern.jpg" style="float:left;margin-right:20px;">

<a href="<?php echo get_bloginfo('url');?>/downloads/pdfs/summary_of_benefits.pdf"><img src="<?php echo get_bloginfo('url');?>/wp-content/themes/ohu/images/bwdonate.jpg" style="float:right;margin-right:10px;"></a>

<a href="<?php echo get_bloginfo('url');?>/about/agency-promises/"><img src="<?php echo get_bloginfo('url');?>/wp-content/themes/ohu/images/bwfoster.jpg" style="float:right;margin-left:10px;margin-right:10px;"></a>

<a href="<?php echo get_bloginfo('url');?>/about/"><img src="<?php echo get_bloginfo('url');?>/wp-content/themes/ohu/images/bwvolunteer.jpg" style="float:right;margin-left:10px;"></a>

</div>
<div style="">
	<div style="margin-top:15px;">
	<table class="job-table">
	<tr><th style="border-bottom:1px solid black;">Job Title</th><th style="border-bottom:1px solid black;">Job Location</th><th style="border-bottom:1px solid black;">Job Type</th></tr>
        <?php
        $availableCities = $wpdb->get_results(
            "SELECT DISTINCT meta_value FROM wp_postmeta
                JOIN wp_posts ON wp_postmeta.post_id=wp_posts.ID
                WHERE wp_postmeta.meta_key='job-listing-city'
                    AND wp_posts.post_status = 'publish'
                    AND wp_posts.post_type = 'job_listings'
                    AND wp_posts.ID IN (SELECT ID
                    FROM wp_posts, wp_postmeta
                    WHERE wp_posts.ID = wp_postmeta.post_id
                    AND wp_postmeta.meta_key = 'job-region'
                    AND wp_postmeta.meta_value = 'Northern'
                    AND wp_posts.post_status = 'publish'
                    AND wp_posts.post_type = 'job_listings')
                ORDER BY wp_postmeta.meta_value ASC;", OBJECT);

        $cityList = array();

        foreach ($availableCities as $city) {
            $val = $city->meta_value;
            $cityList[] = $wpdb->get_results(
                "SELECT wposts.*
                FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta
                WHERE wposts.ID = wpostmeta.post_id
                AND wpostmeta.meta_key = 'job-listing-city'
                AND wpostmeta.meta_value = '$val'
                AND wposts.post_status = 'publish'
                AND wposts.post_type = 'job_listings'
                ORDER BY wposts.post_date DESC", OBJECT);
        }

        if ($cityList):
            foreach ($cityList as $city):
                foreach ($city as $post):
                    setup_postdata($post); ?>
                    <tr>
                        <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td> <td><?php meta('job-listing-city'); ?>, <?php meta('job-listing-state1'); ?></td><td><?php meta('job-listing-duration'); ?></td>
                    </tr>

                <?php endforeach; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</div>
	</div>
<i>One Hope United does not discriminate on the basis of race, color, religion, sex, national origin, age, disability, veteran status or any other characteristic protected by law. One Hope United is an Equal Opportunity Employer and a Drug Free Workplace.</i>
				

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>