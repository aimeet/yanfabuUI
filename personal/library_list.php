<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<title>文库-研发埠|yanfabu.com-研发创新互动平台</title>
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
            <h2 class="title">文库</h2>
               <?php include '../library/library_menu.php'; ?>
          </div>
          <div class="row-fluid">
          <!--_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/page-content_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/-->
              <div class="page-wrapper min-wrap">
                  <a href="#" class="btn disabled"><span class="icon-level-up"></span>上一级</a>
                  <a class="btn" id="upload_File" data-toggle="modal" data-target="#upload_modal"><span class="icon-upload-cloud"></span>上传文档</a>
                  <button class="btn" data-toggle="modal" data-target="#favorites_modal" data-rel="../library/favorites_add.php"><span class="icon-folder"></span>新建收藏夹</button>
                  <a href="#move_modal" role="button" data-toggle="modal" class="btn"><span class="icon-move"></span>移动</a>
                  <div class="box top15">
                  <div class="box-content nopadding">

				<table id="example" cellpadding="0" cellspacing="0" border="0" class="table-dt table-striped-dt table-bordered-dt dataTable" >
						<thead>
							<tr>
								<th>选择</th>
								<th>名称</th>
								<th>修改时间</th>
                                <th>来源</th>
                                <th>状态</th>
                                <th>操作</th>
							</tr>
						</thead>
						<tbody>
							<tr class="gradeX">
								<td class="center"><input type="checkbox" name="collect_sel"></td>
								<td><span class="file-doc-min"></span><a href="../file_view.php">SMA薄弱环节对复合材料圆管耐撞性影响的试验研究</a></td>
								<td class="center">2013-05-10</td>
                                <td class="center">上传</td>
                                <td class="center">私密</td>
                                <td><div class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">操作<b class="caret"></b></a>
                                             <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
                                                 <li><a href="library_edit.php"><span class="icon-edit"></span>编辑</a></li>
                                                 <li><a href="#move_modal" role="button" data-toggle="modal"><span class="icon-move"></span>移动</a></li>
                                                 <li><a href="../library/share_modal.php" class="fileShare" id="share1"  data-toggle="modal" data-target="#share_modal"><span class="icon-share"></span>分享</a></li>
                                                 <li><a href="#"><span class="icon-cancel-1"></span>删除</a></li>
                                             </ul>
                                     </div>
                                </td>
							</tr>
                            
							<tr class="gradeC">
								<td class="center"><input type="checkbox" name="collect_sel"></td>
								<td><span class="file-xls-min"></span><a href="../file_view.php">最完整的变频器PLC组态培训教程大全</a></td>
								<td class="center">2013-05-10</td>
                                <td class="center">上传</td>
                                <td class="center">特定用户公开</td>
                                <td><div class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">操作<b class="caret"></b></a>
                                             <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
                                                 <li><a href="library_edit.php"><span class="icon-edit"></span>编辑</a></li>
                                                 <li><a href="#"><span class="icon-move"></span>移动</a></li>
                                                 <li><a href="#" class="fileShare" id="share2"><span class="icon-share"></span>分享</a></li>
                                                 <li><a href="#"><span class="icon-cancel-1"></span>删除</a></li>
                                             </ul>
                                     </div>
                                </td>
							</tr>
                            
                            <tr class="gradeC">
								<td class="center"><input type="checkbox" name="collect_sel"></td>
								<td><span class="file-xls-min"></span><a href="../file_view.php">最完整的变频器PLC组态培训教程大全</a></td>
								<td class="center">2013-05-10</td>
                                <td class="center">上传</td>
                                <td class="center">对好友公开</td>
                                <td><div class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">操作<b class="caret"></b></a>
                                             <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
                                                 <li><a href="library_edit.php"><span class="icon-edit"></span>编辑</a></li>
                                                 <li><a href="#"><span class="icon-move"></span>移动</a></li>
                                                 <li><a href="#"><span class="icon-share"></span>分享</a></li>
                                                 <li><a href="#"><span class="icon-cancel-1"></span>删除</a></li>
                                             </ul>
                                     </div>
                                </td>
							</tr>
                            
							<tr class="gradeX">
								<td class="center"><input type="checkbox" name="collect_sel"></td>
								<td><span class="file-pdf-min"></span><a href="../file_view.php">SMA薄弱环节对复合材料圆管耐撞性影响的试验研究</a></td>
								<td class="center">2013-05-10</td>
                                <td class="center">上传</td>
                                <td class="center">公开</td>
                                <td><div class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">操作<b class="caret"></b></a>
                                             <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
                                                 <li><a href="library_edit.php"><span class="icon-edit"></span>编辑</a></li>
                                                 <li><a href="#move_modal" role="button" data-toggle="modal"><span class="icon-move"></span>移动</a></li>
                                                 <li><a href="#"><span class="icon-share"></span>分享</a></li>
                                                 <li><a href="#"><span class="icon-cancel-1"></span>删除</a></li>
                                             </ul>
                                     </div>
                                </td>
							</tr>
							<tr class="gradeC">
								<td class="center"><input type="checkbox" name="collect_sel"></td>
								<td><span class="file-txt-min"></span><a href="../file_view.php">最完整的变频器PLC组态培训教程大全</a></td>
								<td class="center">2013-05-10</td>
                                <td class="center">上传</td>
                                <td class="center">待发布</td>
                                <td><div class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">操作<b class="caret"></b></a>
                                             <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
                                                 <li><a href="library_edit.php"><span class="icon-edit"></span>编辑</a></li>
                                                 <li><a href="#"><span class="icon-move"></span>移动</a></li>
                                                 <li><a href="#"><span class="icon-share"></span>分享</a></li>
                                                 <li><a href="#"><span class="icon-cancel-1"></span>删除</a></li>
                                             </ul>
                                     </div>
                                </td>
							</tr>
							<tr class="gradeX">
								<td class="center"><input type="checkbox" name="collect_sel"></td>
								<td><span class="file-rar-min"></span><a href="../file_view.php">SMA薄弱环节对复合材料圆管耐撞性影响的试验研究</a></td>
								<td class="center">2013-05-10</td>
                                <td class="center">圈子</td>
                                <td class="center">公开</td>
                                <td><div class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">操作<b class="caret"></b></a>
                                             <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
                                                 <li><a href="library_edit.php"><span class="icon-edit"></span>编辑</a></li>
                                                 <li><a href="#"><span class="icon-move"></span>移动</a></li>
                                                 <li><a href="#"><span class="icon-share"></span>分享</a></li>
                                                 <li><a href="#"><span class="icon-cancel-1"></span>删除</a></li>
                                             </ul>
                                     </div>
                                </td>
							</tr>
							<tr class="gradeC">
								<td class="center"><input type="checkbox" name="collect_sel"></td>
								<td><span class="icon-folder-1"></span><a href="../file_view.php">最完整的变频器PLC组态培训教程大全</a></td>
								<td class="center">2013-05-10</td>
                                <td class="center">圈子</td>
                                <td class="center">对好友公开</td>
                                <td><div class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">操作<b class="caret"></b></a>
                                             <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
                                                 <li><a href="#"><span class="icon-edit"></span>编辑</a></li>
                                                 <li><a href="#"><span class="icon-move"></span>移动</a></li>
                                                 <li><a href="#" class="fileShare" id="share1"><span class="icon-share"></span>分享</a></li>
                                                 <li><a href="#"><span class="icon-cancel-1"></span>删除</a></li>
                                             </ul>
                                     </div>
                                </td>
							</tr>
                            <tr class="gradeX">
								<td class="center"><input type="checkbox" name="collect_sel"></td>
								<td><span class="icon-folder-1"></span><a href="../file_view.php">SMA薄弱环节对复合材料圆管耐撞性影响的试验研究</a></td>
								<td class="center">2013-05-10</td>
                                <td class="center">圈子</td>
                                <td class="center">特定⽤用户公开</td>
                                <td><div class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">操作<b class="caret"></b></a>
                                             <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
                                                 <li><a href="#">编辑</a></li>
                                                 <li><a href="#myModal" role="button" data-toggle="modal">移动</a></li>
                                                 <li><a href="#">删除</a></li>
                                             </ul>
                                     </div>
                                </td>
							</tr>
							<tr class="gradeC">
								<td class="center"><input type="checkbox" name="collect_sel"></td>
								<td><span class="file-xls-min"></span><a href="../file_view.php">最完整的变频器PLC组态培训教程大全</a></td>
								<td class="center">2013-05-10</td>
                                <td class="center">收藏</td>
                                <td class="center">公开</td>
                                <td><div class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">操作<b class="caret"></b></a>
                                             <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
                                                 <li><a href="#"><span class="icon-edit"></span>编辑</a></li>
                                                 <li><a href="#"><span class="icon-move"></span>移动</a></li>
                                                 <li><a href="#" class="fileShare" id="share1"><span class="icon-share"></span>分享</a></li>
                                                 <li><a href="#"><span class="icon-cancel-1"></span>删除</a></li>
                                             </ul>
                                     </div>
                                </td>
							</tr>
                            <tr class="gradeX">
								<td class="center"><input type="checkbox" name="collect_sel"></td>
								<td><span class="icon-folder-1"></span><a href="../file_view.php">SMA薄弱环节对复合材料圆管耐撞性影响的试验研究</a></td>
								<td class="center">2013-05-10</td>
                                <td class="center">收藏</td>
                                <td class="center">公开</td>
                                <td><div class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">操作<b class="caret"></b></a>
                                             <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
                                                 <li><a href="#"><span class="icon-edit"></span>编辑</a></li>
                                                 <li><a href="#"><span class="icon-move"></span>移动</a></li>
                                                 <li><a href="#"><span class="icon-share"></span>分享</a></li>
                                                 <li><a href="#"><span class="icon-cancel-1"></span>删除</a></li>
                                             </ul>
                                     </div>
                                </td>
							</tr>
							<tr class="gradeC">
								<td class="center"><input type="checkbox" name="collect_sel"></td>
								<td><span class="ui-icon icon-answer"></span>最完整的变频器PLC组态培训教程大全</td>
								<td class="center">2013-05-10</td>
                                <td class="center">收藏</td>
                                <td class="center">公开</td>
                                <td><div class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">操作<b class="caret"></b></a>
                                             <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
                                                 <li><a href="#">编辑</a></li>
                                                 <li><a href="#">移动</a></li>
                                                 <li><a href="#">删除</a></li>
                                             </ul>
                                     </div>
                                </td>
							</tr>
						</tbody>
                    </table>
				</div>
                </div>
                <div class="push h30"></div>
             </div><!--end:page-content-->
           </div>
        </div><!--end:main-panel--> 
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
	
	
	$("#upload_File").click(function(){
		var target = $(this).attr('data-target');	
		$(target).on('show', function () {
		  upFile_modal();
		});	
	});	
	
	$("#ex-tree").explr();
	
	function upFile_modal() {
	  $('#uploadModal').fineUploader({
        request: {
                endpoint: '../upload'
            },
            editFilename: {
                enabled: true
            },
          deleteFile: {
           enabled: true,
           endpoint: '../upload'
         },
           enableAuto: true,
           maxAutoAttempts: 5
        });
		
		$('#btupload').click(function() {
            $('#uploadModal').fineUploader('uploadStoredFiles');
        });

	}
	/*--分享--*/
   $(".fileShare[data-toggle='modal']").click(function(){
			var target = $(this).attr('data-target');
			var url = $(this).attr('href');
			$(target).load(url,function(){ SearchUser() });
	});

   /*--上传文件--*/
   
   
	function SearchUser(){
		$('#search_user').typeahead({
				source: function(q, process){
				return $.get('../data/lookuser.php', {q: q}, function(response) {
					var data = new Array;
					for(var i in response) {
						data.push(response[i]['id'] +"#"+ response[i]['name'] +"#"+ response[i]['img'] +"#"+ response[i]['loc']);
					}
					return process(data);
				});
			    },
				highlighter: function(item) {
					var parts = item.split('#'),
					html = '<div class="typeahead">';
					html += '<div class="pull-left"><img src="../images/photo/'+parts[2]+'" width="32" height="32" class="img-rounded"></div>';
					html += '<div class="user-media">';
					html += '<div>'+parts[1]+'</div>';
					html += '<div>'+parts[3]+'</div>';
					html += '</div>';
					html += '<div class="clear"></div>';
					html += '</div>';
					return html;
				},
				updater: function(item) {
					var parts = item.split('#');
					return parts[1];
				}
		   });
	}
	
	  /*--分享选项卡--*/
      $('body').on("click","#shareTab a", function(e){
              e.preventDefault();
             $(this).tab('show');
        })	
		
		
	 /* 表格
	 -------------------------------*/
     var oTable;
    $("#example tbody tr").hover( function(e) {
        if ( $(this).hasClass('row_selected')) {
            $(this).removeClass('row_selected');
        }
        else {
            oTable.$('tr.row_selected').removeClass('row_selected');
            $(this).addClass('row_selected');
        }
    });

    //删除方法
    $('#delete').click( function() {
        var anSelected = fnGetSelected( oTable );
        if ( anSelected.length !== 0 ) {
            oTable.fnDeleteRow( anSelected[0] );
        }
    });
	
	
	 oTable = $('#example').dataTable({ "sPaginationType": "full_numbers"});   
	
	function fnGetSelected( oTableLocal ){ return oTableLocal.$('tr.row_selected');}
  });   
</script>
</body>
</html>