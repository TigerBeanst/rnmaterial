<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'theme-textdomain'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __( 'One', 'theme-textdomain' ),
		'two' => __( 'Two', 'theme-textdomain' ),
		'three' => __( 'Three', 'theme-textdomain' ),
		'four' => __( 'Four', 'theme-textdomain' ),
		'five' => __( 'Five', 'theme-textdomain' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'theme-textdomain' ),
		'two' => __( 'Pancake', 'theme-textdomain' ),
		'three' => __( 'Omelette', 'theme-textdomain' ),
		'four' => __( 'Crepe', 'theme-textdomain' ),
		'five' => __( 'Waffle', 'theme-textdomain' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/img/options/';

	$options = array();

	$options[] = array(
		'name' => __( '基本设置', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( '首页显示文章数', 'theme-textdomain' ),
		'desc' => __( '请输入整数，不要留空，留空时<b>默认为 5</b>', 'theme-textdomain' ),
		'id' => 'posts_num',
		'std' => '5',
		'class' => 'mini',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( '背景颜色', 'theme-textdomain' ),
		'desc' => __( '请输入 RGB 值，不要留空，留空时背景纯白。<b>默认为 #dedede</b>', 'theme-textdomain' ),
		'id' => 'background_color',
		'std' => '#dedede',
		'class' => 'mini',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( '手机浏览器状态栏颜色', 'theme-textdomain' ),
		'desc' => __( '详见：<a href="https://developers.google.cn/web/fundamentals/design-and-ux/browser-customization/?hl=zh-cn#_2">定义浏览器元素的颜色</a>。请输入 RGB 值，不要留空，留空时将显示浏览器默认颜色。<b>默认为 #607D8D</b>', 'theme-textdomain' ),
		'id' => 'phone_bar_color',
		'std' => '#607D8D',
		'class' => 'mini',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( '特色图片颜色', 'theme-textdomain' ),
		'desc' => __( '当文章未设置特色文章时，将会以纯色填充。请输入 RGB 值，不要留空，留空时背景纯白。<b>默认为 #455a64</b>', 'theme-textdomain' ),
		'id' => 'fpic_background_color',
		'std' => '#455a64',
		'class' => 'mini',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( '超链接文本颜色', 'theme-textdomain' ),
		'desc' => __( '请输入 RGB 值，不要留空，留空时超链接文本会还原 Material 样式中的骚粉。<b>默认为 #78909c</b>', 'theme-textdomain' ),
		'id' => 'a_link_color',
		'std' => '#78909c',
		'class' => 'mini',
		'type' => 'text'
	);

	/*$options[] = array(
		'name' => __( '头图设置', 'theme-textdomain' ),
		'desc' => __( '使用上传按钮，或是直接填入 URL。<b>默认为「博客地址/wp-content/themes/rnmaterial/img/tower.jpg」</b>', 'theme-textdomain' ),
		'id' => 'header_uploader',
		'type' => 'upload'
	);*/


	$options[] = array(
		'name' => __( '进阶设置', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'OwO 评论表情', 'theme-textdomain' ),
		'desc' => __( '开启后将在评论框下添加 OwO 表情按钮。OwO 由 DIYgod 开发：<a href="https://github.com/DIYgod/OwO">Github</a>', 'theme-textdomain' ),
		'id' => 'owo_toggle',
		'std' => '1',
		'type' => 'checkbox'
	);
	$options[] = array(
		'name' => __('Creative Commons 授权方式', 'theme-textdomain'),
		'desc' => __('请填入所选择的 CC 授权方式。<b>默认为 CC BY-NC-SA 3.0</b>', 'theme-textdomain'),
		'id' => 'cc_name',
		'std' => 'CC BY-NC-SA 3.0',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __('Creative Commons 授权方式链接', 'theme-textdomain'),
		'desc' => __('对应上面，点击超链接后弹出的页面的 URL。<b>默认为 https://creativecommons.org/licenses/by-nc-sa/3.0/deed.zh </b>', 'theme-textdomain'),
		'id' => 'cc_url',
		'std' => 'https://creativecommons.org/licenses/by-nc-sa/3.0/deed.zh',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __('自定义 CSS', 'theme-textdomain'),
		'desc' => __('此处内容<b>已被</b>&lt;style&gt;围起来，请<b>直接</b>输入 CSS 内容。请自行判断是否需要使用 !important（代码从页底插入）', 'theme-textdomain'),
		'id' => 'diy_css',
		'type' => 'textarea'
	);
	$options[] = array(
		'name' => __('自定义 JavaScript', 'theme-textdomain'),
		'desc' => __('此处内容<b>没有被</b>&lt;script&gt;围起来，请<b>带着标签</b>输入脚本内容（代码从页底插入）', 'theme-textdomain'),
		'id' => 'diy_js',
		'type' => 'textarea'
	);


	$options[] = array(
		'name' => __( 'SEO 设置', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __('关键词', 'options_framework_theme'),
		'desc' => sprintf( __( 'Keywords,记得用英文逗号分开', 'options_framework_theme' )),
		'id' => 'seo_keywords',
		'type' => 'text'
	);
		
	$options[] = array(
		'name' => __('作者', 'options_framework_theme'),
		'desc' => sprintf( __( 'Author', 'options_framework_theme' )),
		'id' => 'seo_author',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __('摘要', 'options_framework_theme'),
		'desc' => sprintf( __( 'Description', 'options_framework_theme' )),
		'id' => 'seo_description',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( '页脚设置', 'theme-textdomain' ),
		'type' => 'heading'
	);

	
	$options[] = array(
		'name' => __( '博客建立年份', 'theme-textdomain' ),
		'desc' => __( '在此填入博客建立的年份，请别留空', 'theme-textdomain' ),
		'id' => 'found_year',
		'std' => '2012',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __('网站备案号开关', 'theme-textdomain'),
		'desc' => __('选中此处并填写下面内容可在博客底部显示网站备案号', 'theme-textdomain'),
		'id' => 'beian_toggle',
		'std' => '0',
		'type' => 'checkbox'
	);

	$options[] = array(
		'name' => __('网站备案号', 'theme-textdomain'),
		'desc' => __('根据工信部规定，备案号超链接将跳转到工信部官网', 'theme-textdomain'),
		'id' => 'beian',
		'class' => 'hidden',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __('统计代码开关', 'theme-textdomain'),
		'desc' => __('选中此处并填写下面内容可在博客底部插入统计代码', 'theme-textdomain'),
		'id' => 'tongji_toggle',
		'std' => '0',
		'type' => 'checkbox'
	);
	$options[] = array(
		'name' => __('统计代码文字开关', 'theme-textdomain'),
		'desc' => __('如果你的统计代码提供商在插入代码后将会显示类似于“站长统计”的文本，请勾选启用它，否则关闭，不然影响美观', 'theme-textdomain'),
		'id' => 'tongji_text_toggle',
		'std' => '0',
		'class' => 'hidden',
		'type' => 'checkbox'
	);
	$options[] = array(
		'name' => __('统计代码', 'theme-textdomain'),
		'desc' => __('支持各家统计代码', 'theme-textdomain'),
		'id' => 'tongji',
		'class' => 'hidden',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( '邮件设置', 'theme-textdomain' ),
		'type' => 'heading'
	);

	
	$options[] = array(
		'name' => __( '发件人名称', 'theme-textdomain' ),
		'desc' => __( '名称！名称！显示的名称！不是邮箱账户！账户在下面！', 'theme-textdomain' ),
		'id' => 'smtp_name',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( '邮箱 SMTP 服务器', 'theme-textdomain' ),
		'desc' => __( '常见 SMTP 服务器可见最底下', 'theme-textdomain' ),
		'id' => 'smtp_service',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'SMTP 端口', 'theme-textdomain' ),
		'desc' => __( '25 啊 465 啊什么的', 'theme-textdomain' ),
		'id' => 'smtp_port',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'SMTP 邮箱账户', 'theme-textdomain' ),
		'desc' => __( '相当于用户名', 'theme-textdomain' ),
		'id' => 'smtp_username',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'SMTP 邮箱密码', 'theme-textdomain' ),
		'desc' => __( '相当于密码', 'theme-textdomain' ),
		'id' => 'smtp_password',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( '「来自」邮箱账户', 'theme-textdomain' ),
		'desc' => __( '此处邮箱地址不一定与上面一致，收件人所看到的实际「来自」会显示为此地址', 'theme-textdomain' ),
		'id' => 'smtp_fromname',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'SMTP 认证', 'theme-textdomain' ),
		'desc' => __( '无用选项，就想告诉你必须开', 'theme-textdomain' ),
		'id' => 'smtp_auth',
		'std'=> '1',
		'type' => 'checkbox'
	);
	$options[] = array(
		'name' => __( 'SMTP 加密', 'theme-textdomain' ),
		'desc' => __( 'tls 或是 ssl。当 port=25时请留空，当 port=465时请使用 ssl', 'theme-textdomain' ),
		'id' => 'smtp_secure',
		'type' => 'text'
	);
	/*<tr><td align="center"><div align="left">Gmail</div></td><td align="center">smtp.gmail.com</td><td align="center">SSL端口:465(/TLS/STARTTLS端口:587)</td><td align="center">是</td></tr>*/
	$options[] = array(
		'name' => __( '部分常见 SMTP 提供商', 'theme-textdomain' ),
		'desc' => __( '来源自对应提供商官方帮助内容。<table border="1" width="80%" align="center" style="border-collapse:collapse;width: 100%;" cellspacing="0" bordercolor="black" cellpadding="5px"><tbody><tr><td align="center"><div align="left">邮箱提供方</div></td><td align="center">SMTP 服务器地址</td><td align="center">SSL端口(或TLS/STARTTLS端口)</td><td align="center">是否要求认证</td></tr><tr><td align="center"><div align="left">Google Gmail</div></td><td align="center">smtp.gmail.com</td><td align="center">SSL端口:465(/TLS/STARTTLS端口:587)</td><td align="center">是</td></tr><tr><td align="center"><div align="left">网易 163 邮箱</div></td><td align="center">smtp.163.com</td><td align="center">未加密:25(SSL 端口:465/994)</td><td align="center">是</td></tr><tr><td align="center"><div align="left">网易 126 邮箱</div></td><td align="center">smtp.126.com</td><td align="center">未加密:25(SSL 端口:465/994)</td><td align="center">是</td></tr><tr><td align="center"><div align="left">网易 188 邮箱</div></td><td align="center">smtp.188.com</td><td align="center">未加密:25(SSL 端口:465/994)</td><td align="center">是</td></tr><tr><td align="center"><div align="left">网易企业邮箱</div></td><td align="center">smtp.ym.163.com</td><td align="center">未加密:25(SSL 端口:994)</td><td align="center">是</td></tr><tr><td align="center"><div align="left">QQ 邮箱</div></td><td align="center">smtp.qq.com</td><td align="center">SSL 端口:465/587</td><td align="center">是</td></tr><tr><td align="center"><div align="left">腾讯企业邮箱</div></td><td align="center">smtp.exmail.qq.com</td><td align="center">SSL 端口:465</td><td align="center">是</td></tr><tr><td align="center"><div align="left">Outlook</div></td><td align="center">smtp-mail.outlook.com</td><td align="center">STARTTLS 端口:587</td><td align="center">是</td></tr></tbody></table>', 'theme-textdomain' ),
		'type' => 'info'
	);

	return $options;
}