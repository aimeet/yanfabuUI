<ul class="nav nav-tabs">
<?php    
        $menus = array();
		$menus["accout_filter.php"] = "屏蔽"; 
		$menus["accout_bind.php"]  = "微博绑定"; 
		$menus["accout_notify.php"]  = "通知"; 
		$menus["accout_password.php"]  = "修改密码"; 
		$menus["accout.php"]  = "用户信息"; 
			
		// get current menu url 
		$active_menu = $_SERVER["SCRIPT_NAME"]; 
		$ThisUrl =  basename($active_menu,"/~liang/newPage/");
		
		foreach($menus as $menu => $menu_title) 
		{ 
	      $active = ( $menu == $ThisUrl ) ? "active" : ""; 
	      $TabNav.= '<li class="'.$active.'"><a href="'.$menu.'" >'.$menu_title.'</a></li>'; 
		} 

	   print $TabNav;
?>
  </ul>