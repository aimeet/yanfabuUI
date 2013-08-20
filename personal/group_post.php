<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<title>讨论-研发埠|yanfabu.com-研发创新互动平台</title>
<meta name="Keywords" content="CAE,yanfabu.com,研发埠,研发部,Open,Innovation,流体，光学，化学,机械工程,冶金工程,电子,兵器科学,大学,文献,开放,创新">
<meta name="Description" content="研发埠,yanfabu.com-Open,Innovation,开放,创新,研发创新互动平台">
<meta name="author" content="">
<!-- default styles -->
<link rel="stylesheet" type="text/css" href="../css/bootcss.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/custom.css">

<!--[if lte IE 7]><link href="../css/font-ie7.css" rel="stylesheet"><![endif]-->
<link rel="shortcut icon" href="../assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="../ico/apple-touch-icon-57-precomposed.png">
</head>
<body class="g-body">
<?php
	  //include db configuration file
	include_once("../config.php");
	//MySQL query
	$Result = mysql_query("SELECT id, name, detail FROM group_list order by id asc limit 5");
	$row_object = mysql_query("Select Found_Rows() as rowcount");
	$row_object = mysql_fetch_object($row_object);
	$actual_row_count = $row_object->rowcount;
?>  

<!--_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/start:header_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/-->
<?php include '../library/header.php'; ?>
<!--_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/start:ui-content_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/-->
<div class="ui-content">
    <div class="ui-wrapper">
      <div class="g-notop-line b-sbg clearfix"> 
        <!--_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/ start:左侧菜单 _/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/-->
        <div class="ui-sidebar pull-left">
        <?php include '../library/left_userInfo.php'; ?>
        <?php include '../library/left_menu.php'; ?>
      </div><div class="main-panel w-bg l-border">
          <div class="title-header channel-header">
            <h2 class="title">朋友圈</h2>
            <ul class="nav nav-tabs">
                <li class="active" ><a href="group_post.php" title="">讨论话题(10)</a></li>
                <li><a href="group_list.php" title="">我的圈子(12)</a></li>
            </ul>
          </div>
          <div class="row-fluid">
          <!--_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/page-content_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/-->
          <div class="page-content pull-left">
            <div class="l-notop15">
                   <div class="tab-content">
                      
                  <div class="row-fluid search-inline">
                          <a class="btn pull-right" href="group_list.php"><span class="icon-layout"></span>全部圈子</a>
                          <a class="btn btn-info pull-right" href="group_add.php"><span class="icon-plus"></span>创建圈子</a>
                        <div class="search-append ipt-r2">
                          <form class="side-search" action="#">
                             <input type="text" name="" value="" placeholder="该用户的圈子" class="top-search-ipt input-block-level w348" />
                             <input type="button" name="" value="" class="top-search-btn" />
                          </form>
                        </div>
                 </div>
                      
                      <!-- media-content -->
                   <div class="media-content topic-list top15 min-wrap" id="topicList">
 
                      <?php
				      while($row = mysql_fetch_array($Result))
                  {
                  echo '<div class="media" id="media_'.$row["id"].'"><a href="#" role="button" class="del-link" title="隐藏讨论" id="del-'.$row["id"].'">×</a><a class="pull-left" href="#" ><img class="avatar-img" src="../images/photo/no_topic.png" width="80" height="80"></a>';
                  echo '<div class="media-body"><h4 class="media-heading"><a class="question_link" target="_blank" href="../group.php">'.$row["name"].'</a></h4>';
                  echo '<div class="media-detail">'.$row["detail"].'</div><div class="media-bar"> <span class="time">03-29 18:40</span> <a href="" title="103个讨论话题"><span class="icon-chat"></span>63个回复</a> <a href="" title="103个讨论话题"><span class="icon-stop"></span>结束讨论</a> <a href="../post.php" title="103个讨论话题"><span class="icon-edit"></span>编辑讨论</a></div></div></div>';
				   }
				  mysql_close($connecDB);
				?>
                        
                      </div>
                      <!-- page-more -->
                      <div class="page-more"><a href="#" title="" class="btn  btn-block" id="pageNext">查看更多</a></div>
                   </div><!-- end:media-content-->
              </div>
          </div>
          <!--_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/side-panel_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/-->
          <div class="side-panel">
            <div class="r-notop15">
                <?php include '../library/group_linked.php'; ?>
               <?php include '../library/r_side.php'; ?>
              </div><!--end:notop15-->
             </div><!--end:side-panel-->
           </div>
        </div><!--end:main-panel--> 
      </div><!--end:g-notop-line--> 
    </div><!--end:ui-wrapper-->
</div><!--end:ui-content-->
<?php include '../library/footer.php'; ?>
<?php include '../library/loadJs.php'; ?>
<script type="text/javascript">	
 require(['jquery','MyUI/all'], function ($) { 
    
	var page = 1;
    $("#pageNext").click(function (e){ 
                page++;
                var data = { page_num: page};
                alert(page); 
				  $.ajax({
                            type: "POST",
                            url: "../data/topicDate.php",
                            data:data,
                            success: function(res) {
                                //$("#topicList").append(res);
								   $(res).appendTo("#topicList").fadeIn(500);
                                console.log(res);
								}
              });
        return false;
     })
 
 })
 </script>
</body>
</html>