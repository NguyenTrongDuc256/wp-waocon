<?php

add_action('vc_before_init', 'info_home');
// if(!function_exists('')){

// }
function info_home()
{
    vc_map(
        array(
            "name" => "Information Home",
            "base" => "vc_latest_info_home",
            "category" => 'Content',
            "allowed_container_element" => 'vc_row',
            'params' => array(
                array(
                    "type" => "textfield",
                    "heading" => "Title",
                    "param_name" => "title_info",
                    "description" => __( "Main title.", "textdomain" )
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
                    "description" => __( "About Content.", "textdomain" )
                ),
                array(
                    "type" => "vc_link",
                    "heading" => __( "Link", "textdomain" ),
                    "param_name" => "url",
                    "description" => __( "Enter description.", "textdomain" )
                ),

            ),
        )
    );

}


function vc_latest_info_home_render($atts, $content)
{
    $args = array(
        'title_info' => '',
        'detail_info' => '',
        'content' => '',
        'url' => '',
    );
    $atts['content'] = $content;

    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/content/home/home', 'info', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_info_home', 'vc_latest_info_home_render');