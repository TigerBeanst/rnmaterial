<?php get_header();?>	
<body id="scheme-Paradox" class="lazy">
  <div class="material-layout mdl-js-layout has-drawer is-upgraded">
    <main class="material-layout__content" id="main">
      <div id="top"></div>
      <button class="MD-burger-icon sidebar-toggle">
        <span class="MD-burger-layer"></span>
      </button>
      <div class="material-post_container">
        <div class="material-post mdl-grid">
          <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col">
           <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post_thumbnail-custom mdl-card__media mdl-color-text--grey-50" style="background-image:url(<?php $img_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");echo $img_src[0]; ?>)">
              <p class="article-headline-p"><?php the_title();?></p></div>
              <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
                <div id="author-avatar">
                  <?php echo get_avatar(1,44,avatar); ?></div>
                  <div>
                    <strong><?php the_author(); ?></strong>
                    <span><?php the_time('M d, Y')?></span></div>
                    <div class="section-spacer"></div>
                    <button id="article-fuctions-share-button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                      <i class="material-icons" role="presentation">share</i>
                      <span class="visuallyhidden">share</span></button>
                      <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="article-fuctions-share-button">
                        <a class="post_share-link" href="http://service.weibo.com/share/share.php?appkey=&title=<?php the_title();?>&url=<?php the_permalink();?>&pic=&searchPic=false&style=simple" target="_blank">
                          <li class="mdl-menu__item">分享到微博</li></a>
                          <a class="post_share-link" href="https://plus.google.com/share?url=<?php the_permalink();?>" target="_blank">
                            <li class="mdl-menu__item">分享到 Google+</li></a>
                          </ul>
                        </div>
                        
                        <div id="post-content" class="mdl-color-text--grey-700 mdl-card__supporting-text fade out"><?php the_content();?>
                          <blockquote style="margin:2em 0 0;padding:.5em 1em;border-left:3px solid #f44336;background-color:#f5f5f5;list-style:none">
                            <p><b>本文采用 <a rel="nofollow noopener" href="https://creativecommons.org/licenses/by-nc-sa/3.0/deed.zh" target="_blank">CC BY-NC-SA 3.0</a> 协议进行许可，在您遵循此协议的情况下，可以自由共享与演绎本文章。</b>
                              <br><b>本文链接：</b><a href="<?php the_permalink();?>"><?php the_permalink();?></a></p></blockquote>
                            </div>
                          <?php endwhile; endif;?>
                        </div>
                        <nav class="material-nav mdl-color-text--grey-50 mdl-cell mdl-cell--12-col">
                         <?php $current_category = get_the_category();$prev_post = get_previous_post($current_category,'');$next_post = get_next_post($current_category,'')?>
                         <?php if (!empty( $prev_post )): ?>
                           <a href="<?php echo get_permalink( $prev_post->ID ); ?>" id="post_nav-newer" class="prev-content">
                            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
                              <i class="material-icons">arrow_back</i></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 旧篇</a></span>
                            <?php endif; ?>
                            <?php if (!empty( $next_post )): ?>
                             <span align="right"><a href="<?php echo get_permalink( $next_post->ID ); ?>" id="post_nav-older" class="next-content">新篇 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation"><i class="material-icons">arrow_forward</i></button> </a></span>
                            <?php endif; ?>
                          </nav>
                          <?php comments_template();?>


                        </div>
                      </div>
                      <?php get_template_part( 'nav', 'index' ); ?>
                    </aside>
                    <div id="back-to-top" class="toTop-wrap">
                      <a href="#top" class="toTop">
                        <i class="material-icons footer_top-i">expand_less</i></a>
                      </div>
                      <?php get_footer();?>