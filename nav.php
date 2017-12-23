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
        <img src="<?php bloginfo('template_url');?>/img/avatar.png" alt="avatar"></div>
        <a class="sidebar-brand"><?php echo bloginfo('name'); ?></a>
      </div>
      <ul class="nav sidebar-nav">
        <li class="dropdown">
          <ul id="settings-dropdown" class="dropdown-menu">
            <li>
              <!--请自行修改邮箱，或改为所需文本-->
			  <!--
			  此处的图标名称参考：
			  http://google.github.io/material-design-icons/#which-icons-should-be-mirrored-for-rtl- （这里有个-）
			  https://material.io/icons/
     -->
     
     <a href="mailto:rnmaterial@www.com" target="_blank" title="Email Me">
      <i class="material-icons sidebar-material-icons sidebar-indent-left1pc-element">email</i>Email Me</a></li>
      <li>
        <a href="https://github.com/hjthjthjt/rnmaterial" target="_blank" title="nfz.moe">
          <i class="material-icons sidebar-material-icons sidebar-indent-left1pc-element">explorer</i>RnMaterial/Github</a></li>
        </ul>
      </li>
      
      <!--请结合HTML自行修改侧边栏内容-->
      <div style="margin-left:-40px!important;"><?php if ( has_nav_menu( 'sidebar_menu_two' ) ) {wp_nav_menu('container_id=navmenu');} ?></div>
      <li class="divider"></li>
      <div style="margin-left:-40px!important;"><?php if ( has_nav_menu( 'sidebar_menu_three' ) ) {wp_nav_menu('container_id=navmenu');} ?></div>
    </ul>