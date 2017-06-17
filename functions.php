<?php
//添加<title>标题
function RM_add_theme_support_title(){
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'RM_add_theme_support_title' );

//添加缩略图
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 884, 280, true ); 

//注册导航栏
register_nav_menus();

?>