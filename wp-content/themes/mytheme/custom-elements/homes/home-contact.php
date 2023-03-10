<?php

add_action('vc_before_init', 'contact_home');
// if(!function_exists('')){

// }
function contact_home()
{
    vc_map(
        array(
            "name" => "Contact Home",
            "base" => "vc_latest_contact_home",
            "category" => 'Content',
            "allowed_container_element" => 'vc_row',
            'params' => array(
                array(
                    "type" => "textfield",
                    "heading" => "Phone number",
                    "param_name" => "phone_number",
                    "description" => __( "Main title.", "textdomain" )
                ),
                array(
                    "type" => "textarea",
                    "class" => "",
                    "heading" => __( "Working time", "textdomain" ),
                    "param_name" => "work_time",
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
                    "heading" => "Background",
                    "param_name" => "image",
                )

            ),
        )
    );

}


function vc_latest_contact_home_render($atts, $content = null)
{
    $args = array(
        'phone_number' => '',
        'work_time' => '',
        'url' => '',
        'image' => '',

    );

    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/content/home/home', 'contact', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_contact_home', 'vc_latest_contact_home_render');