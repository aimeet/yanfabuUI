 <div class="title-header channel-header">
    <h2 class="title">消息</h2>
     <ul class="nav nav-tabs">
   <?php    
        $menus = array();
		$menus["msg_mail.php"]  = "私信"; 
		$menus["msg_list.php"] = "消息"; 
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