<ul class="nav nav-tabs">
<?php    
        $menus = array();
		//$menus["ask_store.php"] = "收藏"; 
		$menus["ask_draft.php"]   = "草稿"; 
		$menus["ask_answer.php"]  = "回答"; 
		$menus["ask_list.php"]     = "问题"; 
			
		// get current menu url 
		$active_menu = $_SERVER["SCRIPT_NAME"]; 
		$ThisUrl =  basename($active_menu,"/~liang/newPage/");
		
		foreach($menus as $menu => $menu_title) 
		{ 
	      $active = ( $menu == $ThisUrl ) ? "active" : ""; 
	      $TabNav.= '<li class="'.$active.'"><a href="'.$menu.'" >'.$menu_title.'(9)</a></li>'; 
		} 

	   print $TabNav;
?>
  </ul>