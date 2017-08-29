<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="theme-color" content="#607D8D">
    <meta name="author" content="">
    <meta name="description" itemprop="description" content="">
    <link rel="canonical" href="<?php echo bloginfo('url');?>">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/css/material.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/css/style.min.css">
    <script src="<?php echo bloginfo('template_url');?>/js/material.min.js"></script>
    <script>
(function(u, c) {
  var d = document, t = 'script', o = d.createElement(t),
      s = d.getElementsByTagName(t)[0];
  o.src = u;
  if (c) { o.addEventListener('load', function(e) { c(e); }); }
  s.parentNode.insertBefore(o, s);
})("<?php echo bloginfo('template_url');?>/js/pangu.js", function() {
  pangu.spacingPage();
});
</script>    <!--[if lte IE 9]>
      <link rel="stylesheet" href="/css/ie-blocker.css">
      <script src="/js/ie-blocker.zhCN.js"></script>
    <![endif]-->
    <style>@font-face{font-family:'Material Icons';font-style:normal;font-weight:400;src:url(<?php echo bloginfo('template_url');?>/fonts/MaterialIcons-Regular.woff2) format('woff2'),url(<?php echo bloginfo('template_url');?>/fonts/MaterialIcons-Regular.woff) format('woff'),url(<?php echo bloginfo('template_url');?>/fonts/MaterialIcons-Regular.ttf) format('truetype')}</style>
    <style>body,html{font-family:-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI","Noto Sans","Noto Sans CJK SC",Roboto,"Helvetica Neue",Arial,"PingFang SC","Hiragino Sans GB","Microsoft YaHei",sans-serif}a{color:#78909c}#scheme-Paradox .hot_tags-count,#scheme-Paradox .sidebar-colored .sidebar-badge,#scheme-Paradox .sidebar-colored .sidebar-header,#scheme-Paradox .sidebar_archives-count,#search-form-label:after,#search-label,.mdl-card__media{background-color:#455a64!important}#scheme-Paradox .sidebar-colored .sidebar-nav>.dropdown>.dropdown-menu>li>a:focus,#scheme-Paradox .sidebar-colored .sidebar-nav>.dropdown>.dropdown-menu>li>a:hover{color:#455a64!important}#ds-reset #ds-ctx .ds-ctx-entry .ds-ctx-head a,#post_entry-right-info,.sidebar-colored .sidebar-nav li:hover>a,.sidebar-colored .sidebar-nav li:hover>a i,.sidebar-colored .sidebar-nav li>a:focus i,.sidebar-colored .sidebar-nav li>a:hover,.sidebar-colored .sidebar-nav li>a:hover i,.sidebar-colored .sidebar-nav>.open>a,.sidebar-colored .sidebar-nav>.open>a:focus,.sidebar-colored .sidebar-nav>.open>a:hover{color:#455a64!important}.toTop{background:#455a64!important}.material-layout .material-index>.material-nav,.material-layout .material-post>.material-nav,.material-nav a{color:#455a64}#scheme-Paradox .MD-burger-layer{background-color:#455a64}#scheme-Paradox #post-toc-trigger-btn{color:#455a64}.post-toc a:hover{color:#78909c;text-decoration:underline}.nav-body{padding:20px 20px 15px 20px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);background-color:#fff;margin-bottom:15px;width: 884px;margin:0 auto;}.nav-body a{text-decoration:none}.nav-next{float:left }.nav-prev{float:right }</style>
    <style>body{background-color:#dedede}#scheme-Paradox .material-layout .something-else .mdl-card__supporting-text{background-color:#fff}p img{height: auto;}</style>
    <script src="<?php echo bloginfo('template_url');?>/js/jquery.min.js"</script>
    <script>function Queue() {
        function e(e) {
          this.debug && console.log("Offered a Queued Function."),
          "function" == typeof e ? this.dataStore.push(e) : console.log("You must offer a function.")
        }
        function t() {
          return this.debug && console.log("Polled a Queued Function."),
          this.dataStore.shift()
        }
        function o() {
          var e = this.poll();
          void 0 !== e && (this.debug && console.log("Run a Queued Function."), e())
        }
        function u() {
          this.debug = !0
        }
        this.dataStore = [],
        this.offer = e,
        this.poll = t,
        this.execNext = o,
        this.debug = !1,
        this.startDebug = u
      }
      var queue = new Queue</script>
     <?php wp_head();?></head>
