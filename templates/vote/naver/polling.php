<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';
include_once dirname(__FILE__).'/../../config/db.php';
$f ="비정상...FAIL";
$r ="다시투표...FAIL";
$a ="이미 투표하셨습니다.";
$c = "투표 감사합니다.";
if(!empty($_POST["choice"])&&isset($_SESSION["state"])){
	if($_SESSION["state"]!==$_POST["state"]){
	session_destroy();
	echo "<script>window.alert('".$f."');location.replace('/home')</script>";
	}
	$pnum = $_POST["choice"];
	if(empty($_POST["voteID"])||empty($_POST["voteName"])){
	session_destroy();
	echo "<script>window.alert('".$f."');location.replace('/home')</script>";	
	}
	$voteID = $_POST["voteID"];
	$voteName=$_POST["voteName"];
	$voteEndCheck = mysql_query("select vote from login where id ='".$voteID."'");
	$state2=mysql_query("select email from login where id ='".$voteID."'");
	$reState2=mysql_fetch_array($state2);
	if($reState2['email']!==$_SESSION["state2"]){
	 echo "<script>window.alert('".$reState2."');window.alert('".$_SESSION["state2"]."');</script>";
	}
	$vote=mysql_fetch_array($voteCheck);
         	        if($vote['vote']==1){
			session_destroy();
                         echo "<script>window.alert('".$a."'); location.replace('/home')</script>";
                        }

$re = mysql_query("select getnum from cic_final_list where number ='".$pnum."'");

$tt=mysql_query("insert into vote_end (id,name) values ('".$voteID."','".$voteName."')");
$getnum = mysql_result($re,0,0);
$getnum+=1;

$re2 = mysql_query("update cic_final_list set getnum='".$getnum."'where number ='".$pnum."'");
if($re2){
	$queryVote="update login set vote='1' where id ='".$voteID."'";
	$queryPkn="update login set pk_num='".$pnum."' where id ='".$voteID."'";
	mysql_query($queryVote);
	mysql_query($queryPkn);
	echo "<script>window.alert('".$c."');location.replace('./pollresult')</script>";
	session_destroy();
}else{
	echo "<script>window.alert('".$r."');";
	session_destroy();
}	
}else{
	echo "<script>window.alert('".$f."');location.replace('/home')</script>";
	session_destroy();
}
?>	
	
