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

         $wp_email = get_RnMaterial('smtp_username'); ; // e-mail 發出點, no-reply 可改為可用的 e-mail.

         $subject = '你在 [' . get_option("blogname") . '] 的留言有了回应';
         $message = '<div align="center" width="70%" style="padding-top: 20px">
			<div class="demo-card-wide mdl-card mdl-shadow--2dp">
				<div class="mdl-card__title">
					<h2 class="mdl-card__title-text">' . trim(get_comment($parent_id)->comment_author) . ', 你好!</h2>
				</div>
				<div class="mdl-card__supporting-text">
					你曾在' . get_option('blogname') . '的「' . get_the_title($comment->comment_post_ID) . '」中留下过评论：<br />「'. trim(get_comment($parent_id)->comment_content) . '」<br /><br />
					' . trim($comment->comment_author) . ' 给你的评论回复了：<br />「'. trim($comment->comment_content) . '」
				</div>
				<div class="mdl-card__actions mdl-card--border">
					<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple" href="' . htmlspecialchars(get_comment_link($parent_id,array("type" => "all"))) . '">
					查看回复的完整內容</a>
					<a class="mdl-button mdl-button--colored-t mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple" href="' . get_option('home') . '">
					再访' . get_option('blogname') . '</a>
				</div>
			</div>
		</div><style>.demo-card-wide.mdl-card{width:700px}.demo-card-wide>.mdl-card__title{color:#fff;height:176px;background:url("https://ws1.sinaimg.cn/large/6817a2bfgy1fnon51qam2j211y0lctn5.jpg") center / cover}.demo-card-wide>.mdl-card__menu{color:#fff}.mdl-shadow--2dp{box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12)}.mdl-card{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;font-size:16px;font-weight:400;min-height:200px;overflow:hidden;width:330px;z-index:1;position:relative;background:#fff;border-radius:2px;box-sizing:border-box}a,.mdl-accordion,.mdl-button,.mdl-card,.mdl-checkbox,.mdl-dropdown-menu,.mdl-icon-toggle,.mdl-item,.mdl-radio,.mdl-slider,.mdl-switch,.mdl-tabs__tab{-webkit-tap-highlight-color:transparent;-webkit-tap-highlight-color:rgba(255,255,255,0)}.mdl-card__supporting-text{color:rgba(0,0,0,.54);font-size:1rem;line-height:18px;overflow:hidden;padding:16px;width:90%}.docs-layout-content h2.mdl-card__title-text{padding-top:0;margin-bottom:0}.mdl-card__title-text{-webkit-align-self:flex-end;-ms-flex-item-align:end;align-self:flex-end;color:inherit;display:block;display:-webkit-flex;display:-ms-flexbox;display:flex;font-size:24px;font-weight:300;line-height:normal;overflow:hidden;-webkit-transform-origin:149px 48px;transform-origin:149px 48px;margin:0}.mdl-card__actions.mdl-card--border{border-top:1px solid rgba(0,0,0,.1)}.mdl-card__actions{font-size:16px;line-height:normal;width:100%;background-color:transparent;padding:8px;box-sizing:border-box}.mdl-button.mdl-button--colored{color:#3f51b5}.mdl-button{background:0;border:0;border-radius:2px;color:#000;position:relative;height:36px;margin:0;min-width:64px;padding:0 16px;display:inline-block;font-family:"Roboto","Helvetica","Arial",sans-serif;font-size:14px;font-weight:500;text-transform:uppercase;letter-spacing:0;overflow:hidden;will-change:box-shadow;transition:box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1),color .2s cubic-bezier(.4,0,.2,1);outline:0;cursor:pointer;text-decoration:none;text-align:center;line-height:36px;vertical-align:middle}a,.mdl-accordion,.mdl-button,.mdl-card,.mdl-checkbox,.mdl-dropdown-menu,.mdl-icon-toggle,.mdl-item,.mdl-radio,.mdl-slider,.mdl-switch,.mdl-tabs__tab{-webkit-tap-highlight-color:transparent;-webkit-tap-highlight-color:rgba(255,255,255,0)}.mdl-button__ripple-container{display:block;height:100%;left:0;position:absolute;top:0;width:100%;z-index:0;overflow:hidden}.mdl-button.mdl-button--colored{color:#3f51b5}.mdl-button.mdl-button--colored-t{color:rgba(0,0,0,.54)}.mdl-card__title{-webkit-align-items:center;-ms-flex-align:center;align-items:center;color:#000;display:block;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-justify-content:stretch;-ms-flex-pack:stretch;justify-content:stretch;line-height:normal;padding:16px;-webkit-perspective-origin:165px 56px;perspective-origin:165px 56px;-webkit-transform-origin:165px 56px;transform-origin:165px 56px;box-sizing:border-box}</style>';
         $from = "From: \"" . get_option('blogname') . "\" <$wp_email>";
         $headers = "$from\nContent-Type: text/html; charset=" . get_option('blog_charset') . "\n";
         wp_mail( $to, $subject, $message, $headers );
     }
 }


//添加友情链接
 add_filter( "pre_option_link_manager_enabled", "__return_true" );

//禁止加载默认jq库
 function my_enqueue_scripts() {
 	wp_deregister_script('jquery');
 }
 add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts', 1 );

//加速 Gravatar 头像
function replace_gravatar($avatar) {
	$avatar = str_replace(array("//gravatar.com/", "//secure.gravatar.com/", "//www.gravatar.com/", "//0.gravatar.com/", "//1.gravatar.com/", "//2.gravatar.com/", "//cn.gravatar.com/"), "//cdn.v2ex.com/gr", $avatar);
	return $avatar;
}
add_filter( 'get_avatar', 'replace_gravatar' );

//来自知更鸟的评论带图
add_action('comment_text', 'comments_embed_img', 2);
function comments_embed_img($comment) {
    $size = auto;
    $comment = preg_replace(array('#(http://([^\s]*)\.(jpg|gif|png|JPG|GIF|PNG))#','#(https://([^\s]*)\.(jpg|gif|png|JPG|GIF|PNG))#'),'<img src="$1" alt="comment" style="width:'.$size.'; height:'.$size.'" />', $comment);
    return $comment;
}

//添加设置页面
define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );
add_action( 'optionsframework_custom_scripts', 'optionsframework_custom_scripts' );
include('optionjs.php');

//屏蔽s.w.org
remove_action( 'wp_head', 'wp_resource_hints', 2 );

//使用smtp发送邮件
add_action('phpmailer_init', 'mail_smtp');
function mail_smtp( $phpmailer ) {
	$phpmailer->FromName = get_RnMaterial('smtp_name'); //发件人名称
	$phpmailer->Host = get_RnMaterial('smtp_service'); //修改为你使用的邮箱SMTP服务器
	$phpmailer->Port = get_RnMaterial('smtp_port'); //SMTP端口
	$phpmailer->Username = get_RnMaterial('smtp_username'); //邮箱账户
	$phpmailer->Password = get_RnMaterial('smtp_password'); //邮箱密码
	$phpmailer->From = get_RnMaterial('smtp_fromname'); //邮箱账
	$phpmailer->SMTPAuth = true;
	$phpmailer->SMTPSecure = get_RnMaterial('smtp_secure'); //tls or ssl （port=25时->留空，465时->ssl）
	$phpmailer->IsSMTP();
}

//修改每页显示的文章数
function custom_posts_per_page($query){
	if(is_home()){
		$query->set('posts_per_page',get_RnMaterial('posts_num','5'));//首页每页显示8篇文章
	}
	if(is_search()){
		$query->set('posts_per_page',-1);//搜索页显示所有匹配的文章，不分页
	}
}
add_action('pre_get_posts','custom_posts_per_page');
?>
