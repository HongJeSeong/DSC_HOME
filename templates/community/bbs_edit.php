<?
session_start();
include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/home/config/db.php';

$id = null;

if(isset($_SESSION['session_id']))
	$id = $_SESSION['session_id'];
$board = "";
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
	if($id=="Admin" ){
	}else{
	echo"
	<script>
	alert('수정 권한이 없습니다.');
	history.go(-1);
	</script>";
	exit;
	}
	$query="select * from $board where num=".$num.";";
	$result = mysql_query($query);
	$pageData = mysql_fetch_array($result, MYSQL_NUM);
	
/*
	$query="select from $board where num='$num'";
	$result = mysql_query($query);
	if($row[0] != none){
		unlink('/var/www/html/home/community/upload/'.$row[0]);
		}
	echo"
	<script>
	window.alert('".$num."번 글이 삭제되었습니다');
	location.replace('../community/bbs?select=".$select."');
	</script>";
*/

}

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
	height : 676px;
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
<?Header::render();?>
<div class="main-container">
    <div class="curriculum-content" >
		<div class="main_text">
		<h3><?echo $name;?></h3>
	<form action="./bbs_modify.php" method='POST' id="edit" name='edit' enctype="multipart/form-data">
	<table border=0 CELLSPACING = 0 CELLPADDING = 0>
	<tr>
<?
	$query=mysql_query("select name from member where id='$id'");
	$row = mysql_fetch_array($query, MYSQL_NUM);
	mysql_free_result($query);

if($id=='Admin'){
	echo "
		<td width=60>이 름</td>
		<td width=199>관리자</td>
		<input type ='hidden' name='name' value='관리자'>
		<td width=60>학 번</td>
		<td width=199>Admin </td>
		<input type ='hidden' name='id' value='Admin'>";
	}else{
	echo "<td width=60>이 름</td>
		<td width=199>$row[0]</td>
		<input type ='hidden' name='name' value='$row[0]'>
		<td width=60>학 번</td>
		<td width=199>$id </td>
		<input type ='hidden' name='id' value='$id'>";
}	
	
?>	
	</tr>
		<td width=60>제 목</td>
		<td colspan=3><input type='text' name='title' value='<?echo $pageData[1];?>' style='width:530;' size='80'></td>
	</tr>
	<tr>					
		<td>올릴파일</td>
		<td colspan="3">
		<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
		<input type='file' name='file' style="margin-left:50px;float:left;"/>
		</td>
		
	</tr>
	<tr>
		<td>내 용</td>
		<input type='hidden' name='select' value="<?echo $select;?>" />
		<input type='hidden' name='num' value="<?echo $num;?>" />
		<td colspan=3><textarea id="text" name='text' cols=73 rows=20 ></textarea>
	</tr>
	<tr>
	<td width=500></td>
	<td>&nbsp;<img src='/home/assets/img/confirm.gif' onclick="edit_ok();" style='cursor:pointer;border:0;'></td>
	<td>&nbsp;<a href='./bbs?select=<?echo $select?>'><img src='/home/assets/img/cancle.gif'></a></td>
	</tr>
	</table>
	</form>


		</div>
	</div>
	<?Side::render("community");?>
</div>

<? Footer::render(); ?>

<script src="<?echo HOME_PATH?>/assets/vendor/jquery-1.11.3.min.js"></script>
<script src="<?echo HOME_PATH?>/assets/js/header.js"></script>
<script>

	var id = '<?
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
	?>';
	$("#"+id).addClass("hover");
	var regex = /<br\s*[\/]?>/gi;
	var text = "<?echo $pageData[6];?>";
	text = text.replace(regex,"\n");
	$("#text").val(text);

	function edit_ok(){
		if(edit.title.value ==""){
				alert("제목을 입력하세요");
				edit.title.focus();
				return false;
			}else if(edit.text.value ==""){
				alert("글내용을 입력하세요");
				edit.text.focus();
				return false;
			}else{
				document.edit.submit();
			}
	}

</script>
</body>
</html>


