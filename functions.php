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

//邮件通知 by Qiqiboy 
 function comment_mail_notify($comment_id) {
     $comment = get_comment($comment_id);//根据id获取这条评论相关数据
     $content=$comment->comment_content;
     //对评论内容进行匹配
     $match_count=preg_match_all('/<a href="#comment-([0-9]+)?" rel="nofollow">/si',$content,$matchs);
     if($match_count>0){//如果匹配到了
         foreach($matchs[1] as $parent_id){//对每个子匹配都进行邮件发送操作
             SimPaled_send_email($parent_id,$comment);
         }
     }elseif($comment->comment_parent!='0'){//以防万一，有人故意删了@回复，还可以通过查找父级评论id来确定邮件发送对象
         $parent_id=$comment->comment_parent;
         SimPaled_send_email($parent_id,$comment);
     }else return;
 }
 add_action('comment_post', 'comment_mail_notify');
 function SimPaled_send_email($parent_id,$comment){//发送邮件的函数 by Qiqiboy.com
     $admin_email = get_bloginfo ('admin_email');//管理员邮箱
     $parent_comment=get_comment($parent_id);//获取被回复人（或叫父级评论）相关信息
     $author_email=$comment->comment_author_email;//评论人邮箱
     $to = trim($parent_comment->comment_author_email);//被回复人邮箱
     $spam_confirmed = $comment->comment_approved;
     if ($spam_confirmed != 'spam' && $to != $admin_email && $to != $author_email) {

         $wp_email = 'YOURRRRRRRRRR EMAILLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL' ; // e-mail 發出點, no-reply 可改為可用的 e-mail.

         $subject = '您在 [' . get_option("blogname") . '] 的留言有了回應';
         $message = '<div style="background-color:#eef2fa;border:1px solid #d8e3e8;color:#111;padding:0 15px;-moz-border-radius:5px;-webkit-border-radius:5px;-khtml-border-radius:5px;">
             <p>' . trim(get_comment($parent_id)->comment_author) . ', 您好!</p>
             <p>您曾在《' . get_the_title($comment->comment_post_ID) . '》的留言:<br />'
             . trim(get_comment($parent_id)->comment_content) . '</p>
             <p>' . trim($comment->comment_author) . ' 给你的回复:<br />'
             . trim($comment->comment_content) . '<br /></p>
             <p>您可以点击 <a href="' . htmlspecialchars(get_comment_link($parent_id,array("type" => "all"))) . '">查看回复的完整內容</a></p>
             <p>欢迎再度光临 <a href="' . get_option('home') . '">' . get_option('blogname') . '</a></p>
             <p>(此邮件有系统自动发出, 请勿回复.)</p></div>';
         $from = "From: \"" . get_option('blogname') . "\" <$wp_email>";
         $headers = "$from\nContent-Type: text/html; charset=" . get_option('blog_charset') . "\n";
         wp_mail( $to, $subject, $message, $headers );
     }
 }

//Compress the HTML code

function wp_compress_html(){
    function wp_compress_html_main ($buffer){
        $initial=strlen($buffer);
        $buffer=explode("<!--compressed-html-->", $buffer);
        $count=count ($buffer);
        for ($i = 0; $i <= $count; $i++){
            if (stristr($buffer[$i], '<!--wp-compress-html no compression-->')) {
                $buffer[$i]=(str_replace("<!--wp-compress-html no compression-->", " ", $buffer[$i]));
            } else {
                $buffer[$i]=(str_replace("\t", " ", $buffer[$i]));
                $buffer[$i]=(str_replace("\n\n", "\n", $buffer[$i]));
                $buffer[$i]=(str_replace("\n", "", $buffer[$i]));
                $buffer[$i]=(str_replace("\r", "", $buffer[$i]));
                while (stristr($buffer[$i], '  ')) {
                    $buffer[$i]=(str_replace("  ", " ", $buffer[$i]));
                }
            }
            $buffer_out.=$buffer[$i];
        }
        $final=strlen($buffer_out);   
        $savings=($initial-$final)/$initial*100;   
        $savings=round($savings, 2);   
        $buffer_out.="\n<!--Before: $initial bytes; Now: $final bytes; Saving: $savings% -->";   
    return $buffer_out;
}
ob_start("wp_compress_html_main");
}
add_action('get_header', 'wp_compress_html');



//添加友情链接
add_filter( "pre_option_link_manager_enabled", "__return_true" );

//禁止加载默认jq库
function my_enqueue_scripts() {
wp_deregister_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts', 1 );


?>
