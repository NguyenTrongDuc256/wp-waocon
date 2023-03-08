<?php

add_action('vc_before_init', 'about_home');
// if(!function_exists('')){

// }
function about_home()
{
    vc_map(
        array(
            "name" => "About Home",
            "base" => "vc_latest_about_home",
            "category" => 'Content',
            "allowed_container_element" => 'vc_row',
            'params' => array(
                array(
                    "type" => "textfield",
                    "heading" => "Title About English",
                    "param_name" => "title_about_en",
                    "description" => __( "Main title.", "textdomain" )
                ),
                array(
                    "type" => "textfield",
                    "heading" => "Title About Japan",
                    "param_name" => "title_about_jpn",
                    "description" => __( "メインタイトル.", "textdomain" )
                ),
                array(
                    "type" => "textarea_html",
                    "heading" => "Content about",
                    "param_name" => "content",
                    "description" => __( "About Content.", "textdomain" )
                ),
                array(
                    "type" => "vc_link",
                    "heading" => __( "Link", "textdomain" ),
                    "param_name" => "url",
                    "description" => __( "Enter description.", "textdomain" )
                ),
                array(
                    "type" => "attach_images",
                    "heading" => __( "List image", "textdomain" ),
                    "param_name" => "arr_img",
                    "description" => __( "Enter description.", "textdomain" )
                )
            ),

        )
    );

}


function vc_latest_about_home_render($atts, $content)
{
    $args = array(
        'title_about_en' => '',
        'title_about_jpn' => '',
        'content' => '',
        'url' => '',
        'arr_img' => 'arr_img',
    );
    $atts['content'] = $content;

    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/content/home/home', 'about', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_about_home', 'vc_latest_about_home_render');