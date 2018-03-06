<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php'; // this is common library
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1182, initial-scale=1">
    <title>소프트웨어융합학과</title>
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/default.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/side.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/intro.css">
</head>
<body>

<!-- End Of Footer -->
<?Header::render();?>
<!-- START Content-->

<div class="main-container">
	<?Side::render('intro');?>
    <div class="history-content">
		<table border="0" cellpadding="0" cellspacing="0" class="mab">
    <thead>
      <tr>
        <th width="18%">주요 연혁</th>
        <th width="45%">주요내용</th>
        <th width="12%">비고</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="num">학과신설</td>
        <td><div align="left">전자전산기공학과 신설</div></td>
        <td>1989년</td>
      </tr>
      <tr>
        <td class="num">학과명칭변경</td>
        <td><div align="left">전자전산기공학과에서 전자전산공학과로 명칭변경</div></td>
        <td>1993년</td>
        </tr>
      <tr>
        <td class="num">학부제 실시<br>학과명칭 변경</td>
        <td><div align="left">전자전산공학과에서 전자전기컴퓨터공학부로 명칭변경</div></td>
        <td>1996년</td>
        </tr>
      <tr>
        <td class="num">대학원 전자전산공학과 신설</td>
        <td><div align="left">대학원 전자전산공학과 신설</div></td>
        <td>1996년</td>
        </tr>
      <tr>
        <td class="num">학과명칭 변경</td>
        <td><div align="left">● 전자전기컴퓨터공학부의 컴퓨터소프트웨어.정보통신<br>● 교과과정 전면개정</div></td>
        <td>2001년</td>
      </tr>
      <tr>
        <td class="num">학과명칭변경</td>
        <td><div align="left">전자전기컴퓨터공학부의 컴퓨터정보통신</div></td>
        <td>2002년</td>
      </tr>
      <tr>
        <td class="num">학과분리 및 학과명칭변경</td>
        <td><div align="left">컴퓨터정보통신공학과</div></td>
        <td>2005년</td>
      </tr>
      <tr>
        <td class="num">ABEEK 교육과정 개발</td>
        <td><div align="left">ABEEK 기준을 참조한 교육과정 개발</div></td>
        <td>2004 년도 개발<br>2005 년도 실시</td>
      </tr>
      <tr>
        <td class="num">ABEEK으로부터<br>인증받음</td>
        <td><div align="left">한국공학교육인증원(ABEEK)으로부터 인증을 받음.<br>인증종류는 중간방문(IV)</div></td>
        <td>2005년</td>
      </tr>
      <tr>
        <td class="num">ABEEK으로부터<br>중간방문평가 받음</td>
        <td><div align="left">한국공학교육인증원(ABEEK)으로부터 중간방문(IV) 평가 받음</div></td>
        <td>2007년</td>
      </tr>
      <tr>
        <td class="num">ABEEK으로부터<br>중간방문평가 받음</td>
        <td><div align="left">한국공학교육인증원(ABEEK)으로부터 중간방문(IV) 평가 받음</div></td>
        <td>2009년</td>
      </tr>     
      <tr>
        <td class="num">ABEEK으로부터<br>중간방문평가 받음</td>
        <td><div align="left">한국공학교육인증원(ABEEK)으로부터 중간방문(IV) 평가 받음</div></td>
        <td>2011년</td>
      </tr>     
      <tr>
        <td class="num">ABEEK으로부터<br>중간방문평가 받음</td>
        <td><div align="left">한국공학교육인증원(ABEEK)으로부터 중간방문(IV) 평가 받음</div></td>
        <td>2013년</td>
      </tr>
      <tr>
        <td class="num">ABEEK으로부터<br>중간방문평가 받음</td>
        <td><div align="left">한국공학교육인증원(ABEEK)으로부터 중간방문(IV) 평가 받음</div></td>
        <td>2015년</td>
      </tr>
      <tr>
        <td class="num">ABEEK으로부터<br>중간방문평가 받음</td>
        <td><div align="left">한국공학교육인증원(ABEEK)으로부터 중간방문(IV) 평가 받음</div></td>
        <td>2017년</td>
      </tr>
      <tr>
        <td class="num">학과명칭변경</td>
        <td><div align="left">소프트웨어융합학과<br>(Department of Software and Communications  Engineering)</div></td>
        <td>2018 년</td>
      </tr>
    </tbody>
  </table>
    </div>
</div>
<!-- End Of Content -->




<!-- START Footer-->
<? Footer::render(); ?>

<script src="<?echo HOME_PATH?>/assets/vendor/jquery-1.11.3.min.js"></script>
<script src="<?echo HOME_PATH?>/assets/js/header.js"></script>
<script>
	$("#side-menu-item-b").addClass("hover");
</script>
<!-- End Of Footer-->
</body>
</html>
