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
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/curriculum.css">
    <style>
	    .main-container{
	position:absolute;
	background-color: #EFEEED;
	width: 1182px;
	height : 876px;
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
	top:900px;
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
			<h3>학생회소개</h3>

			<div>
				<div id="memberpic" style="display: inline"><strong class="style8">[제 1대 학생회 사진] &nbsp;&nbsp;&nbsp;</strong></div>
				<div id="memberchart" style="display: inline"><strong class="style9">[제 1대 학생회 조직도]</strong></div>
			</div>
			<br>
			<div class="ur_img"><img id="sysimg" src="img/schoolmember(2018).jpg" width="690" height="auto" alt="학생회사진"></div>
		</div>
    </div>
    <?Side::render('members');?>
</div>
<!-- End Of Content -->



<!-- START Footer-->
<? Footer::render(); ?>

<script src="<?echo HOME_PATH?>/assets/vendor/jquery-1.11.3.min.js"></script>
<script src="<?echo HOME_PATH?>/assets/vendor/jquery.quickflip.min.js"></script>
<script src="<?echo HOME_PATH?>/assets/vendor/jquery.1.4.js"></script>
<script src="<?echo HOME_PATH?>/assets/js/header.js"></script>
<script>
	$("#side-menu-item-c").addClass("hover");

	$("#memberchart").bind("click", function() {
		$("#sysimg").attr("src","img/memberchart(2018).jpg");
		$("#memberchart>strong").attr("class","style8");
		$("#memberpic>strong").attr("class","style9");
	});
	$("#memberpic").bind("click", function() {
		$("#sysimg").attr("src","img/schoolmember(2018).jpg");
		$("#memberchart>strong").attr("class","style9");
		$("#memberpic>strong").attr("class","style8");
	});
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
