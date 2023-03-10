<?php

add_action('vc_before_init', 'about_header');
// if(!function_exists('')){

// }
function about_header()
{
    vc_map(
        array(
            "name" => "About Header",
            "base" => "vc_latest_about_header",
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
            ),

        )
    );

}


function vc_latest_about_header_render($atts, $content = null)
{
    $args = array(
        'title_about_en' => '',
        'title_about_jpn' => '',

    );


    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/content/abouts/about', 'header', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_about_header', 'vc_latest_about_header_render');