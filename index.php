<?php /**
 * 홈페이지 첫 화면
 @package Index.php
 @filesource
 @copyright 2015 Hongik University Computer Information Communication
 @version [ 1.0.0 ]
 @editor AnHyeonSik   ok168@naver.com
 @editor HongJeSeong  howl78@naver.com
 @editor LeeJaeJin    opiximeo@gmail.com
 */
class index {

}

include_once $_SERVER['DOCUMENT_ROOT'] . '/home/library/common.php';

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=1182, initial-scale=1">
	<title>컴퓨터정보통신공학과</title>
	<link rel="stylesheet" type="text/css" href="assets/css/default.css">
	<link rel="stylesheet" type="text/css" href="assets/css/header.css">
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css?ver=2">
	<link rel="stylesheet" type="text/css" href="assets/css/coin-slider-styles.css">

</style>
<!--
<script type="text/javascript">
window.onload =function () {
 window.open("pop2.html",  "popupNo1", "width=522, height=696");
}
</script>
-->
</head>
<body>
	<?  Header::render(); ?>
<div class="main-container">
<div class="top-main">
<table>
	<tr><td>
	<div id = 'coin-slider'>
	        <a href="">
                <img src="templates/community/upload/world_IT_2018.jpg" style="width: 600px; height: 400px;">
                <span>
			WITC(world_IT_2018) Best Paper Award 수상
                </span>
                </a>

		<a href="">
		<img src="templates/community/upload/SIM1.png" style="width: 600px; height: 400px;">
		<span>
			국제학술대회(ICACT 2018) Outstanding Paper Paper Award 수상
		</span>
		</a>
		<a href="">
		<img src="templates/community/upload/SIM2.png" style="width: 600px; height: 400px;">
		<span>
			국제학술대회(ICGHIT 2018) Best Paper Award 수상
		</span>
		</a>
		<a href="">
		<img src="templates/community/upload/Robert.png" style="width: 600px; height: 400px;">
		<span>
			4차 산업혁명 시대, SW품질이 중요하다
		</span>
		</a>
		<a href="">
		<img src="templates/community/upload/ICT.png" style="width: 600px; height: 400px;">
		<span>
			2017년 (사)ICT플랫폼학회 추계학술대회 우수논문상 수상
		</span>
		</a>
		<a href="">
		<img src="templates/community/upload/cic-sejong.png" style="width: 600px; height: 400px;">
		<span>
			세종시-컴퓨터정보통신공학과 정보보호 전문인력 양성 업무협약
		</span>
		</a>
		
	</div>
	</td>
	<td>
	<div style="width: 400">
	<table class="btnview" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td ><div id="button02"><a href="http://cic.hongik.ac.kr/home/templates/members/professor" class="hrefBox"></a></div></td> <!--교수진-->
			<td><div id="button07"><a href="http://cic.hongik.ac.kr/home/templates/vote/login.php" class="hrefBox"></a></div></td> <!--투표 or img-- > <!-- block3 button7 -->
			<td><div id="button01"><a href="http://cic.hongik.ac.kr/home/templates/members/schoolmember" class="hrefBox"></a></div></td> <!--학생회-->
		</tr>
		
		<tr>
		<td><div class="block01"></div></td> <!--img1-->
		<td><div id="button04"></div></td><!--img2-->
		<td><div class="block02"></td><!--img3-->
		</tr>
		
		<tr>       <td ><div id="button03"><a href="http://cic.hongik.ac.kr/home/templates/curriculum/curriculum" class="hrefBox"></a></div></td> <!--교과과정-->
			<td><div id="button06"><a target="_blank" href="https://www.facebook.com/DSChongik/" class="hrefBox"></a></div></td> <!--투표함 or facebook-->
			<td><div id="button05"><a target="_blank" href="https://home.hongik.ac.kr/login/login.php" class="hrefBox"></a></div></td> <!--학생회-->
		</tr>
	</table>
	</div>
	</td>
	</tr>
</table>
</div>
<!--mainblock_end-->


<div class="bottom-main">
<table border="0" cellpadding="0" cellspacing="0">
<tr style="height:10%">
<td>
<div class="menu01">
<div id="menu01_1" class="menu-item" sub="menu01" selectIdx="1" >
<div class="title">공지사항</div>
<div class="bar"></div>
</div>
<div id="menu01_2" class="menu-item" sub="menu01" selectIdx="5" >
<div class="title">자료실</div>
<div class="bar"></div>
</div>
</div>
</td>
<td>
<div class="menu02">
<div id="menu02_1" class="menu-item" sub="menu02" selectIdx="3" >
<div class="title">취업게시판</div>
<div class="bar"></div>
</div>
<div id="menu02_2" class="menu-item" sub="menu02" selectIdx="4">
<div class="title">졸업게시판</div>
<div class="bar"></div>
</div>

</div>
</td>
<td>
<div class="menu03">
<div id="menu03_1" class="menu-item" sub="menu03" selectIdx="2">
<div class="title">학과소식</div>
<div class="bar"></div>
</div>
</div>
</td>
</tr>
<tr style="height:90%;background-color:white;">
<td><div id="menu01_table" style="display:none;height:100%;"></div></td>
<td><div id="menu02_table" style="display:none;height:100%;"></div></td>
<td><div id="menu03_table" style="display:none;height:100%;"></div></td>
</tr>
</table>
</div>
</div>
<? Footer::render(); ?>

<script src="assets/vendor/jquery-1.11.3.min.js"></script>
<script src="assets/vendor/coin-slider.min.js"></script>
<script src="assets/js/header.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/popup.js"></script>
<script src="assets/vendor/jquery.bxslider.js"></script>

<!-- End Of Footer-->

<script>
	$(document).ready(function() {
		$('#coin-slider').coinslider({width: 590,height:358,delay:2000});
	});
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92073995-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
