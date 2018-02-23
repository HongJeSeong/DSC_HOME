<?
session_start();
$id = $_SESSION['session_id'];
if($id)
{
	//세션 삭제
	unset($_SESSION['session_id']);

	echo "<script>
		location.replace('".$_SERVER['HTTP_REFERER']."');
	  </script>";

}else{
	echo"
	<script>
	alert('로그인 하세요.');
	history.go(-1);
	</script>
	";

}
?>
