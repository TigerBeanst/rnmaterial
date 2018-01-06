# RnMaterial For WordPress
RnMaterial 是一款基于 [hexo-theme-material](https://github.com/viosey/hexo-theme-material) 的 WordPress 主题。

## 演示站点
[甲烃气瓶](https://jakting.com)

## 使用须知
+ ***建议在 `仪表盘>设置>阅读` 中将 `博客页面至多显示` 改为 `5篇文章`***
+ 主题在`Microsoft Edge`浏览器上会无法显示图标字体，不修，谢谢，我不喜欢 Edge
+ RnMaterial 内置邮件回复通知，请自行修改 `function.php`中 `102` 行的邮件地址为可用邮件地址，并安装 [WP-Mail-SMTP](https://wordpress.org/plugins/wp-mail-smtp/)等配置发信的插件进行配置或者通过你所喜欢的方式配置发信（目前样式丑，未优化……~~又不是不能用~~）

## 已知问题
- [ ] 侧边栏大部分已可通过 WordPress 后台控制，但目前无法折叠二级菜单（鼠标移动至该处时会自动展开二级菜单）

## 非必要性提示
+ 文章默认使用 `CC BY-NC-SA 3.0`协议，如需更改请自行改动 `single.php` ~~（也许未来某天会加入设置页面）~~
+ 主题默认你的博客放在域名根目录（即 `//domain.com/` 即可打开你的博客，而不是例如 `//domain.com/wp`）。如果你的博客状态属于后者，影响仅限加入的 [`OwO表情`](https://github.com/DIYgod/OwO)，请自行更改 `js/OwO.json` 中内容，一般情况下，如果你放置在例如 `wp` 的目录中，你应该将 `/wp-content/themes/rnmaterial/img` 改为 `/wp/wp-content/themes/rnmaterial/img`