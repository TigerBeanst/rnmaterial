**蹲个新版？ [TigerMaterial](https://jakting.com/archives/tigermaterial.html)（开发中……）**

# RnMaterial For WordPress
RnMaterial 是一款基于 [hexo-theme-material](https://github.com/viosey/hexo-theme-material) 的 WordPress 主题。

## 演示站点
[甲烃气瓶](https://jakting.com)

## 2.0.1 更新日志
+ (修复)搜索页面的头像
+ (修复)侧边栏头图
+ (新增)未设置特色图片的文章将随机设置为 Material Design 图片
+ (新增)设置文章列表显示文章数（优先于 WordPress 本身设置）


## 关于 Prism 代码语法高亮
去除了主题原本的样式，理论兼容其他 Prism 语法高亮
目前测试了 [WP Editor.MD](https://wordpress.org/plugins/wp-editormd/) Markdown 编辑器，正常工作，其他编辑器或单独语法高亮暂未测试，若失败请发 issue
**推荐使用 Prism 的 `default` 主题**

### 如果 WP Editor.MD 中的语法高亮不工作，请尝试以下两种解决方式：
1. 进入 WP Editor.MD 插件后台，在`语法高亮选项`中`语法高亮加载模式`从`自动加载模式`改为`自定义加载模式`，保存并刷新任意文章后，再次设置为`自动加载模式`并保存，似乎可以正常工作
2. **保证文章中的代码块均选择了正确的渲染语言，例如 `npm install -g hexo-cli` 应正确选择为 `Bash` 而不是 `Shell`，貌似只要文章中有正确的渲染，其他就算不正确也会正确加载代码样式（但是没有对应的高亮）**

## 使用须知
+ ***建议在 `仪表盘>设置>阅读` 中将 `博客页面至多显示` 改为 `5篇文章`***
+ 主题在`Microsoft Edge`浏览器上会无法显示图标字体，不修，谢谢，我不喜欢 Edge

## 已知问题
- [ ] 侧边栏大部分已可通过 WordPress 后台控制，但目前无法折叠二级菜单（鼠标移动至该处时会自动展开二级菜单）

## 非必要性提示
+ 主题默认你的博客放在域名根目录（即 `//domain.com/` 即可打开你的博客，而不是例如 `//domain.com/wp`）。如果你的博客状态属于后者，影响仅限加入的 [`OwO表情`](https://github.com/DIYgod/OwO)，请自行更改 `js/OwO.json` 中内容，一般情况下，如果你放置在例如 `wp` 的目录中，你应该将 `/wp-content/themes/rnmaterial/img` 改为 `/wp/wp-content/themes/rnmaterial/img`（当然，如果你在设置中关闭了 OwO 表情，你可无视这条提示）
