<?
session_start();
/* ob_start("ob_gzhandler"); //페이지 압축 */
include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';
include_once dirname(__FILE__).'/../../config/db.php';
$select = $_GET["select"];


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
			
		
			$query="select num,title,name,date,count from $board order by num desc limit 7";
			$result = mysql_query($query);// or die('쿼리 실패 : ' . mysql_error());
			$jsonData = array();
			if($result){
				while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
					$year = mb_substr($row[3],0,4,"utf-8");
					$month = mb_substr($row[3],4,2,"utf-8");
					$day = mb_substr($row[3],6,2,"utf-8");
					$row = array($row[1],$year,$month,$day,$row[0]);
					array_push($jsonData, $row);
				}
			}
			echo json_encode($jsonData);

						
