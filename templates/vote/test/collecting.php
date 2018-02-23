<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';
include_once dirname(__FILE__).'/../../config/db.php';

$name = $_POST["name"];
$name = trim($name);
$pknum = $_POST["pknum"];
$pknum = trim($pknum);
$major = $_POST["major"];
$major = trim($major);
$newtitle = $_POST["newtitle"];
$newtitle = trim($newtitle);

$tr = mysql_query("select newtitle from collect where newtitle='".$newtitle."'");
$f ="등록실패 다시입력해주시기 바랍니다.";
$s ="등록성공";
$i ="이미 존재하는 학과 이름입니다.";
$j = "응모는 한번만 가능합니다.";
$pk = mysql_query("select pknum from collect where pknum ='".$pknum."'");
$count = mysql_num_rows($tr);
$countpk = mysql_num_rows($pk);

if($count==1){
	echo "<script>window.alert('".$i."'); location.replace('./collect')</script>";
}else if($countpk ==1){
	echo "<script>window.alert('".$j."'); location.replace('./collect')</script>";
}else{
	$result = mysql_query("insert into collect (name,pknum,major,newtitle) values ('".$name."','".$pknum."','".$major."','".$newtitle."')");
	if(!$result){
	echo "<script>window.alert('".$f."'); location.replace('./collect')</script>";
	}else{
	echo "<script>window.alert('".$s."'); location.replace('./collect')</script>";	
	}	
}


