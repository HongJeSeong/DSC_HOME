<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';
include_once dirname(__FILE__).'/../../config/db.php';
session_start();
session_destroy();
$f ="무효처리 임 학생회장에게 문의하면 기회한번더줌";

if(!empty($_POST["choice2"])){
	$pnum1 = $_POST["choice2"];
$re_2 = mysql_query("select getnum from cic_final_list where pk_num ='".$pnum1."'");

$getnum2 = mysql_result($re_2,0,0);
$getnum2+=1;

$re3 = mysql_query("update cic_final_list set getnum='".$getnum2."'where pk_num ='".$pnum1."'");
if($re3){
	echo "<script>location.replace('./pollresult')</script>";
}else{
	echo "다시 투표";
}	
}else{
	echo "<script>window.alert('".$f."');location.replace('./result')</script>";
}
	
	
