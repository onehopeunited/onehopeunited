<?php
/*
Template Name: Blue Ribbon Month Calendar
*/
get_header(); ?>


<div id="primary1">
    <div id="content1" role="main">

        <div style="float:left;width:300px;/*width:270px;padding-right:30px;*/border-right:1px solid #ccc;margin-top:50px;margin-bottom:30px;height:100%;">
            <div style="border-top:1px solid #ccc;/*margin-right:-30px;*/margin-bottom:15px;">
                <img src="http://onehopeunited.org/wp-content/themes/ohu/images/get-involved.gif">
                <a href="/blue-ribbon-month/"><img class="back-btn" src="/wp-content/themes/ohu/images/goblue/back-button.png" alt="go back"></a>
            </div>
            <img src="http://onehopeunited.org/wp-content/themes/ohu/images/red-arrow.png">  <a href="/blue-ribbon-month-host-an-event/" style="color:#000">Host a Fundraiser</a><br />
            <img src="http://onehopeunited.org/wp-content/themes/ohu/images/red-arrow.png">  <a href="/calendar/" style="color:#000">Calendar</a><br />
            <img src="http://onehopeunited.org/wp-content/themes/ohu/images/red-arrow.png">  <a href="/stories/" style="color:#000">Stories</a><br />
            <img src="http://onehopeunited.org/wp-content/themes/ohu/images/red-arrow.png">  <a href="/blue-ribbon-month-spread-the-word/" target="" style="color:#000">Spread the Word</a><br />
            <img src="http://onehopeunited.org/wp-content/themes/ohu/images/red-arrow.png">  <a href="https://donate.onehopeunited.org/goblue" style="color:#000">Donate Now!</a>

<!--            <table class="" style="margin-top:5px;">-->
<!--                <tr height="20px">-->
<!--                    <td style="padding-left:13px;" colspan="4"><span style="position:absolute; margin-top:0;">Goal $200,000 dollars</span></td>-->
<!--                </tr>-->
<!---->
<!--                <tr>-->
<!--                    <td style="width:50px;height:80px;"><a href="https://donate.onehopeunited.org/blue-ribbon-month-2013"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/yellow-icon.png"></a></td><td><span style="color:#676767;">DOLLARS <br /><b>Raised</b></span></td><td><center>=</center></td><td><span style="color:#e6a813">--><?php //query_posts( 'page_id=3526' );?>
<!--                            --><?php //while ( have_posts() ) : the_post(); ?>
<!--                                --><?php //echo get_post_meta($post->ID, 'dollars_raised', true) ?>
<!--                            --><?php //endwhile; ?>
<!--                            --><?php //wp_reset_query(); ?><!--</span>-->
<!--                    </td>-->
<!--                </tr>-->
<!---->
<!--                <tr height="20px">-->
<!--                    <td style="padding-left:30px;" colspan="4"><span style="position:absolute; margin-top:0;">Goal 65 events</span></td>-->
<!--                </tr>-->
<!---->
<!--                <tr>-->
<!--                    <td style="width:50px;height:80px;"><a href="http://onehopeunited.org/blue-ribbon-month-host-an-event/"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/red-icon.png"></a></td><td width=70><span style="color:#676767;">EVENTS <br /><b>Hosted</b></span></td><td width=20><center>=</center></td><td><span style="color:#d03b3e">--><?php //query_posts( 'page_id=3526' );?>
<!--                        --><?php //while ( have_posts() ) : the_post(); ?>
<!--                            --><?php //echo get_post_meta($post->ID, 'events_hosted', true) ?>
<!--                        --><?php //endwhile; ?>
<!--                        --><?php //wp_reset_query(); ?><!--</span>-->
<!--                    </td>-->
<!--                </tr>-->
<!---->
<!--                <tr height="20px">-->
<!--                    <td style="padding-left:29px;" colspan="4"><span style="position:absolute; margin-top:0;">Goal 750 donors</span></td>-->
<!--                </tr>-->
<!---->
<!--                <tr>-->
<!--                    <td style="width:56px;height:80px;"><a href="http://onehopeunited.org/blue-ribbon-month-events/"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/blue-icons.png"></a></td><td><span style="color:#676767;">DONORS <br /><b>Engaged</b></span></td><td><center>=</center></td><td><span style="color:#3993c4">-->
<!--                        --><?php //query_posts( 'page_id=3526' );?>
<!--                        --><?php //while ( have_posts() ) : the_post(); ?>
<!--                        --><?php //echo get_post_meta($post->ID, 'donor_count', true) ?>
<!--                        --><?php //endwhile; ?>
<!--                        --><?php //wp_reset_query(); ?><!--</span>-->
<!--                    </td>-->
<!--                </tr>-->
<!---->
<!--            </table>-->
<!---->
<!--            <div class="download-kit">-->
<!--                <span><a href="mailto:Goblue@onehopeunited.org">Have Questions? Contact Us </a></span>-->
<!--                <a href="/wp-content/uploads/2014/03/OHU_GoBlue_CampaignKit_2014.pdf"><img src="/wp-content/themes/ohu/images/goblue/download-kit-01.jpg" alt="download GoBlue Campaign Kit"/></a>-->
<!--            </div>-->

            <div>
                <br />
                <a class="twitter-timeline" width="300" height="450"  href="https://twitter.com/1hopeunited"  data-widget-id="472036111640821760">Tweets by @1hopeunited</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>

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

                <div class="entry-content1" style="margin-top:50px;">

                <!--content goes here blue-ribbon-month calendar page-->
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                    <?php remove_filter ('the_content', 'wpautop'); the_content(); ?>
                <?php endwhile; ?>
                <!--content goes here blue-ribbon-month calendar page-->

                <!--START events-list COMMUNITY PARNTER EVENTS-->
<!--                <div class="events-list">-->
<!--                    <br />-->
<!--                    <div  style="text-align:center;">-->
<!--                        <span style="font-size:1.3em;color:#2f571a;font-weight:bold;">Community Partner Events</span>-->
<!--                    </div>-->
<!--                    <br />-->
<!--                    <hr>-->
<!--                    <table style="table-layout:fixed;margin-bottom:30px;margin-top:-25px;width:620px">-->
<!---->
<!--                        <colgroup>-->
<!--                            <col style="width: 206px">-->
<!--                            <col style="width: 206px">-->
<!--                            <col style="width: 206px">-->
<!--                        </colgroup>-->
<!---->
<!--                        <tr>-->
<!--                            <td style="height:40px;border-right:1px solid #ccc;padding-top:10px;text-align:center;"><span style="color:#d03b3e;font-size:15px;font-weight:bold;">Northern Illinois/Wisconsin Events</span></td>-->
<!---->
<!--                            <td style="height:40px;border-right:1px solid #ccc;padding-top:10px;text-align:center;"><span style="color:#e6a813;font-size:15px;font-weight:bold;">Central & Southern Illinois/Missouri Events</span></td>-->
<!---->
<!--                            <td style="height:40px;padding-top:10px;text-align:center;"><span style="color:#3993c4;font-size:15px;font-weight:bold;">Florida Events</span></td>-->
<!---->
<!--                        </tr>-->
<!---->
<!--                        <tr>-->
<!--                            <td style="border-right:1px solid #ccc;vertical-align:top;">-->
<!--                                --><?php
//                                global $post;
//                                $args = array( 'numberposts' => 30, 'offset'=> 0, 'category' => 39 );
//                                $myposts = get_posts( $args );
//                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
<!---->
<!--                                    <table style="padding:10px;" class="--><?php //echo get_post_meta($post->ID, 'highlight', true) ?><!--">-->
<!--                                        <tr>-->
<!--                                            <td style="padding-right:5px;">-->
<!--                                                <div class="homepage-calendar-stub---><?php //echo get_post_meta($post->ID, 'region', true) ?><!--">-->
<!--                                                    <div class="calendar-stub-top"><center>--><?php //echo get_post_meta($post->ID, 'month', true) ?><!--</center></div>-->
<!--                                                    <center>--><?php //echo get_post_meta($post->ID, 'day', true) ?><!--</center>-->
<!--                                                </div>-->
<!---->
<!---->
<!--                                            </td>-->
<!--                                            <td>-->
<!--                                                <b>--><?php //the_title(); ?><!--</b><br />-->
<!---->
<!--                                                --><?php //echo get_post_meta($post->ID, 'additional-info', true) ?><!--<br />-->
<!--                                                <span style="font-size:0.8em;"><a href="--><?php //the_permalink(); ?><!--">MORE DETAILS ></a></span>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                    </table>-->
<!---->
<!--                                --><?php //endforeach; ?>
<!--                            </td>-->
<!---->
<!--                            <td style="border-right:1px solid #ccc;vertical-align:top;">-->
<!--                                --><?php
//                                global $post;
//                                $args = array( 'numberposts' => 30, 'offset'=> 0, 'category' => 40 );
//                                $myposts = get_posts( $args );
//                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
<!---->
<!--                                    <table style="padding:10px;">-->
<!--                                        <tr>-->
<!--                                            <td style="padding-right:5px;">-->
<!--                                                <div class="homepage-calendar-stub---><?php //echo get_post_meta($post->ID, 'region', true) ?><!--">-->
<!--                                                    <div class="calendar-stub-top"><center>--><?php //echo get_post_meta($post->ID, 'month', true) ?><!--</center></div>-->
<!--                                                    <center>--><?php //echo get_post_meta($post->ID, 'day', true) ?><!--</center>-->
<!--                                                </div>-->
<!--                                            </td>-->
<!--                                            <td>-->
<!---->
<!--                                                <b>--><?php //the_title(); ?><!--</b><br />-->
<!---->
<!--                                                --><?php //echo get_post_meta($post->ID, 'additional-info', true) ?><!--<br />-->
<!--                                                <span style="font-size:0.8em;"><a href="--><?php //the_permalink(); ?><!--">MORE DETAILS ></a></span>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                    </table>-->
<!---->
<!--                                --><?php //endforeach; ?>
<!--                            </td>-->
<!---->
<!--                            <td style="vertical-align:top;">-->
<!---->
<!--                                --><?php
//                                global $post;
//                                $args = array( 'numberposts' => 30, 'offset'=> 0, 'category' => 41 );
//                                $myposts = get_posts( $args );
//                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
<!---->
<!--                                    <table style="padding:10px;">-->
<!--                                        <tr>-->
<!--                                            <td style="padding-right:5px;">-->
<!--                                                <div class="homepage-calendar-stub---><?php //echo get_post_meta($post->ID, 'region', true) ?><!--">-->
<!--                                                    <div class="calendar-stub-top"><center>--><?php //echo get_post_meta($post->ID, 'month', true) ?><!--</center></div>-->
<!--                                                    <center>--><?php //echo get_post_meta($post->ID, 'day', true) ?><!--</center>-->
<!--                                                </div>-->
<!---->
<!---->
<!--                                            </td>-->
<!--                                            <td>-->
<!--                                                <b>--><?php //the_title(); ?><!--</b><br />-->
<!---->
<!--                                                --><?php //echo get_post_meta($post->ID, 'additional-info', true) ?><!--<br />-->
<!--                                                <span style="font-size:0.8em;"><a href="--><?php //the_permalink(); ?><!--">MORE DETAILS ></a></span>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                    </table>-->
<!---->
<!--                                --><?php //endforeach; ?>
<!---->
<!--                            </td></tr></table>-->
<!---->
<!--                </div>-->
                <!--END events-list COMMUNITY PARNTER EVENTS-->

                <!--START events-list PROMOTIONS-->
<!--                <div class="events-list">-->
<!--                    <br />-->
<!--                    <div  style="text-align:center;">-->
<!--                        <span style="font-size:1.3em;color:#2f571a;font-weight:bold;">Promotions</span>-->
<!--                    </div>-->
<!--                    <br />-->
<!--                    <hr>-->
<!--                    <table style="table-layout:fixed;margin-bottom:30px;margin-top:-25px;width:620px">-->
<!---->
<!--                        <colgroup>-->
<!--                            <col style="width: 206px">-->
<!--                            <col style="width: 206px">-->
<!--                            <col style="width: 206px">-->
<!--                        </colgroup>-->
<!---->
<!--                        <tr>-->
<!--                            <td style="height:40px;border-right:1px solid #ccc;padding-top:10px;text-align:center;"><span style="color:#d03b3e;font-size:15px;font-weight:bold;">Northern Illinois/Wisconsin Events</span></td>-->
<!---->
<!--                            <td style="height:40px;border-right:1px solid #ccc;padding-top:10px;text-align:center;"><span style="color:#e6a813;font-size:15px;font-weight:bold;">Central & Southern Illinois/Missouri Events</span></td>-->
<!---->
<!--                            <td style="height:40px;padding-top:10px;text-align:center;"><span style="color:#3993c4;font-size:15px;font-weight:bold;">Florida Events</span></td>-->
<!---->
<!--                        </tr>-->
<!---->
<!--                        <tr>-->
<!--                            <td style="border-right:1px solid #ccc;vertical-align:top;">-->
<!--                                --><?php
//                                global $post;
//                                $args = array( 'numberposts' => 30, 'offset'=> 0, 'category' => 42 );
//                                $myposts = get_posts( $args );
//                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
<!---->
<!--                                    <table style="padding:10px;" class="--><?php //echo get_post_meta($post->ID, 'highlight', true) ?><!--">-->
<!--                                        <tr>-->
<!--                                            <td style="padding-right:5px;">-->
<!--                                                <div class="homepage-calendar-stub---><?php //echo get_post_meta($post->ID, 'region', true) ?><!--">-->
<!--                                                    <div class="calendar-stub-top"><center>--><?php //echo get_post_meta($post->ID, 'month', true) ?><!--</center></div>-->
<!--                                                    <center>--><?php //echo get_post_meta($post->ID, 'day', true) ?><!--</center>-->
<!--                                                </div>-->
<!---->
<!---->
<!--                                            </td>-->
<!--                                            <td>-->
<!--                                                <b>--><?php //the_title(); ?><!--</b><br />-->
<!---->
<!--                                                --><?php //echo get_post_meta($post->ID, 'additional-info', true) ?><!--<br />-->
<!--                                                <span style="font-size:0.8em;"><a href="--><?php //the_permalink(); ?><!--">MORE DETAILS ></a></span>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                    </table>-->
<!---->
<!--                                --><?php //endforeach; ?>
<!--                            </td>-->
<!---->
<!--                            <td style="border-right:1px solid #ccc;vertical-align:top;">-->
<!--                                --><?php
//                                global $post;
//                                $args = array( 'numberposts' => 30, 'offset'=> 0, 'category' => 43 );
//                                $myposts = get_posts( $args );
//                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
<!---->
<!--                                    <table style="padding:10px;">-->
<!--                                        <tr>-->
<!--                                            <td style="padding-right:5px;">-->
<!--                                                <div class="homepage-calendar-stub---><?php //echo get_post_meta($post->ID, 'region', true) ?><!--">-->
<!--                                                    <div class="calendar-stub-top"><center>--><?php //echo get_post_meta($post->ID, 'month', true) ?><!--</center></div>-->
<!--                                                    <center>--><?php //echo get_post_meta($post->ID, 'day', true) ?><!--</center>-->
<!--                                                </div>-->
<!--                                            </td>-->
<!--                                            <td>-->
<!---->
<!--                                                <b>--><?php //the_title(); ?><!--</b><br />-->
<!---->
<!--                                                --><?php //echo get_post_meta($post->ID, 'additional-info', true) ?><!--<br />-->
<!--                                                <span style="font-size:0.8em;"><a href="--><?php //the_permalink(); ?><!--">MORE DETAILS ></a></span>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                    </table>-->
<!---->
<!--                                --><?php //endforeach; ?>
<!--                            </td>-->
<!---->
<!--                            <td style="vertical-align:top;">-->
<!---->
<!--                                --><?php
//                                global $post;
//                                $args = array( 'numberposts' => 30, 'offset'=> 0, 'category' => 44 );
//                                $myposts = get_posts( $args );
//                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
<!---->
<!--                                    <table style="padding:10px;">-->
<!--                                        <tr>-->
<!--                                            <td style="padding-right:5px;">-->
<!--                                                <div class="homepage-calendar-stub---><?php //echo get_post_meta($post->ID, 'region', true) ?><!--">-->
<!--                                                    <div class="calendar-stub-top"><center>--><?php //echo get_post_meta($post->ID, 'month', true) ?><!--</center></div>-->
<!--                                                    <center>--><?php //echo get_post_meta($post->ID, 'day', true) ?><!--</center>-->
<!--                                                </div>-->
<!---->
<!---->
<!--                                            </td>-->
<!--                                            <td>-->
<!--                                                <b>--><?php //the_title(); ?><!--</b><br />-->
<!---->
<!--                                                --><?php //echo get_post_meta($post->ID, 'additional-info', true) ?><!--<br />-->
<!--                                                <span style="font-size:0.8em;"><a href="--><?php //the_permalink(); ?><!--">MORE DETAILS ></a></span>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                    </table>-->
<!---->
<!--                                --><?php //endforeach; ?>
<!---->
<!--                            </td></tr></table>-->
<!---->
<!--                </div>-->
                <!--END events-list PROMOTIONS-->

			</div><!-- #content -->
		</div>
<?php get_footer(); ?>