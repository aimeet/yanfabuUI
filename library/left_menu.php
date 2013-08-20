<ul class="nav nav-list side-nav">
<?php    
        $pages = array();
		$pages["index"]    = "用户中心";
		$pages["msg"]      = "消息"; 
		$pages["topic"]    = "领域"; 
		$pages["ask"]      = "必答"; 
		$pages["library"]  = "文库"; 
		$pages["atten"]    = "关注"; 
		$pages["collect"]  = "收藏"; 
		$pages["group"]    = "朋友圈"; 
		$pages["accout"]   = "账户设定";
			
		// get current page url 
		$active_page = $_SERVER["SCRIPT_NAME"]; 
		$ThisUrl =  basename($active_page,"/~liang/newPage/");
		
		foreach($pages as $page => $page_title) 
		{ 
	            $active = ( strpos($ThisUrl,''.$page.'') !== false ) ? "active" : ""; 
				if( $page_title == '用户中心' ){
		        echo '<li class="'.$active.'"><a href="index.php" title="'.$page_title.'"><span class="icon-user"></span><span class="title">'.$page_title.'</span><span class="badge badge-info">23</span></a></li>';
				}
				
				elseif( $page_title == '朋友圈' ){
				echo '<li class="'.$active.'"><a href="'.$page.'_list.php" title="'.$page_title.'"><span class="icon-'.$page.'"></span><span class="title">'.$page_title.'</span></a></li><li class="divider"></li>';
				}
				
				elseif( $page_title == '消息' ||  $page_title == '必答' ){
				echo '<li class="'.$active.'"><a href="'.$page.'_list.php" title="'.$page_title.'"><span class="icon-'.$page.'"></span><span class="title">'.$page_title.'</span><span class="badge badge-info">30</span></a></li>';
				}
				
				elseif( $page_title == '账户设定' ){
				echo '<li class="'.$active.'"><a href="'.$page.'.php" title="'.$page_title.'"><span class="icon-'.$page.'"></span><span class="title">'.$page_title.'</span></a></li>';
				}
				
				else{
				echo '<li class="'.$active.'"><a href="'.$page.'_list.php" title="'.$page_title.'"><span class="icon-'.$page.'"></span><span class="title">'.$page_title.'</span></a></li>';
				}
		} 

?>
  </ul>
