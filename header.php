<!DOCTYPE html>
<html style="display:none" lang="zh">
  <head>
    <meta charset="utf-8">
    <script>window.materialVersion = "1.4.0"</script>
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="theme-color" content="#607D8D">
    <meta name="author" content="neoFelhz">
    <meta name="description" itemprop="description" content="neoFelhz, 一枚爱折腾的萌新. 这是我的小博客一枚">
    <link rel="canonical" href="<?php echo bloginfo('url');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/css/material.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/css/style.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/css/prism.css"/>
	<script src="<?php echo bloginfo('template_url');?>/js/material.min.js"></script>
    <!--[if lte IE 9]>
      <link rel="stylesheet" href="/css/ie-blocker.css">
      <script src="/js/ie-blocker.zhCN.js"></script>
    <![endif]-->
    <script>!function(){window.lsloader={jsRunSequence:[],jsnamemap:{},cssnamemap:{}},lsloader.removeLS=function(e){try{localStorage.removeItem(e)}catch(e){}},lsloader.setLS=function(e,t){try{localStorage.setItem(e,t)}catch(e){}},lsloader.getLS=function(e){var t="";try{t=localStorage.getItem(e)}catch(e){t=""}return t},versionString="/*"+materialVersion+"*/",lsloader.clean=function(){try{for(var e=[],t=0;t<localStorage.length;t++){e.push(localStorage.key(t))}e.forEach(function(e){var t=lsloader.getLS(e);t&&-1===t.indexOf(versionString)&&lsloader.removeLS(e)})}catch(e){}},lsloader.clean(),lsloader.load=function(e,t,s){s=s||function(){};var n;if((n=this.getLS(e))&&-1===n.indexOf(versionString)){return this.removeLS(e),void this.requestResource(e,t,s)}if(n){var a=n.split(versionString)[0];if(a!=t){return console.log("reload:"+t),this.removeLS(e),void this.requestResource(e,t,s)}n=n.split(versionString)[1],/\.js?.+$/.test(a)?(this.jsRunSequence.push({name:e,code:n}),this.runjs(t,e,n)):(document.getElementById(e).appendChild(document.createTextNode(n)),s())}else{this.requestResource(e,t,s)}},lsloader.requestResource=function(e,t,s){var n=this;/\.js?.+$/.test(t)?this.iojs(t,e,function(e,t,s){n.setLS(t,e+versionString+s),n.runjs(e,t,s)}):/\.css?.+$/.test(t)&&this.iocss(t,e,function(s){document.getElementById(e).appendChild(document.createTextNode(s)),n.setLS(e,t+versionString+s)},s)},lsloader.iojs=function(e,t,s){var n=this;n.jsRunSequence.push({name:t,code:""});try{var a=new XMLHttpRequest;a.open("get",e,!0),a.onreadystatechange=function(){if(4==a.readyState){if((a.status>=200&&a.status<300||304==a.status)&&""!=a.response){return void s(e,t,a.response)}n.jsfallback(e,t)}},a.send(null)}catch(s){n.jsfallback(e,t)}},lsloader.iocss=function(e,t,s,n){var a=this;try{var u=new XMLHttpRequest;u.open("get",e,!0),u.onreadystatechange=function(){if(4==u.readyState){if((u.status>=200&&u.status<300||304==u.status)&&""!=u.response){return s(u.response),void n()}a.cssfallback(e,t,n)}},u.send(null)}catch(s){a.cssfallback(e,t,n)}},lsloader.iofonts=function(e,t,s,n){var a=this;try{var u=new XMLHttpRequest;u.open("get",e,!0),u.onreadystatechange=function(){if(4==u.readyState){if((u.status>=200&&u.status<300||304==u.status)&&""!=u.response){return s(u.response),void n()}a.cssfallback(e,t,n)}},u.send(null)}catch(s){a.cssfallback(e,t,n)}},lsloader.runjs=function(e,t,s){if(t&&s){for(var n in this.jsRunSequence){this.jsRunSequence[n].name==t&&(this.jsRunSequence[n].code=s)}}if(this.jsRunSequence[0]&&this.jsRunSequence[0].code&&"failed"!=this.jsRunSequence[0].status){(u=document.createElement("script")).appendChild(document.createTextNode(this.jsRunSequence[0].code)),u.type="text/javascript",document.getElementsByTagName("head")[0].appendChild(u),this.jsRunSequence.shift(),this.jsRunSequence.length>0&&this.runjs()}else{if(this.jsRunSequence[0]&&"failed"==this.jsRunSequence[0].status){var a=this,u=document.createElement("script");u.src=this.jsRunSequence[0].path,u.type="text/javascript",this.jsRunSequence[0].status="loading",u.onload=function(){a.jsRunSequence.shift(),a.jsRunSequence.length>0&&a.runjs()},document.body.appendChild(u)}}},lsloader.tagLoad=function(e,t){this.jsRunSequence.push({name:t,code:"",path:e,status:"failed"}),this.runjs()},lsloader.jsfallback=function(e,t){if(!this.jsnamemap[t]){this.jsnamemap[t]=t;for(var s in this.jsRunSequence){this.jsRunSequence[s].name==t&&(this.jsRunSequence[s].code="",this.jsRunSequence[s].status="failed",this.jsRunSequence[s].path=e)}this.runjs()}},lsloader.cssfallback=function(e,t,s){if(!this.cssnamemap[t]){this.cssnamemap[t]=1;var n=document.createElement("link");n.type="text/css",n.href=e,n.rel="stylesheet",n.onload=n.onerror=s;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(n,a)}},lsloader.runInlineScript=function(e,t){var s=document.getElementById(t).innerText;this.jsRunSequence.push({name:e,code:s}),this.runjs()},lsloader.loadCombo=function(e){var t="",s={};for(var n in e){var a=this.getLS(e[n].name);if(a){var u=a.split(versionString)[0],i=a.split(versionString)[1]}else{u=""}u==e[n].path?this.jsRunSequence.push({name:e[n].name,code:i,path:e[n].path}):(this.jsRunSequence.push({name:e[n].name,code:null,path:e[n].path,status:"comboloading"}),s[e[n].name]=!0,t+=(""==t?"":";")+e[n].path)}var o=this;if(t){var r=new XMLHttpRequest;r.open("get",combo+t,!0),r.onreadystatechange=function(){if(4==r.readyState){if(r.status>=200&&r.status<300||304==r.status){if(""!=r.response){return void o.runCombo(r.response,s)}}else{for(var e in o.jsRunSequence){s[o.jsRunSequence[e].name]&&(o.jsRunSequence[e].status="failed")}o.runjs()}}},r.send(null)}this.runjs()},lsloader.runCombo=function(e,t){(e=e.split("/*combojs*/")).shift();for(var s in this.jsRunSequence){t[this.jsRunSequence[s].name]&&e[0]&&(this.jsRunSequence[s].status="comboJS",this.jsRunSequence[s].code=e[0],this.setLS(this.jsRunSequence[s].name,this.jsRunSequence[s].path+versionString+e[0]),e.shift())}this.runjs()}}();</script>
    <style id="<?php echo bloginfo('template_url');?>/css/material.min.css"></style>
    <script>void 0===window.lsLoadCSSMaxNums&&(window.lsLoadCSSMaxNums=0),window.lsLoadCSSMaxNums++,lsloader.load("<?php echo bloginfo('template_url');?>/css/material.min.css","<?php echo bloginfo('template_url');?>/css/material.min.css",function(){void 0===window.lsLoadCSSNums&&(window.lsLoadCSSNums=0),++window.lsLoadCSSNums==window.lsLoadCSSMaxNums&&(document.documentElement.style.display="")});</script>
    <style id="<?php echo bloginfo('template_url');?>/css/style.min.csscss/style.min.css"></style>
    <script>void 0===window.lsLoadCSSMaxNums&&(window.lsLoadCSSMaxNums=0),window.lsLoadCSSMaxNums++,lsloader.load("<?php echo bloginfo('template_url');?>/css/style.min.css","<?php echo bloginfo('template_url');?>/css/style.min.css",function(){void 0===window.lsLoadCSSNums&&(window.lsLoadCSSNums=0),++window.lsLoadCSSNums==window.lsLoadCSSMaxNums&&(document.documentElement.style.display="")});</script>
    <style id="<?php echo bloginfo('template_url');?>/css/prism.css"></style>
    <script>void 0===window.lsLoadCSSMaxNums&&(window.lsLoadCSSMaxNums=0),window.lsLoadCSSMaxNums++,lsloader.load("<?php echo bloginfo('template_url');?>/css/prism.css","<?php echo bloginfo('template_url');?>/css/prism.css",function(){void 0===window.lsLoadCSSNums&&(window.lsLoadCSSNums=0),++window.lsLoadCSSNums==window.lsLoadCSSMaxNums&&(document.documentElement.style.display="")});</script>
    
    <style>body,html{font-family:-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI","Noto Sans","Noto Sans CJK SC",Roboto,"Helvetica Neue",Arial,"PingFang SC","Hiragino Sans GB","Microsoft YaHei",sans-serif}a{color:#78909c}#scheme-Paradox .hot_tags-count,#scheme-Paradox .sidebar-colored .sidebar-badge,#scheme-Paradox .sidebar-colored .sidebar-header,#scheme-Paradox .sidebar_archives-count,#search-form-label:after,#search-label,.mdl-card__media{background-color:#455a64!important}#scheme-Paradox .sidebar-colored .sidebar-nav>.dropdown>.dropdown-menu>li>a:focus,#scheme-Paradox .sidebar-colored .sidebar-nav>.dropdown>.dropdown-menu>li>a:hover{color:#455a64!important}#ds-reset #ds-ctx .ds-ctx-entry .ds-ctx-head a,#post_entry-right-info,.sidebar-colored .sidebar-nav li:hover>a,.sidebar-colored .sidebar-nav li:hover>a i,.sidebar-colored .sidebar-nav li>a:focus i,.sidebar-colored .sidebar-nav li>a:hover,.sidebar-colored .sidebar-nav li>a:hover i,.sidebar-colored .sidebar-nav>.open>a,.sidebar-colored .sidebar-nav>.open>a:focus,.sidebar-colored .sidebar-nav>.open>a:hover{color:#455a64!important}.toTop{background:#455a64!important}.material-layout .material-index>.material-nav,.material-layout .material-post>.material-nav,.material-nav a{color:#455a64}#scheme-Paradox .MD-burger-layer{background-color:#455a64}#scheme-Paradox #post-toc-trigger-btn{color:#455a64}.post-toc a:hover{color:#78909c;text-decoration:underline}.nav-body{padding:20px 20px 15px 20px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);background-color:#fff;margin-bottom:15px;width: 884px;margin:0 auto;}.nav-body a{text-decoration:none}.nav-next{float:left }.nav-prev{float:right }</style>
    <style>body{background-color:#e0e0e0}#scheme-Paradox .material-layout .something-else .mdl-card__supporting-text{background-color:#fff}p img{height: auto;}</style>
    <style>@font-face{font-family:'Material Icons';font-style:normal;font-weight:400;src:url(<?php echo bloginfo('template_url');?>/fonts/MaterialIcons-Regular.woff2) format('woff2'),url(<?php echo bloginfo('template_url');?>/fonts/MaterialIcons-Regular.woff) format('woff'),url(<?php echo bloginfo('template_url');?>/fonts/MaterialIcons-Regular.ttf) format('truetype')}</style>
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
    <link rel="preload" href="<?php echo bloginfo('template_url');?>/fonts/MaterialIcons-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <?php wp_head();?></head>