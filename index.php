<?php get_header(); ?>
  <body id="scheme-Paradox" class="lazy">
    <div class="material-layout mdl-js-layout has-drawer is-upgraded">
      <main class="material-layout__content" id="main">
        <div id="top"></div>
        <button class="MD-burger-icon sidebar-toggle">
          <span class="MD-burger-layer"></span>
        </button>
        <div class="material-index mdl-grid">
          <div class="mdl-card mdl-shadow--2dp daily-pic mdl-cell mdl-cell--8-col index-top-block">
            <div class="mdl-card__media mdl-color-text--grey-50" style="background-image:url(<?php echo bloginfo('template_url');?>/img/tower.jpg)">
              <p class="index-top-block-slogan">
                <a href=""><?php bloginfo('description');?></a></p>
            </div>
            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
              <div id="author-avatar">
                <img src="<?php echo bloginfo('template_url');?>/img/avatar.png" width="32px" height="32px" alt="avatar"></div>
              <div>
			  <!--
			  Modify-->
                <strong><?php bloginfo('author');?></strong></div>
            </div>
          </div>
          <div class="mdl-card mdl-shadow--2dp something-else mdl-cell mdl-cell--8-col mdl-cell--4-col-desktop index-top-block">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable" method="post" action="">
              <label id="search-label" class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--fab mdl-color--accent mdl-shadow--4dp" for="search">
                <i class="material-icons mdl-color-text--white" role="presentation">search</i></label>
              <form autocomplete="off" id="search-form" class="mdl-textfield__expandable-holder">
                <input type="text" id="search" class="form-control mdl-textfield__input search-input" name="q" results="0" placeholder="">
                <label id="search-form-label" class="mdl-textfield__label" for="search"></label>
              </form>
            </div>
            <div id="local-search-result"></div>
            <div class="something-else-logo mdl-color--white mdl-color-text--grey-600">
              <a href="https://nfz.moe" target="_blank">
                <img src="data:image/png;base64,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" alt="logo"></a>
            </div>
            <div class="mdl-card__supporting-text meta meta--fill mdl-color-text--grey-600">
              <div class="section-spacer"></div>
              
              <button id="menubtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons" role="presentation">more_vert</i>
                <span class="visuallyhidden">show menu</span></button>
              <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="menubtn">
                <a class="index_share-link" href="<?php bloginfo('atom_url'); ?>">
                  <li class="mdl-menu__item mdl-js-ripple-effect">文章 RSS</li></a>
                <a class="post_share-link" href="http://service.weibo.com/share/share.php?appkey=&title=<?php bloginfo('name');?>&url=<?php bloginfo('url');?>&pic=&searchPic=false&style=simple" target="_blank">
                    <li class="mdl-menu__item">分享到微博</li></a>
                  <a class="post_share-link" href="https://plus.google.com/share?url=<?php bloginfo('url');?>" target="_blank">
                    <li class="mdl-menu__item">分享到 Google+</li></a>
              </ul>
            </div>
          </div>
		  
		  
		  
		  
		  
		  
		  
		
		  <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
          <div class="post_entry-module mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col fade out">
            <div class="post_thumbnail-custom mdl-card__media mdl-color-text--grey-50 lazy" style="background-image:url(<?php $img_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");echo $img_src[0]; ?>)">
              <p class="article-headline-p">
                <a href="<?php the_permalink();?>"><?php the_title();?></a></p>
            </div>
            <div class="mdl-color-text--grey-600 mdl-card__supporting-text post_entry-content"><?php echo wp_trim_words(get_the_content(),200);?>
            </div>
            <div id="post_entry-info">
              <div id="post_entry-left-info" class="mdl-card__supporting-text meta mdl-color-text--grey-600">
                <div id="author-avatar">
                  <img src="<?php echo bloginfo('template_url');?>/img/avatar.png" width="44px" height="44px" alt="neoFelhz's avatar"></div>
                <div>
                  <strong><?php the_author(); ?></strong>
                  <span><?php the_time('M月 d, Y')?></span></div>
              </div>
              <div id="post_entry-right-info">
                <span>
                <a href="<?php the_permalink();?>" target="_self">阅读全文</a></span>
              </div>
            </div>
          </div>
		  
		  <li><?php next_posts_link('&laquo; Older Entries') ?></li>
          <li><?php previous_posts_link('Newer Entries &raquo;') ?></li>
		  <?php endwhile; ?>
  	      <?php endif; ?>
		  
          <nav class="material-nav mdl-cell mdl-cell--12-col">
            <span class="page-number current">1</span>
            <a class="page-number" href="/page/2/">2</a>
            <a class="page-number" href="/page/3/">3</a>
            <a class="page-number" href="/page/10/">10</a>
            <a class="extend next" rel="next" href="/page/2/">
              <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons" role="presentation">arrow_forward</i></button>
            </a>
			
			
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