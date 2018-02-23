<?
session_start();
include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/home/config/db.php';

$id = $_SESSION['session_id'];
$select=$_GET["select"];
$select=preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $select);  //특수문제 제거
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

$num=$_GET["num"];
$num=preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $num);  //특수문제 제거
$parse = parse_url($_SERVER["HTTP_REFERER"]);
if( !$id || !$num || $_SERVER["HTTP_HOST"] != $parse["host"]){
	echo"
	<script>
	alert('잘못된 접근입니다.');
	history.go(-1);
	</script>
	";
}else{
	$query="select id from $board where num=$num";
	$result = mysql_query($query) or die('쿼리 실패 : ' . mysql_error());
	$row = mysql_fetch_array($result, MYSQL_NUM);
	if($id=="Admin"){
	}else{
	echo"
	<script>
	alert('삭제 권한이 없습니다.');
	history.go(-1);
	</script>";
	exit;
	}
	$query="select file from $board where num=".$num.";";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result, MYSQL_NUM);

	$query="delete from $board where num='$num'";
	$result = mysql_query($query);
	if($row[0] != "none"){
		unlink('/tmp/home_upload/'.$row[0]);
	}
	echo"
	<script>
	window.alert('".$num."번 글이 삭제되었습니다');
	location.replace('./bbs?select=".$select."');
	</script>";
}

?>


