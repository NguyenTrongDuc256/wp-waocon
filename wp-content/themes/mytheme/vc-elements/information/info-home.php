<?php

add_action('vc_before_init', 'infor_home');
// if(!function_exists('')){

// }
function infor_home()
{
    vc_map(
        array(
            "name" => "About Home",
            "base" => "vc_latest_infor_home",
            "category" => 'Content',
            "allowed_container_element" => 'vc_row',
            'params' => array(
                array(
                    "type" => "textfield",
                    "heading" => "Title",
                    "param_name" => "title_infor",
                    "description" => __( "Main title.", "textdomain" )
                ),
                array(
                    "type" => "textarea_html",
                    "heading" => "Content infor",
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


function vc_latest_infor_home_render($atts, $content)
{
    $args = array(
        'title_infor' => '',
        'title_infor_jpn' => '',
        'content' => '',
        'url' => '',
        'arr_img' => 'arr_img',
    );
    $atts['content'] = $content;

    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/content/home/home', 'infor', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_infor_home', 'vc_latest_infor_home_render');