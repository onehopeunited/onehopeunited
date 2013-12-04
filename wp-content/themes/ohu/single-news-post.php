    <?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

; ?>

<?php include ('header-single-news.php'); ?>




		<div id="primary1">
			<div id="content1" role="main">

<?php global $more;
$more = 0; ?>

<div class="ohu_sidebar1">
<div style="margin-bottom:5px;"><span class="redtext" stlye="line-height:2em;">NEWSFEED</span></div>
<img src="http://onehopeunited.org/wp-content/themes/ohu/images/white.gif" style="vertical-align:middle;"> <a href="http://onehopeunited.org/news/">Show All News</a><br />

<img src="http://onehopeunited.org/wp-content/themes/ohu/images/in-the-news-white.gif" style="vertical-align:middle;"> <a href="http://onehopeunited.org/news/in-the-news/" style="color:gray;">In The News</a><br />
<img src="http://onehopeunited.org/wp-content/themes/ohu/images/stories-of-hope-white.gif" style="vertical-align:middle;" style="color:gray;"> <a href="http://onehopeunited.org/news/stories-of-hope/" style="color:gray;">Stories of Hope</a><br />
<img src="http://onehopeunited.org/wp-content/themes/ohu/images/press-releases-white.gif" style="vertical-align:middle;"> <a href="http://onehopeunited.org/news/press-releases/" style="color:gray;">Press Releases</a><br />
<img src="http://onehopeunited.org/wp-content/themes/ohu/images/everyday-heroes-white.gif" style="vertical-align:middle;"> <a href="http://onehopeunited.org/news/everyday-heroes/" style="color:gray;">Everyday Heroes</a>

<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">
<b>MEDIA CONTACT:</b><br />
Fotena Zirps, Executive Vice President<br />
<a href="mailto:FZirps@onehopeunited.org">FZirps@onehopeunited.org</a><br />
850.212.6415</br></br>
Cassie Monroe, Communications<br />
<a href="mailto:CMonroe@onehopeunited.org">CMonroe@onehopeunited.org</a><br />
312.949.5651
</div>

<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">
<span class="redtext">FIND NEWS IN YOUR AREA</span>
<br /><br />

<div style="margin-left:-20px;">
<img id="Image-Maps_8201208131652306" src="http://onehopeunited.org/wp-content/themes/ohu/images/small-map-new.gif" usemap="#Image-Maps_8201208131652306" border="0" width="250" height="324" alt="" />
<map id="_Image-Maps_8201208131652306" name="Image-Maps_8201208131652306">
<area shape="rect" coords="0,0,250,124" href="http://onehopeunited.org/news/northern-illinois-wisconsin/" alt="" title=""   onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-red-new.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-new.gif';"  /> 

<area shape="rect" coords="0,125,250,230" href="http://onehopeunited.org/news/central-southern-illinois-missouri" alt="" title="" onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-yellow-new.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-new.gif';"  />

<area shape="rect" coords="0,231,250,324" href="http://onehopeunited.org/news/florida/" alt="" title="" onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-blue-new.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-new.gif';"  />
</map>

</map>
</div>

</div>


<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">

<b>OHU TWITTER FEED:</b>
<br />
<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 30000,
  width: 220,
  height: 300,
  theme: {
    shell: {
      background: '#ffffff',
      color: '#787878'
    },
    tweets: {
      background: '#ffffff',
      color: '#a1a1a1',
      links: '#0775eb'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    behavior: 'all'
  }
}).render().setUser('1HopeUnited').start();
</script>

</div>

</div>

					
<div class="entry-content1" style="margin-top:55px;">


<span class="redtext">ONE HOPE</span> <span class="bluetext">NEWSFEED</span> > <?php the_title();?>


<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;margin-bottom:10px;">
<span class="graytext">SORT BY REGION:</span>
</div>
<table width="550">
<tr>
<td>
<a href="http://onehopeunited.org/news/northern-illinois-wisconsin/" style="text-decoration:none;"><div class="redbutton" style="border-radius:10px;padding:10px;color:white;font-size:0.8em;width:140px;margin-right:10px;"><center>NORTHERN IL / WISC</center>
</div></a>
</td><td>
<a href="http://onehopeunited.org/news/central-southern-illinois-missouri/" style="text-decoration:none;"><div class="yellowbutton" style="border-radius:10px;padding:10px;color:black;font-size:0.8em;width:240px;margin-right:10px;"><center>CENTRAL & SOUTHERN IL / MISSOURI</center>
</div></a>
</td><td>
<a href="http://onehopeunited.org/news/florida/" style="text-decoration:none;"><div class="bluebutton" style="border-radius:10px;padding:10px;color:white;font-size:0.8em;width:120px;"><center>FLORIDA</center>
</div></a>
</td>
</tr>
</table>
<br />

<?php while (have_posts()) : the_post(); ?>

<div style="border:1px solid #c8c9ca;background:#f1f2f3;margin-bottom:20px;border-radius:7px;padding:15px;line-height:1.4em;">


<span style="color:#757575;font-size:0.8em;text-transform:uppercase;font-weight:bold;"><?php
if ( in_category('everyday-heroes') ) {
	echo '<img src="http://onehopeunited.org/wp-content/themes/ohu/images/everyday-heroes.gif" style="vertical-align:middle;"> Everyday Heroes';
} elseif ( in_category('in-the-news') ) {
	echo '<img src="http://onehopeunited.org/wp-content/themes/ohu/images/in-the-news.gif" style="vertical-align:middle;"> In The News';
} elseif ( in_category('press-releases') ) {
	echo '<img src="http://onehopeunited.org/wp-content/themes/ohu/images/press-releases.gif" style="vertical-align:middle;"> Press Releases';
} elseif ( in_category('stories-of-hope') ) {
	echo '<img src="http://onehopeunited.org/wp-content/themes/ohu/images/stories-of-hope.gif" style="vertical-align:middle;"> Stories of Hope';
}
?> | </span>

<span style="color:#d03b3e;font-size:0.8em;font-weight:bold;"><?php
if ( in_category('florida') ) {
	echo 'Florida';
} elseif ( in_category('hudelson') ) {
	echo 'Central & Southern IL / Missouri';
} elseif ( in_category('northern') ) {
	echo 'Northern Illinois / Wisconsin';
}
?></span>


<br />

<a href="<?php the_permalink(); ?>" style="color:black;font-weight:bold;"><b><?php the_title(); ?></b></a><br />
Published <?php the_time('F j, Y'); ?><br /><br />
<?php the_content(''); ?>

<?php comments_number( '0 comments', '1 comment', '% comments' ); ?>   &nbsp;&nbsp;  <a href="https://twitter.com/share?url=http://onehopeunited.org/?p=<?php the_ID(); ?>&text=<?php the_title(); ?> -" target="_blank"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/twitter.png"></a> &nbsp;&nbsp; <a title="Share this on Facebook" target="_blank" href="http://www.facebook.com/sharer.php?s=100&p[url]=<?php the_permalink() ?>&p[images][0]=<?php $key="thumbnail"; echo get_post_meta($post->ID, $key, true); ?>&p[title]=<?php the_title(); ?>&p[summary]=<?php echo excerpt(30); ?>"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/facebook.png"></a></div>

<?php endwhile; ?>
<?php twentyeleven_content_nav( 'nav-below' ); ?>

	<?php comments_template( '', true ); ?>



			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>