<?php
		include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php'; // this is common library
		include_once dirname(__FILE__).'/../../config/db.php';
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
    <link rel="stylesheet" type="text/css" href="/home/assets/css/vote.css">
    
    <style>
        
    </style>
</head>
<body>
<!-- End Of Footer -->
<?php Header::render();?>
<!-- START Content-->
<div class="main-container">
    
    <div class="contact-content">
    <form action='./collecting.php' method='POST' name='write' id="write" enctype="multipart/form-data">
	   <table border="0" cellpadding="10" cellspacing="0" class="contact-table">
        
        <tr style="height:40px;">
            <td><span class="contact-title">이름</span></td>
            <td><input type='text' name='name' value='' style='width:530;' size='20'></td>
        </tr>
        <tr style="height:40px;">
            <td><span class="contact-title">학번</span></td>
            <td><input type='text' name='pknum' value='' style='width:530;' size='20'></td>
        </tr>
        <tr style="height:40px;">
            <td><span class="contact-title">학과</span></td>
            <td><input type='text' name='major' value='' style='width:530;' size='20'></td>
        </tr>
        <tr style="height:40px;">
            <td><span class="contact-title">새로운 학과이름</span></td>
            <td><input type='text' name='newtitle' value='' style='width:530;' size='20'></td>
        </tr>
        <tr>
        	<td><p></p></td>
        	<td onclick='write_ok()' style='cursor:pointer;border:0;' size='50'>접수</td>
        </tr>
        <span class="cotion">※주의 </sapn><span class="contact-cotion">이름, 학번</span> <span class="cotion"> 정확하게 입력바랍니다.</span>
	   </table>
	 </form>
    </div>
    <div class="Scrollbox">
    	<?php 
    	$q = "select newtitle from collect";
		$result = mysql_query($q);
		?>
    	<h1>응모한 새로운 학과이름 목록</h1>
  		<div class="divScroll">
  			<ul class="Scroll">
  				<?php
  					while($row = mysql_fetch_array($result)){
  						echo"
  						<li>$row[0]</li>";
  					}
  					?>
		</ul>        
  		</div>
    </div>
    
</div>
<!-- End Of Content -->

<!-- START Footer-->
<div class="footer">
    <div class="content">
        <div class="bar"></div>
        <div class="logo"></div>
        <div class="menu">
            <div class="top">
                <ul>
                    <li><a href="">ABEEK</a></li>
                    <li><a href="">대학원</a></li>
                    <li><a href="">커뮤니티</a></li>
                    <li><a href="">구성원</a></li>
                    <li><a href="">교과과정</a></li>
                    <li><a href="">학과소개</a></li>
                </ul>
            </div>
            <div class="bottom">
                <ul>
                    <li><a href="">개인정보취급방침</a></li>
                    <li><a href="">이용약관</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="/home/assets/vendor/jquery-1.11.3.min.js"></script>
<script src="/home/assets/js/header.js"></script>
<script type="text/javascript" src="http://openapi.map.naver.com/openapi/naverMap.naver?ver=2.0&key=756db721b31636565a3f43ae98ffbb46"></script>
<script src="/home/assets/js/contact.js"></script>
<!-- End Of Footer-->

<script>
function write_ok(){
			if(write.name.value ==""){
				alert("이름을 입력하세요");
				write.name.focus();
				return false;
			}else if(write.pknum.value ==""){
				alert("학번을 입력하세요");
				write.pknum.focus();
				return false;
			}else if(write.newtitle.value==""){
				alert("새로운 학과이름을 입력하세요");
				write.newtitle.focus();
				return false;
			}else{
				document.write.submit();
			}
		}


  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92073995-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
