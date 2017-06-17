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
              <a data-toggle="dropdown" class="sidebar-brand" href="#settings-dropdown">rnmaterial@www.com
                <b class="caret"></b></a>
            </div>
<ul class="nav sidebar-nav">
              <li class="dropdown">
                <ul id="settings-dropdown" class="dropdown-menu">
                  <li>
				  <!--请自行修改邮箱，或改为所需文本-->
                    <a href="mailto:rnmaterial@www.com" target="_blank" title="Email Me">
                      <i class="material-icons sidebar-material-icons sidebar-indent-left1pc-element">email</i>Email Me</a></li>
                  <li>
                    <a href="https://github.com/hjthjthjt/rnmaterial" target="_blank" title="nfz.moe">
                      <i class="material-icons sidebar-material-icons sidebar-indent-left1pc-element">explorer</i>RnMaterial/Github</a></li>
                </ul>
              </li>
			  
			  <!--请结合HTML自行修改侧边栏内容-->
			  <div style="margin-left:-40px!important;"><?php wp_nav_menu('container_id=navmenu'); ?></div>
              <!--<li id="sidebar-first-li">
                <a href="<?php bloginfo('url');?>">
                  <i class="material-icons sidebar-material-icons">home</i>主页</a></li>
              <li class="dropdown">
                <a href="#" class="ripple-effect dropdown-toggle" data-toggle="dropdown">
                  <i class="material-icons sidebar-material-icons">apps</i>分类
                  <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="sidebar_archives-link" href="/">菜单1</a>
                  </li>
                  <li>
                    <a class="sidebar_archives-link" href="/">菜单2</a>
                  </li>
                </ul>
              </li>-->
              <li class="divider"></li>
			  <!--
			  此处的图标名称参考：
			  http://google.github.io/material-design-icons/#which-icons-should-be-mirrored-for-rtl- （这里有个-）
			  https://material.io/icons/
			  
			  链接请自行更改
			  -->
              <li>
                <a href="/" title="关于">
                  <i class="material-icons sidebar-material-icons">person</i>关于</a></li>
              <li>
                <a href="/" title="标签">
                  <i class="material-icons sidebar-material-icons">bookmark</i>标签</a></li>
              <li>
                <a href="/" title="映像">
                  <i class="material-icons sidebar-material-icons">photo</i>映像</a></li>
              <li>
                <a href="/" title="友链">
                  <i class="material-icons sidebar-material-icons">people</i>友链</a></li>
            </ul>