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
          <h2 class="title">编辑领域</h2>
        </div>
        <form class="form-horizontal" action="topic_tag.php" autocomplete="off" method="get" >
          <div class="push h50"></div>
          <div class="page-wrapper layer-rel">
            <div class="control-group error ">
              <label class="control-label">领域名称</label>
              <div class="controls">
              <!--这里需要判断，如果系统已有不可重复创建-->
               <input type="text" id="toptic_name" tabindex="-1" class="input-xlarge" value="">
                   <!--如领域已存在，提示该内容-->
                   <label for="toptic_name" class="help-block">该领域已存在，您可&nbsp;&nbsp;<a href=""><span class="icon-plus-circle"></span>&nbsp;加关注</a></label>  
              </div>
            </div>
            <div class="control-group ">
              <label class="control-label" for="introduce">领域介绍</label>
              <div class="controls">
                <textarea rows="6" class="input-xlarge" placeholder="请输入" type="text" value=""></textarea>
              </div>
            </div>
            <div class="eidt-avatar">
              <div class="avatar avatar-big"><img src="../images/photo/no_pic.png" alt="" /></div>
              <a class="avt-file" role="button" data-toggle="modal" data-target="#up_avatar" href="../library/up_avatar.php" title="修改缩略图" ><span class="icon-edit"></span>修改缩略图</a> </div>
            <div class="push h50"></div>
            <div class="push h50"></div>
          </div>
          <div class="form-actions">
            <input type="submit" value="取消" class="btn">
            <input type="submit" value="保存" class="btn btn-info">
          </div>
          <!--end:page-content-->
        </form>
      </div>
      <!--end:main-panel--> 
    </div>
    <!--end:g-notop-line--> 
  </div>
  <!--end:ui-wrapper--> 
</div>
<!--end:ui-content-->
<?php include '../library/footer.php'; ?>
<?php include '../library/upLoad_modal.php'; ?>
<?php include '../library/loadJs.php'; ?>
<script type="text/javascript">	 
   require(['jquery','MyUI/all'], function ($) {
	 
	  /* imgareaselect 上传头像
 ----------------------------------------------------------*/
    var imgarea_real = true,
        upAvatar     = $(".avt-file[data-toggle='modal']"), //上传头像Link
	    upModal      = $("#up_avatar"); //上传头像Modal
 
   //上传头像modal
   $(".avt-file[data-toggle='modal']").click(function(){
				var target = $(this).attr('data-target');
				var url = $(this).attr('href');
				$(target).load(url,function(){ upLoadMode(); });
	});

  //上传头像裁剪JS
  function upLoadMode(){ 
	   var imgAreaSelectApi = $('#img_origin').imgAreaSelect({  
				persistent : true,  // true，选区以外点击不会启用一个新选区（只能移动/调整现有选区）  
				instance : true,    // true，返回一个imgAreaSelect绑定到的图像的实例，可以使用api方法  
				onSelectChange : preview,   // 改变选区时的回调函数  
				handles : true, // true，调整手柄则会显示在选择区域内  
				resizable : true,   // true， 选区面积可调整大小  
				minWidth : 160,   // 选取的最小宽度  
				minHeight : 160,  // 选取的最小高度  
				aspectRatio: '1:1'// 选区的显示比率 
		});
		
   function preview(img, selection,getOptions) { 
	 var large_image = $('#img_origin'), //获取上传图片链接
		      preview_src = $('#img_origin').attr('src');
			  
	               $('#preview_div img').attr('src',preview_src);
				   
                    var scaleX = 160/selection.width;
                    var scaleY = 160/selection.height;

                    $('#preview_div > img').css({ 
                        width : Math.round(scaleX * large_image.width())+'px',
                        height : Math.round(scaleY * large_image.height())+'px',
                        marginLeft: '-' + Math.round(scaleX * selection.x1) + 'px',
                        marginTop: '-' + Math.round(scaleY * selection.y1) + 'px' 
          }); 
    } 
		
   function screenshot(imgarea_real){
			imgAreaSelectApi.setOptions({ hide:imgarea_real,show:true });
			imgAreaSelectApi.setSelection(0, 0, 160, 160);  
            imgAreaSelectApi.update();  
	    }
		
		upModal.on('shown',function(){  imgarea_real = false;  screenshot(imgarea_real); }); 
		 
	    upModal.on('hide', function (){  imgarea_real = true; screenshot(imgarea_real);  });  
        }
	 
	
	 })
</script>
</body>
</html>