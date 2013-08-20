<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<title>修改密码-研发埠|yanfabu.com-研发创新互动平台</title>
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
        <h2 class="title">修改密码</h2>
       <?php include '../library/set_menu.php'; ?>
      </div>
      <!--end:channel-header-->
      
      <form id="valid_form" autocomplete="off" method="get" class="form-horizontal"  action="#" >
        <div class="page-wrapper">
        
        <div class="push h20"></div>
        
          <div class="control-group ">
               <label class="control-label">原密码</label>
               <div class="controls">
                  <input type="password" class="input-xlarge" value="" name="oldPass" id="oldPass" >
                   <label for="oldPass" class="help-block">请输入原密码</label>
               </div>
           </div>
           
           <div class="control-group ">
               <label class="control-label">新密码</label>
               <div class="controls">
                  <input type="password" class="input-xlarge" value="" name="pass" id="pass" >
                  <label for="pass" class="help-block">6~16个字符，区分大小写</label>
               </div>
           </div>
           
           <div class="control-group ">
               <label class="control-label">确认密码</label>
               <div class="controls">
                  <input type="password" class="input-xlarge" value="" id="confirm_pass" name="confirm_pass" >
                  <label for="confirm_pass" class="help-block">请再次填写密码</label>
               </div>
           </div>
           
           <div class="control-group">
                   <label class="control-label">验证码</label>
                   <div class="controls">
                      <input type="text" id="validate" name="validate" class="input-mini" />
                      <span class="help-inline"><img src="../images/verification.jpeg" width="120" height="19" ></span><span class="help-inline">看不清楚？<a href="#">换一张</a></span>
                      <label for="validate" class="help-block"></label>
                   </div>
               </div><!--end:control-group -->
             <div class="push h20"></div>
         </div>
        <div class="form-actions">
            <input type="submit" value="保存修改" class="btn  btn-info">
        </div>
      </form>
    </div>
    <!--end:main-panel--> 
  </div>
  <!--end:g-notop-line--> 
</div>
<!--end:ui-content-->
<?php include '../library/footer.php'; ?>
<script src="../js/validate/validate.min.js"></script>
<script>

jQuery.validator.addMethod("reg_data",  
        function(value, element, params) {     //addMethod第2个参数:验证方法，参数（被验证元素的值，被验证元素，参数）
            var exp = new RegExp(params);     //实例化正则对象，参数为传入的正则表达式
            return exp.test(value);                    //测试是否匹配
        }, "格式错误");    //addMethod第3个参数:默认错误信息
		
 $(document).ready(function(){

	$("#valid_form").validate({
		errorClass: "error-info",
		rules: {
			pass: {
				required: true,
				rangelength:[6,12],
				reg_data: "^\\w+$"
			},
			confirm_pass: {
				required: true,
				rangelength:[6,12],
				equalTo: "#pass",
				reg_data: "^\\w+$"
			},
		   oldPass:"required",
		   
		   validate:{
			   required: true,
			   rangelength:[5,5]
			 }
		},
		messages: {
			passw: {
				required: "请输入密码",
				rangelength: jQuery.format("密码长度应为6~16个字符")
			},
			confirm_pass: {
				required: "请填写确认密码！",
				minlength: jQuery.format("密码长度应为6~16个字符"),
				equalTo: "确认密码要和密码一致"
			},
			oldPass:"请输入原密码",
			validate: "请填写验证码",
		},
		// the errorPlacement has to take the table layout into account
		errorPlacement: function(error, element) {
			var this_id = element.attr('id');
			$("label[for=" + this_id + "]").html(error);
		},
		// specifying a submitHandler prevents the default submit, good for the demo
		submitHandler: function() {
			alert("submitted!");
		},
		// set this class to error-labels to indicate valid fields
		success: function(label,element) {
			$(element).parent().parent().addClass('success');
			$(element).parent().parent().removeClass('error');
			$("label[for=" + element.id + "]").html("正确");
		},
		highlight: function(element, errorClass) {
		    $(element).parent().parent().addClass('error');
			$(element).parent().parent().removeClass('success');
		}
	});	 
	
	 }); 
 </script>
</body>
</html>