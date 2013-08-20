<?php
if (isset($_POST['search'])) {
	include("../config.php");
	$word = htmlspecialchars(trim($_POST['search']));
    $sql = "SELECT id,introduce, name FROM add_delete_black WHERE name LIKE '%" . $word . "%' ORDER BY id LIMIT 10";
    $dbdata = mysql_query($sql);
	 while($row = mysql_fetch_array($dbdata))
    {
		 echo '<div class="media media-small" id="user-'.$row["id"].'">
	      <label class="checkbox pull-left" for="ckName"><input type="checkbox" name="ckName" id="user-'.$row["id"].'"></label>';
	     echo '<a class="pull-left avatar" href="#" ><img src="../images/photo/no_avatar_small.jpg" alt=""></a>';
	     echo '<div class="media-body"><h4 class="media-heading"><a href="" title="'.$row["name"].'" class="name-link">'.$row["name"].'</a><span class="mail-info">di***i@mail.com</span></h4>';
		 echo '<div class="media-detail">"'.$row["introduce"].'"</div></div></div>';

		}
    mysql_close($connecDB);
}
?>
	 