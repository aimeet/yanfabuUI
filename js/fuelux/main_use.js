/* -------------------------------------------
 *   main_use.js - v1.0 - 2013-05-30
 *   http://www.yanfabu.com  airfish  
 *
 * -------------------------------------------*/
!function ($) {
  
  $(function(){

  var $window = $(window);
   
  //Modal Ajax Plug-ins
  $("button[data-toggle='modal']").click(function(){
			var target  = $(this).attr('data-target'),
		        ListRel = $(this).attr('data-rel');
	   if(ListRel){
			 $.ajax({
               url : ListRel, 
               type: "GET",
				dataType: "html",
				beforeSend: function(){ 
			       $(target).show().html('<div class="load-pop"></div>'); },
                  success : function(data){ $(target).html(data);    }
			});	
	   }
    });	

/* 气泡 popover
---------------------------------*/
var timer,
    popover_parent;
	
var popOverSettings = { 
    placement: popover_placement,
    offset: 10,
    trigger: 'manual',
    delay: { show: 350, hide: 100 },
    html: true,
	content: function(){
            var div_id =  $(this).attr('id');
            return details_in_popup(div_id);
        }
}
	
function hidePopover(elem) { $(elem).popover('hide'); }

$('body').on('hover', 'a[data-toggle="popover"]',function(event){

    var self = $(this);
	
	if (event.type === 'mouseenter'){
		  clearTimeout(timer);
		  $('.popover').hide(); 
		  popover_parent = self;
		  $(self).popover(popOverSettings).popover('show');            
	}
	
   else {
      timer = setTimeout(function(){hidePopover(self)},300);                 
     }
});

//获取href
function details_in_popup(div_id){
    var thisUrl = $('#'+ div_id +'').attr('href');
    $.ajax({
        url: thisUrl,
        type: "GET",
        dataType: "html",
        success: function(data){ $('#div_'+ div_id +'').html(data);} });
        return '<div id="div_'+ div_id +'">Loading...</div>';
  }

//方向
function popover_placement(pop, el) {
	   if($(el).attr('data-placement')){ return $(el).attr('data-placement'); }
    	return 'top';
}

//延时关闭
$(document).on({ mouseenter: function(){ clearTimeout(timer); },
      mouseleave: function() {
        var self = this;
        timer = setTimeout(function(){hidePopover(popover_parent)},300); 
      }
    }, '.popover');

 $(document).ready(function(){	
		//初始化
	    if($('#mayKnow')[0]){ $('#mayKnow').loadPanel()}
		
     });
	
	});
 }(window.jQuery)