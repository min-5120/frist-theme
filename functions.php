<?php
//添加自定义设置选项
function npcink_customize_register($wp_customize)
{
    //给相关设置项目加小铅笔
    if (isset($wp_customize->selective_refresh)) {
        //One
        $wp_customize->selective_refresh->add_partial('npcink_sections_text_one', array(
            'selector' => '.1-1',
            'render_callback' => 'lifet_customize_partial_npcink_sections_text_one',
        ));
        //Two
        $wp_customize->selective_refresh->add_partial('npcink_sections_text_two', array(
            'selector' => '.1-2',
            'render_callback' => 'lifet_customize_partial_npcink_sections_text_two',
        ));
    }
    //-----------------------------------------------------------------------------
    //添加主题设置面板，ID = npcink_options
    $wp_customize->add_panel(
        'npcink_options',
        array(
            'title' => __('我是面板 - Npcink', 'npcink'),
            'description' => __('Npcink首发，Muze原创', 'npcink'),
            'priority' => 30,
            'capabitity' => 'edit_theme_options',
        )
    );
    //添加文本设置节，ID = npcink_sections_text
    $wp_customize->add_section(
        'npcink_sections_text',
        array(
            'title' => '节 - Npcink',
            'description' => '主题的文本设置',
            'panel' => 'npcink_options',
        )
    );
    //文字设置:one，ID = npcink_sections_text_one
    $wp_customize->add_setting(
        'npcink_sections_text_one',
        array(
            'default' => 'Npcink 荣誉出品',
        )
    );
    $wp_customize->add_control(
        'npcink_sections_text_one',
        array(
            'label' => '文本设置：One',
            'section' => 'npcink_sections_text',
            'type' => 'text',
        )
    );
    //文字设置:two，ID = npcink_sections_text_two
    $wp_customize->add_setting(
        'npcink_sections_text_two',
        array(
            'default' => 'Npcink 荣誉出品',
        )
    );
    $wp_customize->add_control(
        'npcink_sections_text_two',
        array(
            'label' => '文本设置：Two',
            'section' => 'npcink_sections_text',
            'type' => 'text',
        )
    );
}
add_action('customize_register', 'npcink_customize_register');
?>
<?php
// 全局样式设置： 包含top通知、背景颜色、字体颜色、字体、
function goods_galbol_setting($wp_customize)
{
    /** galbol Settings */
    $wp_customize->add_panel(
        'galbol_settings',
        array(
            'priority'    => 31,
            'capability'  => 'edit_theme_options',
            'title'       => __('galbol Settings'),
            'description' => __('Customize Banner, Featured, Social, Sharing, SEO, Post/Page, Newsletter & Instagram, Shop, Performance and Miscellaneous settings.', 'vilva'),
        )
    );
    $wp_customize->add_section(
        'social_media_settings',
        array(
            'title'    => __('Social Media Settings', 'vilva'),
            'priority' => 30,
            'panel'    => 'galbol_settings',
        )
    );
    $wp_customize->add_setting(
        'goods_header_section_setting1',
        array(
            'default' => 'check',
        )
    );
    $wp_customize->add_control(
        'goods_header_section_setting1',
        array(
            'label' => '文本设置：Two',
            'section' => 'social_media_settings',
            'type' => 'checkbox',
        )
    );
    $wp_customize->add_section(
        'seo_settings',
        array(
            'title'    => __('SEO Settings', 'vilva'),
            'priority' => 40,
            'panel'    => 'galbol_settings',
        )
    );
    $wp_customize->add_setting(
        'goods_header_section_setting2',
        array(
            'default' => 'check',
        )
    );
    $wp_customize->add_control(
        'goods_header_section_setting2',
        array(
            'label' => '文本设置：Two',
            'section' => 'seo_settings',
            'type' => 'checkbox',
        )
    );
}
add_action('customize_register', 'goods_galbol_setting')
?>
<?php
// header设置：包含nav、分享渠道、快捷操作等
?>
<?php
// banner设置： 是否轮播、图片数量上限
function goods_header_setting($wp_customize)
{
    $wp_customize->add_panel(
        'header_setting',
        array(
            'title' => __('我是header设置'),
            'description' => __('header设置'),
            'priority' => 40,
            'capabitity' => 'edit_theme_options',
        )
    );

    // $wp_customize->add_section('goods_header_section', array(
    //     'title' => __('我是设置节点'),
    //     'description' => __('节点设置'),
    //     'panel' => __('goods_header'),
    //     'priority' => 30,
    // ));
    $wp_customize->add_section(
        'header_nav_setting',
        array(
            'title'    => __('我是设置节点'),
            'priority' => 30,
            'description' => __('节点设置'),
            'panel'    => 'header_setting',
        )
    );
    $wp_customize->add_setting(
        'nav_text',
        array(
            'default' => 'check',
        )
    );
    $wp_customize->add_control(
        'nav_text',
        array(
            'label' => '文本设置：Two',
            'section' => 'header_nav_setting',
            'type' => 'text',
        )
    );
    $wp_customize->add_section(
        'header_notice_setting',
        array(
            'title'    => __('我是设置节点2'),
            'priority' => 40,
            'description' => __('节点设置'),
            'panel'    => 'header_setting',
        )
    );

    $wp_customize->add_setting(
        'modown_setting_presale_tips',
        array(
            'default' => 'true',
        )
    );
    $wp_customize->add_control(
        'modown_setting_presale_tips',
        array(
            "title" => __("General: Responsive Layout - 常规: 响应布局", "theme_backend"),
            "description" => __("启用手机和平板响应式优化 [ responsive.css ]", "theme_backend"),
            "type" => "toggle",
            'panel'    => 'header_setting',
        ),
    );

    $wp_customize->add_setting('modown_setting_presale_icon', array(
        'default' => 'http://localhost/twentyone/wp-content/themes/twentyone/assets/img/showcase.jpg'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'modown_setting_presale_icon',
        array(
            'label' => '弹窗预售图标',
            'section' => 'header_notice_setting',
            'active_callback' => 'vilva_is_woocommerce_activated'
        )
    ));

    $wp_customize->add_setting(
        'instagram_bg_image',
        array(
            'default' => '', // Optional.
            'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
            'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
            'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
            'theme_supports' => '', // Optional. Rarely needed
            'validate_callback' => 'validate_callback', // Optional. The name of the function that will be called to validate Customizer settings
            'sanitize_callback' => 'vilva_sanitize_image', // Optional. The name of the function that will be called to sanitize the input data before saving it to the database
            'sanitize_js_callback' => '', // Optional. The name of the function that will be called to sanitize the data before outputting to javascript code. Basically to_json.
            'dirty' => false, // Optional. Rarely needed. Whether or not the setting is initially dirty when created. Default: False
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'instagram_bg_image',
            array(
                'label'           => __('Instagram Background Image', 'vilva'),
                'description'     => __('Upload your instagram background image.', 'vilva'),
                'section'         => 'header_notice_setting',
            )
        )
    );
}
add_action('customize_register', 'goods_header_setting');
?>
<?php
// 产品列表设置
?>
<?php
// footer设置
?>






<?php
function frist_test()
{
?>
    <a style="color: red">test</a>
<?php
}
add_action('frist_test_start', 'frist_test')
?>
<?php
if (!function_exists('vilva_banner')) :
    /**
     * Banner Section 
     */
    function vilva_banner()
    {
        if (is_front_page() || is_home()) {
            $banner_type = get_theme_mod('ed_banner_section', 'slider_banner'); // static_banner、slider_banner


            if ($ed_banner == 'static_banner' && has_custom_header()) {

            } elseif ($ed_banner == 'slider_banner') {

            }
            wp_reset_postdata();
        }
    }
endif;
add_action('vilva_after_header', 'vilva_banner', 15);

?>
<?php
function vilva_sanitize_image($image, $setting)
{
    /*
     * Array of valid image file types.
     *
     * The array includes image mime types that are included in wp_get_mime_types()
     */
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );
    // Return an array with file extension and mime_type.
    $file = wp_check_filetype($image, $mimes);
    // If $image has a valid mime_type, return it; otherwise, return the default.
    return ($file['ext'] ? $image : '');
}
?>