
	 <aside class="sidebar sidebar-left sidebar_bg-second-color" id="menu">
	 <nav id="mainMenu" class="sidebar_nav nav">
	 <a href='<?php echo home_url()?>' id='headerLogo' class="nav__logo logo">
	 <i class="logo__icon icon-logo"></i>
	 <!-- <img src="img/logo2.svg" alt=""> -->
 </a>
		 <div class="nav-wrapper">

			 <?php echo wp_nav_menu(array(
					 'theme_location' => 'nav',
					 'container' => 'div',
					 'container_class' => 'nav-wrapper',
					 'menu_class' => 'nav__list nav-list',
				 )); ?>

		 </div>
	 </nav>


 </aside>