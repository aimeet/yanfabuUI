<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<title>文档编辑-研发埠|yanfabu.com-研发创新互动平台</title>
<meta name="Keywords" content="CAE,yanfabu.com,研发埠,研发部,Open,Innovation,流体，光学，化学,机械工程,冶金工程,电子,兵器科学,大学,文献,开放,创新">
<meta name="Description" content="研发埠,yanfabu.com-Open,Innovation,开放,创新,研发创新互动平台">
<meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="../css/bootcss.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
    <link rel="stylesheet" type="text/css" href="../css/plug-ins/fineuploader.css">
    <link rel="stylesheet" type="text/css" href="../css/plug-ins/jquery-explr-1.4.css">
    <!--[if lte IE 7]><link href="../css/font-ie7.css" rel="stylesheet"><![endif]-->
    
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../ico/apple-touch-icon-57-precomposed.png">
</head>
<body class="g-body">
<?php 
  include('../config.php');
  include('../data/func.php');
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
      </div>
      <div class="main-panel w-bg l-border">
          <div class="title-header channel-header g_b_line">
            <h2 class="title"><a href="library_list.php">文库</a>&nbsp;/&nbsp;文档编辑</h2>
          </div>
          
          <div class="push h10"></div>
           <form class="form-horizontal">   
          <div class="page-wrapper collect-list  min-wrap ">
           
            <div class="doc-iteam first"> 
               <span class="fore">1</span>          
               <div class="control-group">
                    <label class="control-label" for="fileName">文档名</label>
                    <div class="controls">
                         <input type="text" id="fileName" class="input-xxlarge" value="组态王与PLC S7-200 建立GPRS 无线通信">
                    </div>
               </div>
                          
                <div class="control-group">
                     <label class="control-label" for="inputPassword">文档简介</label>
                     <div class="controls">
                          <textarea rows="4" class="input-xxlarge"></textarea>
                     </div>
                </div>
                
                 
                 <div class="control-group ">
                   <label class="control-label">所属分类</label>
                   <div class="controls" id="selctl-1">
                      <span class="help-inline">
                        <select name="sel-f-sort" class="sel-f-sort" id="sel-f-1" >
                         <option value="" selected="selected" disabled="disabled">请选择分类</option>
                         <?php getTierOne(); ?>
                        </select>
                      </span>
                      <span class="help-inline hidden wait-sel" id="wait-1" >
                         <img src="../images/ajax-loader.gif" width="16" height="11"  alt=""/>
                      </span>
                      <span class="help-inline result-wrap" id="result-1"></span> 
                   </div>
                 </div>
                 
                 <div class="control-group ">
                   <label class="control-label">发布方式</label>
                   <div class="controls">
                      <select>i
                         <option value="">完全公开</option>
                         <option value="">仅对好友公开</option>
                         <option value="">对特定⽤用户公开</option>
                         <option value="">私密</option>
                      </select>
                   </div>
                 </div>
                 
                 <div class="control-group ">
                   <label class="control-label">下载方式</label>
                   <div class="controls">
                      <select>
                         <option value="">免费</option>
                         <option value="">1财富币</option>
                         <option value="">2财富币</option>
                         <option value="">3财富币</option>
                      </select>
                   </div>
                 </div>
             </div>
             
            <div class="doc-iteam"> 
               <span class="fore">2</span>          
               <div class="control-group">
                    <label class="control-label" for="fileName">文档名</label>
                    <div class="controls">
                         <input type="text" id="fileName" class="input-xxlarge" value="组态王与PLC S7-200 建立GPRS 无线通信">
                    </div>
               </div>
                          
                <div class="control-group">
                     <label class="control-label" for="inputPassword">文档简介</label>
                     <div class="controls">
                          <textarea rows="4" class="input-xxlarge"></textarea>
                     </div>
                </div>
                
                 
                 <div class="control-group ">
                   <label class="control-label">所属分类</label>
                   <div class="controls" id="selctl-2">
                     <span class="help-inline">
                        <select name="sel-f-sort" class="sel-f-sort" id="sel-f-2" >
                         <option value="" selected="selected" disabled="disabled">请选择分类</option>
                         <?php getTierOne(); ?>
                        </select>
                      </span>
                      <span class="help-inline hidden wait-sel" id="wait-2" >
                         <img src="../images/ajax-loader.gif" width="16" height="11"  alt=""/>
                      </span>
                      <span class="help-inline result-wrap" id="result-2" style="display: none;"></span> 
                   </div>
                 </div>
                 
                 <div class="control-group ">
                   <label class="control-label">发布方式</label>
                   <div class="controls">
                      <select>
                         <option value="">完全公开</option>
                         <option value="">仅对好友公开</option>
                         <option value="">对特定⽤用户公开</option>
                         <option value="">私密</option>
                      </select>
                   </div>
                 </div>
                 
                 <div class="control-group ">
                   <label class="control-label">下载方式</label>
                   <div class="controls">
                      <select>
                         <option value="">免费</option>
                         <option value="">1财富币</option>
                         <option value="">2财富币</option>
                         <option value="">3财富币</option>
                      </select>
                   </div>
                 </div>
             </div>
             
             </div><!--end:main-panel-->
          <div class="form-actions">
              <input type="submit" value="发布文档" class="btn btn-info">
             </div>
             </form>
      </div><!--end:g-notop-line--> 
    </div><!--end:ui-wrapper-->
</div><!--end:ui-content-->
<?php include '../library/footer.php'; ?>
<!--移动 modal-->
<?php include '../library/file_move.php'; ?>
<!--分享-->
<div id="share_modal" class="modal find_usermodal hide fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
</div>

<div id="favorites_modal" class="modal hide fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true"></div>

<div id="upload_modal" class="modal upload_modal hide fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
     <a class="close" data-dismiss="modal" aria-hidden="true" href="#">&times;</a>
     <h3>上传文件</h3>
  </div>
  <div class="modal-body">
     <div id="uploadModal"></div>
  </div>
   <div class="modal-footer">
       <input type="button" class="btn btn-info" id="btupload" value="开始上传" />
       <input type="button" class="btn disabled" id="btupload" value="关闭窗口" />
    </div>
</div>
<?php include '../library/loadJs.php'; ?>

<script type="text/javascript">
   require(['jquery','MyUI/all'], function ($) {
	
	//联动例子
	$('.sel-f-sort').change(function(e){
		
		var  group_div    = $(this).parent().parent(),
		     changeID     = group_div.attr("id").split('-'),
			 DbNumberID   = changeID[1],
		     waitNum      = '#wait-' + DbNumberID,
		     resultNum    = '#result-'+ DbNumberID;
			
	       $(''+waitNum+'').show();
	       $(''+resultNum+'').hide();
		 
      $.get("../data/func.php", { func: "drop_1", drop_var: $(this).val() }, function(response){
          $(''+resultNum+'').fadeOut();
          setTimeout("finishAjax('"+DbNumberID+"', '"+escape(response)+"')", 400);
      });
    	return false;
	});
  });  
  
  function finishAjax(id, response){
       $('#wait-'+id+'').hide();
       $('#result-'+id+'').html(unescape(response));
       $('#result-'+id+'').fadeIn();
    }
</script>
</body>
</html>