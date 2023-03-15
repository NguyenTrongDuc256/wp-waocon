<?php

add_action('vc_before_init', 'about_section4');
// if(!function_exists('')){

// }
function about_section4()
{
    vc_map(
        array(
            "name" => "About section 4",
            "base" => "vc_latest_about_section4",
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
                    'type' => 'param_group',
                    "heading" => "Content table",
                    'param_name' => 'arr_content',
                    'params' => array(
                        array(
                            "type" => "textfield",
                            "heading" => "Title item",
                            "param_name" => "title_item",
                        ),
                        array(
                            "type" => "textarea",
                            "heading" => __("Content", "textdomain"),
                            "param_name" => "content_item",
                        ),
                    )
                ),
                array(
                    "type" => "attach_images",
                    "heading" => __("List image", "textdomain"),
                    "param_name" => "arr_img",
                    "description" => __("Enter description.", "textdomain")
                )
            ),

        )
    );

}


function vc_latest_about_section4_render($atts, $content = null)
{
    $args = array(
        'heading_1_en' => '',
        'heading_1_jpn' => '',
        'arr_content' => '',
        'arr_img' => '',
    );


    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/content/abouts/about', 'section4', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_about_section4', 'vc_latest_about_section4_render');