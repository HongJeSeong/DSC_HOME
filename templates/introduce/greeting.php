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
     <style>

.main-container{
	position:absolute;
	background-color: #EFEEED;
	width: 1182px;
	height : 820px;
	margin-left:-591px;
	top:124px;
	left:50%;
}	

.footer{
	position:absolute;
	background-color: #EFEEED;
	width: 1182px;
	height : 124px;
	margin-left:-591px;
	left:50%;
	top:944px;
}
	    
    </style>
</head>
<body>

<!-- End Of Footer -->
<?Header::render();?>
<!-- START Content-->

<div class="main-container">
    <div class="greeting-content">
		<div class="main_text">
			<h3>학과장 인사말</h3>
   <p><strong class="style5">안녕하세요 ?</br>홍익대학교 소프트웨어융합학과 홈페이지 방문을 진심으로 환영합니다. </strong></p>
        <div style="width:100%;"><img src="../../assets/img/intro/robert_kim.jpg" width="30%" height="30%" alt="사진"></div>
                <div class="ur_text">
                        <p class="HStyle0">&nbsp;&nbsp;앞으로의 4차 산업혁명에 다양한 VR/AR, 딥 런닝, 자율주행, 블록체인, 빅 데이터 등등 다양한 소프트웨어들이 우리의 삶을 변화시킬 것으로 예측되고 있습니다. (구)컴퓨터정보통신공학과를 소프트웨어융합학과(Department of Software and Communications Engineering)로 변화하면서 이러한 혁명적인 산업변화를 주도할 "<strong class="style9">쉽게 다양한 분야에 적응할 SW 실무 위주 인재</strong>"양성을 교육 목표로 하고 있습니다. </p> 

<p class="HStyle0">미래 초연결 사회의 기술 요소의 근간이 되는 소프트웨어/네트워크/보안/데이터 사이언스 분야의 전문 지식과 응용 능력을 학생들에게 교육하여 타 산업과의 융합을 통해 국가와 사회에 공헌할 수 있는 융합형 인재 양성교육으로 집중하겠습니다.</p>

<p class="HStyle0"> 특히 1) 4년 동안 소프트웨어 중심으로 <strong class="style4">1만 LOC(Line of Code)를 프로그래밍</strong>하고, 2) 쉽게 영어로 의사소통 하며 문제를 해결할 수 있는 능력을 배양하고, 3) 해외 유수의 대학들과의 교류 협력, 해외 인턴, 교환 학생 제도 등을 통하여 국제적 기술변화를 인지하고 다양한 해외 기술을 적극적으로 습득 활용 할 수 있는 글로벌 인재 양성 교육을 진행하고 있습니다.</p>

<p class="Hstyle0">현재 많은 외국인 대학원들의 참여 프로젝트들에 학부생들을 참여 시켜, 협력 연구 및 의사소통을 하도록 하고 있습니다. </p>

<p class="HStyle0">우리 학과에서는 졸업생들은 다양한 ICT분야(소프트웨어, 통신 및 네트워크, 보안 등)의 산업체에 진출하거나, 학문연구를 위해 대학원 진학을 활발하게 하고 있습니다.  </p>
<p class="Hstyle0">우리 학과 교수님들을 비롯한 모든 구성원들은 학생들이 전공실력과 인성을 함께 겸비한 엔지니어가 되도록 최선을 다하겠습니다. </p>

            <p class="font_right">소프트웨어융합학과  학과장  <span class="color1 font14">김 영 철</span></p>
                </div>
 
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
	$("#side-menu-item-a").addClass("hover");
</script>
<!-- End Of Footer-->
</body>
</html>
