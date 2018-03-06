<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php'; // this is common library
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1182, initial-scale=1">
    <title>소프트웨어융합학과</title>
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/default.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/side.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/intro.css">
    
</head>
<body>

<!-- End Of Footer -->
<?Header::render();?>
<!-- START Content-->

<div class="main-container">
    <div class="intro-content" >
    	<div class="main_text">
		 <h3>학과소개</h3>
	<p class="mr20 pdb font13 tline2 style6">&nbsp;&nbsp;홍익대학교 과학기술대학 소프트웨어융합학과는 1989년 조치원 캠퍼스 설립과 함께 전자전산기공학과로 출발하였다. 1995년 학부제 실시로 전기과와 통합하여 전자·전기·컴퓨터공학부로 개편되면서 전자, 전기, 컴퓨터정보통신의 3개 전공으로 운영되어왔다. 2004년 공학교육인증제가 시행되면서 전공의 효율적인 운영을 위하여 2005학년도부터 전자·전기공학과와 컴퓨터정보통신공학과로 분리하였고,  전자공학 프로그램, 전기공학 프로그램, 컴퓨터정보통신공학 프로그램은 2005년부터 한국공학교육인증원(ABEEK)으로부터  공학교육 인증을 받았으며, 2007년, 2009년, 2011년, 2013년에 중간방문평가가 실시되었다.  컴퓨터정보통신공학 프로그램은 컴퓨터 및 정보통신 분야의 기술발전 추세에 따른 시대적 요구에 부응하여, 과목신설과 이수체계 재정립, 설계과목 강화, 신임교수 충원, 체계적인 학생지도 등 프로그램의 순환형 자율개선시스템 구축을 통하여 이 분야의 준비된 전문 인력의 양성 및 배출을 위해서 노력해 오고 있다. 
<br>&nbsp;&nbsp;홍익대학교 과학기술대학 소프트웨어융합학과는 공학교육인증 프로그램과 일반 프로그램을 함께 운영한다.<b> 2016학년도 입학생부터는 단일 인증제가 적용된다. 
<br>&nbsp;&nbsp;<b>본 학과는 2018년부터 소프트웨어융합학과(Department of Software and Communications Engineering)로 학과명칭이 변경되었으며,  4차 산업혁명의 주도할 “실무형 인재, 융합형 인재, 창의적 인재 및 글로벌 인재” 양성을 교육목표로 한다. </p>


	</div>
    </div>
    	<?Side::render('intro');?>
</div>
<!-- End Of Content -->



<!-- START Footer-->
<? Footer::render(); ?>

<script src="<?echo HOME_PATH?>/assets/vendor/jquery-1.11.3.min.js"></script>
<script src="<?echo HOME_PATH?>/assets/js/header.js"></script>
<script>
	$("#side-menu-item-c").addClass("hover");
</script>
<!-- End Of Footer-->
</body>
</html>
