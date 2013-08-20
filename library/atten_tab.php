 <div class="title-header channel-header">
    <h2 class="title">我关注的人</h2>
     <ul class="nav nav-tabs">
   <?php    
        $menus = array();
		$menus["atten_me.php"]  = "关注我的人"; 
		$menus["atten_list.php"] = "我关注的人"; 
		// get current menu url 
		$active_menu = $_SERVER["SCRIPT_NAME"]; 
		$ThisUrl =  basename($active_menu,"/~liang/newPage/");
		
		foreach($menus as $menu => $menu_title) 
		{ 
	      $active = ( $menu == $ThisUrl ) ? "active" : ""; 
	      $TabNav.= '<li class="'.$active.'"><a href="'.$menu.'" >'.$menu_title.'(10)</a></li>'; 
		} 

	   print $TabNav;
    ?>
     </ul>
</div>