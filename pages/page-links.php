<?php
/*
Template Name: 友链页面
*/
?>
<?php get_header();?>
	<div class="row">
	  <h1 class="red-text" style="text-align: center;font-size: 3.3rem;">小伙伴们</h1>
	  <div class="divider"></div>
	  <p class="grey-text" style="text-align: center;"><?php bloginfo('name');?>, &nbsp;Since <?php echo get_option('mad')['start_year']?></p>
	</div>
	<div class="row">
    <div class="col m6 offset-m3 s12" id="archives"> 
    	  <?php $args = array(
    'categorize' => 1, // 是否分类别显示链接表
    'category' => null, // (string) Comma separated list of numeric Category IDs to be displayed. If none is specified, all Categories with bookmarks are shown. Defaults to (all Categories).
    'exclude_category' => null, // (string) Comma separated list of numeric Category IDs to be excluded from display. Defaults to (no categories excluded).
    'category_name' => null, // (string) The name of a Category whose bookmarks will be displayed. If none is specified, all Categories with bookmarks are shown. Defaults to (all Categories).
    'category_before' => '<div class="link-list">', // 分类别显示时，分类名称前置代码
    'category_after' => '</div>',
    'class' => '', // (string) The class each category li will have on it. Defaults to 'linkcat' . (This parameter was added with Version 2.2)
    'category_orderby' => 'id', // (string) Value to sort Categories on. Valid options:'name' - Default; 'id'; 'slug'; 'count'; 'term_group' (not used yet)
    'category_order' => 'ASC', // (string) Sort order, ascending or descending for the category_orderby parameter. Valid values: ASC - Default; DESC

// When categorize set to 0, the following 3 params become active
    'title_li' => null, // (string) Text for the heading of the links list. Defaults to '__('Bookmarks')', which displays "Bookmarks" (the __('') is used for localization purposes). Only used when categorize are set to 0 [false] (else the category names will be used instead). If 'title_li' is set to null (0) value, no heading is displayed, and the list will not be wrapped with <ul>, </ul> tags (be sure to pass the categorize option to 0 [false] to this option takes effect).
    'title_before' => '<h2>', // (string) Text to place before each Category description if 'categorize' is 1 [true], or text defined in "title_li" if 'categorize' is 0 [false]. Defaults to '<h2>'.
    'title_after' => '</h2>', // (string) Text to place after each Category description if 'categorize' is 1 [true], or text defined in "title_li" if 'categorize' is 0 [false]. Defaults to '</h2>'.
// Overall sets for individual bookmark
    'show_private' => '', // (boolean) Should a Category be displayed even if the Category is considered private. Ignore the admin setting and show private Categories (TRUE) or do NOT show private Categories (FALSE). 1 (True); 0 (False) - Default
    'include' => null, // (string) Comma separated list of numeric bookmark IDs to include in the output. For example, 'include=1,3,6' means to return or echo bookmark IDs 1, 3, and 6. If the include string is used, the category, category_name, and exclude parameters are ignored. Defaults to (all Bookmarks).
    'exclude' => null, // (string) Comma separated list of numeric bookmark IDs to exclude. For example, 'exclude=4,12' means that bookmark IDs 4 and 12 will NOT be returned or echoed. Defaults to (exclude nothing).
// Per category
    'orderby' => '', // (string) Value to sort bookmarks on. This can be a COMMA separated list of values. Defaults to 'name' unless you pass the value of '' (empty), in which case it sets to 'id'.
    'order' => 'DESC', // (string) Bookmarks display sorting order, ascending or descending as defined in the 'orderby' parameter. Valid values: ASC - Default; DESC
// Overall
    'limit' => -1, // (integer) Maximum number of bookmarks to display. Default is -1 (all bookmarks).
// Overall sets for individual bookmark
    'before' => '<ul class="collapsible popout"><li class="collapsible-header active"><dt>', //
    'after' => '</dd></li></ul>', // (string) Text to place after each bookmark. Defaults to '</li>'.
    'link_before' => '', // (string) Text to place before the text of each bookmark, inside the hyperlink code. There is no set default. (This parameter was added with Version 2.7)
    'link_after' => '', // (string) Text to place after the text of each bookmark. There is no set default. (This parameter was added with Version 2.7)
    'between' => '</dt><dd>', // (string) Text to place between each bookmark/image and its description. Defaults to '\n' (newline).
    'show_images' => 0, // (boolean) Should images for bookmarks be shown (TRUE) or not (FALSE). 1 (True) - Default; 0 (False)
    'show_description' => 1, // (boolean) Should the description be displayed (TRUE) or not (FALSE). Valid when show_images is FALSE, or an image is not defined. 1 (True); 0 (False) - Default
    'show_name' => 0, // (boolean) Displays the text of a link when (TRUE). Works when show_images is TRUE. (This parameter was added with Version 2.7) 1 (True); 0 (False) - Default
    'show_rating' => 0, // (boolean) Should rating stars/characters be displayed (TRUE) or not (FALSE). 1 (True); 0 (False) - Default
    'show_updated' => 0, // (boolean) Should the last updated timestamp be displayed (TRUE) or not (FALSE). Note that link_updated does not track local modifications. It tracks when whatever the link points to is updated via remote requests to pingomatic. 1 (True); 0 (False) - Default
    'hide_invisible' => 1, // (boolean) Should bookmark be displayed even if it's Visible setting is No. Abides by admin setting (TRUE) or does no abide by admin setting (FALSE). 1 (True) - Default; 0 (False)
    'echo' => 1, // (boolean) Display bookmarks (TRUE) or return them for use by PHP (FALSE). 1 (True) - Default; 0 (False)
);
?>

<div class="entry-content">
    <?php wp_list_bookmarks( $args ); ?>
</div>
      </ul></div><!-- #archives -->    
      </div>
<?php get_footer();?>
