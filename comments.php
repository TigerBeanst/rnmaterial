<?php
/**
 * The template for displaying comments
 *
 * @package Vtrois
 * @version 2.1
 */

if ( post_password_required() ) {
	return;
}
?>
<style>.comments-area{margin-bottom:-14px;margin-top:-10px;word-break:break-all;word-wrap:break-word;width: calc(100% - 16px);margin-left: auto;margin-right: auto;}.comments-area img{max-width:100%;height:auto}.comments-title{margin:0;font-size:24px;padding:30px;border:1px solid #e0e0e0;background-color:#fff}.comments-area ol{list-style:none}.comments-area ol{padding:0}.comments-area ol li{margin-top:15px}.comments-area .children{padding-left:20px}.comment-author .avatar{position:absolute;border-radius:50%}.comment-author .fn,.comment-awaiting-moderation,.commentmetadata{margin-left:60px}.commentmetadata{font-size:12px;margin-bottom:10px}.commentmetadata a{color:#848484}.comment-body p{color:#333;margin-bottom:0}.comment-body{padding:20px 20px 15px 20px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);background-color:#fff;margin-bottom:15px}.says{display:none}.reply{text-align:right}.comment-reply-link{background:0 0;border:none;border-radius:2px;color:#000;position:relative;height:36px;margin:0;min-width:64px;padding:0 16px;display:inline-block;font-family:"Roboto","Helvetica","Arial",sans-serif;font-size:14px;font-weight:500;text-transform:uppercase;letter-spacing:0;overflow:hidden;will-change:box-shadow;transition:box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1),color .2s cubic-bezier(.4,0,.2,1);outline:none;cursor:pointer;text-decoration:none;text-align:center;line-height:36px;vertical-align:middle;-webkit-tap-highlight-color:transparent;-webkit-tap-highlight-color:rgba(255,255,255,0);background:rgba(158,158,158,.2);box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);}a.comment-reply-link:focus,a.comment-reply-link:hover{background-color:#666;color:#fff!important}a.comment-reply-link{text-decoration:none}a.comment-reply-link:hover{color:#000;box-shadow:0 0 1px #505050}.comments-area a.url{text-decoration:underline}.comment-metadata a,.comments-area a.url{color:#444;text-decoration:none}.comment-respond{margin-top:60px;margin:0 0 14px;background-color:#fff;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);border-radius:0;padding:20px 20px 8px 20px}.comment-form .form-submit{margin-top:30px}#comments-nav{text-align:center;margin:0 0 15px}#comments-nav a{padding:5px 10px;border:1px solid #eee;background-color:#eee;color:#777}#comments-nav a:hover{border:1px solid #51aded;background-color:#51aded;color:#fff!important}#comments-nav span.current{font-weight:700;border:1px solid #51aded;background-color:#51aded;padding:5px 10px;color:#fff}#respond .input-group-addon i{width:20px}#respond .form-control{box-shadow:none;background:0 0;border:1px solid #ccc;height:auto;font-size:14px;font-weight:300;border-radius:0}#respond .input-group-addon{border-radius:0}.comment-form .form-control-feedback{line-height:40px;color:#848484}.comment-form .input-group{width:100%;margin-top:10px}.comment-form .btn-primary{width:100%;border-radius:0}.comment-form .comment-author{margin-top:10px}.comment-form .logged-in-as a{color:#848484}#submit{background:0 0;border:none;border-radius:2px;color:#000;position:relative;height:36px;margin:0;min-width:64px;padding:0 16px;display:inline-block;font-family:"Roboto","Helvetica","Arial",sans-serif;font-size:14px;font-weight:500;text-transform:uppercase;letter-spacing:0;overflow:hidden;will-change:box-shadow;transition:box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1),color .2s cubic-bezier(.4,0,.2,1);outline:none;cursor:pointer;text-decoration:none;text-align:center;line-height:36px;vertical-align:middle;-webkit-tap-highlight-color:transparent;-webkit-tap-highlight-color:rgba(255,255,255,0);background:rgba(158,158,158,.2);box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);}</style>
<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style' => 'ol',
				'short_ping' => true,
				'avatar_size'=> 50,
			) );
			?>
		</ol>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<div id="comments-nav">
				<?php paginate_comments_links('prev_text=上一页&next_text=下一页');?>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	<?php
	if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'amadeus' ); ?></p>
	<?php endif; ?>
	<?php if(get_RnMaterial('owo_toggle')== 1){ ?>
	<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/css/OwO.min.css">
	<?php } ?>
	<?php 
	$fields =  array(
		'author' => '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label is-upgraded" data-upgraded=",MaterialTextfield"><input class="mdl-textfield__input" placeholder="昵称*" id="author" name="author" type="text" value="" ' . esc_attr( $commenter['comment_author'] ) . '" size="50"' . $aria_req . ' /></div>',
		'email'  => '<br><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label is-upgraded" data-upgraded=",MaterialTextfield"><input class="mdl-textfield__input" placeholder="邮箱*" id="email" name="email" type="text" value="" ' . esc_attr(  $commenter['comment_author_email'] ) . '" size="50"' . $aria_req . ' /></div>',
		'url'  => '<br><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label is-upgraded" data-upgraded=",MaterialTextfield"><input class="mdl-textfield__input" placeholder="网站" id="url" name="url" type="text" value="" ' . esc_attr(  $commenter['comment_author_url'] ) . '" size="50"' . $aria_req . ' /></div>',
	);
	$args = array(
		'title_reply_before' => '<h4 id="reply-title" class="comment-reply-title">',
		'title_reply_after'  => '</h4>',
		'fields' =>  $fields,
		'class_submit' => 'btn btn-primary',
		'comment_field' =>  '<br><div data-upgraded=",MaterialTextfield"><textarea class="mdl-textfield__input OwO-textarea" id="comment" placeholder=" " name="comment" rows="5" aria-required="true" required  onkeydown="if(event.ctrlKey){if(event.keyCode==13){document.getElementById(\'submit\').click();return false}};"></textarea><div class="OwO"></div></div>',
	);
	comment_form($args);
	?>
	<?php if(get_RnMaterial('owo_toggle')== 1){ ?>
	<script src="<?php echo bloginfo('template_url');?>/js/OwO.min.js"></script>
	<script>
        var OwO_demo = new OwO({
            logo: 'OωO表情',
            container: document.getElementsByClassName('OwO')[0],
            target: document.getElementsByClassName('OwO-textarea')[0],
            api: '<?php echo bloginfo('template_url');?>/js/OwO.json',
            position: 'down',
            width: '100%',
            maxHeight: '250px'
        });
    </script>
    <?php } ?>
</div>