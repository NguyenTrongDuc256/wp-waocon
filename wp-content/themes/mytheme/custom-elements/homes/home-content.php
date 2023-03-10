<?php

add_action('vc_before_init', 'content_web_home');
// if(!function_exists('')){

// }
function content_web_home()
{
    vc_map(
        array(
            "name" => "Content Home",
            "base" => "vc_latest_content_web_home",
            "category" => 'Content',
            "allowed_container_element" => 'vc_row',
            'params' => array(
                array(
                    "type" => "textfield",
                    "heading" => "Title Content English",
                    "param_name" => "title_en",
                ),
                array(
                    "type" => "textfield",
                    "heading" => "Title Content Japan",
                    "param_name" => "title_jpn",
                ),
                array(
                    'type' => 'param_group',
                    "heading" => "Item Content",
                    'param_name' => 'array_item',
                    'params' => array(
                        array(
                            "type" => "textfield",
                            "heading" => "Title Item English",
                            "param_name" => "title_item_en",
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => "Title Item Japan",
                            "param_name" => "title_item_jpn",
                        ),
                        array(
                            "type" => "textarea",
                            "class" => "",
                            "heading" => __( "Description", "textdomain" ),
                            "param_name" => "description",
                            "value" => __( "", "my-text-domain" ),
                            "description" => __( "Enter description.", "textdomain" )
                        ),
                        array(
                            "type" => "vc_link",
                            "heading" => __( "Link", "textdomain" ),
                            "param_name" => "url",
                            "description" => __( "Enter description.", "textdomain" )
                        ),
                        array(
                            "type" => "attach_image",
                            "heading" => "Image",
                            "param_name" => "image",
                        )
                    )

                ),
            ),

        )
    );

}


function vc_latest_content_web_home_render($atts, $content = null)
{
    $args = array(
        'title_en' => '',
        'title_jpn' => '',
        'array_item' => '',
    );

    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/content/home/home', 'content', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_content_web_home', 'vc_latest_content_web_home_render');