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
register_nav_menus( array(
 'sidebar_menu_one' => '侧边栏一菜单' ,
 'sidebar_menu_two' => '侧边栏二菜单' ,
 'sidebar_menu_three' => '侧边栏三菜单' ,
 ) );

 //ajax评论
if (!is_admin()) {
	function zfunc_scripts_method() {
		if (is_singular()) {
			wp_enqueue_script('comments_ajax_js', (get_template_directory_uri()."/comments-ajax.js"), false, '1.3', true);
		}
	}
	add_action('wp_enqueue_scripts', 'zfunc_scripts_method');
}
?>