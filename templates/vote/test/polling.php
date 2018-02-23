<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';
include_once dirname(__FILE__).'/../../config/db.php';
session_start();
session_destroy();

$f ="비정상...FAIL";
$c = "투표 감사합니다!";

if(!empty($_POST["choice"])){
	$pnum = $_POST["choice"];
	if(empty($_POST["voteID"])){
	echo "<script>window.alert('".$f."');location.replace('./result')</script>";	
	}
	$voteID = $_POST["voteID"];
$re = mysql_query("select getnum from cic_final_list where pk_num ='".$pnum."'");

$tt=mysql_query("insert into vote_end (id) values ('".$voteID."')");
$getnum = mysql_result($re,0,0);
$getnum+=1;

$re2 = mysql_query("update cic_final_list set getnum='".$getnum."'where pk_num ='".$pnum."'");
if($re2){
	echo "<script>window.alert('".$c."');location.replace('./pollresult')</script>";
}else{
	echo "다시 투표";
}	
}else{
	echo "<script>window.alert('".$f."');location.replace('/home')</script>";
}
?>	
	
