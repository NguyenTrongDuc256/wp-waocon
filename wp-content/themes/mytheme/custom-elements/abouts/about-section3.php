<?php

add_action('vc_before_init', 'about_section2');
// if(!function_exists('')){

// }
function about_section2()
{
    vc_map(
        array(
            "name" => "About section 2",
            "base" => "vc_latest_about_section2",
            "category" => 'Content',
            "allowed_container_element" => 'vc_row',
            'params' => array(
                array(
                    "type" => "textfield",
                    "heading" => "Heading 1 About EN",
                    "param_name" => "heading_1_en",
                ),
                array(
                    "type" => "textfield",
                    "heading" => "Heading 1 About JPN",
                    "param_name" => "heading_1_jpn",

                ),
                array(
                    "type" => "textfield",
                    "heading" => "Heading 2",
                    "param_name" => "heading_2",

                ),
                array(
                    "type" => "textfield",
                    "heading" => __( "Heading 3", "textdomain" ),
                    "param_name" => "heading_3",
                ),
                array(
                    "type" => "textarea",
                    "heading" => __( "Content", "textdomain" ),
                    "param_name" => "content_about",
                ),
                array(
                    "type" => "attach_image",
                    "heading" => __( "Background", "textdomain" ),
                    "param_name" => "background_img",
                    "description" => __( "Background in section", "textdomain" )
                ),
                array(
                    "type" => "attach_image",
                    "heading" => __( "Image", "textdomain" ),
                    "param_name" => "content_img",
                )
            ),

        )
    );

}


function vc_latest_about_section2_render($atts, $content = null)
{
    $args = array(
        'heading_1_en' => '',
        'heading_1_jpn' => '',
        'heading_2' => '',
        'heading_3' => '',
        'content_about' => '',
        'background_img' => '',
        'content_img' => '',
    );


    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/content/abouts/about', 'section2', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_about_section2', 'vc_latest_about_section2_render');