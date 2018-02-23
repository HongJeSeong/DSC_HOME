<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';
session_start();
function generate_state(){
$mt = microtime();
$rand = mt_rand();
$_SESSION["key"]=$mt;
$_SESSION["val"]=$rand;
return md5($mt*$rand);
}
$state = generate_state();
$_SESSION["state"]=$state;
?>
<!doctype html>
<html lang="ko">
<head>
<script type="text/javascript" src="https://static.nid.naver.com/js/naverLogin_implicit-1.0.3.js" charset="utf-8"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
<script type="text/javascript">
  var naver_id_login = new naver_id_login("OY8jXpIwOgpAXqgWZyZ9", "http://cic.hongik.ac.kr/home/templates/vote/naver/call.php");
  // 접근 토큰 값 출력
  //alert(naver_id_login.oauthParams.access_token);
  // 네이버 사용자 프로필 조회
  naver_id_login.get_naver_userprofile("naverSignInCallback()");
  // 네이버 사용자 프로필 조회 이후 프로필 정보를 처리할 callback function

  function naverSignInCallback() {
//요청값 출력
//document.write(naver_id_login.getProfileData('id')+'</br>');
//document.write(naver_id_login.getProfileData('nickname')+'</br>');
//document.write(naver_id_login.getProfileData('age')+'</br>');
//document.write(naver_id_login.getProfileData('gender')+'</br>');
//document.write(naver_id_login.getProfileData('email')+'</br>');
//document.write(naver_id_login.getProfileData('birthday')+'</br>');
//document.write(naver_id_login.getProfileData('name')+'</br>');
 var id = naver_id_login.getProfileData('id');
 var nickname = naver_id_login.getProfileData('nickname');
 var age = naver_id_login.getProfileData('age');
 var gender = naver_id_login.getProfileData('gender');
 var email = naver_id_login.getProfileData('email');
 var birthday =naver_id_login.getProfileData('birthday');
 var name =naver_id_login.getProfileData('name');
 var state='<?php echo $_SESSION["state"];?>';
post_to_url('./main.php',{"id":id, "nickname":nickname, "age":age, "gender":gender, "email":email, "birthday":birthday, "name":name,"state":state},'post');

  }

	function post_to_url(path, params, method) {
	    method = method || 'post'; 
 
    var form = document.createElement('form');
    form.setAttribute('method', method);
    form.setAttribute('action', path);
 
    for(var key in params) {
        var hiddenField = document.createElement('input');
        hiddenField.setAttribute('type', 'hidden');
        hiddenField.setAttribute('name', key);
        hiddenField.setAttribute('value', params[key]);
 
        form.appendChild(hiddenField);
    }
 
    document.body.appendChild(form);
    form.submit();
}

</script>
</body>
</html>

