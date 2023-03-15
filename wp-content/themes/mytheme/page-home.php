<?php

/**
 * Template Name: Waocon HomePage
 */
?>
<?php
get_header();
while(have_posts()) :

    the_post();
the_content();
//    custom_breadcrumbs();
endwhile;
get_footer();
