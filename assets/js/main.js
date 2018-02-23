$("#menu01_1").addClass("hover");
$("#menu02_1").addClass("hover");
$("#menu03_1").addClass("hover");

$(".menu-item").click(function(){
	var className = $(this).attr("sub");
	var selectIdx = $(this).attr("selectIdx");
	$("."+className+" .menu-item").removeClass("hover");
	$(this).addClass("hover");	
	$("#"+className+"_table").fadeOut(300,function(){
		 $.ajax({
		  dataType: "json",
		  url: "./templates/main/bbs.php",
		  data: {select:selectIdx},
		  success : function(data){
			  var i,len;
			  var html = "<table style='width:100%;height:auto;padding:10px;' cellpadding='5'>";
				  for(i=0,len=data.length;i<len;i++){
					  var row = "<tr height=20>\
				  	<td style='width:75%;font-size:12px;text-align:left;'><a href=\"templates/community/bbs_more?select="+selectIdx+"&n="+data[i][4]+"\" style='color:black;'>"+data[i][0].substr(0,16)+"...</a></td>\
				  	<td style='width:25%;font-size:12px;'>"+data[i][1]+"."+data[i][2]+"."+data[i][3]+"</td>\
				  	</tr>";
				  	html+=row;
			  	}
			 
			  	html += "</table>";
			 	 $("#"+className+"_table").html(html);
			 	 $("#"+className+"_table").fadeIn(500);
			  }
		}); 
     });
});

$.ajax({
		  dataType: "json",
		  url: "./templates/main/bbs.php",
		  data: {select:1},
		  success : function(data){

			  var i,len;
			  var html = "<table style='width:100%;height:auto;padding:10px;' cellpadding='5'>";
				  for(i=0,len=data.length;i<len;i++){
					  var row = "<tr height=20>\
				  	<td style='width:75%;font-size:12px;text-align:left;'><a href=\"http://cic.hongik.ac.kr/home/templates/community/bbs_more?select=1&n="+data[i][4]+"\" style='color:black;'>"+data[i][0].substr(0,16)+"...</a></td>\
				  	<td style='width:25%;font-size:12px;'>"+data[i][1]+"."+data[i][2]+"."+data[i][3]+"</td>\
				  	</tr>";
				  	html+=row;
			  	}
			 
			  	html += "</table>";
			 	 $("#menu01_table").html(html);
 			 	 $("#menu01_table").fadeIn(200);
			  }
		}); 
		
$.ajax({
		  dataType: "json",
		  url: "./templates/main/bbs.php",
		  data: {select:3},
		  success : function(data){

			  var i,len;
			  var html = "<table style='width:100%;height:auto;padding:10px;' cellpadding='5'>";
				  for(i=0,len=data.length;i<len;i++){
					  var row = "<tr height=20>\
				  	<td style='width:75%;font-size:12px;text-align:left;'><a href=\"http://cic.hongik.ac.kr/home/templates/community/bbs_more?select=3&n="+data[i][4]+"\" style='color:black;'>"+data[i][0].substr(0,16)+"...</a></td>\
				  	<td style='width:25%;font-size:12px;'>"+data[i][1]+"."+data[i][2]+"."+data[i][3]+"</td>\
				  	</tr>";
				  	html+=row;
			  	}
			 
			  	html += "</table>";
			 	 $("#menu02_table").html(html);
			 	 $("#menu02_table").fadeIn(200);
			  }
		});

$.ajax({
		  dataType: "json",
		  url: "./templates/main/bbs.php",
		  data: {select:2},
		  success : function(data){

			  var i,len;
			  var html = "<table style='width:100%;height:auto;padding:10px;' cellpadding='5'>";
				  for(i=0,len=data.length;i<len;i++){
					  var row = "<tr height=20>\
				  	<td style='width:75%;font-size:12px;text-align:left;'><a href='templates/community/bbs_more?select=2&n="+data[i][4]+"' style='color:black;'>"+data[i][0].substr(0,16)+"...</a></td>\
				  	<td style='width:25%;font-size:12px;'>"+data[i][1]+"."+data[i][2]+"."+data[i][3]+"</td>\
				  	</tr>";
				  	html+=row;
			  	}
			 
			  	html += "</table>";
			 	 $("#menu03_table").html(html);
			 	 $("#menu03_table").fadeIn(200);
			  }
		});
		