<?php

add_action('vc_before_init', 'case_home');
// if(!function_exists('')){

// }
function case_home()
{
    vc_map(
        array(
            "name" => "Case Home",
            "base" => "vc_latest_case_home",
            "category" => 'Content',
            "allowed_container_element" => 'vc_row',
            'params' => array(
                array(
                    "type" => "textfield",
                    "heading" => "Title Case English",
                    "param_name" => "title_case_en",
                    "description" => __( "Main title.", "textdomain" )
                ),
                array(
                    "type" => "textfield",
                    "heading" => "Title Case Japan",
                    "param_name" => "title_case_jpn",
                    "description" => __( "メインタイトル.", "textdomain" )
                ),
                array(
                    "type" => "textfield",
                    "heading" => "Slogan",
                    "param_name" => "slogan",
                    "description" => __( "Slogan.", "textdomain" )
                ),
                array(
                    "type" => "textarea_html",
                    "heading" => "Content case",
                    "param_name" => "content",
                    "description" => __( "Case Content.", "textdomain" )
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


function vc_latest_case_home_render($atts, $content)
{
    $args = array(
        'title_case_en' => '',
        'title_case_jpn' => '',
        'slogan' => '',
        'content' => '',
        'url' => '',
        'arr_img' => 'arr_img',
    );
    $atts['content'] = $content;

    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/content/home/home', 'case', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_case_home', 'vc_latest_case_home_render');