<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';

?>
<!doctype html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=1000, initial-scale=0.7">

  <title>학술제투표(로그인)</title>
    <link rel="stylesheet" type="text/css" href="/home/assets/css/default.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/contact.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/login.css">

  <script type="text/javascript" src="https://static.nid.naver.com/js/naverLogin_implicit-1.0.3.js" charset="utf-8"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript">
/*현재 시간 출력 함수*/
function printTime(){
	var time = document.getElementById("time");
	var now = new Date();
	time.innerHTML=
		now.getHours() +":"+
		now.getMinutes();
		setTimeout("printTime()",1000);
}
window.onload = function(){
printTime();
}
</script>

<style>
.main-container{
	position:absolute;
	background-color: #EFEEED;
	width: 1182px;
	height : 760px;
	margin-left:-591px;
	top:124px;
	left:50%;
}
.footer{
	position:absolute;
	background-color: #EFEEED;
	width: 1182px;
	height : 100px;
	margin-left:-591px;
	left:50%;
	top:880px;
}
/*마우스 오버 기능*/
div#naver_id_login,img#voteView {
    -webkit-transform:scale(1);
    -moz-transform:scale(1);
    -ms-transform:scale(1); 
    -o-transform:scale(1);  
    transform:scale(1);
    -webkit-transition:.3s;
    -moz-transition:.3s;
    -ms-transition:.3s;
    -o-transition:.3s;
    transition:.3s;
}
div#naver_id_login:hover,img#voteView:hover {
    -webkit-transform:scale(1.2);
    -moz-transform:scale(1.2);
    -ms-transform:scale(1.2);   
    -o-transform:scale(1.2);
    transform:scale(1.2);
}
#naver_id_login{

}
</style>
</head>
<body>
<?php Header::render();?>
  <!-- 네이버아이디로로그인 버튼 노출 영역 -->	  
<div class="main-container">
   <div style="margin-left:425px;">
	<div id="time" style="position:relative;margin-left:143px;top:188px;"></div>
     <div id="naver_id_login" style="position:relative;top:355px;left:60px; "></div>
  <!-- 네이버아이디로로그인 버튼 노출 영역 -->
  <script type="text/javascript">
  	var naver_id_login = new naver_id_login("OY8jXpIwOgpAXqgWZyZ9", "http://cic.hongik.ac.kr/home/templates/vote/naver/call.php");
  	var state = naver_id_login.getUniqState();
  	naver_id_login.setButton("green", 30,46.3);
  //	naver_id_login.setDomain("http://cic.hongik.ac.kr/home/templates/vote/login.php");
  	naver_id_login.setDomain("http://cic.hongik.ac.kr");
	naver_id_login.setState(state);
 	//naver_id_login.setPopup();
  	naver_id_login.init_naver_id_login();
  </script>
	<div><a href="/home/shut"><img id="voteView" src="/home/assets/img/vote_view2.png" style="position:relative;top:370px;left:60px;width:28.3%;"></img></a></div> 
	<img src="/home/assets/img/loginBack.png"></img>
		</div>
 <div> <img src="/home/assets/img/loginBackunder.png" style="margin-left:390px;"></img></div>


</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92073995-1', 'auto');
  ga('send', 'pageview');

</script>

</html>
<?php Footer::render(); ?>

