<?
session_start();
include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/home/config/db.php';

$path = 'phpseclib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
include_once('Crypt/RSA.php');
/// use generate.php to generate a new key and paste it here.
$privatekey="-----BEGIN RSA PRIVATE KEY----- 
MIICXAIBAAKBgQC3RCD1pNmr/SByydk23VPi3iqnkIIq0WCIB72j4XazNcUZAsohd4JBmBgc6L6o XeEyquoRBP0EPkrSwK9wW9qWa10vkqarUXDRYesej3prHV+6Zz+KTc6+VUB++XB3gskbF1J6+CCi w6O1hjQa5U7wNzkHTUc44/81JXvfuSM8UwIDAQABAoGAUYaLKvt0oZ/vKWFFsbRvtsKiMvyEC0wt JxZadGa+CSboUSH+jTi+xzNDtsiK2Bc7MPD7Qyr260ZSvsJcyRzzdanwewenUMLXAL1JOaZhxQ2+ tcbWDiX6aByL5lkGu4cxNGpEGoa34fo7bFMMzqpAjgMqTIocJWMxMIdRCkzwfdECQQDemsSLSST/ TD4gd/CB9m/NrdPWzRgyneHvKCT17g777ILzW3JsGrGqiZzWqMxF/ynN32XwM/FT7V00dAnngeGN AkEA0sKM0RQTvt7pKn8vHCZUNsbSMkgT52DbWrKFEUA660808BmflvpuwKXZZ+8vKN0F73e76eF1 95eUdtauy+XtXwJBAKl+tLrNpfMSLZfxW1rJtxWoDs3Wel9IIhlEuufbLOObkZYVAknYBYGxqI82 FdwSTtVoDalZE57w9HAVDtmM5p0CQBZoiQBR2ieZG8Fg9GlRyfJpAUBHWZZoPepOwMcsxRbvvPkq QEWVKuFgwNTEIYd+uHrViC09w4UnoKlh+gPD1pECQB78s8sG3V9Et+2DnwDOJ4prZXfOikV2Hlf/ BTwQp7L0iMErKSCV07Ek3/Pbjg+VU431wo8ZHvBOydFBfBkAS9A= 
----END RSA PRIVATE KEY-----";
function publicKeyToHex($privatekey) {
	$rsa = new Crypt_RSA();
	$rsa->loadKey($privatekey);
	$raw = $rsa->getPublicKey(CRYPT_RSA_PUBLIC_FORMAT_RAW);
	return $raw['n']->toHex();
}
function decrypt($privatekey, $encrypted) {
	$rsa = new Crypt_RSA();
	$encrypted=pack('H*', $encrypted);
	$rsa->loadKey($privatekey);
	$rsa->setEncryptionMode(CRYPT_RSA_ENCRYPTION_PKCS1);
	return $rsa->decrypt($encrypted);
}
/* 변수 저장 */
$id = $_POST['id'];
$password = $_POST['password'];
$shpas = sha1((decrypt($privatekey, $_POST['password'])));
//echo "pass:".$password;
//echo "sh1: ".sha1($password);
//$login = base64_decode($_POST["login"]);
//echo "test".$login;



if($id == ""){
	echo "<script>alert('잘못된 접근입니다.');location.replace('https://software.hongik.ac.kr/');</script>";
	exit;
}
define("KEY_PUBLIC", "-----BEGIN PUBLIC KEY-----
MFwwDQYJKoZIhvcNAQEBBQADSwAwSAJBAMYQWDqtLgDKlQvWzacGeBMQpbicd/uo
XAvgLNpFZLM7zuYFDhrYncRsl8LIHK0K3f7e1aFmUVgM4LrKU2WFIw0CAwEAAQ==
-----END PUBLIC KEY-----
");
define("KEY_PRIVATE", "-----BEGIN RSA PRIVATE KEY-----
Proc-Type: 4,ENCRYPTED
DEK-Info: DES-EDE3-CBC,2BE9EB9BD7712C2B
 
FQ9nRtev8hFY+FXkbnH2qBdg7+cD4x759C5c+5PhwWAVccOA4nvtBnE4AUT1bC+H
r/viTPzL5M0vFbAfpOPeUVfuCYXmAxFwcW+pn++UtlNezMtWqZdGPSPc86OqtChE
PjZ5rNBhjTAY7xXX2n+jbZSq8M2LSWyM4gy3Oj8QMnKwdGNWeM/E/4uYyMr5V3Eb
7KveReWJnZ3r3mF7uWJYCjABRzVF8k5sn86FpRn6pLWRHigkpiyNGF7acJMRqaSY
RUIrVf5xclLloUoSuEAe8HSdTH7oxl3vqf8byedqzuWyAxCFWRNr2e+TJ79f1XPJ
m9vLhWhm1BWM3OiB8iw2MkaTx/RCEf31O3cgNG3bcW/uIZrvdV0xRhHsjk0HNFNI
QOEcS73avo2o4ncPJpxLGqg+a0ERtRhFRp0JdgwCxl8=
-----END RSA PRIVATE KEY-----
");

//$insert = "insert into member values (\"test\",\"1\")";
//$res = mysql_query($insert);

$sql = "select * from member where id='$id'";
// SQL문 파싱(and 검사)
$stmt = mysql_query($sql);
$row = mysql_fetch_array($stmt, MYSQL_NUM);
define("KEY_PASSPHRASE", "testkey");
$id=preg_replace("/a/", "A", $id); //A 대문자로 변경
$id=preg_replace("/b/", "B", $id); //B 대문자로 변경
$id=preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $id);  //특수문제 제거
if($row[0] !== $id){
	echo "
		<script>
			window.alert('아이디 없습니다.".$row[0]."-".$id."');
			location.replace('".$_SERVER['HTTP_REFERER']."');
			</script>
			";
	exit;
}
else if($password!==$row[1]){
	echo "
		<script>
			window.alert('아이디 또는 비밀번호가 정확하지 않습니다.".$row[1]."-".$password."');
			location.replace('".$_SERVER['HTTP_REFERER']."');
			</script>   ";
	exit;
}
else {
	$_SESSION['session_id'] = $id;
	echo "<script>location.replace('http://software.hongik.ac.kr');</script>";
}
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
