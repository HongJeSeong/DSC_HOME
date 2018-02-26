<?
ob_start("ob_gzhandler"); //페이지 압축
include_once("../../session.php"); 
include_once("../../CIC_lib.php");
$id = $_SESSION['session_id'];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>졸업게시판 :: 소프트웨어융합학과</title>
	<link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css" media="all" />
  	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<!--[IF IE]><link rel="stylesheet" href="./css/IEstyle.css" type="text/css" /><![ENDIF]-->
	<!--[IF IE 6]><link rel="stylesheet" href="./css/IE6.css" type="text/css" /><![ENDIF]-->
	<!--[IF IE 7]><link rel="stylesheet" href="./css/IE7.css" type="text/css" /><![ENDIF]-->

	<link type="text/css" href="css/jquery-ui-1.8.5.custom.css" rel="Stylesheet" />
	
	<!-- Include jQuery and UI -->
    <script type="text/javascript" src="js/jquery-ui-1.8.9.custom.min.js"></script>

		
	<!-- Include jQuery CoverFlow widget -->
	<link rel="stylesheet" type="text/css" href="css/jMyCarousel.css" />  
	<script type="text/javascript" src="js/jMyCarousel.js"></script> 

	<link type="text/css" href="css/demos.css" rel="stylesheet" />
	
	<!-- Transformie is a plugin that makes webkit's CSS transforms work in Internet Explorer -->
	<script src="js/sylvester.js" type="text/javascript"></script>
	<script src="js/transformie.js" type="text/javascript"></script>
	
	<!-- Include mousewheel dependancies and app files -->
	<script src="js/jquery.mousewheel.min.js" type="text/javascript"></script>
	<script src="js/app.js" type="text/javascript"></script>
<script type="text/javascript">

</script>
</head>
<body>
<div id="wrapper">
	<?include_once("../../top.php");?>
	<div id="main">
		<div class="sidebar">
            <ul>	
               <li>
                    <h4><span>커뮤니티 <strong>Community</strong></span></h4>
                    <ul class="blocklist">
                        <li><a href="../../community/bbs?select=1">학과공지사항</a></li>
						<li><a href="../photo">사진게시판</a></li>
						<li><a href="../../community/bbs?select=2">자유게시판</a></li>
						<li><a href="../../community/bbs?select=3">자료실</a></li>
						<li><a href="../../community/bbs?select=4">행사/공모전</a></li>
						<li><a href="./">졸업게시판</a></li>
						<li><a href="../../community/bbs?select=6">취업게시판</a></li>
						<li><a href="../../community/bbs?select=7">FAQ</a></li>
                    </ul>
                </li>
            </ul> 
        </div>
 		<div class="main_text" style="height:500px;">
			<h3>졸업게시판</h3>
		준비중입니다.
		</div>
	</div>
			<?include_once("../../footer.php");?>
	</div>
</div>

<?include_once("../../bottom_login.php");?>

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
