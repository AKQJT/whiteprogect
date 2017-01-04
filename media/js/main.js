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
	
});                     //конец кода jquery