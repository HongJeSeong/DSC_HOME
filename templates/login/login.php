<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';
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
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1182, initial-scale=1">
    <title>컴퓨터정보통신공학과</title>
    <link rel="stylesheet" type="text/css" href="/home/assets/css/default.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/login.css">
	
</head>
<body>
<?php Header::render(); ?>
<!-- End Of Footer -->

<!-- START Content-->
<form id="loginform" action="./signin_process.php" name="signin" method="post">
<div class="main-container">
	<div class="signin-content">
		<table border="0" cellpadding="0" cellspacing="0" style="width:380px;margin-left:300px;">
	        <tr style="height:50px;">
	            <td>
	                <div class="contact-item">
	                    <div class="title">로그인</div>
	                    <div class="bar"></div>
	                </div>
	            </td>
	        </tr>
			<tr style="height:100px;">
	           <td>
	           		<table border="0" cellpadding="0" cellspacing="0" class="signin-table">
	           			<tr>
		           			<td class="title">관리자아이디</td>
		           			<td class="formData"><center><input type="text" id="idform" name="id" /></center></td>
		           			<td class="description" rowspan="2" >
			           			<input type="submit" class="btn_login"  value="로그인" />
		           			</td>
	           			</tr>
	           			<tr>
		           			<td class="title">비밀번호</td>
		           			<td class="formData"><center><input type="password" id="passwordform" name="password" /></center></td>
	           			</tr>
	           		</table>
	           </td>
			</tr>
	   </table>

	</div>
       <!-- End Of Content -->
</div>
</form>
<!-- START Footer-->
<?php Footer::render(); ?>

<script src="/home/assets/vendor/jquery-1.11.3.min.js"></script>
<script src="/home/assets/js/header.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/js/bootstrap.min.js"></script>
<script src="javascript/jsbn.js"></script>
<script src="javascript/jsbn2.js"></script>
<script src="javascript/prng4.js"></script>
<script src="javascript/rng.js"></script>
<script src="javascript/rsa.js"></script>
<script src="javascript/rsa2.js"></script>
<script>
	function encrypt() {
		var publickey = "<?=publicKeyToHex($privatekey)?>";
		var rsakey = new RSAKey();
		rsakey.setPublic(publickey, "10001");
		var enc = rsakey.encrypt($('#passwordform').val());
		var id = $('#idform').val();
		var formData = {id:id,password:enc}; //Array
		$.ajax({
			url : "./signin_process.php",
			type: "POST",
			data : formData,
			dataType: "html",
			async: false,
			success: function(data)
			{
				console.log(data);
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				console.log("실패");
			}
		});
		return false;
	}
</script>
<!-- End Of Footer-->
</body>
</html>