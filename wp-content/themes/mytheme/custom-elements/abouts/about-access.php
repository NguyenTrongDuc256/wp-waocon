<?php

add_action('vc_before_init', 'about_access');
// if(!function_exists('')){

// }
function about_access()
{
    vc_map(
        array(
            "name" => "Access About",
            "base" => "vc_latest_about_access",
            "category" => 'Content',
            "allowed_container_element" => 'vc_row',
            'params' => array(
                array(
                    "type" => "textfield",
                    "heading" => "Title",
                    "param_name" => "title_en",
                    "description" => __( "Title written in English", "textdomain" )
                ),
                array(
                    "type" => "textfield",
                    "heading" => "Title",
                    "param_name" => "title_jpn",
                    "description" => __( "Title written in Japanese", "textdomain" )
                ),
                array(
                    "type" => "textarea",
                    "class" => "",
                    "heading" => __( "Description", "textdomain" ),
                    "param_name" => "detail_info",
                    "value" => __( "", "my-text-domain" ),
                    "description" => __( "Enter description.", "textdomain" )
                ),
                array(
                    "type" => "textarea_html",
                    "heading" => "Map iFrame",
                    "param_name" => "content",
                    "description" => __( "To iframe google map here", "textdomain" )
                ),
            ),
        )
    );

}


function vc_latest_about_access_render($atts, $content)
{
    $args = array(
        'title_en' => '',
        'title_jpn' => '',
        'detail_info' => '',
        'content' => '',
    );
    $atts['content'] = $content;

    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/content/abouts/about', 'access', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_about_access', 'vc_latest_about_access_render');