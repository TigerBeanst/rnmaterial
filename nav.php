<style>.sub-menu{margin-left:-40px!important;background-color:#e0e0e0;display: none;} .menu-item-has-children:hover > .sub-menu {display: block;}</style>
<script>$('li[class="menu-item-has-children"]').click(function(){$(this).toggleClass('active');});</script>
<div class="sidebar-overlay"></div>
<aside id="sidebar" class="sidebar sidebar-colored sidebar-fixed-left" role="navigation">
  <div id="sidebar-main">
    <div class="sidebar-header header-cover" style="background-image:url(<?php bloginfo('template_url');?>/img/sidebar.jpg)">
      <div class="top-bar"></div>
      <button type="button" class="sidebar-toggle mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" style="display:initial" data-upgraded=",MaterialButton,MaterialRipple">
        <i class="material-icons">clear_all</i>
        <span class="mdl-button__ripple-container">
          <span class="mdl-ripple"></span>
        </span>
      </button>
      <div class="sidebar-image">
        <?php echo get_avatar(1,54,avatar); ?></div>
        <a class="sidebar-brand"><?php echo bloginfo('name'); ?></a>
      </div>
      <ul class="nav sidebar-nav">
      
      <!--请结合HTML自行修改侧边栏内容-->
      <div style="margin-left:-40px!important;"><?php if ( has_nav_menu( 'sidebar_menu_one' ) ) {wp_nav_menu('container_id=navmenu');} ?></div>
      <li class="divider"></li>
      <div style="margin-left:-40px!important;"><?php if ( has_nav_menu( 'sidebar_menu_two' ) ) {wp_nav_menu('container_id=navmenu');} ?></div>
    </ul>