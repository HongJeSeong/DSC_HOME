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
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/intro.css">
    <style>

.main-container{
	position:absolute;
	background-color: #EFEEED;
	width: 1182px;
	height : 2070px;
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
	top:2094px;
}
	    
    </style>
</head>
<body>

<!-- End Of Footer -->
<?Header::render();?>
<!-- START Content-->

<div class="main-container">
    <div class="intro-content">
    	<div class="main_text">
        <h3>취업분야 및 취업률</h3>
	        <p class="pd10 mr20"><img src="../../assets/img/intro/statistics.png"></p>

    
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
	$("#side-menu-item-f").addClass("hover");
</script>
<!-- End Of Footer-->
</body>
</html>
