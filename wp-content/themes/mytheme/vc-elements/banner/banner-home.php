<?php

add_action('vc_before_init', 'banner_home');
// if(!function_exists('')){

// }
function banner_home()
{
    vc_map(
        array(
            "name" => "Banner Home",
            "base" => "vc_latest_banner_home",
            "category" => 'Banner',
            "allowed_container_element" => 'vc_row',
            'params' => array(
                array(
                    'type' => 'param_group',
                    'param_name' => 'banner',
                    "heading" => "Banner Group",
                    'params' => array(
                        array(
                            "type" => "textfield",
                            "heading" => "Title",
                            "param_name" => "title",
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => "Link",
                            "param_name" => "link",
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


function vc_latest_banner_home_render($atts, $content = null)
{
    $args = array(
        'banner' => '',
    );

    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/content/home/home', 'banner', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_banner_home', 'vc_latest_banner_home_render');