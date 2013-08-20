<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<title>文辑-研发埠|yanfabu.com-研发创新互动平台</title>
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
          <div class="title-header channel-header">
            <h2 class="title">分享</h2>
               <?php include '../library/library_menu.php'; ?>
          </div>
          <div class="row-fluid">
          <!--_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/page-content_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/-->
              <div class="page-wrapper min-wrap">
                  <a href="#" class="btn"><span class="icon-reply"></span>取消分享</a>
                  <div class="box top15">
                  <div class="box-content nopadding">
					<table id="example" cellpadding="0" cellspacing="0" border="0" class="table-dt table-striped-dt table-bordered-dt dataTable" >
						<thead>
							<tr>
								<th>选择</th>
								<th>名称</th>
								<th>用户评价</th>
                                <th>分享时间</th>
                                <th>收藏量</th>
                                <th>浏览</th>
                                <th>下载数</th>
							</tr>
						</thead>
						<tbody>
							<tr class="gradeX">
								<td><input type="checkbox" name="collect_sel"></td>
								<td><span class="ui-icon icon-answer"></span>SMA薄弱环节对复合材料圆管耐撞性影响的试验研究</td>
								<td class="center"><span class="stars-rating rater2"></span></td>
                                <td class="center">2012-11-30 15:00</td>
                                <td class="center">12</td>
                                <td class="center">31</td>
                                <td class="center">15</td>
							</tr>
							<tr class="gradeX">
								<td><input type="checkbox" name="collect_sel"></td>
								<td><span class="ui-icon icon-answer"></span>SMA薄弱环节对复合材料圆管耐撞性影响的试验研究</td>
								<td class="center"><span class="stars-rating rater2"></span></td>
                                <td class="center">2012-11-30 15:00</td>
                                <td class="center">12</td>
                                <td class="center">31</td>
                                <td class="center">15</td>
							</tr>
							<tr class="gradeX">
								<td><input type="checkbox" name="collect_sel"></td>
								<td><span class="ui-icon icon-answer"></span>SMA薄弱环节对复合材料圆管耐撞性影响的试验研究</td>
								<td class="center"><span class="stars-rating rater2"></span></td>
                                <td class="center">2012-11-30 15:00</td>
                                <td class="center">12</td>
                                <td class="center">31</td>
                                <td class="center">15</td>
							</tr>
							<tr class="gradeX">
								<td><input type="checkbox" name="collect_sel"></td>
								<td><span class="ui-icon icon-answer"></span>SMA薄弱环节对复合材料圆管耐撞性影响的试验研究</td>
								<td class="center"><span class="stars-rating rater2"></span></td>
                                <td class="center">2012-11-30 15:00</td>
                                <td class="center">12</td>
                                <td class="center">31</td>
                                <td class="center">15</td>
							</tr>
							
						</tbody>
						<tfoot>
							<tr>
								<th>选择</th>
								<th>名称</th>
								<th>用户评价</th>
                                <th>分享时间</th>
                                <th>收藏量</th>
                                <th>浏览</th>
                                <th>下载数</th>
							</tr>
						</tfoot>
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
<?php include '../library/loadJs.php'; ?>

<script type="text/javascript">
  
 require(['jquery','MyUI/all'], function ($) {
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
	 })
</script>

</body>
</html>