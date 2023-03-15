<?php
function custom_breadcrumbs()
{
    $delimiter = '';
    $home = 'HOME'; // Text for the 'Home' link
    $show_current = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $before = '<span class="current">';
    $after = '</span>';
    $current_page = get_queried_object();
    echo '<nav class="c-breadcrumbs js-animate">';
    echo '<ol class="c-breadcrumbs-items">';
    echo '<li class="c-breadcrumbs-item"><a class="c-breadcrumbs-link" href="' . get_home_url() . '"><span>' . $home . '</span></a></li>';
    if (is_category() || is_single()) {
        echo '<li class="c-breadcrumbs-item"><a class="c-breadcrumbs-link" href="' . get_permalink(get_option('page_for_posts')) . '">Bài viết</a></li>';
        if (is_single()) {
            $cats = get_the_category($current_page->ID);
            if ($cats) {
                foreach ($cats as $cat) {
                    echo '<li class="c-breadcrumbs-item"><a class="c-breadcrumbs-link" href="' . get_category_link($cat->term_id) . '">' . $cat->name . '</a></li>';
                }
            }
            if ($show_current == 1) {
                echo '<li class="c-breadcrumbs-item"><span class="c-breadcrumbs-link">' . get_the_title() . '</span></li>';
            }
        }
    } elseif (is_page() && !$current_page->post_parent) {
        if ($show_current == 1) {
            echo '<li class="c-breadcrumbs-item"><span class="c-breadcrumbs-link">' . get_the_title() . '</span></li>';
        }
    } elseif (is_page() && $current_page->post_parent) {
        $parent_id = $current_page->post_parent;
        $breadcrumbs = array();
        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] = '<li class="c-breadcrumbs-item"><a class="c-breadcrumbs-link" href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
            $parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        foreach ($breadcrumbs as $crumb) {

            echo $crumb . ' ' . $delimiter . ' ';
        }
        if ($show_current == 1) {

            echo '<li class="c-breadcrumbs-item"><span class="c-breadcrumbs-link">' . get_the_title() . '</span></li>';
        }
    } elseif (is_author()) {
        global $author;
        $userdata = get_userdata($author);
        echo '<li class="c-breadcrumbs-item"><span class="c-breadcrumbs-link">Tác giả: ' . $userdata->display_name . '</span></li>';
    } elseif (is_404()) {
        echo '<li class="c-breadcrumbs-item"><span class="c-breadcrumbs-link">Không tìm thấy trang</span></li>';
    }
    echo '</ol>';
    echo '</nav>';
}