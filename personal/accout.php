<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<title>账号设置-研发埠|yanfabu.com-研发创新互动平台</title>
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
    <div class="ui-sidebar pull-left">
        <?php include '../library/left_userInfo.php'; ?>
        <?php include '../library/left_menu.php'; ?>
      </div><div class="main-panel w-bg l-border">
      <div class="title-header channel-header">
        <h2 class="title">用户信息</h2>
          <?php include '../library/set_menu.php'; ?>
      </div>
      <!--end:channel-header-->
      <div class="page-wrapper">
          <div class="alert alert-info">
               <button type="button" class="close" data-dismiss="alert">×</button>
               <h3>请完善您的资料,您将获得20积分的奖励及以下更好的体验!</h3>
               <div class="row-fluid">
                  <dl class="one_third nomargin">
                     <dt class="pull-left"><span class="icon-ok icon-36"></span></dt>
                     <dd>
                        <h4>为您提供更好的体验</h4>
                        <p>我们根据您设定的信息,为您提供更好的体验</p>
                     </dd>
                  </dl>
                  
                  <dl class="one_third nomargin">
                      <dt class="pull-left"><span class="icon-search icon-36"></span></dt>
                     <dd>
                        <h4>发现朋友或同事</h4>
                        <p>我们根据您设定的信息,找到您的朋友或同事</p>
                     </dd>
                  </dl>
                  
                  <dl class="one_third nomargin">
                     <dt class="pull-left"><span class="icon-cup icon-36"></span></dt>
                     <dd>
                        <h4>成为研发埠会员</h4>
                        <p>抢先体验各项等级特权验</p>
                     </dd>
                  </dl>
               </div>
          </div>
       </div>
      <form class="form-horizontal " >
      
      <div class="push h30"></div>
      
      <div class="page-wrapper layer-rel">
        
           <div class="control-group ">
               <label class="control-label">真实姓名</label>
               <div class="controls">
                  <input type="text" disabled="disabled" class="input-medium" placeholder="陈晓军">
                  <a href="true_name.php" title="" class="btn btn-link">修改</a>
                  </div>
           </div>
           
            <div class="control-group ">
                   <label class="control-label" for="sex">性别</label>
                   <div class="controls">
                         <span class="radio inline">
                            <input type="radio" value="1" name="sex" id="sex1" ><label>男</label>
                         </span >
                         <span class="radio inline">
                            <input type="radio" value="2" name="sex" id="sex2"><label>女</label>
                         </span>
                         <span class="radio inline">
                            <input type="radio" value="3" name="sex" id="sex3"><label>保密</label>
                         </span>
                  </div>
           </div>
           
          <div class="control-group ">
               <label class="control-label">登陆邮箱</label>
               <div class="controls">
                  <input type="text" disabled="disabled" class="input-medium" placeholder="ai*****et@163.com">
                  <a href="update_mail.php" title="" class="btn btn-link">修改</a>
              </div>
           </div>
          
         <div class="control-group ">
               <label class="control-label" for="introduce">一句话介绍</label>
               <div class="controls">
                    <input type="text" class="input-xlarge" value="" name="introduce" placeholder="例如：汽车制造 / 产品设计师">
               </div>
          </div>
          
          <div class="title-header"><h2 class="title g_b_dotted">选填信息</h2></div> 
          
          <div class="control-group">
                     <label class="control-label" for="microBlog">微博链接</label>
                     <div class="controls">
                         <span class="radio inline">
                            <input type="radio" value="option1" checked="true" name="bind" >显示
                         </span >
                         <span class="radio inline">
                            <input type="radio" value="option1" name="bind" >不显示
                         </span>
                     </div>
          </div>
          
          <div class="control-group ">
               <label class="control-label">个性网址</label>
               <div class="controls">
                  <label class=" help-inline">http://www.yanfabu.com/</label><input type="text" value="" placeholder="" class="input-small" name="individuality">
                  <div class="help-block">仅可使用字母，不区分大小写</div>
              </div>
           </div>
          
          <div class="control-group ">
               <label class="control-label" for="introduce">个人介绍</label>
               <div class="controls">
                    <textarea rows="3" class="input-xlarge" placeholder="用一段话介绍你自己,200字以内" type="text" value=""></textarea>
            </div>
          </div>
         
          <div class="control-group ">
               <label class="control-label" for="record">职业经历</label>
               <div class="controls">
                  <input type="text" id="com_txt" class="input-medium" value="" placeholder="公司或组织名称">
                  <input type="text" id="vitae_txt" class="input-medium" value="" placeholder="你的职位">
                  <input type="button" class="btn  btn-link" value="添加" id="add_vitae">
              <div class="help-block">您可以填写多个公司，选择置顶的公司会显示在你的个人页面</div>
              <ul class="span5 accout-list" id="vitae-list">
                <?php
                  include_once("../config.php");
                  $Result = mysql_query("SELECT id, company, vitae FROM add_delete_vitae");
				  while($row = mysql_fetch_array($Result))
                  {
                  echo '<li id="item_'.$row["id"].'"><a href="#" class="del-link" data-dismiss="alert" title="撤销" id="del-'.$row["id"].'">×</a>';
				  echo '<h4><a href="#" class="name-link" title="'.$row["company"].'">'.$row["company"].'</a><span>'.$row["vitae"].'</span></h4>';
                  echo '</li>';
				   }
				 mysql_close($connecDB);
				?>
              </ul>
              
     
              </div>
         </div>          
         
         <div class="control-group ">
               <label class="control-label" for="add">居住地</label>
               <div class="controls city_area" id="city_area"></div>
         </div> 
         
         <div class="control-group ">
               <label class="control-label" for="introduce">详细地址</label>
               <div class="controls">
                    <input type="text" class="input-xlarge"  placeholder="例如：钦州路100号" value="">
            </div>
          </div>
          
         <div class="control-group ">
             <label class="control-label" for="school">学历</label>
             <div class="controls">
               <input type="text" class="input-xlarge" value="" placeholder="院校名称" id="search_school" name="school" data-provide="typeahead" autocomplete="off">
               <input type="button" class="btn btn-link" value=" 添加">
               <div class="help-block">您可选择多个学校，最上方学校会显示在你的个人页面</div>
             </div>
         </div>
         
         <div class="control-group ">
               <label class="control-label">所学专业</label>
               <div class="controls">
                  <input type="text" class="input-xlarge" value="" placeholder="例如：机械加工" id="search_study" data-provide="typeahead" autocomplete="off">
                  <input type="button" class="btn btn-link" value="添加">
                  <div class="help-block">您可添加多项专业</div>
              </div>
        </div>
        
        <div class="control-group ">
               <label class="control-label">擅长技能</label>
               <div class="controls">
                  <input type="text" class="input-xlarge" value="" placeholder="例如：界面设计、人像摄影、商业营销" id="search_skill" data-provide="typeahead" autocomplete="off">
                  <input type="button" class="btn btn-link" value="添加">
                  <div class="help-block">您可添加多项技能</div>
              </div>
        </div>
        
        <div class="control-group ">
               <label class="control-label" for="introduce">我的信息</label>
               <div class="controls">
                   <select>
                       <option value="0">对所有人公开</option>
                       <option value="0">仅对好友可见</option>
                       <option value="0">不公开</option>
                   </select>
               </div>
          </div>
        <!--审核通过的工程师无该项功能-->
        <div class="title-header"><h2 class="title g_b_dotted">邮件签名</h2></div>
        
        <div class="control-group ">
               <label class="control-label">邮件签名</label>
               <div class="controls">
                  <textarea rows="5" class="input-xlarge" ></textarea>
                  <div class="help-block">多项信息请使用回车换行</div>
            </div>
        </div>

        
        <div class="eidt-avatar">
           <div class="avatar avatar-big"><img src="../images/photo/no_avatar_big.jpg" alt="" /></div>
            <a class="avt-file" role="button" data-toggle="modal" data-target="#up_avatar" href="../library/up_avatar.php" title="修改头像" ><span class="icon-edit"></span>修改头像</a>
        </div>
        </div>
        <div class="form-actions">
            <input type="submit" value="保存修改" class="btn  btn-info">
        </div>
      </form>
    </div><!--end:main-panel--> 
  </div><!--end:g-notop-line--> 
</div><!--end:ui-content-->
<?php include '../library/footer.php'; ?>
<?php include '../library/upLoad_modal.php'; ?>
<?php include '../library/loadJs.php'; ?>
<script type="text/javascript">

    //城市联动
    var url = '../plug_ins/city/city.php';
	var provinceurl = url + '?a=province';
	var cityurl = url + '?a=city&pid=';
	var areaurl = url + '?a=area&pid=';	
	
 require(['jquery','MyUI/all'],function ($){
	 
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
   	
	$('input:radio').click(function(e){
		$('input:radio').attr("checked",false);
		$(this).attr("checked",true);
		alert($('input[name="sex"]:checked').val());
	});
	
	//#职业经历删除
	$("body").on("click", "#vitae-list .del-link",  function(e) {
		 e.returnValue = false;
		 var clickedID = this.id.split('-'); 
		 var DbNumberID = clickedID[1];
		 var myData = 'recordToDelete='+ DbNumberID;
		 
		jQuery.ajax({
			type: "POST", // HTTP method POST or GET
			url: "../data/response.php", //Where to make Ajax calls
			dataType:"text", // Data type, HTML, json etc.
			data:myData, //Form variables
			success:function(response){
				$('#item_'+DbNumberID).fadeOut(900);
			},
			error:function (xhr, ajaxOptions, thrownError){
				alert(thrownError);
			}
		});
		return false;
	});
    
	$('#search_school').typeahead({
			source: function (query, process){
			return $.getJSON('../data/lookup.json',{ query: query }, function (data){ 
				   var newData = []; 
				  $.each(data, function(){ newData.push(this.name);}); 
				  return process(newData);
			  });
			}
	   });
	  
	  $('#search_study').typeahead({
			source: function (query, process){
			return $.getJSON('../data/lookup.json',{ query: query }, function (data){ 
				   var newData = []; 
				  $.each(data, function(){ newData.push(this.name);}); 
				  return process(newData);
			  });
			}
	   });
	   
	   $('#search_skill').typeahead({
			source: function (query, process){
			return $.getJSON('../data/lookup.json',{ query: query }, function (data){ 
				   var newData = []; 
				  $.each(data, function(){ newData.push(this.name);}); 
				  return process(newData);
			  });
			}
	   }); 

	
	//自定义 alert 不能为空
	var emptyinfo = {"label":"关闭","class":"btn","callback":function(){ /*--回调方法--*/}}	
	
	//城市3级联动
	$('#city_area').ajax_city_select({'province':'province3','city':'city3','area':'area3'}); 
	
	
	
	//职业经历
	$("#add_vitae").click(function (e) {
			e.preventDefault();
			if($("#com_txt").val()===''|| $("#vitae_txt").val()==='')
			{	
			    bootbox.dialog("<h4 class='error'>不能为空</h4>",emptyinfo);
				return false;
			}
			
		Mydata = { company: $('#com_txt').attr('value'), vitae: $('#vitae_txt').attr('value') };
		 
		jQuery.ajax({
			type: "POST",
			url: "../data/response.php", 
			data: Mydata,
			datatype: "json",
			success:function(response){
				$("#vitae-list").append(response);
				$("#com_txt").val('');
				$("#vitae_txt").val('');
			},
			error:function (xhr, ajaxOptions, thrownError){
				alert(thrownError);
			}
	   });
	   return false;
	});
    
}); 	
</script>
</body>
</html>