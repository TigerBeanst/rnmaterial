<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="theme-color" content="#607D8D">
    <meta name="author" content="neoFelhz">
    <meta name="description" itemprop="description" content="">
    <link rel="canonical" href="<?php echo bloginfo('url');?>">
    <link rel="preload" href="<?php echo bloginfo('template_url');?>/css/material.min.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="<?php echo bloginfo('template_url');?>/css/style.min.css" as="style" onload="this.rel='stylesheet'">
    <script src="<?php echo bloginfo('template_url');?>/js/material.min.js"></script>
    <!--[if lte IE 9]>
      <link rel="stylesheet" href="/css/ie-blocker.css">
      <script src="/js/ie-blocker.zhCN.js"></script>
    <![endif]-->
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
