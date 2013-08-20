<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<title>收藏夹-研发埠|yanfabu.com-研发创新互动平台</title>
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
<!--_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/start:header_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/-->
<?php include '../library/header.php'; ?>
<!--_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/start:ui-content_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/-->
<div class="ui-content">
  <div class="ui-wrapper">
    <div class="g-notop-line b-sbg clearfix"> 
      <!--_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/ start:左侧菜单 _/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/-->      <div class="ui-sidebar pull-left">
        <?php include '../library/left_userInfo.php'; ?>
        <?php include '../library/left_menu.php'; ?>
      </div><div class="main-panel w-bg l-border">
        <div class="title-header channel-header g_b_line">
             <h2 class="title">添加收藏夹</h2>
        </div>
         <form class="form-horizontal " action="collect_favorites.php" >
         <div class="page-wrapper layer-rel ">
            <div class="min-wrap">
                 <div class="push h30"></div>
                  <div class="control-group ">
                      <label class="control-label">分级</label>
                      <div class="controls">
                         <select>
                           <option value="0">父级</option>
                           <option value="0">我的收藏夹</option>
                           <option value="0">|_ title1</option>
                           <option value="0">|_ title2</option>
                         </select>
                      </div>
                  </div>
                 
                 <div class="control-group">
                      <label class="control-label">选择颜色</label>
                      <div class="controls">
                          <span class="radio inline">
                            <input type="radio" value="1" name="color" ><label class="label">默认</label>
                          </span>
                          <span class="radio inline">
                            <input type="radio" value="2" name="color">
                            <span class="label label-success">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                          </span>
                          <span class="radio inline">
                           <input type="radio" value="3" name="color">
                           <span class="label label-warning">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                          </span>
                          <span class="radio inline">
                            <input type="radio" value="4" name="color">
                            <span class="label label-important">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                          </span>
                          <span class="radio inline">
                            <span class="label label-info">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                          </span>
                          <span class="radio inline">
                            <input type="radio"><span class="label label-inverse">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                          </span>
                      </div>
                </div>
                
                  <div class="control-group ">
                      <label class="control-label">收藏夹名称</label>
                      <div class="controls">
                         <input type="text" class="input-xlarge" value="" name="introduce" placeholder="请输入名称">
                      </div>
                  </div>
                  
                  <div class="control-group ">
                   <label class="control-label" for="introduce">文件夹介绍</label>
                    <div class="controls">
                        <textarea rows="6" class="input-xlarge" placeholder="请输入" type="text" value=""></textarea>
                     </div>
                 </div>
                 
                 <div class="control-group ">
                   <label class="control-label" for="introduce">开放权限</label>
                    <div class="controls">
                        <label class="radio inline"><input name="open" type="radio" checked="CHECKED">公开</label>
                        <label class="radio inline"><input type="radio" name="open">仅对好友开放</label>
                        <label class="radio inline"><input type="radio" name="open">私密</label>
                   </div>
                 </div>
                
                <div class="push h30"></div>
                
        </div><!--end min-wrap-->
      </div>
      <div class="form-actions">
             <input type="submit" value="取消" class="btn">
             <input type="submit" value="保存" class="btn btn-info">
        </div><!--end:form-actions--> 
      </form>
      <!--end:main-panel--> 
    </div>
    </div>
    <!--end:g-notop-line--> 
  </div>
  <!--end:ui-wrapper--> 
</div>
<!--end:ui-content-->
<?php include '../library/footer.php'; ?>
<?php include '../library/loadJs.php'; ?>
<script type="text/javascript">	 
   require(['jquery','MyUI/all'], function ($) {
	 
	    })
</script>
</body>
</html>