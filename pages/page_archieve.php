<?php
/*
Template Name: 归档页面
*/
?>
<?php get_header();?>
	<div class="row">
	  <h1 class="red-text" style="text-align: center;font-size: 3.3rem;">归档页面</h1>
	  <div class="divider"></div>
	  <p class="grey-text" style="text-align: center;"><?php bloginfo('name');?>, &nbsp;Since <?php echo get_option('mad')['start_year']?></p>
	</div>
	<div class="row">
    <div class="col m6 offset-m3 s12" id="archives"> 
    	  <ul class="collapsible popout" data-collapsible="expandable">     
        <?php       
            $the_query = new WP_Query( 'posts_per_page=-1&ignore_sticky_posts=1' );      
            $year=0; $mon=0; $i=0; $j=0;      
            $all = array();      
            $output = '';      
            while ( $the_query->have_posts() ) : $the_query->the_post();      
                $year_tmp = get_the_time('Y');      
                $mon_tmp = get_the_time('n');      
                $y=$year; $m=$mon;      
                if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></div>';      
                if ($year != $year_tmp) { // 输出年份      
                    $year = $year_tmp;      
                    $all[$year] = array();      
                }      
                if ($mon != $mon_tmp) { // 输出月份      
                    $mon = $mon_tmp;      
                    array_push($all[$year], $mon);      
                    $output .= "<li><div class='collapsible-header active'>$year 年 $mon 月</div><div class='collapsible-body' data-date='$year-$mon'><ul class='collection'>";      
                }      
                $output .= '<li class="collection-item"><a href="'.get_permalink() .'"><span class="badge">'.get_the_time('n-d').'</span>'.get_the_title() .'<em>('. get_comments_number('0', '1', '%') .')</em></a></li>';      
            endwhile;      
            wp_reset_postdata();      
            $output .= '</ul></div></li>';      
            echo $output;            
        ?>     
      </ul></div><!-- #archives -->    
      </div>
<?php get_footer();?>
