<?php
$requested_page = $_POST['page_num'];
$set_limit = (($requested_page - 1) * 3) . ",3";

include_once("../config.php");
$Result = mysql_query("SELECT id, name, detail FROM topic_list order by id asc limit $set_limit");

  while($row = mysql_fetch_array($Result))
                  {
                  echo '<div class="media hide" id="media_'.$row["id"].'"><a href="#" role="button" class="del-link" title="取消收藏" id="del-'.$row["id"].'">×</a><a class="pull-left" href="#" ><img class="avatar-img" src="../images/photo/no_topic.png" width="80" height="80"></a>';
                  echo '<div class="media-body"><h4 class="media-heading"><a class="question_link" target="_blank" href="#">'.$row["name"].'</a></h4>';
                  echo '<div class="media-detail">'.$row["detail"].'</div><div class="media-bar"><span class="time">03-29 18:40</span><a href="" title="关注问题" class="msg_add_q"><span class="icon-comment"></span>103个问题</a><a href="" title="202个回答"><span class="icon-reply"></span>202个回答</a>
</div></div></div>';
				   }
	 mysql_close($connecDB);
?>