<?php wp_footer();?>
<footer class="mdl-mini-footer" id="bottom">
	<div class="mdl-mini-footer--left-section">
		<div>
			<div class="footer-develop-div">Powered by
				<a href="https://cn.wordpress.org/" target="_blank" class="footer-develop-a">WordPress</a></div>
				<div class="footer-develop-div">Theme -
					<a href="https://github.com/hjthjthjt/rnmaterial" target="_blank" class="footer-develop-a">RnMaterial</a> | <a href="https://jakting.com" target="_blank" class="footer-develop-a">Jartip</a></div>
				</div>
			</div>
			<div class="mdl-mini-footer--right-section">
				<div id="copyright">Copyright&nbsp;©&nbsp;2016&nbsp;-
					<script type="text/javascript">var fd = new Date;
				document.write("&nbsp;" + fd.getFullYear() + "&nbsp;")</script><?php bloginfo("name"); ?>
				<br>本博客使用
				<a href="https://creativecommons.org/licenses/by-nc-sa/3.0/deed.zh" target="_blank" class="footer-develop-a">CC BY-NC-SA 3.0</a>进行许可</div>
			</div>
		</footer>
		<script src="<?php echo bloginfo('template_url');?>/js/lazyload.min.js"></script>
		<script src="<?php echo bloginfo('template_url');?>/js/js.min.js"></script>
		<script src="<?php echo bloginfo('template_url');?>/js/nprogress.js"></script>
		<script type="text/ls-javascript" id="NProgress-script">NProgress.configure({
			showSpinner: true
		});
		NProgress.start();
		$('#nprogress .bar').css({
		'background': '#263238'
	});
	$('#nprogress .peg').css({
	'box-shadow': '0 0 10px #263238, 0 0 15px #263238'
});
$('#nprogress .spinner-icon').css({
'border-top-color': '#263238',
'border-left-color': '#263238'
});
setTimeout(function() {
NProgress.done();
$('.fade').removeClass('out');
},
300);</script>

<script>var agent = navigator.userAgent.toLowerCase();
agent.indexOf("ucbrowser") > 0 && (document.write('<link rel="stylesheet" href="/css/uc.css">'), alert("由于 UC 浏览器使用极旧的内核，而本网站使用了一些新的特性。\n为了您能更好的浏览，推荐使用 Chrome 或 Firefox 浏览器。"))</script>
<script type="text/ls-javascript" id="window-load">$(window).on('load',
	function() {
	// Post_Toc parent position fixed
	$('.post-toc-wrap').parent('.mdl-menu__container').css('position', 'fixed');
});</script>
<script type="text/ls-javascript" id="lazy-load">// Offer LazyLoad
	queue.offer(function() {
	$('.lazy').lazyload({
	effect: 'show'
});
});</script>
</main>
</div>
</body>

</html>