<?php

session_start();

include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/home/config/db.php';


$id = $_SESSION['session_id'];
$select=$_POST["select"];

$board = "";
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
		alert("존재하지 않는 게시판 입니다");
		break;
} 

// 제목과 글 가져오기
$name=$_POST["name"];
$title=$_POST["title"];
$text=$_POST["text"];
$num = $_POST["num"];
//잘못된 경로 차단
$parse = parse_url($_SERVER["HTTP_REFERER"]);
if(!$id || !$title || $_SERVER["HTTP_HOST"] != $parse["host"])
{
	echo alert("잘못된접근입니다.");
}else{
	if($id=="Admin"){
	}else{
		echo alert("잘못된접근입니다.");
	}
//Cross Site Scripting 방지
$text = htmlspecialchars($text, ENT_QUOTES);
$title = htmlspecialchars($title, ENT_QUOTES);

//글의 내용 중 \r을 <br>로 치환
$text=str_replace("\r\n","<br>",$text);

//앞,뒤 빈칸 제거 
$title = @trim($title);
$text = @trim($text);

//빈 제목,글 입력 방지
if($title == ''){
	alert("잘못된 정보입니다.");
}else if($text == ''){
	alert("잘못된 정보입니다.");
}

$time=date("YmdHis");

//게시판 마지막 등록된 번호 찾기
$query="select num from $board order by num desc";
$result = mysql_query($query) or die('쿼리 실패 : ' . mysql_error());
$row = mysql_fetch_array($result, MYSQL_NUM);
$num=$row[0];

//경고창 함수
function alert($msg){
/* 	echo json_encode(array('code'=> '-1','msg'=> $msg)); */
	echo "<script>window.alert('".$msg."');</script>";

}
function complete($msg,$select){
/* 	echo json_encode(array('code'=> '0','msg'=> $msg)); */
	echo "<script>window.alert('".$msg."');
	location.replace('./bbs?select=".$select."')</script>";	

}

function confirm($query,$select){
	$result = mysql_query($query);
	if(!$result){
		alert("DB 오류가 생겼습니다. 다시 등록해주시기 바랍니다.");
	}
	complete("등록이완료됐습니다",$select);
}

//업로드 파일 있는지 검사


$filename = null;
if(!$_FILES['file']['name']){		 //파일 없음

	$query = "update $board set id='$id',name='$name',date='$time',text='$text',title='$title',file='none' where num='$num'";
	confirm($query,$select);
}else{	  //파일 있음

	$ext = substr(strrchr($_FILES['file']["name"], '.'), 1); //확장자 검사
	if($ext != 'php' && $ext != 'inc' && $ext != 'html' && $ext != 'htm' && $ext != 'phtml' && $ext != 'php3' ){  //확장자 구분
		$array = array($time,$ext);
		$filename = join(".", $array);
		$query="update $board set id='$id',name='$name',date='$time',text='$text',title='$title',file='$filename' where num='$num'";
	}else{	//확장자 없음
		alert('업로드 불가능한 확장자입니다');
		
	}
}
// 업로드 파일 있음

if ($_FILES['file']['error'] == 0){// 파일 업로드 에러 체크
		if (move_uploaded_file($_FILES['file']['tmp_name'], "/tmp/home_upload/".$filename)) {
			confirm($query,$select);
		} else {
		    alert($_FILES);
		}

		// 업로드 에러 있음
			
	}else{	// 업로드 에러 없음
		switch ($_FILES['userfile']['error']) {// 실패 내용을 출력
			case 1:
				alert('php.ini 파일의 upload_max_filesize 설정값을 초과함(업로드 최대용량 초과');
				break;
			case 2:
				alert('Form에서 설정된 MAX_FILE_SIZE 설정값을 초과함(업로드 최대용량 초과');
				break;
			case 3:
				alert('파일 일부만 업로드 됨');
				break;
			case 4:
				alert('업로드된 파일이 없음');
				break;
			case 6:
				alert('사용가능한 임시폴더가 없음');
				break;
			case 7:
				alert('디스크에 저장할수 없음');
				break;
			case 8:
				alert('파일 업로드가 중지됨');
				break;
			default:
				alert('시스템 오류가 발생');
				break;
		} // switch		
	}
}
