<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<title>新建话题-朋友圈-研发埠|yanfabu.com-研发创新互动平台</title>
<meta name="Keywords" content="CAE,yanfabu.com,研发埠,研发部,Open,Innovation,流体，光学，化学,机械工程,冶金工程,电子,兵器科学,大学,文献,开放,创新">
<meta name="Description" content="研发埠,yanfabu.com-Open,Innovation,开放,创新,研发创新互动平台">
<meta name="author" content="">
<!-- default styles -->
<link href="css/bootcss.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
<link rel="stylesheet" href="css/plug-ins/redactor.css" />
<link rel="stylesheet" href="css/plug-ins/token-input.css" />
<!--[if lte IE 7]><link href="/css/font-ie7.css" rel="stylesheet"><![endif]-->
<!--[if IE]><script src="js/html5.js"></script><![endif]-->
<link rel="shortcut icon" href="assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
</head>
<body class="g-body">
<!--header-->
<?php include 'library/index_header.php'; ?>
<!-- end header-->
<div class="g_t_line">
<div class="container">
<div class="breadcrumb-nav" >
 <a href="group.php" class="f-column">圈子</a>&nbsp;/&nbsp;<span>新建讨论</span></div>
<div class="g-notop-line b-sbg clearfix">
    <aside class="ui-sidebar pull-left topic-aside">
      <div class="wrapper-box">
       <?php include 'library/question_linked.php'; ?>
      </div>
    </aside><!-- end ui-sidebar -->

    <div class="main-panel w-bg l-border">
      <div class="wrapper">   
         <div class="gray-line">
         <div class="push h50"></div>
         <form class="form-horizontal" action="post_view.php" method="post">
         
            <div class="control-group ">
                       <label class="control-label"><span class="r-font">*</span>开放方式</label>
                       <div class="controls">
                         <span class="radio inline">
                            <input name="sex" type="radio" id="sex1" value="1" checked="checked"><label>对所有人开放</label>
                            <div class="help-block">任何人都可以参与该话题</div>
                         </span>
                         
                         <span class="radio inline">
                            <input type="radio" value="2" name="sex" id="sex2"><label>对我关注的人开放</label>
                            <div class="help-block">所有我关注的人都可以参与</div>
                         </span>
                         
                         <span class="radio inline">
                            <input type="radio" value="2" name="sex" id="sex2"><label>仅对好友开放</label>
                            <div class="help-block">好友可参与，其他人可申请加入</div>
                         </span>
                  </div>
             </div>
         
            <div class="control-group ">
              <label class="control-label"><span class="r-font">*</span>选择领域</label>
              <div class="controls">
                 <select data-placeholder="请选择领域" class="selectpicker show-tick" >
                      <option value="">请选择</option> 
                      <option value="计算机">计算机</option> 
                      <option value="工程流体" selected>工程流体</option> 
                      <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                      <option value="Wallis and Futuna">Wallis and Futuna</option> 
                      <option value="Western Sahara">Western Sahara</option> 
                      <option value="Yemen">Yemen</option> 
                      <option value="Zambia">Zambia</option> 
                      <option value="Zimbabwe">Zimbabwe</option>
                      <option value="Zimbabwe2">Zimbabwe2</option>
                  </select>
             </div>
           </div>
           <div class="control-group">
              <label class="control-label"><span class="r-font">*</span>话题标题</label>
              <div class="controls"><input type="text" class="input-xxlarge" value="" placeholder="请输入标题"></div>
           </div>
            
           <div class="control-group ">
              <label class="control-label">内容</label>
              <div class="controls editlarge" >
                    <div class="input-xxlarge"><textarea rows="5"  id="answer_edit" ></textarea></div>
                    <div class="help-block">您可以上传jpg,gif,png格式图片，单独附件大小不超过320k</div>
               </div>
           </div>

          
          <div class="push h30"></div>
            
          <div class="form-actions gray-topline">
                <!--<a href="#" class="fl cancel-url">取消</a>-->
                <a href="" class="btn">&nbsp;取消&nbsp;</a>
                <input type="submit" id="saveuser" value="&nbsp;提交&nbsp;" class="btn  btn-info">
           </div>
           
        </form>
        
            
         </div>
      </div><!-- end page-wrapper -->
    </div><!-- end main-panel -->
</div>
<!-- w-body -->
</div>
<!-- end:container -->
</div>
<!-- end:g_t_line -->
<?php include 'library/footer.php'; ?>
<script type="text/javascript" src="js/require.js"></script>
<script type="text/javascript" >
 requirejs.config({
	     paths: {
				'jquery': 'js/jquery',
				'underscore': 'js/underscore/underscore-min',
				'bootstrap': 'js/bootcss',
				'slider': 'js/slider',
				'fuelux':'js/fuelux',
				'redactor':'js/redactor',
				'MyUi':'js/mainjs'
			  }
});

require(['jquery','MyUi'], function ($){
	  
	  //编辑器配置
	  var editSettings = {
		   buttons: ['formatting', '|', 'bold', 'italic', 'deleted', '|','unorderedlist', 'orderedlist','image', 'video', 'file', 'table', 'link','horizontalrule'],
		 imageGetJson: 'data/data.json',
		 imageUpload: 'plug_ins/redactor/image_upload.php',
		 fileUpload: 'plug_ins/redactor/file_upload.php' 
	  }
	  
	  //编辑器
	  $('#answer_edit').redactor(editSettings);
	  
	  //select
	  $('.selectpicker').selectpicker();
	  
	  //涉及专业  不可新建
	  $('#search-topic').tokenInput("http://shell.loopj.com/tokeninput/tvshows.php", { 
		   theme: "bootstrap",
		   hintText : '请输入领域名称',
           searchingText : '正在查询中...',
           noResultsText : '没有找到匹配结果',
           preventDuplicates: true,
		   allow_single_deselect:true,
           highlightDuplicates: false
	 });
});
</script>
</body>
</html>
