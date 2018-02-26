<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';
include_once dirname(__FILE__).'/../../config/db.php';
		if(!empty($_POST["voteID"])||!empty($_POST["votePW"])){
			$voteID = $_POST["voteID"];
			$votePW = $_POST["votePW"];
			$voteIDcheck = mysql_query("select * from votelogin where id='".$voteID."'");	
			$votePWcheck = mysql_query("select * from votelogin where pw='".$votePW."'");	
			$pollcheck = mysql_query("select * from vote_end where id='".$voteID."'");
			$f = "정보를 정확하게 입력하세요";
			$f2 = "이미 투표에 응모하셨습니다.";
			$test="잘됨";
			
			$check1 = mysql_num_rows($voteIDcheck);
			$check2 = mysql_num_rows($votePWcheck);
		    $check3 = mysql_num_rows($pollcheck);
			if($check1!=1||$check2!=1){
				echo "<script>window.alert('".$f."'); location.replace('./result')</script>";
			}else if($check3==1){
					echo "<script>window.alert('".$f2."'); location.replace('./result')</script>";
			}/*else{
				$tt=mysql_query("insert into vote_end (id) values ('".$voteID."')");
			}*/
			if(isset($_SESSION["vocode"])){
				session_destroy();	
			}
			
			//session_start();
			//$_SESSION['vocode']=$voteID;
		}else{
			echo "<script>location.replace('./result')</script>";
		}
?>
<DOCTYPE HTML>
<html> 
<head>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=1182, initial-scale=1">
    <title>소프트웨어융합학과</title>
    <!--<link rel="stylesheet" type="text/css" href="/home/assets/css/default.css">-->
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
<div class="main-container2">
	<div id ="polls_ciclist">
	<h3>학술제입상 투표</h3>
  	<form id='poll2' action="polling.php" method="post" accept-charset="utf-8">
	<div id="poll-container1">
	
		
			<p>
			<?php
			$voteID = $_POST["voteID"];
			$pollcheck = mysql_query("select * from vote_end where id='".$voteID."'");
			$f2 = "이미 투표에 응모하셨습니다.";
	
			$check3 = mysql_num_rows($pollcheck);
			if($check3==1){
					echo "<script>window.alert('".$f2."'); location.replace('./result')</script>";
			}
			else 
			{
				$q = "select * from cic_final_list";
			$result = mysql_query($q);
			
			while($row = mysql_fetch_array($result)){
				echo"
					
					<input type='radio' name='choice' value=".$row[0]." id='opt".$row[0]."' /><label for='opt".$row[0]."'>&nbsp;".$row[0].":".$row[1]."&nbsp;".$row[2]."</label><br />
					<br/>
					";
			}
			}
			?>
			</p>
	</div>
	<br/>
	<input type="hidden" name="voteID" value="<?=$voteID?>">
	<input class ="votesubmit" type="submit" value="투표하기" />
	</form>
	
</div>

</div>
<div id="send"></div>
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
	if(write.voteID.value ==""||write.votePW.value==""){
		alert("정보를 입력하세요");
		write.voteID.focus();
		write.votePW.focus();
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
