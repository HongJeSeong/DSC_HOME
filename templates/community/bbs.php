<?
session_start();
/* ob_start("ob_gzhandler"); //페이지 압축 */
include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/home/config/db.php';
$id = null;

if(isset($_SESSION["session_id"]))
	$id = $_SESSION["session_id"];

$select = $_GET["select"];
$start = null;
$end = null;
// if(isset($_GET["start"])){
	// $start = $_GET["start"];
	// $start=preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $start);  //특수문제 제거
	// $start=preg_replace("/[a-z]|[A-Z]/", "", $start);  //문자열 제거
// }
// 	
// if(isset($_GET["end"])){
	// $end = $_GET["end"];
	// $end=preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $end);  //특수문제 제거
// $end=preg_replace("/[a-z]|[A-Z]/", "", $end);  //문자열 제거
// }
if(isset($_GET["page"])){
	$page = $_GET["page"];
	$page=preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $page);  //특수문제 제거
	$page=preg_replace("/[a-z]|[A-Z]/", "", $page);  //문자열 제거
}
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
		<div class="main_text" style="width:760px;">
	    	<table id="board_table" border="0" cellpadding="4" cellspacing="0">
				<tr>
					<td colspan="2">
					<span style="float:left;margin-left:5px;"><?echo"$name"?></span>
					</td>
					<td colspan="3">
					<span style="float:right;margin-right:5px;">커뮤니티 > <?echo "$name"?></span>
					</td>
				</tr>
				<?
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
				echo '<tr class="title" style="background-color:'.$color.'">
					<td style="color:white;" width=50><span>글번호</span></td>
					<td style="color:white;" width=400><span>제목</span></td>
					<td style="color:white;" width=100><span>작성자</span></td>
					<td style="color:white;" width=120><span>작성일</span></td>
					<td style="color:white;" width=50><span>조회</span></td>
				</tr>'

				?>
		<?
			if(!isset($page)){
				$page=1;	
			} 
	

		//	$numeric="select * from notice";
			$numeric="select num from $board order by num desc";
//			$numeric="select count(num) from $board order by num desc";
			$result = mysql_query($numeric);// or  die('쿼리 실패 : ' . mysql_error());
	
			$col = mysql_fetch_array($result,MYSQL_BOTH);			
	
				
			$num = $col[0];
			$listnum =10;
			$pagenum =10;
			$offset = $listnum*($page-1);
				
			$total_page = ceil($num/$listnum);
			$cur_num = $num - $listnum*($page-1);
			
			$query = "";
			$query = "select num,title,name,date,count from $board order by num desc limit $offset, $listnum";
		
		
	$result = mysql_query($query);// or die('쿼리 실패 : ' . mysql_error());			
	if($result){

						while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
					
				$year = mb_substr($row[3],0,4,"utf-8");
				$month = mb_substr($row[3],4,2,"utf-8");
				$day = mb_substr($row[3],6,2,"utf-8");
			
				$row ="<tr>
                        <td><span><a href='bbs_more?select=$select&n=$row[0]'>$cur_num</a></span></td> 
                        <td><span><a href='bbs_more?select=$select&n=$row[0]'>$row[1]</a></span></td> 
                        <td><span><a href='bbs_more?select=$select&n=$row[0]'>$row[2]</a></span></td>                     
			<td><span><a href='bbs_more?select=$select&n=$row[0]'>$year.$month.$day</a></span></td>
			<td><span><a href='bbs_more?select=$select&n=$row[0]'>$row[4]</a></span></td>
	 		
			 </tr>";
			$cur_num--;
				echo $row;
			}
			}else{ 
				$row = "<tr><td><span>-</span></td>
			<td><span>자료가없습니다.</span></td>
			<td><span>관리자</span></td>
			<td><span>-</span></td>
			<td><span>-</span></td>
			</tr>";
		
				echo $row;
			}
		
			
		?>
		
				<tr>
					<td colspan="4"><span>
						<?
							// $ceil  = ceil($num/10); 
							// $s=$num;
							// for($i=1;$i<=$ceil;$i++){	
								// $e=$s-9;
								// if($e<=1){
									// $e = 1;
								// }
								// echo "<a href=bbs?select=$select&start=$s&end=$e>[$i]</a>";
								// $s=$s-10;
							// }
							$total_block=ceil($total_page/$pagenum);
							$block = ceil($page/$pagenum);
							$first = ($block-1)*$pagenum;
							$last = $block*$pagenum;
							
							if($block>=$total_block){
								$last=$total_page;
							}
							
							if($block>1){
								$prev=$first-1;
								echo "<a href=bbs?select=$select&page=1>[처음]</a>";
							}
							if($page>1){
								$go_page=$page-1;
								echo "<a href=bbs?select=$select&page=$go_page>[이전]</a>";
							}
							for($page_link =$first+1;$page_link<=$last;$page_link++){
								if($page_link==$page){
									echo"<b>[$page_link]</b>";
								}else{
									echo "<a href=bbs?select=$select&page=$page_link>[$page_link]</a>";
								}
							}
							if($total_page>$page){
								$go_page=$page+1;
								echo "<a href=bbs?select=$select&page=$go_page>[다음]</a>";
							}
							if($block<$total_block){
								$next=$last+1;
								echo "<a href=bbs?select=$select&page=$total_page> &nbsp[마지막]</a>";
							}
						?>
						
						
					</span></td>
					<td>
						<?
						if($id =='Admin'){
						
							echo "<a href='bbs_write?select=$select'>글쓰기</a>";
						}
	?>
						
						
					</td>
					
				</tr>
			</table>
	    	
    	</div>
    </div>
    <?Side::render("community");?>
</div>
<? Footer::render(); ?>

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
</script>

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
