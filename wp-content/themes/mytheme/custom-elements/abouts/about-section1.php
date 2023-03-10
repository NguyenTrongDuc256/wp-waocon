<?php

add_action('vc_before_init', 'about_section1');
// if(!function_exists('')){

// }
function about_section1()
{
    vc_map(
        array(
            "name" => "About Section1",
            "base" => "vc_latest_about_section1",
            "category" => 'Content',
            "allowed_container_element" => 'vc_row',
            'params' => array(

                array(
                    'type' => 'param_group',
                    "heading" => "Content Group",
                    'param_name' => 'array_tab',
                    'params' => array(
                        array(
                            "type" => "textfield",
                            "heading" => "Title",
                            "param_name" => "title",
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => "ID Section",
                            "param_name" => "id",
                        ),
                    )
                ),
            ),

        )
    );

}


function vc_latest_about_section1_render($atts, $content = null)
{
    $args = array(
        'array_tab' => '',
    );


    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/content/abouts/about', 'section1', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_about_section1', 'vc_latest_about_section1_render');