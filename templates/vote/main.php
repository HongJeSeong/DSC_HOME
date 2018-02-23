<?
include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';
include_once dirname(__FILE__).'/../../../config/db.php';

	$l="계정 오류";
        $a="이미 투표하셨습니다.";
        $f="비정상/로그인 필요...FAIL";


if(empty($_POST["id"])||empty($_POST["password"])||$_SESSION["state"]!==md5($_SESSION["key"]*$_SESSION["val"])){
 session_destroy();
 echo "<script>window.alert('".$f."'); location.replace('/home')</script>";

}else {
$voteCheck=$_POST["id"];
$id=mysql_query("select passwd from login where id=".$voteCheck."");

if($id){
$voteRe=mysql_query("select id from vote_end where id=".$voteCheck."");
$check2=mysql_fetch_array($voteRe);
if($check2){
session_destroy();
        echo "<script>window.alert('".$a."'); location.replace('/home')</script>";

}
$check=mysql_fetch_array($id);
if($check[0]!=$_POST["password"]){
session_destroy();
         echo "<script>window.alert('".$l."'); location.replace('/home')</script>";
}
}else{
session_destroy();
         echo "<script>window.alert('".$l."'); location.replace('/home')</script>";
}

}


?>
<DOCTYPE HTML>
<html>
<head>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=1182, initial-scale=1">
    <title>학술제입상 투표</title>
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
<div class="main-container2">
        <div id ="polls_ciclist">
        <h3>학술제입상 투표</h3>
        <form id='poll2' action="polling.php" method="post" accept-charset="utf-8">
        <div id="poll-container1">
                        <?
			 $queryList = "select * from cic_final_list";
                         $result = mysql_query($queryList);
		$count = 1;
                    while($row = mysql_fetch_array($result)){
     echo"
	<script language='javascript'>
		 function showPopup".$count."() { window.open('./panel/".$count.".jpg', 'popup', 'width=400, height=300, left=100, top=50'); }
	</script>
	<input type='checkbox' name='case[]' value=".$row[0]." id='opt".$row[0]."'>&nbsp;<a onclick='showPopup".$count."()'>".$row[0].":".$row[1]."&nbsp;".$row[2]."</a><br />
                                        <br/>
                                        ";
		$count++;
                        }
                        
                        ?>
                       
        </div>
        <br/>
        <input class ="votesubmit" type="submit" value="투표하기" />
<? echo "<input type='hidden' name='voteID' value='".$_POST["id"]."'/>"; ?>
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
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92073995-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>

