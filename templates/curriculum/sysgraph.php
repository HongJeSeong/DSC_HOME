<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php'; // this is common library
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1682, initial-scale=1">
    <title>소프트웨어융합학과</title>
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/default.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/side.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/curriculum.css">
	<style>
                        .main-container {
                                position: absolute;
                                background-color: #EFEEED;
                                width: 1182px;
                                height: 1219px;
                                margin-left: -591px;
                                top: 124px;
                                left: 50%;
                        }

                        .footer {
                                position: absolute;
                                background-color: #EFEEED;
                                width: 1182px;
                                height: 124px;
                                margin-left: -591px;
                                left: 50%;
                                top: 1219px;
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
			<h3>이수체계도</h3>
		<p><strong class="style9"><a href="../../assets/files/systemgraph.pptx">[이수체계표 다운로드]</a></strong></p>
		<p><strong class="style9"><a href="../../assets/files/rules_2017.hwp">[프로그램 이수내규 다운로드]</a></strong></p>
		<div>
	<!--	<div id="underimg" style="display: inline"><strong class="style8">선후수관계 이수체계도 &nbsp;&nbsp;&nbsp;</strong></div>
		<div id="upperimg" style="display: inline"><strong class="style9">학과 추천 이수체계도</strong></div>
		</div>-->
	
		<br>
		<div class="underimg"><img id="sysimg" src="../../assets/files/systemgraph_2018.JPG" width="690" height="auto" alt="이수체계도"></div>
		<div class="upperimg"><img id="sysimg" src="../../assets/files/rules_2018.JPG" width="690" height="auto">
</div>
		<h3>학과추천이수체계도는 선후수관계는 아니나, 교과목을 이해하기 위해서 들으면 좋은 과목을 추천한 것입니다.</h3>
       <!-- <div class="ur_img"><img id="sysimg" src="../../assets/files/systemgraph2_2017.png" width="690" height="auto" alt="이수체계도"></div>
	<div class="ur_img"><img id="sysimg" src="../../assets/files/systemgraph_2017.png" width="690" height="auto">
</div>-->
	</div>
    </div>
</div>
  <?Side::render('curriculum');?>
<!-- End Of Content -->



<!-- START Footer-->
<? Footer::render(); ?>

<script src="<?echo HOME_PATH?>/assets/vendor/jquery-1.11.3.min.js"></script>
<script src="<?echo HOME_PATH?>/assets/js/header.js"></script>
<script>
	$("#side-menu-item-f").addClass("hover");
</script>
<!-- End Of Footer-->
</body>
</html>
