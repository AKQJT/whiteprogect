 $(function() {
	 $.ajaxSetup({
		 url: "google.php",
		 type: "POST",
		 beforeSend: function(){
			 $("#empty133").html("<img src = 'media/img/loading.gif' >");
		 },
			 success:function(m){
				 $("#empty133").html(m);
			 	 },
		error:function(m){
					 $("#empty133").html(m);
				 }
	 });
	 $("#google_search").click(function(){
		 $.ajax();
	 });
 });
