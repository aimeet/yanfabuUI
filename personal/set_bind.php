<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<title>微博绑定-研发埠|yanfabu.com-研发创新互动平台</title>
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
        <h2 class="title">微博绑定</h2>
        <?php include '../library/set_menu.php'; ?>
      </div>
      <!--end:channel-header-->
      <form class="form-horizontal">
      <div class="page-wrapper">
          <div class="alert alert-info">
               <button type="button" class="close" data-dismiss="alert">×</button>
               <h3>微博绑定</h3>
               <P>你现在可以邀请微博好友加入知乎、回答问题，或把知乎上精彩问答分享到微博。</P>
          </div>

         <div class="title-header"><h2 class="title g_b_dotted">微博绑定</h2></div> 
          
         <div class="control-group">
             <label class="control-label"><span class="icons icons-tencent">&nbsp;</span></label>
              <div class="controls">
                  <span class="help-inline"><b>已绑定新浪微博 </b><a href="">de名字</a><a href=""><small>取消绑定</small></a></span>
              </div>
          </div>
          
          <div class="control-group">
             <label class="control-label"><span class="icons icons-sina">&nbsp;</span></label>
              <div class="controls">
                  <span class="help-inline"><a href="">绑定新浪账号</a></span>
              </div>
          </div>

          <div class="title-header"><h2 class="title g_b_dotted">分享设置</h2></div> 
          
          <div class="control-group">
             <label class="control-label">日志</label>
              <div class="controls">
                 <select>
                    <option value="0">全部日志</option>
                    <option value="1">加星日志</option>
                    <option value="2">关闭分享</option>
                 </select>
              </div>
          </div>
          
          <div class="control-group">
             <label class="control-label">回答</label>
              <div class="controls">
                  <select>
                    <option value="0">全部回答</option>
                    <option value="1">被采纳的回答</option>
                    <option value="2">关闭分享</option>
                 </select>
              </div>
          </div>
          
          <div class="control-group">
             <label class="control-label">文库</label>
              <div class="controls">
                  <select>
                    <option value="0">全部共享</option>
                    <option value="2">关闭分享</option>
                 </select>
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