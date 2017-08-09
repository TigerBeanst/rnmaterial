# RnMaterial For WordPress
RnMaterial 是一款基于 <a href="https://github.com/viosey/hexo-theme-material">hexo-theme-material</a> 的 WordPress 主题。<br>

## 演示站点
<a href="https://jakting.com">甲烃气瓶</a>

## 使用须知
+ 主题在<code>Microsoft Edge</code>浏览器上会无法显示图标字体，不修，谢谢，我不喜欢Edge
+ <b>请自行修改<code>img/avatar.png</code>为你的头像。</b>
+ RnMaterial 内置邮件回复通知，请自行修改 <code>function.php</code>中 103 行的邮件地址为可用邮件地址，并安装 <a href="https://wordpress.org/plugins/wp-mail-smtp/">WP-Mail-SMTP</a> 等配置发信的插件进行配置或者通过你所喜欢的方式配置发信（目前样式丑，未优化……<del>又不是不能用</del>）

## 已知问题
+ 搜索不可用
+ <del>主页无法翻页（准备通过ajax加载直接跳过这个问题）</del> 已修复
+ 侧边栏大部分已可通过 WordPress 后台控制，但目前无法折叠二级菜单
+ <del>首次访问需要刷新，否则白屏</del> <a href="https://github.com/hjthjthjt/rnmaterial/pull/1">已修复</a>