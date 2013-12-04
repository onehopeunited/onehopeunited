<?php
/*
Template Name: Blue Ribbon Month New Sidebar
*/
?>

<?php include 'header.php'; ?>

		<div id="primary1">
			<div id="content1" role="main">

<div style="float:left;width:270px;padding-right:30px;border-right:1px solid #ccc;margin-top:50px;margin-bottom:30px;height:4000px;">
<div style="border-top:1px solid #ccc;margin-right:-30px;margin-bottom:15px;">
<img src="http://onehopeunited.org/wp-content/themes/ohu/images/get-involved.gif">
</div>
<img src="http://onehopeunited.org/wp-content/themes/ohu/images/red-arrow.png">  <a href="http://onehopeunited.org/blue-ribbon-month-host-an-event/" style="color:#000">Host a Fundraiser</a><br />
<img src="http://onehopeunited.org/wp-content/themes/ohu/images/red-arrow.png">  <a href="http://onehopeunited.org/blue-ribbon-month-events/" style="color:#000">Find an Event</a><br />
<img src="http://onehopeunited.org/wp-content/themes/ohu/images/red-arrow.png">  <a href="https://donate.onehopeunited.org/blue-ribbon-month-2013" style="color:#000">Donate Now</a><br />
<img src="http://onehopeunited.org/wp-content/themes/ohu/images/red-arrow.png"> <a href="http://onehopeunited.org/blue-ribbon-month-spread-the-word/" target="" style="color:#000">Spread the Word</a> 

<table class="" style="margin-top:5px;">
<tr>
<td style="width:50px;height:80px;"><a href="https://donate.onehopeunited.org/blue-ribbon-month-2013"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/yellow-icon.png"></a></td><td><span style="color:#676767;">DOLLARS <br /><b>Raised</b></span></td><td><center>=</center></td><td><span style="color:#e6a813"><?php echo get_post_meta($post->ID, 'dollars_raised', true) ?></span></td>
</tr>

<tr>
<td style="width:50px;height:80px;"><a href="http://onehopeunited.org/blue-ribbon-month-host-an-event/"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/red-icon.png"></a></td><td width=70><span style="color:#676767;">EVENTS <br /><b>Hosted</b></span></td><td width=20><center>=</center></td><td><span style="color:#d03b3e"><?php echo get_post_meta($post->ID, 'events_hosted', true) ?></span></td>
</tr>

<tr>
<td style="width:56px;height:80px;"><a href="http://onehopeunited.org/blue-ribbon-month-events/"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/blue-icons.png"></a></td><td><span style="color:#676767;">DONORS <br /><b>Engaged</b></span></td><td><center>=</center></td><td><span style="color:#3993c4"><?php echo get_post_meta($post->ID, 'donor_count', true) ?></span></td>
</tr>
</table>








<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: 'from:@1hopeunited',
  rpp: 30,
  interval: 5000,
  title: 'Latest @1hopeunited Tweets',
  subject: 'Updated Live',
  width: 250,
  height: 300,
  theme: {
    shell: {
      background: '#0096d6',
      color: '#fff'
    },
    tweets: {
      background: '#ffffff',
      color: '#000000',
      links: '#1985b5'
    }
  },
  features: {
    scrollbar: true,
    loop: true,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: true,
    toptweets: true,
    behavior: 'all'
  }
}).render().start();
</script>


</div>

				<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
					
<div class="entry-content1" style="margin-top:0px;">


		<?php the_content(); ?><br /><br />
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->

<div style="width:610px;height:300px;margin-left:300px;">
<div style="float:left;width:270px;margin-left:0px;margin-top:0px;border-top:1px solid #ccc;padding-right:38px;">

<div style="text-align:center; width:269px; margin-left:20px;margin-top:10px;">
<img id="Image-Maps_5201303191438091" src="http://onehopeunited.org/wp-content/themes/ohu/images/action-steps.png" usemap="#Image-Maps_5201303191438091" border="0" width="269" height="418" alt="" />
<map id="_Image-Maps_5201303191438091" name="Image-Maps_5201303191438091">
<area shape="rect" coords="0,0,129,109" href="http://onehopeunited.org/blue-ribbon-month-host-an-event/" alt="Host a Fundraiser" title="Host an Event"    />
<area shape="rect" coords="135,13,264,156" href="http://onehopeunited.org/blue-ribbon-month-events/" alt="Find an Event" title="Find an Event"    />
<area shape="rect" coords="0,158,182,287" href="https://donate.onehopeunited.org/blue-ribbon-month-2013" alt="Donate Now" title="Donate Now"    />
<area shape="rect" coords="32,293,264,413" href="http://onehopeunited.org/blue-ribbon-month-spread-the-word/" alt="Spread the Word" title="Spread the Word"    />
<area shape="rect" coords="267,416,269,418" href="http://www.image-maps.com/index.php?aff=mapped_users_5201303191438091" alt="Image Map" title="Image Map" />
</map>
<!-- Image map text links - End - -->

</div>
            

</div>
<div style="float:right;width:300px;border-left:1px solid #ccc;height:465px;border-top:1px solid #ccc;">

<img src="http://onehopeunited.org/wp-content/themes/ohu/images/latest-news2.jpg" style="margin-left:85px">

<br /><br />

<table style="width:300px;margin-bottom:20px;min-height:120px;margin-left:-5px;">
<tr>


<td>
<?php
global $post;
$args = array( 'numberposts' => 2, 'offset'=> 0, 'category' => 4 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>
<td style="vertical-align:top;padding-left:30px;" valign="baseline">
<a href="<?php the_permalink(); ?>">


<?php if ( get_post_meta($post->ID, 'thumbnail', true) ) { ?>
<img src="<?php echo get_post_meta($post->ID, 'thumbnail', true) ?>" style="width:115px;height:76px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">
<?php } else { ?>
<?php
if ( in_category('everyday-heroes') ) {
	echo '<img src="http://onehopeunited.org/wp-content/themes/ohu/images/everyday-heroes-default.gif" style="width:100px;height:66px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">';
} elseif ( in_category('in-the-news') ) {
	echo '<img src="http://onehopeunited.org/wp-content/themes/ohu/images/in-the-news-default.gif" style="width:115px;height:66px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">';
} elseif ( in_category('press-releases') ) {
	echo '<img src="http://onehopeunited.org/wp-content/themes/ohu/images/press-release-default.gif" style="width:100px;height:66px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">';
} elseif ( in_category('stories-of-hope') ) {
	echo '<img src="http://onehopeunited.org/wp-content/themes/ohu/images/stories-of-hope-default.gif" style="width:100px;height:66px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">';
}
?>
<?php } ?>

</a>



	<a href="<?php the_permalink(); ?>" style="font-size:0.9em;"><?php the_title(); ?></a>
	</td>
<?php endforeach; ?>
</tr>
</table>


<table style="width:300px;margin-bottom:20px;min-height:120px;margin-left:-5px;">
<tr>
<?php
global $post;
$args = array( 'numberposts' => 2, 'offset'=> 2, 'category' => 4 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>
<td style="vertical-align:top;padding-left:30px;" valign="baseline">
<a href="<?php the_permalink(); ?>">


<?php if ( get_post_meta($post->ID, 'thumbnail', true) ) { ?>
<img src="<?php echo get_post_meta($post->ID, 'thumbnail', true) ?>" style="width:115px;height:76px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">
<?php } else { ?>
<?php
if ( in_category('everyday-heroes') ) {
	echo '<img src="http://onehopeunited.org/wp-content/themes/ohu/images/everyday-heroes-default.gif" style="width:100px;height:66px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">';
} elseif ( in_category('in-the-news') ) {
	echo '<img src="http://onehopeunited.org/wp-content/themes/ohu/images/in-the-news-default.gif" style="width:115px;height:66px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">';
} elseif ( in_category('press-releases') ) {
	echo '<img src="http://onehopeunited.org/wp-content/themes/ohu/images/press-release-default.gif" style="width:100px;height:66px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">';
} elseif ( in_category('stories-of-hope') ) {
	echo '<img src="http://onehopeunited.org/wp-content/themes/ohu/images/stories-of-hope-default.gif" style="width:100px;height:66px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">';
}
?>
<?php } ?>

</a>



	<a href="<?php the_permalink(); ?>" style="font-size:0.9em;"><?php the_title(); ?></a>
	</td>
<?php endforeach; ?>
</tr>
</table>


</div>

</div>

		</div><!-- #primary -->

<?php get_footer(); ?>