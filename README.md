# RnMaterial For WordPress
RnMaterial 是一款基于 <a href="https://github.com/viosey/hexo-theme-material">hexo-theme-material</a> 的 WordPress 主题。<br>
RnMaterial is a WordPress Theme based on <a href="https://github.com/viosey/hexo-theme-material">hexo-theme-material</a>.

## 演示站点 Demo
<a href="https://jakting.com">甲烃气瓶</a>

## 使用须知 Something you should know
RnMaterial 内置邮件回复通知，请自行修改 <code>function.php</code>中 103 行的邮件地址为可用邮件地址，并安装 <a href="https://wordpress.org/plugins/wp-mail-smtp/">WP-Mail-SMTP</a> 等配置发信的插件进行配置或者通过你所喜欢的方式配置发信
（目前样式丑，未优化……<del>又不是不能用</del>）<br>
RnMaterial includes EMAIL REPLY of your own comments, please open <code>function.php</code>, modify its LINE 103 to your own EMAIL, and install some plugins for sending email, such as <a href="https://wordpress.org/plugins/wp-mail-smtp/">WP-Mail-SMTP</a> or other ways to set your Email sending.
(The style of this is ugly, I have not make it nice...<del>But it can be used, right?</del>)

## 已知问题 Known Issues
+ 搜索不可用
+ Search does not work
+ <del>主页无法翻页（准备通过ajax加载直接跳过这个问题）</del> 已修复
+ <del>Index does not turn the page, I will try to fix it by using Ajax. </del> Repaired
+ 侧边栏大部分已可通过 WordPress 后台控制，但目前无法折叠二级菜单
+ Most items of sidebar can be controled by WordPress, but you can't fold the secondary menu right now
+ <del>首次访问需要刷新，否则白屏</del> <a href="https://github.com/hjthjthjt/rnmaterial/pull/1">已修复</a>
+ <del>You must refresh the website when first visit, or it will just show WHITE.</del> <a href="https://github.com/hjthjthjt/rnmaterial/pull/1">Repaired</a>