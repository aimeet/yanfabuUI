<?php
		//include db configuration file
        include_once("../config.php");
        $Result = mysql_query("SELECT id,name,atten FROM add_delete_black Where atten = 1 LIMIT 5 ");
		while($row = mysql_fetch_array($Result))
           {
				 echo '<div class="media media-small" id="item_'.$row["id"].'">';
				 echo '<a class="pull-left avatar" href="#"  id="user_pop_'.$row["id"].'" title="'.$row["name"].'" >';
				 echo '<img src="../images/photo/no_avatar_small.jpg" alt=""></a>';
				 echo '<div class="media-body"><div class="source"><a href="" title="'.$row["name"].'" class="name-link">'.$row["name"].'</a></div>';
				 echo '<div class="media-bar"><a href="#" class="add-btn-link" id="del-'.$row["id"].'" ><span class="link-icon">+</span>加关注</a></div>';
				 echo '</div></div>';
			}
		 mysql_close($connecDB);
?>