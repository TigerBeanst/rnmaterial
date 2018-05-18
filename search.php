<?php get_header(); ?>
<body id="scheme-Paradox" class="lazy">
	<div class="material-layout mdl-js-layout has-drawer is-upgraded">
		<main class="material-layout__content" id="main">
			<div id="top"></div>
			<button class="MD-burger-icon sidebar-toggle">
				<span class="MD-burger-layer"></span>
			</button>
			<nav class="nav-body" style="margin-bottom: 50px">
				<h4 style="margin-left: 10px;margin-top: 10px!important"><?php printf( __( '对 %s 的搜索结果如下', 'twentytwelve' ), '<code style="margin: 0 2px;padding: 0 5px;background-color: rgba(0,0,0,.04);border-radius: 3px;">' . get_search_query() . '</code>' ); ?></h4>
			</nav>
			<div class="material-index mdl-grid">

				<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
					<div class="post_entry-module mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col fade out">
						<div class="post_thumbnail-custom mdl-card__media mdl-color-text--grey-50 lazy" style="background-image:url(<?php $img_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");echo $img_src[0]; ?>)">
							<p class="article-headline-p">
								<a href="<?php the_permalink();?>"><?php the_title();?></a></p>
							</div>
							<div class="mdl-color-text--grey-600 mdl-card__supporting-text post_entry-content"><?php the_excerpt();?>
							</div>
							<div id="post_entry-info">
								<div id="post_entry-left-info" class="mdl-card__supporting-text meta mdl-color-text--grey-600">
									<div id="author-avatar">
                						<?php echo get_avatar(1,32,avatar); ?></div>
										<div>
											<strong><?php the_author(); ?></strong>
											<span><?php the_time('M d, Y')?></span></div>
										</div>
										<div id="post_entry-right-info">
											<span>
												<a href="<?php the_permalink();?>" target="_self">阅读全文</a></span>
											</div>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>

							<nav class="nav-body">
								<div class="nav-next"><?php next_posts_link(__('<i class="material-icons sidebar-material-icons">navigate_before</i>')) ?></div>
								<div class="nav-prev"><?php previous_posts_link(__('<i class="material-icons sidebar-material-icons">navigate_next</i>')) ?></div>
							</nav>
							<script type="text/ls-javascript" id="thumbnail-script">var randomNum;

								var locatePost = $('.locate-thumbnail-symbol').next();
								for (var i = 0; i < 5; i++) {
								randomNum = Math.floor(Math.random() * 19 + 1);

								locatePost.children('.post_thumbnail-random').attr('id', 'random_thumbnail-' + randomNum);
								locatePost.children('.post_thumbnail-random').attr('data-original', 'https://materialcdn.b0.upaiyun.com/img/random/material-' + randomNum + '.png');
								$('.post_thumbnail-random').addClass('lazy');

								locatePost = locatePost.next();
							}</script>
						</div>
						<?php get_template_part( 'nav', 'index' ); ?>
					</div>
					<!--START-The image of footer-->
					<span id="footer-image">

					</span>
					<!--END-The image of footer-->
				</aside>
				<div id="back-to-top" class="toTop-wrap">
					<a href="#top" class="toTop">
						<i class="material-icons footer_top-i">expand_less</i></a>
					</div>
					<?php get_footer(); ?> 