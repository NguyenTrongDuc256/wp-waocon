<?php

/**
 * Template Name: Waocon SubPages
 */
?>
<?php
get_header();
while(have_posts()) :

    the_post();
the_content();
    if (function_exists('custom_breadcrumbs')) custom_breadcrumbs();
endwhile;
get_footer();
