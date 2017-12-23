# RnMaterial For WordPress
RnMaterial 是一款基于 [hexo-theme-material](https://github.com/viosey/hexo-theme-material) 的 WordPress 主题。

## 演示站点
[甲烃气瓶](https://jakting.com)

## 使用须知
+ ***建议在 `仪表盘>设置>阅读` 中将 `博客页面至多显示` 改为 `5篇文章`***
+ 主题在`Microsoft Edge`浏览器上会无法显示图标字体，不修，谢谢，我不喜欢 Edge
+ **请自行修改`img/avatar.png`为你的头像**
+ RnMaterial 内置邮件回复通知，请自行修改 `function.php`中 `103` 行的邮件地址为可用邮件地址，并安装 [WP-Mail-SMTP](https://wordpress.org/plugins/wp-mail-smtp/)等配置发信的插件进行配置或者通过你所喜欢的方式配置发信（目前样式丑，未优化……~~又不是不能用~~）

## 已知问题
- [ ] 搜索不可用
- [x] ~~主页无法翻页（准备通过ajax加载直接跳过这个问题）~~ 已修复
- [ ] 侧边栏大部分已可通过 WordPress 后台控制，但目前无法折叠二级菜单
- [x] ~~首次访问需要刷新，否则白屏~~ [已修复](https://github.com/hjthjthjt/rnmaterial/pull/1)

## 非必要性提示
+ 文章默认使用 CC BY-NC-SA 3.0 协议，如需更改请自行改动 `single.php` ~~（也许未来某天会加入设置页面）~~