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
	<title>졸업게시판 :: 컴퓨터정보통신공학과</title>
	<link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="./css/style.css" type="text/css" />
	<!--[IF IE]><link rel="stylesheet" href="./css/IEstyle.css" type="text/css" /><![ENDIF]-->
	<!--[IF IE 6]><link rel="stylesheet" href="./css/IE6.css" type="text/css" /><![ENDIF]-->
	<!--[IF IE 7]><link rel="stylesheet" href="./css/IE7.css" type="text/css" /><![ENDIF]-->
	<script type="text/javascript" src="../../js/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="../../js/main.js"></script>
	<script src="../../js/commom.js" type="text/javascript"></script>
	<script src="../../js/jquery.hoverIntent.js" type="text/javascript"></script>
	<script src="../../js/ssubnav.js" type="text/javascript"></script>
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
						<li><a href="./">사진게시판</a></li>
						<li><a href="../../community/bbs?select=2">자유게시판</a></li>
						<li><a href="../../community/bbs?select=3">자료실</a></li>
						<li><a href="../../community/bbs?select=4">행사/공모전</a></li>
						<li><a href="../../community/bbs?select=5">졸업게시판</a></li>
						<li><a href="../../community/bbs?select=6">취업게시판</a></li>
						<li><a href="../../community/bbs?select=7">FAQ</a></li>
                    </ul>
                </li>
            </ul> 
        </div>
		<div class="main_text" style="height:500px;">
			<h3>사진게시판</h3>
		준비중입니다.
	</div>
		</div>
			<?include_once("../../footer.php");?>
	</div>
</div>

<?include_once("../../bottom_login.php");?>

</body>
</html>
