<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<title>新建圈子-研发埠|yanfabu.com-研发创新互动平台</title>
<meta name="Keywords" content="CAE,yanfabu.com,研发埠,研发部,Open,Innovation,流体，光学，化学,机械工程,冶金工程,电子,兵器科学,大学,文献,开放,创新">
<meta name="Description" content="研发埠,yanfabu.com-Open,Innovation,开放,创新,研发创新互动平台">
<meta name="author" content="">
<!-- default styles -->
<link rel="stylesheet" type="text/css" href="../css/bootcss.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/custom.css">
<link rel="stylesheet" href="../css/plug-ins/token-input.css" />
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
      </div><div class="main-panel w-bg l-border">
        <div class="title-header channel-header g_b_line">
             <h2 class="title"><a href="#">朋友圈</a>&nbsp;/&nbsp;新建朋友圈</h2>
        </div>
         <form class="form-horizontal " action="../group.php" >
         <div class="push h20"></div>
         <div class="page-wrapper layer-rel ">
            <div class="min-wrap">
                  <div class="control-group ">
                       <label class="control-label" for="sex">圈子类型</label>
                       <div class="controls">
                         <span class="radio inline">
                            <input name="sex" type="radio" id="sex1" value="1" checked="checked"><label>公开圈子</label>
                            <div class="help-block">任何人都可以看见<br>可以设置加入方式<br>可以设置私密圈子</div>
                         </span>
                         <span class="radio inline">
                            <input type="radio" value="2" name="sex" id="sex2"><label>私密圈子</label>
                            <div class="help-block">非成员无法查看圈子及其内容<br>以后不能设置成公开圈子<br>&nbsp;</div>
                         </span>
                      </div>
                  </div>
                 
                  <div class="control-group ">
                      <label class="control-label">圈子名称</label>
                      <div class="controls">
                         <input type="text" class="input-xlarge" value="" name="introduce" placeholder="请输入名称">
                         <div class="help-block">给你的朋友圈起一个响亮的名字吧</div>
                      </div>
                  </div>
                  
                  <div class="control-group ">
                   <label class="control-label" for="introduce">圈子介绍</label>
                    <div class="controls">
                        <textarea rows="5" class="input-xlarge" placeholder="请输入" type="text" value=""></textarea>
                        <div class="help-block">介绍一下我们的圈子吧</div>
                     </div>
                  </div>
                  
                  <div class="control-group ">
                   <label class="control-label" for="introduce">申请理由</label>
                    <div class="controls">
                        <textarea rows="5" class="input-xlarge" placeholder="请输入" type="text" value=""></textarea>
                        <div class="help-block">至少160个字</div>
                     </div>
                  </div>
                 
                 <div class="control-group ">
                   <label class="control-label" for="introduce">擅长专业/领域</label>
                    <div class="controls">
                       <div class="input-xlarge"><input type="text"  value="" id="search-topic"></div>
                       <div class="help-block">您可添加多个标签来定义问题所涉及的领域</div>
                   </div>
                 </div>
                
                <div class="eidt-avatar">
                  <div class="avatar avatar-big"><img src="../images/photo/no_pic.png" alt="" /></div>
                  <a class="avt-file" role="button" data-toggle="modal" data-target="#up_avatar" href="../library/up_avatar.php" title="修改缩略图" ><span class="icon-edit"></span>修改缩略图</a>
                </div>
                
                <div class="control-group ">
                       <label class="control-label" for="sex">&nbsp;</label>
                       <div class="controls">
                         <span class="checkbox inline">
                            <input name="disclaimer" type="checkbox" id="rule" value="1" checked="checked"><label>我已阅读并愿意遵守<a href="#">《社区指导原则》</a></label>
                         </span>
                  </div>
                      
              </div>
                
        </div><!--end min-wrap-->
      </div>
      <div class="form-actions">
             <input type="submit" value="取消" class="btn">
             <input type="submit" value="申请" class="btn btn-info">
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
<?php include '../library/upLoad_modal.php'; ?>
<?php include '../library/loadJs.php'; ?>
<script type="text/javascript">	
 require(['jquery','MyUI/all'], function ($) { 
 
 /* jcrop 上传头像
 ----------------------------------------------------------*/
    var jcrop_api, boundx, boundy,
		imgarea_real = true;
 
   //上传头像modal
   $(".avt-file[data-toggle='modal']").click(function(){
				var target = $(this).attr('data-target');
				var url = $(this).attr('href');
				$(target).load(url,function(){ upLoadMode()  });
	});

	//更新预览
	function updatePreview(c){
	    $pcnt = $('#preview-pane');
		
        var rx = 160 / c.w;
	    var ry = 160 / c.h;

        $('#preview').css({
            width: Math.round(rx * boundx) + 'px',
            height: Math.round(ry * boundy) + 'px',
            marginLeft: '-' + Math.round(rx * c.x) + 'px',
            marginTop: '-' + Math.round(ry * c.y) + 'px'
          });

    };
	
	 function checkCoords(){
        if (parseInt($('#w').val())) return true;
        alert('Please select a crop region then press submit.');
        return false;
    };
	
    function updateCoords(c){ $('#w').val(c.w); }

  //上传头像裁剪JS
  function upLoadMode(){
     $('#target').Jcrop({
        minSize: [160, 160],
		maxSize: [300, 300],
        setSelect:[70,70,230,230],
        onChange: updatePreview,
        onSelect: updatePreview,
        onSelect: updateCoords,
        aspectRatio: 1
      },
		function(){
			// Use the API to get the real image size
			var bounds = this.getBounds();
			boundx = bounds[0];
			boundy = bounds[1];
			jcrop_api = this;
		});
    }
	
  /* 添加专业&擅长  这里不允许新建标签
 ----------------------------------------------------------*/
	$('#search-topic').tokenInput("http://shell.loopj.com/tokeninput/tvshows.php", { 
		   theme: "bootstrap",
		   hintText : '请输入领域名称',
           searchingText : '正在查询中...',
           noResultsText : '没有找到匹配结果',
           preventDuplicates: true,
		   allow_single_deselect:true,
           highlightDuplicates: false
	 });
 })
</script>
</body>
</html>