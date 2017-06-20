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

//文章归档，来自 https://zww.me
function zww_archives_list() {
	if( !$output = get_option('zww_db_cache_archives_list') ){
		$output = '<div id="archives"><p><a id="al_expand_collapse" href="#">全部展开/收缩</a> <em>(注: 点击月份可以展开)</em></p>';
		$args = array(
			'post_type' => array('archives', 'post', 'zsay'),
			'posts_per_page' => -1, //全部 posts
			'ignore_sticky_posts' => 1 //忽略 sticky posts

		);
		$the_query = new WP_Query( $args );
		$posts_rebuild = array();
		$year = $mon = 0;
		while ( $the_query->have_posts() ) : $the_query->the_post();
			$post_year = get_the_time('Y');
			$post_mon = get_the_time('m');
			$post_day = get_the_time('d');
			if ($year != $post_year) $year = $post_year;
			if ($mon != $post_mon) $mon = $post_mon;
			$posts_rebuild[$year][$mon][] = '<li>'. get_the_time('d日: ') .'<a href="'. get_permalink() .'">'. get_the_title() .'</a> <em>('. get_comments_number('0', '1', '%') .')</em></li>';
		endwhile;
		wp_reset_postdata();

		foreach ($posts_rebuild as $key_y => $y) {
			$y_i = 0; $y_output = '';
			foreach ($y as $key_m => $m) {
				$posts = ''; $i = 0;
				foreach ($m as $p) {
					++$i; ++$y_i;
					$posts .= $p;
				}
				$y_output .= '<li><span class="al_mon">'. $key_m .' 月 <em>( '. $i .' 篇文章 )</em></span><ul class="al_post_list">'; //输出月份
				$y_output .= $posts; //输出 posts
				$y_output .= '</ul></li>';
			}
			$output .= '<h3 class="al_year">'. $key_y .' 年 <em>( '. $y_i .' 篇文章 )</em></h3><ul class="al_mon_list">'; //输出年份
			$output .= $y_output;
			$output .= '</ul>';
		}

		$output .= '</div>';
		update_option('zww_db_cache_archives_list', $output);
	}
	echo $output;
}
function clear_db_cache_archives_list() {
	update_option('zww_db_cache_archives_list', ''); // 清空 zww_archives_list
}
add_action('save_post', 'clear_db_cache_archives_list'); // 新发表文章/修改文章时
?>