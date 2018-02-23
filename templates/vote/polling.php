<?
include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';
include_once dirname(__FILE__).'/../../../config/db.php';

$f="4개를 선택하십시오.";
$c="투표 감사합니다.";
$x="실패";
$list = $_POST['case'];
if (isset($list) == true&&!empty($_POST["voteID"])) {
   $testNo = count($list);
	$voteID=$_POST["voteID"];

if($testNo!=4){
 echo "<script>window.alert('".$f."'); location.replace('/home/templates/vote/main.php')</script>";
}else {
for($count=0;$count<4;$count++){
$re = mysql_query("select getnum from cic_final_list where number ='".$list[$count]."'");
$getnum = mysql_result($re,0,0);
$getnum+=1;

$re2 = mysql_query("update cic_final_list set getnum='".$getnum."'where number ='".$list[$count]."'");
				}
	//투표했음으로 
      $t=mysql_query("insert into vote_end (id,pk1,pk2,pk3,pk4) values (".$voteID.",".$list[0].",".$list[1].",".$list[2].",".$list[3].")");
	if($t)
      echo "<script>window.alert('".$c."');location.replace('./pollresult')</script>";

	}
}






?>
