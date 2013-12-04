<?php
if ( in_category('calendar-event') ) {
include 'single-calendar_event.php';
} elseif ( in_category('news') ) {
include 'single-news-post.php';
} else {
}
?>