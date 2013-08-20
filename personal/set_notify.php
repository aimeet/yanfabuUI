<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<title>通知-研发埠|yanfabu.com-研发创新互动平台</title>
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
        <h2 class="title">通知</h2>
        <?php include '../library/set_menu.php'; ?>
      </div>
      <!--end:channel-header-->
      <form class="form-horizontal" >
      <div class="page-wrapper">
       <div class="alert alert-info">
               <button type="button" class="close" data-dismiss="alert">×</button>
               <h3>通知设定</h3>
               <P>消息是在使用研发埠的过程中，其他用户对你的操作产生的动态信息。这些信息会出现在页首导航栏的消息提示中。现在，你可以自定义接收哪些类型的消息。</P>
       </div>
   
     
         <div class="title-header">
            <h2 class="title g_b_dotted">通知方式</h2>
          </div> 
          
         <div class="control-group">
             <label class="control-label" for="mailCheck"><span class="ui-icon icon-mail icon-16"></span>电子邮件</label>
              <div class="controls">
                  <label class="checkbox inline"><input name="mailCheck" type="checkbox" value="" checked="true" >系统将自动发送通知到您的邮箱</label>
              </div>
          </div>
          
          <div class="control-group">
             <label class="control-label" for="msgCheck"><span class="ui-icon icon-msg icon-16"></span>站内通知</label>
              <div class="controls">
                  <label class="checkbox inline"><input name="msgCheck" type="checkbox" value="" checked="true" >您能够在用户首页和消息中心收到通知</label>
              </div>
          </div>

          <div class="title-header"><h2 class="title g_b_dotted">接收哪些消息通知</h2></div> 
          
          <div class="control-group">
             <label class="control-label"><span class="ui-icon icon-tag icon-16"></span>标签</label>
              <div class="controls">
                 <select>
                    <option value="0">所有人</option>
                    <option value="1">我关注的人</option>
                    <option value="2">朋友</option>
                    <option value="3">朋友的朋友</option>
                 </select>
              </div>
          </div>
          
          <div class="control-group">
             <label class="control-label"><span class="ui-icon icon-app icon-16"></span>应用</label>
              <div class="controls">
                  <label class="checkbox inline"><input type="checkbox" value="" name="wenku"  checked="true" >文库</label>
                  <label class="checkbox inline"><input type="checkbox" value="" name="bida" checked="true" >必答</label>
              </div>
          </div>
         </div>
         
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
</body>
</html>