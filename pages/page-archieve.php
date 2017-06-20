<?php
/*
Template Name: 归档页面
*/
?>
<?php get_header();?>	
<script>(function($,window){$(function(){var $a=$("#archives"),$m=$(".al_mon",$a),$l=$(".al_post_list",$a),$l_f=$(".al_post_list:first",$a);$l.hide();$l_f.show();$m.css("cursor","s-resize").on("click",function(){$(this).next().slideToggle(400)});var animate=function(index,status,s){if(index>$l.length){return}if(status=="up"){$l.eq(index).slideUp(s,function(){animate(index+1,status,(s-10<1)?0:s-10)})}else{$l.eq(index).slideDown(s,function(){animate(index+1,status,(s-10<1)?0:s-10)})}};$("#al_expand_collapse").on("click",function(e){e.preventDefault();if($(this).data("s")){$(this).data("s","");animate(0,"up",100)}else{$(this).data("s",1);animate(0,"down",100)}})})})(jQuery,window);</script>
<style>ul{list-style-type:none} #al_expand_collapse{background:0;border:0;border-radius:2px;position:relative;height:36px;margin:0;min-width:64px;padding:0 16px;display:inline-block;font-family:"Roboto","Helvetica","Arial",sans-serif;font-size:14px;font-weight:500;text-transform:uppercase;letter-spacing:0;overflow:hidden;will-change:box-shadow;transition:box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1),color .2s cubic-bezier(.4,0,.2,1);outline:0;cursor:pointer;text-decoration:none;text-align:center;line-height:36px;vertical-align:middle;-webkit-tap-highlight-color:transparent;-webkit-tap-highlight-color:rgba(255,255,255,0);background:rgba(158,158,158,.2);box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);}</style>
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
			  
              <div id="post-content" class="mdl-color-text--grey-700 mdl-card__supporting-text fade out"><?php zww_archives_list(); ?></div>
              <?php endwhile; endif;?>
			  <style>#disqus-comment{background-color:#eee;padding:2pc}</style>
			</div>
			<nav class="material-nav mdl-color-text--grey-50 mdl-cell mdl-cell--12-col"></nav><!--强行占位-->
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