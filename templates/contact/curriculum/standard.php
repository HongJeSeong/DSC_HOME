<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php'; // this is common library
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=1182, initial-scale=1">
	<title>컴퓨터정보통신공학과</title>
	<link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/default.css">
	<link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/header.css">
	<link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/side.css">
	<link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/curriculum.css">

	<style>

		.main-container{
			position:absolute;
			background-color: #EFEEED;
			width: 1182px;
			height : 1220px; //720
			margin-left:-591px;
			top:124px;
			left:50%;
		}

		.footer{
			position:absolute;
			background-color: #EFEEED;
			width: 1182px;
			height : 124px;  //124
			margin-left:-591px;
			left:50%;
			top:1344px;
		}

	</style>
</head>
<body>

<!-- End Of Footer -->
<?Header::render();?>
<!-- START Content-->

<div class="main-container">
	<div class="curriculum-content" >
		<div class="main_text">
			<h3>공학인증 졸업기준</h3>
			<p style="margin-left: 200px"><strong><font class="style6" size ="3" >컴퓨터정보통신공학심화프로그램 졸업요건</font></strong></p><br>
			<img style="margin-left: 100px" src="../../assets/files/standard.png"width="500" height="auto"/>
			<table style="" bordercolor="#000000" cellpadding="10" cellspacing="0" class="mab30">
				<tbody>
				<tr>
					<th align="center"> 외국어 </th>
					<td> 가. 컴퓨터정보통신공학 프로그램에 속한 자는 “과학기술대학 공학교육인증과정 이수내규 제 10조(영어(외국어) 관련 요건)에 제시된 외국어 공인시험 중 하나를 응시하고, 유효기간 내의 성적표를 졸업사정 전까지 제출하여야 한다.<br> 
						나. 2012년 입학생까지는 시험별 인정 최저점수가 없으므로 점수에 무관하게 유효기간 내의 성적표를 제출하면 영어(외국어) 졸업요건을 만족한 것으로 인정한다.<br> 
						다. 2013년도 이후 입학생 중 과학기술대학에 속한 자는 공인영어능력시험평가에서 TOEIC 600점(또는 이에 상응하는 TOEFL, TEPS, TOEIC Speaking, OPIc 등의 점수)이상을 취득하고, 성적표를 제출하여야 한다.<br> 
						라. 영어(외국어) 관련 요건을 충족시키지 못한 자, 혹은 편입생의 경우에는는 교과목 이수를 통하여 졸업요건을 만족한 것으로 인정한다 (과학기술대학 공학교육인증과정 이수내규 제 10조(영어(외국어) 관련 요건)참고)
					</td>
				</tr>
				<tr>
					<th align="left" colspan="2"><br> * TOEIC 600점에 상응하는 공인 어학시험과 평가 점수 (아래점수는 공식기관의 개정 발표에 따라 변경될 수 있음)<br>
						<table>
							<tbody><tr>
								<td>토익</td>
								<td>탭스</td>
								<td>토플(iBT)</td>
								<td>토익-스피킹</td>
								<td>OPIc</td>
								<td>탭스-스피킹</td>
								<td>HSK</td>
								<td>JPT</td>
							</tr>
							<tr>
								<td>600</td>
								<td>482</td>
								<td>69</td>
								<td>110</td>
								<td>IM1</td>
								<td>43</td>
								<td>4급<br>(단, 210 이상)</td>
								<td>600</td>
							</tr>
							</tbody></table>
						<br>** 공인 어학 점수의 대체 방법으로 아래 사항 중 하나를 만족할 경우 어학 졸업요건을 만족한 것으로 인정함.단 편입생의경우 아래 외국어 과목들 중 1개 과목을 C0이상 취득할 경우 졸업요건을 만족한 것으로 인정한다.<br>  - 대체방법 1: ‘실용영어초급’ 및 ‘실용영어중급’ 이수 (모두 C0 학점 이상)<br>  - 대체방법 2: ‘초급중국어(1)’ 및 ‘초급중국어(2)’ 이수 (모두 C0 학점 이상)<br>  - 대체방법 3: ‘초급일본어(1)’ 및 ‘초급일본어(2)’ 이수 (모두 C0 학점 이상)<br></th>
				</tr>

				</tbody>
			</table>

		</div>

	</div>
	<?Side::render('curriculum');?>
</div>
<!-- End Of Content -->



<!-- START Footer-->
<? Footer::render(); ?>

<script src="<?echo HOME_PATH?>/assets/vendor/jquery-1.11.3.min.js"></script>
<script src="<?echo HOME_PATH?>/assets/js/header.js"></script>
<script>
	$("#side-menu-item-e").addClass("hover");
</script>
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
