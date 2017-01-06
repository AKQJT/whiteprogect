$(function(){
	$(".topmenu a").bind({
		"mouseover" : function(){
			text=$(this).text();
			color=$(this).attr("data-color");
			body=$(this).attr("data-body");
		    $(".shapka").css({"background":color});
			$(".empty").text(body);
		},"mouseout" : function(){
			$(".shapka").css({"background":"url(media/img/fon.jpg)"});
		}
	})                  
	
var fx = {
	"initModal":function(){
		if($(".modalwindow").length==0){
			$("<div>").attr("id","jquery-overlay")
			          .fadeIn(2000)
					  .appendTo("body");
			return $("<div>").addClass("modalwindow").appendTo("body");
		} else{
			return $(".modalwindow");
		}
	}
}
	
	
$('.link').bind("click", function(e){
	e.preventDefault();
	var data=$(this).attr("data-id");
	modal=fx.initModal();
	
$("<a>").attr("href","#").addClass("model-close-btn")
                         .html("&times;")
						 .click(function(e){
	e.preventDefault();
	modal.remove();
	$("#jquery-overlay").fadeOut(2000,function(){
		$(this).remove();
	});
}).appendTo(modal);
	
	$.ajax({
		type:"Post",
		url:"ajax.php",
		data:"id="+data,
		success:function(data){
			modal.append(data);
		},
		error:function(msg){
			modal.append(msg);
		}
	});

});

});                     //конец кода jquery

