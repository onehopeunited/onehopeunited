<?php
/*
Template Name: Blue Ribbon Month Subpage
*/
?>

<?php get_header(); ?>

		<div id="primary1">
			<div id="content1" role="main">

<div style="float:left;width:270px;padding-right:30px;border-right:1px solid #ccc;margin-top:50px;margin-bottom:30px;height:100%;">
<div style="border-top:1px solid #ccc;margin-right:-30px;margin-bottom:15px;">
<img src="http://onehopeunited.org/wp-content/themes/ohu/images/get-involved.gif">
</div>
<img src="http://onehopeunited.org/wp-content/themes/ohu/images/red-arrow.png">  <a href="/blue-ribbon-month-host-an-event/" style="color:#000">Host a Fundraiser</a><br />
<img src="http://onehopeunited.org/wp-content/themes/ohu/images/red-arrow.png">  <a href="/calendar/" style="color:#000">Calendar</a><br />
<img src="http://onehopeunited.org/wp-content/themes/ohu/images/red-arrow.png">  <a href="/stories/" style="color:#000">Stories</a><br />
<img src="http://onehopeunited.org/wp-content/themes/ohu/images/red-arrow.png">  <a href="/blue-ribbon-month-spread-the-word/" target="" style="color:#000">Spread the Word</a><br />
<img src="http://onehopeunited.org/wp-content/themes/ohu/images/red-arrow.png">  <a href="https://donate.onehopeunited.org/goblue" style="color:#000">Donate Now!</a>

<table class="" style="margin-top:5px;">
<tr>
<td style="width:50px;height:80px;"><a href="https://donate.onehopeunited.org/blue-ribbon-month-2013"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/yellow-icon.png"></a></td><td><span style="color:#676767;">DOLLARS <br /><b>Raised</b></span></td><td><center>=</center></td><td><span style="color:#e6a813"><?php query_posts( 'page_id=3526' );?>
    <?php while ( have_posts() ) : the_post(); ?>
   <?php echo get_post_meta($post->ID, 'dollars_raised', true) ?>
    <?php endwhile; ?>
<?php wp_reset_query(); ?></span>






</td>
</tr>

<tr>
<td style="width:50px;height:80px;"><a href="http://onehopeunited.org/blue-ribbon-month-host-an-event/"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/red-icon.png"></a></td><td width=70><span style="color:#676767;">EVENTS <br /><b>Hosted</b></span></td><td width=20><center>=</center></td><td><span style="color:#d03b3e"><?php query_posts( 'page_id=3526' );?>
    <?php while ( have_posts() ) : the_post(); ?>
 <?php echo get_post_meta($post->ID, 'events_hosted', true) ?>
    <?php endwhile; ?>
<?php wp_reset_query(); ?></span></td>
</tr>

<tr>
<td style="width:56px;height:80px;"><a href="http://onehopeunited.org/blue-ribbon-month-events/"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/blue-icons.png"></a></td><td><span style="color:#676767;">DONORS <br /><b>Engaged</b></span></td><td><center>=</center></td><td><span style="color:#3993c4">
<?php query_posts( 'page_id=3526' );?>
    <?php while ( have_posts() ) : the_post(); ?>
 <?php echo get_post_meta($post->ID, 'donor_count', true) ?>
    <?php endwhile; ?>
<?php wp_reset_query(); ?>

</span></td>
</tr>
</table>





<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: '#1hope4kids',
  rpp: 30,
  interval: 5000,
  title: 'Latest #1hope4kids Tweets',
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


		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->


		</div><!-- #primary -->

<?php get_footer(); ?>