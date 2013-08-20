<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<title>屏蔽-研发埠|yanfabu.com-研发创新互动平台</title>
<meta name="Keywords" content="CAE,yanfabu.com,研发埠,研发部,Open,Innovation,流体，光学，化学,机械工程,冶金工程,电子,兵器科学,大学,文献,开放,创新">
<meta name="Description" content="研发埠,yanfabu.com-Open,Innovation,开放,创新,研发创新互动平台">
<meta name="author" content="">
<!-- default styles -->
<link href="../css/bootcss.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="../css/custom.css" rel="stylesheet">

<!--[if lte IE 7]><link href="../css/font-ie7.css" rel="stylesheet"><![endif]-->
<link rel="shortcut icon" href="../assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="../ico/apple-touch-icon-57-precomposed.png">
</head>
<body class="g-body">
<!--_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/start:header_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/-->
<?php include '../library/header.php'; ?>
<!--_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/start:ui-content_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/-->
<div class="ui-content">
<div class="ui-wrapper">
  <div class="g-notop-line b-sbg clearfix"> 
    <!--_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/ start:左侧菜单 _/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/-->
    <?php include '../library/l_side.php'; ?>
    <div class="main-panel w-bg l-border">
      <div class="title-header channel-header">
        <h2 class="title">屏蔽</h2>
        <?php include '../library/set_menu.php'; ?>
      </div>
      <form class="form-horizontal" >
      <div class="page-wrapper">
      <!--end:channel-header-->
      <div class="alert alert-info">
           <button type="button" class="close" data-dismiss="alert">×</button>
           <h3>屏蔽</h3>
            <P>当你将用户加到「被限制名单」上时，他们只能看到你设定为「公开」的日志和文档</P>
       </div>
  
         <div class="title-header top20"><h2 class="title g_b_dotted">管理黑名单</h2></div> 
         
         <div id="blacklist" class="blacklist">
            <div class="row-fluid">                 
                <?php
				 //include db configuration file
                  include_once("../config.php");
				  //MySQL query
                  $Result = mysql_query("SELECT id,name,introduce,style FROM add_delete_black");
				  while($row = mysql_fetch_array($Result))
                  {
					  echo '<div class="media media-small" id="item_'.$row["id"].'"><a href="#" role="button" class="del-link" title="撤销" id="del-'.$row["id"].'">×</a>';
					  echo '<a class="pull-left avatar" href="#" ><img src="../images/photo/no_avatar_small.jpg" alt=""></a>';
					  echo '<div class="media-body"><div class="source"><a href="" title="'.$row["name"].'" class="name-link">'.$row["name"].'</a></div>';
					  echo '<div class="media-detail">'.$row["introduce"].'</div><div class="media-bar">'.$row["style"].'</div>';
					  echo '</div></div>';
				   }
				  mysql_close($connecDB);
				?>
            </div>   
         </div>
          
         <div class="title-header"><h2 class="title g_b_dotted">屏蔽设置</h2></div> 
         <div class="push h20"></div>
         <div class="group-level"> 
          <div class="control-group group-level3">
             <span class="level-info">最高</span>
             <label class="control-label">屏蔽用户</label>
              <div class="controls">
                <input type="text" class="input-xlarge" value="" placeholder="请输入姓名或邮箱" >
                <button class="btn searchUser" id="searchUser1" data-toggle="modal" data-target="#search_user" data-rel="../data/user_modal.php" >检索</button>
                <div class="help-block">当你将用户加到「被限制名单」上时，他们只能看到你设定为「公开」的日志和文档</div>
              </div>
          </div>
          
          <div class="control-group group-level2">
             <span class="level-info">较高</span>
             <label class="control-label">屏蔽邀请</label>
              <div class="controls">
                <input type="text" class="input-xlarge" value="" placeholder="请输入姓名或邮箱" >
                <button class="btn searchUser" id="searchUser2" data-toggle="modal" data-target="#search_user" data-rel="../data/user_modal.php"  >检索</button>
                <div class="help-block">当你将用户加到「被限制名单」上时，他们将无法邀请或关注您</div>
              </div>
          </div>
          
          <div class="control-group group-level1">
             <span class="level-info">较低</span>
             <label class="control-label">屏蔽通知</label>
              <div class="controls">
                <input type="text" class="input-xlarge" value="" placeholder="请输入姓名或邮箱" >
                <button class="btn searchUser" id="searchUser3" data-toggle="modal" data-target="#search_user" data-rel="../data/user_modal.php" >检索</button>
                <div class="help-block">当你将用户加到「被限制名单」上时，您将过滤有关该用户所有消息通知</div>
              </div>
          </div>
        </div><!-- end:group-level -->
        </div><!-- end:p15 -->
        <div class="form-actions">
            <input type="submit" value="保存设置" class="btn  btn-info">
        </div>
        </form>
    </div>
    <!--end:main-panel--> 
  </div>
  <!--end:g-notop-line--> 
</div>
<!--end:ui-content-->
<?php include '../library/footer.php'; ?>
<div id="search_user" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
<script type="text/javascript">
  $(document).ready(function(){	
	 
	 $("body").on("click", "#blacklist .del-link",  function(e) {
		 e.returnValue = false;
		 var clickedID = this.id.split('-'); 
		 var DbNumberID = clickedID[1];
		 var myData = 'recordToDelete='+ DbNumberID;
		 
		jQuery.ajax({
			type: "POST", // HTTP method POST or GET
			url: "../data/blacklist.php", //Where to make Ajax calls
			dataType:"text", // Data type, HTML, json etc.
			data:myData, //Form variables
			success:function(response){
				$('#item_'+DbNumberID).fadeOut(400);
			},
			error:function (xhr, ajaxOptions, thrownError){
				alert(thrownError);
			}
		});
	});
	
  });  
</script>
</div>
</body>
</html>