<?
session_start();
include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/home/config/db.php';

$id = null;

if(isset($_SESSION['session_id']))
	$id = $_SESSION['session_id'];

$select=$_GET['select'];
$num=$_GET['n'];
$num=preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $num);  //특수문제 제거
$num=preg_replace("/[a-z]|[A-Z]/", "", $num);  //문자열 제거
$select=preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $select);  //특수문제 제거
if($num == ''){
	echo "<script>alert('존재하지 않는 페이지 입니다.');history.back(-1);</script>";
	exit;
}
switch ($select)
{
	case "1":
		$board = 'notice';
		$name = '공지사항';
		break;
	case "2":
		$board = 'news';
		$name = '학과소식';
		break;
	case "3":
		$board = 'job';
		$name = '취업게시판';
		break;
	case "4":
		$board = 'graduate';
		$name = '졸업게시판';
		break;
	case "5":
		$board = 'project';
		$name = '자료실';
		break;
		
	default :
		echo "<script>alert('존재하지 않는 게시판 입니다.');history.back(-1);</script>";
		exit;
		break;
} 
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
	top:1000px;
}
    </style>
</head>

<body>
<?Header::render();?>
	
<div class="main-container" >
    <div class="curriculum-content" >
		<div id="main_text" class="main_text" style="width:760px;">
		<h3><?echo $name;?></h3>
<?

		$query="select num,title,id,name,date,count,text,file from $board where num=$num";
		$result = mysql_query($query) or die('쿼리 실패 : ' . mysql_error());
		$row = mysql_fetch_array($result, MYSQL_BOTH);
	

		//날짜 구하기
		$year = mb_substr($row[4],0,4,"utf-8");
		$month = mb_substr($row[4],4,2,"utf-8");
		$day = mb_substr($row[4],6,2,"utf-8");
		$hour = mb_substr($row[4],8,2,"utf-8");
		$min = mb_substr($row[4],10,2,"utf-8");
		
		//세션 중복 카운팅 방지
		$read_on = 0; // 초기화
		if(isset($_SESSION["read_chk"])){ 
			$read_chk_array = explode("/",$_SESSION["read_chk"]);
			for($i = 0; $i < sizeof($read_chk_array); $i++)
			{
				if($read_chk_array[$i] == $select."_".$num)
				{
					$read_on = 1;
					break;				
				}
			}
		}
		if($read_on == 0)
		{
			$row[5] = $row[5] + 1;
			$count=$row[5];
			$update="update $board set count=$count where num=$num";
			mysql_query($update) or die('쿼리 실패 : ' . mysql_error());
			if(isset($_SESSION["read_chk"])!=1){
				$_SESSION["read_chk"] = "";
			}
			$_SESSION["read_chk"] .= "/".$select."_".$num;
		}
	
		$color = "white";
		if($select==1){
			$color = "#73ABE1";
		}else if($select == 2){
			$color = "#FBB35B";
		}else if($select == 3){
			$color = "#FA6E54";
		}else if($select == 4 ){
			$color = "#922A24";
		}else if($select == 5 ){
			$color = "#4A0946";
		}

		echo"
		
		<form method=get name=nmodi action='./bbs_delete'>
		<table border=0 CELLSPACING = 0 CELLPADDING = 0 style='width:100%;table-layout: fixed;'>

		<tr height=25 style='background-color:".$color.";color:white;'>
			<td width=60 class='center'>글번호</td>
			<td width=300 class='center'>제목</td>
			<td width=60  class='center'>작성자</td>
			<td width=60 class='center'>작성일</td>
			<td width=30 class='center'>조회</td>
		</tr>
		<tr>
			<td width=60  bgcolor='#ffffff' class='center'>$num</td>
			<td width=300 bgcolor='#ffffff' class='center'>$row[1]</td>
			<td width=60  bgcolor='#ffffff' class='center'>$row[3]</td>
			<td width=60 bgcolor='#ffffff' class='center'>$year-$month-$day<br />$hour:$min </td>
			<td width=25  bgcolor='#ffffff' class='center'>$row[5]</td>
		</tr>
		";
		if($row[7]!="none")
		{
		echo"
		<tr>
		<td width=100 class='center'>첨부파일</td><td colspan=4><a href='home_upload/$row[7]'>$row[7]</a></td>
		</tr>
		";
		}
		echo"

		<tr>
			
			<td width=680 height=20 colspan=5 bgcolor='#ffffff' class='center'>내용</td>
		</tr>";
		if($select==2){
			echo"<tr>
					<td colspan=5><div style='width:680;height:300;padding:10px 30px 0;text-align:center;'><pre><img src='home_upload/$row[7]',alt='업로드필요', width='500px' height='500px'> </pre></div> </td>
				</tr>";
		}

		echo"
		<tr>
			<td colspan=5><div style='width:680;height:300;padding:10px 30px 0;text-align:left;'><pre>$row[6]</pre></div></td>
		</tr>
		<tr>";
			if($id=="Admin") 
			{
				            echo "<td colspan='2'></td>
				<td colspan='3'><span><a href='./bbs?select=$select' class='button'>목록</a></span>
				<span><a href='./bbs_edit?select=$select&num=$num' class='button'>수정</a></span>
				<span><a href='./bbs_delete?select=$select&num=$num' class='button'>삭제</a></span></td>";
			}else{
				echo "<td></td><td>&nbsp;<a href='./bbs?select=$select' class='button'>목록</a></td>";
			}
			echo"

		</tr>
		</table>
</form>";


		

?>			


		</div>
	</div>
<?Side::render("community");?>
</div>
<? Footer::render(); ?>

<style type="text/css">
.button {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
	background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
	background-color:#ededed;
	-webkit-border-top-left-radius:0px;
	-moz-border-radius-topleft:0px;
	border-top-left-radius:0px;
	-webkit-border-top-right-radius:0px;
	-moz-border-radius-topright:0px;
	border-top-right-radius:0px;
	-webkit-border-bottom-right-radius:0px;
	-moz-border-radius-bottomright:0px;
	border-bottom-right-radius:0px;
	-webkit-border-bottom-left-radius:0px;
	-moz-border-radius-bottomleft:0px;
	border-bottom-left-radius:0px;
	text-indent:0;
	border:1px solid #dcdcdc;
	display:inline-block;
	color:#777777;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	height:22px;
	line-height:22px;
	width:48px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 2px #ffffff;
}
.classname:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
	background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
	background-color:#dfdfdf;
}.classname:active {
	position:relative;
	top:1px;
}
pre{
	   white-space: pre-wrap;       /* CSS 3 */
    white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
    white-space: -pre-wrap;      /* Opera 4-6 */
    white-space: -o-pre-wrap;    /* Opera 7 */
    word-wrap: break-word; 
}
</style>

<script src="<?echo HOME_PATH?>/assets/vendor/jquery-1.11.3.min.js"></script>
<script src="<?echo HOME_PATH?>/assets/js/header.js"></script>
<script>
	var id = "<?
		if($select == 1){
			echo "side-menu-item-a";
		}
		else if($select == 2){
			echo "side-menu-item-b";
		}
		else if($select == 3){
			echo "side-menu-item-c";
		}
		else if($select == 4){
			echo "side-menu-item-d";
		}
		else if($select == 5){
			echo "side-menu-item-e";
		}
	?>";
	$("#"+id).addClass("hover");
	var height = Number($("#main_text").css("height").replace("px",""))+150+"px";
	console.log(height);
	$(".main-container").css("height",height);
	$(".footer").css("top",height);
</script>
</body>
</html>
