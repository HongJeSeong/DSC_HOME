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
   <p><strong class="style9">안녕하세요 ?</br>홍익대학교 소프트웨어융합학과 홈페이지 방문을 진심으로 환영합니다. </strong></p>
        <div style="width:100%;"><img src="../../assets/img/intro/Ahn_B_K.jpg" width="30%" height="30%" alt="사진"></div>
                <div class="ur_text">
                        <p class="HStyle0">&nbsp;&nbsp;사물 인터넷(Internet of Things: IoT), 인공지능(Artificial Intelligence: AI), 빅데이터(Big Data) 기술들이 타 산업과 융합되는 제 4차 산업혁명은 미래의 삶을 혁신적으로 변화시킬 것으로 예측되고 있습니다.  본 소프트웨어융합학과(Department of Software and Communications Engineering)에서는 이러한 혁명적인 산업 변화를 주도할 “<strong class="style9">실무형 인재, 융합형 인재, 창의적 인재 및 글로벌 인재</strong>” 양성을 교육목표로 하고 있습니다. </p> 

<p calss="HStyle0">구체적으로 미래 초연결 사회의 기술 요소의 근간이 되는 소프트웨어와 네트워크 분야의 전문 지식과 응용 능력을 학생들에게 교육하여 양 분야의  전문 지식을 융합하여 활용할 수 있는 실무형 인재 양성교육, 이론적인 교육과 더불어 현실적이고 산업계 요구를 수용하는 교육을 통하여 전공 

분야의 전문성을 바탕으로 자신의 발전은 물론 타 산업과의 창의적 융합을 통해 국가와 사회에 공헌할 수 있는 융합형 인재 양성교육,  Open Problem 위주의 토론과 실습 위주의 수업을 통해 사용자의 근본적인 need를 이해하고 이를 해결하는 창의적인 해결책을 제시하는 창의적 인재 양성교

육에 집중하고 있습니다. 특히 다양한 전공수업을 영어로 개설하여, 학생들이 영어로 의사소통하며 문제를 해결할 수 있는 능력을 배양하고, 해외 유수의 대학들과의 교류 협력, 해외 인턴, 교환 학생 제도 등을 통하여 국제적 기술변화를 인지하고 다양한 해외 기술을 적극적으로 습득 활용

할 수 있는 글로벌 인재 양성교육 진행하고 있습니다.</p>

<p calss="HStyle0">본 학과에서는 이러한 교육과 인재양성을 효율적으로 지원하기 위한 소프트웨어, 네트워크, 통신 및 신호처리 분야의 전문교과목들(이론, 실험, 설계)을 개설하고 있으며, 졸업생들은 다양한 ICT 분야(소프트웨어, 통신 및 네트워크, 보안 등)의 산업체에 진출하거나, 학문연구를 위해 대학원 

진학을 활발하게 하고 있습니다. 그리고 <strong class="style4"> 본 학과는 한국공학교육인증원(ABEEK)의 인증프로그램 심화과정</strong>을 운영하고 있습니다. 본 학과 교수님을 비롯한 모든 구성원들은 학생들이 전공실력과 인성을 함께 겸비한 엔지니어가 될 수 있도록 최선을 다하겠습니다. </p>

<p calss="HStyle0">감사 합니다. </p>

            <p class="font_right">소프트웨어융합학과  학과장  <span class="color1 font14">안 병 구</span></p>
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
