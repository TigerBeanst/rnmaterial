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
              <a href="<?php echo bloginfo('url');?>" target="_blank">
                <img src="<?php echo bloginfo('template_url');?>/img/something.png" alt="logo"></a>
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