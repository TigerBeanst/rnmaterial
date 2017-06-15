<?php get_header();?>
	<script>
		function pageScroll() {
			window.scrollBy(0,-50);
			scrolldelay = setTimeout('pageScroll()',10);
			if(document.documentElement.scrollTop==0)
			clearTimeout(scrolldelay);
		}
	</script>
	<div style="position: fixed;bottom: 10px;right: 10px;">
	<a href="javascript:pageScroll();" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">navigation</i></a>
	</div>
		<div class="row" style="text-align: center;" id="searchform">
			<div class="col m6 s12 offset-m3 input-field">
				<form method="get" action="/">
					<input type="text" id="s" name="s" class="validate">
					<label for="s">在此搜索</label>
				</form>
			</div>
		</div>
		<div id="wrapper">
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<div class="row">
			<div class="col m6 s12 offset-m3">
		<div class="card hoverable" style="overflow: hidden;">
			<?php if(has_post_thumbnail()) :?>
    <div class="card-image waves-effect waves-block waves-light" onclick="javascript:window.location.href='<?php the_permalink();?>'">
		<?php echo the_post_thumbnail('',array('class' => 'responsive-img'));?>
  	</div>
  <?php endif; ?>
    <div class="card-content">
      <h1 class="card-title grey-text text-darken-4"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
      <h6 class="valign-wrapper grey-text">
      	<i class="material-icons tiny valign">alarm</i><?php the_time('Y-m-d')?>
      	<i class="material-icons tiny valign" style="margin-left: 10px;">face</i><?php the_author();?>
      </h6>
      <p><?php echo wp_trim_words(get_the_content(),200);?></p>
    </div>
		<div class="card-action">
			<p><a title="<?php the_title();?>" href="<?php the_permalink();?>">阅读全文...</a></p>
		</div>
	</div>
	</div>
	</div>
	<?php endwhile; else:?>
	<div class="row">
	<div class="col m6 s12 offset-m3">
		<div class="card hoverable" style="overflow: hidden;">
    		<div class="card-content">
      		<h1 class="card-title grey-text text-darken-4"><a>发生错误...</a></h1>
      		<p>没有找到您想要的搜索结果，为您推荐以下几篇文章</p>
    		</div>
		</div>
	</div>
	</div>
		<?php
		$args = array( 'numberposts' => 2, 'orderby' => 'rand', 'post_status' => 'publish' );
		$rand_posts = get_posts( $args );
		foreach( $rand_posts as $post ) : ?>
		<div class="row">
		<div class="col m6 s12 offset-m3">
			<div class="card hoverable" style="overflow: hidden;">
    			<div class="card-content">
      				<h1 class="card-title grey-text text-darken-4"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
    			</div>
				<div class="card-action">
				<p><a title="<?php the_title();?>" href="<?php the_permalink();?>">阅读全文...</a></p>
				</div>
			</div>
		</div>
		</div>
		<?php endforeach; ?>
  		<?php endif; ?>
  	</div>
	<div style="text-align: center; margin-bottom: 20px;" class="row">
	<?php posts_nav_link(" ",'<div class="btn-floating btn-large waves-effect waves-light red hoverable" style="margin-right: 10px;"><i class="material-icons">chevron_left</i></div>','<div class="btn-floating btn-large waves-effect waves-light red hoverable" style="margin-left: 10px;"><i class="material-icons">chevron_right</i></div>')?>
  </div>
<?php get_footer();?>