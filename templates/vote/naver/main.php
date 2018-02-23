<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';
include_once dirname(__FILE__).'/../../../config/db.php';

	$i="등록/로그인...OK";
        $l="로그인...OK";
        $a="이미 투표하셨습니다.";
        $f="비정상/로그인 필요...FAIL";

                 if(!empty($_POST["name"])&&!empty($_POST["id"])&&!empty($_POST["nickname"])&&!empty($_POST["gender"])&&!empty($_POST["age"])&&!empty($_POST["email"])&&!empty($_POST["birthday"])&&!empty($_POST["state"])){
			if($_SESSION["state"]!==md5($_SESSION["key"]*$_SESSION["val"])){
				session_destroy();
				 echo "<script>window.alert('".$f."'); location.replace('/home')</script>";
				}		
			$id=$_POST["id"];
			$nickname=$_POST["nickname"];
			$gender=$_POST["gender"];
			$age=$_POST["age"];
			$email=$_POST["email"];
			$birthday=$_POST["birthday"];
			$name=$_POST["name"];

 			$queryID="select id from login where id='".$id."'";
			$queryVote="select vote from login where id='".$id."'";

			$idCheck=mysql_query($queryID);
			$check1=mysql_num_rows($idCheck);
			
			if($check1==0){
			//후에 명단 비교 넣기
			$queryInsert="insert into login (id,nickname,age,gender,email,birthday,name) values ('".$id."','".$nickname."','".$age."','".$gender."','".$email."','".$birthday."','".$name."')";
			mysql_query($queryInsert);
			echo "<script>window.alert('".$i."');</script>";
			
			}else if($check1==1){
			 echo "<script>window.alert('".$l."');</script>";
			}
			$voteCheck=mysql_query($queryVote);
			$vote=mysql_fetch_array($voteCheck);
			if($vote['vote']==1){
			session_destroy();
			 echo "<script>window.alert('".$a."'); location.replace('/home')</script>";
			}
			$state2=$email;
			$_SESSION["state2"]=$state2;
                }else{
					session_destroy();
				echo "<script>window.alert('".$f."'); location.replace('/home')</script>";
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


                        <p>
                        <?
                        $queryList = "select * from cic_final_list";
                        $result = mysql_query($queryList);

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
	<input type="hidden" name="voteName" value="<?=$voteName?>">
        <input type="hidden" name="voteID" value="<?=$voteID?>">
	<input type ="hidden" name="state" value="<?=$_POST["state"]?>">
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
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92073995-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>

