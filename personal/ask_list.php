<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<title>必答-研发埠|yanfabu.com-研发创新互动平台</title>
<meta name="Keywords" content="CAE,yanfabu.com,研发埠,研发部,Open,Innovation,流体，光学，化学,机械工程,冶金工程,电子,兵器科学,大学,文献,开放,创新">
<meta name="Description" content="研发埠,yanfabu.com-Open,Innovation,开放,创新,研发创新互动平台">
<meta name="author" content="">
<!-- default styles -->
<link rel="stylesheet" type="text/css" href="../css/bootcss.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/plug-ins/fineuploader.css">
<link rel="stylesheet" href="../css/plug-ins/redactor.css" />
<link rel="stylesheet" type="text/css" href="../css/custom.css">
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
        <div class="ui-sidebar pull-left"> 
           <?php include '../library/left_userInfo.php'; ?>
           <?php include '../library/left_menu.php'; ?>
        </div>
        <div class="main-panel w-bg l-border">
          <div class="title-header channel-header">
            <h2 class="title">我的必答</h2>
            <?php include '../library/ask_menu.php'; ?>
          </div>
          <div class="row-fluid">
          <!--_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/page-content_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/-->
          <div class="page-content pull-left">
            <div class="l-notop15">
              <div class="ask-min-panel">
                 <div class="input-prepend">
                    <span class="add-on">问题标题</span>
                    <input class="title-ipt input-block-level" id="appendedPrependedInput" type="text">
                 </div>
                 <div class="textedit">
                    <textarea rows="3" class="input-block-level" placeholder="请输入问题描述" id="answer_edit" ></textarea>

                    <div class="func">
                      <input class="btn btn-info" type="button" value="发布问题">
                    </div>
                 </div>
                 
              </div>
                  <div class="title-header top15">
                      <div class="dropdown pull-right">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                           <span class="icon-resize-vertical"></span>排序<b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a href="#">最新问题</a></li>
                            <li><a href="#">最新回复</a></li>
                        </ul>
                      </div>
                      <ul class="nav nav-tabs">
                          <li class="active"><a href="#" title="">我的问题(10)</a></li>
                          <li><a href="#" title="">我关注的问题()</a></li>
                          <li><a href="#" title="">邀请我回答的问题(3)</a></li>
                       </ul>
                   </div>
                   
                   <div class="tab-content">
                      <!-- media-content -->
                      <div class="media-content question-list">
					       <?php include '../library/question_list.php'; ?>
                      </div>
                      <!-- page-more -->
                      <div class="page-more"><a href="#" title="" class="btn  btn-block">查看更多</a></div>
                   </div><!-- end:tab-content-->
              </div>
          </div>
          <!--_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/side-panel_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/-->
          <div class="side-panel">
            <div class="r-notop15">
               <?php include '../library/ask_search.php'; ?>
               <?php include '../library/question_linked.php'; ?>
               <?php include '../library/r_side.php'; ?>
              </div><!--end:notop15-->
             </div><!--end:side-panel-->
           </div>
        </div><!--end:main-panel--> 
      </div><!--end:g-notop-line--> 
    </div><!--end:ui-wrapper-->
</div><!--end:ui-content-->
<?php include '../library/footer.php'; ?>
<div id="upload_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
<?php include '../library/loadJs.php'; ?>
<script type="text/javascript">
require(['jquery','MyUI/all'], function ($){

$('#answer_edit').redactor({
		buttons: [ 'formatting', '|', 'bold', 'italic', 'deleted', '|','unorderedlist', 'orderedlist','image', 'video', 'file', 'table', 'link','horizontalrule'],
			 imageGetJson: '../data/data.json',
			 imageUpload: '../plug_ins/redactor/image_upload.php',
			 fileUpload: '../plug_ins/redactor/fileUpload/' 
		});

})
</script>

</body>
</html>