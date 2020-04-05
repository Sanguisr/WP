<!DOCTYPE html>
<html <?php language_attributes(); ?>><!--函数language_attributes()确定主题展示的语言-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title><?php bloginfo('name'); ?></title> <!-- bloginfo()使标题或网站名称动态-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen, projection" />
    <?php wp_head(); ?> 
</head>

<!--引用样式表-->
</head>
<body <?php body_class(); ?>><!--函数body_class()-->
    <header>
        <div class="container">
            <h1>
                <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?> </a>
                <small><?php bloginfo('description'); ?></small>
            </h1>
            <div class="h_right">
                <form method="get" action="<?php esc_url(home_url('/')); ?>"> 
                    <input type="text" name="s" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>

<!--导航栏-->
<nav class="nav main-nav">
        <div class="container"><!--wp_nav_menu（）函数-->
        <?php $args = array('theme_location' => 'primary');?>
        <?php wp_nav_menu($args); ?> 
    </div>
</nav>