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
	height : 746px;
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
	top:800px;
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
		<h3>조교 소개</h3>
		<div id="ur_text">
       	 
 			<p></p>
         	<table width="609" border="0" cellspacing="0" cellpadding="0" class="mab30">
              <tbody><tr>
                <td width="96" rowspan="4" style="border-left:1px solid #e5e5e5;"><img src="img/" width="99" height="115"></td>
                <td width="96"> 직책</td>
                <td height="30">학과조교</td>
              </tr>
              
              <tr>
                <td>이름</td>
                <td height="25">정주현</td>
              </tr>
              <tr>
                <td>근무처</td>
                <td height="25">D407, Tel : 044 - 860 - 2392</td>
              </tr>
              <tr>
                <td>이메일</td>
                <td height="12"><a href="mailto:sky1669@hongik.ac.kr">sky1669@hongik.ac.kr</a></td>
              </tr>
			  </tbody></table>

			  <table width="609" border="0" cellspacing="0" cellpadding="0" style="margin-bottom:365px;">
              <tbody><tr>
                <td width="96" rowspan="4" style="border-left:1px solid #e5e5e5;"><img src="img/Assistant_Parkeulyong.jpg" width="99" height="115"></td>
                <td width="96"> 직책</td>
                <td height="30">실습조교</td>
              </tr>
              
              <tr>
                <td>이름</td>
                <td height="25">박을용</td>
              </tr>
              <tr>
                <td>근무처</td>
                <td height="25">D308-1, Tel : 044 - 860 - 2393</td>
              </tr>
              <tr>
                <td>이메일</td>
                <td height="12"><a href="mailto:hatsukoi1307@hongik.ac.kr">hatsukoi1307@hongik.ac.kr</a></td>
              </tr>
			  </tbody></table>

		</div>
	</div>
    </div>
    <?Side::render('members');?>
</div>
<!-- End Of Content -->



<!-- START Footer-->
<? Footer::render(); ?>

<script src="<?echo HOME_PATH?>/assets/vendor/jquery-1.11.3.min.js"></script>
<script src="<?echo HOME_PATH?>/assets/js/header.js"></script>
<script>
	$("#side-menu-item-b").addClass("hover");
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
