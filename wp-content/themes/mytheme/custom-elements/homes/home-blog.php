<?php

add_action('vc_before_init', 'blog_home');
// if(!function_exists('')){

// }
function blog_home()
{
    vc_map(
        array(
            "name" => "Blog Home",
            "base" => "vc_latest_blog_home",
            "category" => 'Content',
            "allowed_container_element" => 'vc_row',
            'params' => array(
                array(
                    "type" => "textfield",
                    "heading" => "Title Blog English",
                    "param_name" => "title_en",
                ),
                array(
                    "type" => "textfield",
                    "heading" => "Title Blog Japan",
                    "param_name" => "title_jpn",
                ),
                array(
                    "type" => "vc_link",
                    "heading" => __( "Link blog", "textdomain" ),
                    "param_name" => "url_blog",
                    "description" => __( "Enter description.", "textdomain" )
                ),
                array(
                    'type' => 'param_group',
                    "heading" => "Item Content",
                    'param_name' => 'array_item',
                    'params' => array(
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


function vc_latest_blog_home_render($atts, $content = null)
{
    $args = array(
        'title_en' => '',
        'title_jpn' => '',
        'url_blog' => '',
        'array_item' => '',
    );

    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/content/home/home', 'blog', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_blog_home', 'vc_latest_blog_home_render');