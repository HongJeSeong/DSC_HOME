<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';
 header("Location:/home/shut");

session_start();
function generate_state(){
$mt = microtime();
$rand = mt_rand();
$_SESSION["key"]=$mt;
$_SESSION["val"]=$rand;
return md5($mt*$rand);
}
$state = generate_state();
$_SESSION["state"]=$state;

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
    <link rel="stylesheet" type="text/css" href="/home/assets/css/login.css">
	
</head>
<body>
<?php Header::render(); ?>
<!-- End Of Footer -->

<!-- START Content-->
<form id="loginform" action="./main.php" name="signin" method="post">
<div class="main-container">
	<div class="signin-content">
		<table border="0" cellpadding="0" cellspacing="0" style="width:380px;margin-left:300px;">
	        <tr style="height:50px;">
	            <td>
	                <div class="contact-item">
	                    <div class="title">학술제 투표 로그인</div>
	                    <div class="bar"></div>
	                </div>
	            </td>
	        </tr>
			<tr style="height:100px;">
	           <td>
	           		<table border="0" cellpadding="0" cellspacing="0" class="signin-table">
	           			<tr>
		           			<td class="title">아이디</td>
		           			<td class="formData"><center><input type="text" id="idform" name="id" required="required"/></center></td>
		           			<td class="description" rowspan="2" >
			           			<input type="submit" class="btn_login"  value="로그인" />
		           			</td>
	           			</tr>
	           			<tr>
		           			<td class="title">비밀번호</td>
		           			<td class="formData"><center><input type="password" id="passwordform" name="password" required="required" /></center></td>
	           			</tr>
	           		</table>
	           </td>
			</tr>
	   </table>
	<div style="margin:10px auto;width:100px;background-color:#3293d3;padding:15px;"><a href="/home/templates/vote/pollresult.php"style="color:#FFFFFF">투표 결과 보기</a></div>
	<h1 style="text-align:center;">투표는 1번 뿐입니다.<br/>종합설계 목록의 제목을 클릭하시면 각 소개를 볼 수 있습니다.</br>투표 선택은 [4개] 선택입니다.</h1>
	</div>
       <!-- End Of Content -->
</div>
</form>
<!-- START Footer-->
<?php Footer::render(); ?>

<script src="/home/assets/vendor/jquery-1.11.3.min.js"></script>
<script src="/home/assets/js/header.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/js/bootstrap.min.js"></script>
<script src="javascript/jsbn.js"></script>
<script src="javascript/jsbn2.js"></script>
<script src="javascript/prng4.js"></script>
<script src="javascript/rng.js"></script>
<script src="javascript/rsa.js"></script>
<script src="javascript/rsa2.js"></script>
<!-- End Of Footer-->
</body>
</html>
