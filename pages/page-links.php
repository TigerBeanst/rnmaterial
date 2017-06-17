<?php
/*
Template Name: 友链页面
*/
?>
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
                  <img src="<?php echo bloginfo('template_url');?>/img/avatar.png" width="44px" height="44px" alt="Author Avatar"></div>
                <div>
                  <strong><?php the_author(); ?></strong>
                  <span><?php the_time('M月 d, Y')?></span></div>
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
			  <style>.lists{padding:5px;margin:25px auto auto 0}.linkcat{font-size:12px;font-weight:bolder;padding:5px;margin-bottom:15px;list-style:none;clear:both}.lists li h2{font-size:14px;margin-bottom:15px;color:#616161}.listcat ul{margin-left:20px}.linkcat ul li{background:0;border:0;border-radius:2px;color:#000;position:relative;height:36px;margin:10px 10px 10px 10px;min-width:64px;padding:0 16px;display:inline-block;font-family:"Roboto","Helvetica","Arial",sans-serif;font-size:14px;font-weight:500;text-transform:uppercase;letter-spacing:0;overflow:hidden;will-change:box-shadow;transition:box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1),color .2s cubic-bezier(.4,0,.2,1);outline:0;cursor:pointer;text-decoration:none;text-align:center;line-height:36px;vertical-align:middle;-webkit-tap-highlight-color:transparent;-webkit-tap-highlight-color:rgba(255,255,255,0);background:rgba(158,158,158,.2);box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);}.linkcat ul li a{color:#616161;text-decoration:none}.linkcat ul li a img{margin-right:3px}.linkcat ul li a:visited{color:#616161}.tips{font-size:14px;margin-bottom:18px;margin-left:5px}</style>
              <div id="post-content" class="mdl-color-text--grey-700 mdl-card__supporting-text fade out"><div class="lists"><p class="tips">站点随机排序</p><?php wp_list_bookmarks('orderby=rand&show_images=1'); ?></div></div>
              <?php endwhile; endif;?>
			<div id="disqus-comment">
			<?php comments_template();?>
			</div>
            
			</div>
          </div>
        </div>
            <?php get_template_part( 'nav', 'index' ); ?>
        </aside>
        <div id="back-to-top" class="toTop-wrap">
          <a href="#top" class="toTop">
            <i class="material-icons footer_top-i">expand_less</i></a>
        </div>
<?php get_footer();?>