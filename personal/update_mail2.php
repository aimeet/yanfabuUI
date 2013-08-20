<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<title>修改登陆邮箱-研发埠|yanfabu.com-研发创新互动平台</title>
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
    <!--_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/ start:左侧菜单 _/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/-->      <div class="ui-sidebar pull-left">
        <?php include '../library/left_userInfo.php'; ?>
        <?php include '../library/left_menu.php'; ?>
      </div><div class="main-panel w-bg l-border">
    
      <div class="title-header channel-header g_b_line"><h2 class="title">修改登陆邮箱</h2></div>
      <!--end:channel-header-->
      
      <div class="push h20"></div>
      
      <div class="progressbox">
         <ul class="progress-2">
             <li class="step-1"><b></b>1.验证身份</li>
             <li class="step-2"><b></b>2.修改邮箱</li>
             <li class="step-3">3.验证邮箱</li>
         </ul>
     </div>
     
      <form class="form-horizontal top20" action="update_mail3.php">
      <div class="page-wrapper min-wrap">
      <div class="push h20"></div>
              <div class="control-group ">
                   <label class="control-label">新邮箱</label>
                   <div class="controls">
                      <input type="text" class="input-xlarge" value="" name="introduce" >
                   </div>
               </div><!--end:control-group -->
     
               <div class="control-group">
                   <label class="control-label">验证码</label>
                   <div class="controls">
                      <input type="text" class="input-xlarge" value="" name="introduce" >
                      <span class="help-inline"><img src="../images/verification.jpeg" width="120" height="19" ></span><span class="help-inline">看不清楚？<a href="#">换一张</a></span>
                   </div>
               </div><!--end:control-group -->
             <div class="push h50"></div>
             <div class="alert-box p15 g_t_line">
                   <h3>为什么要身份验证</h3>
                   <p>1. 为保障您的账户信息安全，在变更账户中的重要信息时需要进行身份验证，感谢您的理解和支持。</p>
                   <p>2. 验证身份遇到问题？请发送用户名登陆邮箱发票至server@yanfabu.com，客服将尽快联系您。</p>
             </div><!--end:alert-box-->
        </div>
        <div class="form-actions">
            <input type="submit" value="下一步" class="btn  btn-info">
        </div>
      </form>
    </div>
    <!--end:main-panel--> 
  </div>
  <!--end:g-notop-line--> 
</div>
<!--end:ui-content-->
<?php include '../library/footer.php'; ?>
<?php include '../library/loadJs.php'; ?>
<script type="text/javascript">	
 require(['jquery','MyUI/all'], function ($) { })
 </script>
</body>
</html>