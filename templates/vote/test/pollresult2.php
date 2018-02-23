<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';
include_once dirname(__FILE__).'/../../config/db.php';
	$q = "select * from cic_final_list";
	$r1 = mysql_query($q);
	$q1 = "select * from vote_end";
	$r2 = mysql_query($q1);
	$vote_num = mysql_num_rows($r2);
	
	
?>
<!DOCTYPE HTML>
<html> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1182, initial-scale=1">
    <title>컴퓨터정보통신공학과</title>
    <link rel="stylesheet" type="text/css" href="/home/assets/css/default.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/contact.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/result.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/polls.css">
</head>
<body>
<!-- End Of Footer -->
<?php Header::render();?>
<!-- START Content-->
<div class="main-container">
	<h3 style="margin-left: 300px;">학술제입상 투표 결과</h3>
  <div id="polls_cic_result">
  	<table class ="cic_result_table">
		<?php
			while($cic_row = mysql_fetch_array($r1)){
				$vote_percent = 100*($cic_row[3]/$vote_num);
				$vote_per = 300*($cic_row[3]/$vote_num);
				echo "<tr>
			<td class ='polldescripteioncell'>".$cic_row[1].",&nbsp".$cic_row[2]." 교수님</td>
			<td class ='pollbarcell'>
				<div class='pollbar' style = 'width:".(int)$vote_per."px'></div>
			</td>
			<td class ='pollcountcell'>".$cic_row[3]."표   ".(int)$vote_percent."%</td>	
		</tr>";
			}
			?>
  	</table>
  	
</div>
<p style="margin-left: 300px;">Total votes: <?php echo "$vote_num";?></p>
<input type="button" style="margin-left: 500px;" class ="votesubmit" value="학과이름 투표결과 보기" onclick="location.href='http://cic.hongik.ac.kr/home/templates/vote/pollresult.php'";>
</div>
<!-- End Of Content -->

<!-- START Footer-->
<div class="footer">
    <div class="content">
        <div class="bar"></div>
        <div class="logo"></div>
        <div class="menu">
           
        </div>
    </div>
</div>

<script src="/home/assets/vendor/jquery-1.11.3.min.js"></script>
<script src="/home/assets/js/header.js"></script>
<script type="text/javascript" src="http://openapi.map.naver.com/openapi/naverMap.naver?ver=2.0&key=756db721b31636565a3f43ae98ffbb46"></script>
<script src="/home/assets/js/contact.js"></script>
<!-- End Of Footer-->

<script>
function write_ok(){
	if(write.votecode.value ==""){
		alert("코드를 입력하세요");
		write.votecode.focus();
		return false;
	}else{
		document.write.submit();
	}
}

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92073995-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
			
