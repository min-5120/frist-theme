<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?> 111</title>
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
    <?php wp_head(); ?>
</head>

<body>
    <?php do_action('frist_test_start'); ?>
    <div>字体选择</div>
    <div>modown_setting_presale_tips: <?php echo get_theme_mod('modown_setting_presale_tips') ?></div>
    <div>instagram_bg_image：
        <?php
        echo get_theme_mod('instagram_bg_image');
        ?>
    </div>

    has_custom_header: <?php if(has_custom_header()) : echo '121'; else: echo '222'; endif ?>
    <div>我是header</div>
    <div>我是logo</div>
    <div>我是nav bar</div>
    <div>我是banner carousel</div>
    <div>我是product</div>
    <dl style="padding: 1em;">
        <dd class="1-1">1-1：<?php echo get_theme_mod('npcink_sections_text_one', 'Npcink荣誉出品'); ?></dd>
        <dd class="1-2">1-2：<?php echo get_theme_mod('npcink_sections_text_two', 'Npcink荣誉出品'); ?></dd>
    </dl>