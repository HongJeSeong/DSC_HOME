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
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/curriculum.css">
    <style>
	    .main-container{
	position:absolute;
	background-color: #EFEEED;
	width: 1182px;
	height : 3320px;
	margin-left:-591px;
	top:124px;
	left:50%;
}	

.footer{
	position:absolute;
	background-color: #EFEEED;
	width: 1182px;
	height : 124px;
	margin-left:-591px;
	left:50%;
	top:3444px;
}
    </style>
</head>
<body>

<!-- End Of Footer -->
<?Header::render();?>
<!-- START Content-->

<div class="main-container">
    <div class="curriculum-content" >
    <div class="main_text">
		  <h3>교과과정</h3>
	  <p class="font13 mr20 bold style9">1학년</p>
	  <table width="670" border="0" cellspacing="0" cellpadding="0" summary="교과과정테이블" style="margin-bottom:20px">
        <tbody><tr>
          <th colspan="3" rowspan="2" scope="col">이수구분</th>
          <th width="152" rowspan="2" scope="col">교과목</th>
          <th width="58" rowspan="2" scope="col">학수번호</th>
          <th height="23" colspan="2" scope="col">1학기</th>
          <th width="58" rowspan="2" scope="col">학수번호</th>
          <th colspan="2" scope="col">2학기</th>
          <th width="125" rowspan="2" scope="col">비고(변경 전 교과목 현황)</th>
        </tr>
        <tr>
          <th width="30" height="20" align="center">학점
          </th><th width="30" align="center">시수
          </th><th width="30" align="center">학점
          </th><th width="30" align="center">시수
        </th></tr>
        <tr>
          <th width="31" rowspan="6" scope="row"><p>기</p>
          <p>본</p>
          <p>소</p>
          <p>양</p></th>
          <td width="31" rowspan="3" align="center">기초<br>교양</td>
          <td width="32" rowspan="2" align="center">필수</td>
          <td height="20">논리적사고와글쓰기(공학), 공학글쓰기중 택1 영어</td>
          <td align="center">001012,001020</td>
          <td align="center">3</td>
          <td align="center">4</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td rowspan="17" align="left" valign="middle"><p>* 학기변경:</p>
		<font style="font-size:11px">▶컴퓨터정보통신학개론</font><br>
		<font style="font-size:11px">:1→2</font></td>
        </tr>
        <tr>
          <td height="20">영어</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">001009</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
        <tr>
          <td height="20" align="center">선택</td>
          <td>대학생활세미나</td>
          <td align="center">004004</td>
          <td align="center">1</td>
          <td align="center">1</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
        </tr>
        <tr>
          <td colspan="2" rowspan="2" align="center">일반교양</td>
          <td height="20">사회와 경제(2영역) 경제학입문</td>
		  <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
		  <td align="center">002442</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
        <tr>
          <td height="20">역사와 철학(3영역) 동양사의이해</td>
		  <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
		  <td align="center">002586</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
        <tr>
          <td colspan="2" rowspan="1" align="center">핵심교양</td>
          <td height="20">공학의이해(7영역) 컴퓨터정보통신공학개론</td>
		  <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
		  <td align="center">004176</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
        <tr>
          <th rowspan="10" scope="row">MSC</th>
          <td colspan="2" rowspan="2" align="center">수학</td>
          <td height="20">대학수학(1)</td>
          <td align="center">012201</td>
          <td align="center">3</td>
          <td align="center">3</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
        </tr>
        <tr>
          <td height="20">대학수학(2)</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">012202</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
        <tr>
          <td colspan="2" rowspan="6" align="center">과학</td>
          <td height="20">대학물리(1)</td>
          <td align="center">012102</td>
          <td align="center">3</td>
          <td align="center">3</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
        </tr>
        <tr>
          <td height="20">대학물리실험(1)</td>
          <td align="center">012103</td>
          <td align="center">1</td>
          <td align="center">2</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
        </tr>
        <tr>
          <td height="20">대학화학(1)</td>
          <td align="center">012108</td>
          <td align="center">3</td>
          <td align="center">3</td>
          <td align="center">부학기</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
        <tr>
          <td height="20">대학화학실험(1)</td>
          <td align="center">012109</td>
          <td align="center">1</td>
          <td align="center">2</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
        </tr>
        <tr>
          <td height="20">대학물리(2)</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">012105</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
        <tr>
          <td height="20">대학물리실험(2)</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">012106</td>
          <td align="center">1</td>
          <td align="center">2</td>
        </tr>
        <tr>
          <td colspan="2" rowspan="2" align="center">전산</td>
          <td height="20">공학컴퓨터입문 및 실습</td>
          <td align="center">012301</td>
          <td align="center">3</td>
          <td align="center">3</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
        </tr>
        <tr>
          <td height="20">C-프로그래밍</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">101810</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
        <tr>
          <th height="20" colspan="3" align="center">전공선택
          </th><td align="center">회로이론</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
		  <td align="center">-</td>
          <td align="center">704305</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
        <tr>
          <th height="20" colspan="4" scope="row">개설학점계</th>
          <td align="center">&nbsp;</td>
          <td align="center">18</td>
          <td align="center">21</td>
          <td align="center">&nbsp;</td>
          <td align="center">28</td>
          <td align="center">29</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th height="20" colspan="4" scope="row">일반선택학점계</th>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th height="20" colspan="4" scope="row">이수학점계</th>
          <td align="center">&nbsp;</td>
          <td align="center">19</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">19</td>
          <td align="center">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </tbody></table><p class="style6">
		※ 기본소양 권장교과목 : 사회와경제(경제학입문), 역사와문화(동양사의이해), 공학의이해(컴퓨터정보통신공학개론)</p>
      <p class="font13 mr20 bold style9">2학년</p>
      <table width="670" border="0" cellspacing="0" cellpadding="0" summary="교과과정테이블" style="margin-bottom:20px">
          <tbody><tr>
          <th colspan="3" rowspan="2" scope="col">이수구분</th>
          <th width="152" rowspan="2" scope="col">교과목</th>
          <th width="58" rowspan="2" scope="col">학수번호</th>
          <th height="23" colspan="2" scope="col">1학기</th>
          <th width="58" rowspan="2" scope="col">학수번호</th>
          <th colspan="2" scope="col">2학기</th>
          <th width="175" rowspan="2" scope="col">비고(변경 전 교과목 현황)</th>
        </tr>
        <tr>
          <th width="30" height="20" align="center">학점
          </th><th width="30" align="center">시수
          </th><th width="30" align="center">학점
          </th><th width="30" align="center">시수
        </th></tr>
        <tr>
          <th height="30" colspan="2" align="center">기본<br>소양</th>
          <td width="30" align="center">일반 교양</td>
          <td height="30">예술과 생활(4영역)<br>
		  	 현대생활과디자인
			 </td>
          <td align="center">002059</td>
          <td align="center">3</td>
          <td align="center">3</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td rowspan="14" align="left" valign="middle"><p>* 명칭변경 : </p>
		  <font style="font-size:11px">▶  객체지향프로그래밍 및 실습</font><br>
		  <font style="font-size:11px">→ 자바프로그래밍 및 실습</font><br><br>
		  <font style="font-size:11px">▶ 전자회로</font><br>
		  <font style="font-size:11px">→ 전자시스템</font><br><br>
		  <font style="font-size:11px">▶ 인터넷공학</font><br>
                  <font style="font-size:11px">→ 인터넷공학(1)</font><br>
		  </td>
        </tr>
        <tr>
          <th colspan="2" rowspan="4" scope="row">MSC</th>
          <td rowspan="3" scope="row">수학</td>
          <td height="20">응용수학(1)</td>
          <td align="center">012203</td>
          <td align="center">3</td>
          <td align="center">3</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
        </tr>
        <tr>
          <td height="18">응용수학(2)</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">012204</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
        <tr>
          <td height="17">이산수학</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">012206</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
		<tr>
          <td height="17" scope="row">전산</td>
          <td>웹프로그래밍</td>
          <td align="center">012306</td>
          <td align="center">3</td>
          <td align="center">3</td>
		  <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
        </tr>
        <tr>
          <th colspan="3" rowspan="4" scope="row"><p align="center">전공</p>
          <p align="center">필수</p></th>
          <td height="20">자료구조 및 프로그래밍 실습 </td>
          <td align="center">704818</td>
          <td align="center">3</td>
          <td align="center">4</td>
          <td align="center">부학기</td>
          <td align="center">3</td>
          <td align="center">4</td>
        </tr>
        <tr>
          <td height="20">기초컴퓨터정보통신실험<br>(아날로그)</td>
          <td align="center">704307</td>
          <td align="center">2</td>
          <td align="center">3</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
        </tr>
        <tr>
          <td height="20">신호 및 시스템 </td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">704406</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
        <tr>
          <td height="20">기초컴퓨터정보통신실험<br>(디지털)</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">704412</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
        <tr>
          <th colspan="3" rowspan="6" scope="row"><p align="center">전공</p>
          <p align="center">선택</p></th>
          <td height="20">* 창의적 공학설계 입문 </td>
          <td align="center">725843</td>
          <td align="center">2</td>
          <td align="center">2</td>
          <td align="center">부학기</td>
          <td align="center">2</td>
          <td align="center">2</td>
        </tr>
        <tr>
          <td height="20">디지털공학</td>
          <td align="center">704509</td>
          <td align="center">3</td>
          <td align="center">3</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
        </tr>
        <tr>
          <td height="20">전자시스템</td>
          <td align="center">704830</td>
          <td align="center">3</td>
          <td align="center">3</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
        </tr>
        <tr>
          <td height="20">인터넷공학(1)</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">704831</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
        <tr>
          <td height="20">자바프로그래밍 및 실습</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">704827</td>
          <td align="center">3</td>
          <td align="center">4</td>
        </tr>
        <tr>
          <td height="20">컴퓨터구조</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">704410</td>
          <td align="center">3</td>
          <td align="center">3</td>
		  <td>&nbsp;</td>
        </tr>
        <tr>
          <th height="20" colspan="4" scope="row">개설학점계</th>
          <td align="center">&nbsp;</td>
          <td align="center">22</td>
          <td align="center">24</td>
          <td align="center">&nbsp;</td>
          <td align="center">26</td>
          <td align="center">28</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th height="20" colspan="4" scope="row">일반선택학점계</th>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th height="20" colspan="4" scope="row">이수학점한계</th>
          <td align="center">&nbsp;</td>
          <td align="center">19</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">19</td>
          <td align="center">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </tbody></table><p class="style6">
※ 과학기술대학 공통 전공선택 권장교과목 : *창의적 공학설계 입문<br>
※ 기본소양 권장교과목 : 예술과 철학(현대생활과 디자인)</p>

      <p class="font13 mr20 bold style9">3학년</p>
         <table width="670" border="0" cellspacing="0" cellpadding="0" summary="교과과정테이블" style="margin-bottom:20px">
       <tbody><tr>
          <th colspan="3" rowspan="2" scope="col">이수구분</th>
          <th width="152" rowspan="2" scope="col">교과목</th>
          <th width="58" rowspan="2" scope="col">학수번호</th>
          <th height="23" colspan="2" scope="col">1학기</th>
          <th width="58" rowspan="2" scope="col">학수번호</th>
          <th colspan="2" scope="col">2학기</th>
          <th width="175" rowspan="2" scope="col">비고(변경 전 교과목 현황)</th>
        </tr>
        <tr>
          <th width="30" height="20" align="center">학점</th>
          <th width="30" align="center">시수</th>
          <th width="30" align="center">학점</th>
          <th width="30" align="center">시수</th>
        </tr>
        <tr>
          <th width="30" height="30" colspan="2" rowspan="2" align="center">기본<br>소양</th>
          <td width="30" rowspan="1" align="center">일반<br>교양</td>
 	  <td height="30">언어와논리(1영역) 교양한문(1)</td>
	  <td align="center">002605</td>
          <td align="center">3</td>
          <td align="center">3</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
	  </tr>
	<tr>
	   <td width="30" rowspan="1" align="center">핵심<br>교양</td>
          <td height="30">의사소통(8영역)공학의사소통</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">04182</td>
          <td align="center">3</td>
          <td align="center">3</td>
           <td rowspan="14" align="left" valign="middle"><p>* 명칭변경 : </p>
                  <font style="font-size:11px">▶  객체지향설계  및 실습</font><br>
                  <font style="font-size:11px">→ 디자인패턴프로그래밍  및 실습</font><br><br>
                  <font style="font-size:11px">▶ 컴퓨터네트워크</font><br>
                  <font style="font-size:11px">→ 인터넷공학(2)</font><br><br>
                  <font style="font-size:11px">▶ 통신시스템실험</font><br>
                  <font style="font-size:11px">→ 통신프로그래밍<br> 시수변경(4 → 3)</font><br><br>
		  <font style="font-size:11px">▶ 오픈소스소프트웨어</font><br>
		  <font style="font-size:11px">학점변경 (2 → 3)</font>
                  </td>

        </tr>
         <th height="18" colspan="2" scope="row">MSC</th>
          <td scope="row">수학</td>
          <td>선형대수학</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">012205</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
        <tr>
          <th colspan="3" rowspan="1" scope="row">
            <p align="center">전공필수</p></th>
          <td height="20">알고리즘 및 실습</td>
          <td align="center">704826</td>
          <td align="center">4</td>
          <td align="center">4</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
        </tr>
        <tr>
          <th colspan="3" rowspan="10" scope="row"><p align="center">&nbsp;</p>
            <p align="center">전공</p>
          <p align="center">선택</p></th>
          <td height="20">통신이론</td>
          <td align="center">704514</td>
          <td align="center">3</td>
          <td align="center">3</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
        </tr>
        <tr>
          <td height="20">운영체제</td>
          <td align="center">704512</td>
          <td align="center">3</td>
          <td align="center">3</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
        </tr>
        <tr>
          <td height="20">디자인패턴프로그래밍및실습</td>
          <td align="center">704828</td>
          <td align="center">3</td>
          <td align="center">4</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
        </tr>
        <tr>
          <td height="20">인터넷공학(2)</td>
          <td align="center">704832</td>
          <td align="center">3</td>
          <td align="center">3</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
        </tr>
        <tr>
          <td height="20">확률 및 불규칙 변수</td>
          <td align="center">704502</td>
          <td align="center">3</td>
          <td align="center">3</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
        </tr>
        <tr>
          <td height="20">데이터베이스 및 실습</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">704822</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
        <tr>
          <td height="20">통신프로그래밍</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">미정</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
        <tr>
          <td height="20">네트워크실험</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">704511</td>
          <td align="center">3</td>
          <td align="center">4</td>
        </tr>
        <tr>
          <td height="20">오픈소스소프트웨어</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">704833</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
		<tr>
          <td height="20">데이터 사이언스</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">704816</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
        <tr>
          <th height="20" colspan="4" scope="row">개설학점계</th>
          <td align="center">&nbsp;</td>
          <td align="center">22</td>
          <td align="center">23</td>
          <td align="center">&nbsp;</td>
          <td align="center">21</td>
          <td align="center">22</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th height="20" colspan="4" scope="row">일반선택학점계</th>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th height="20" colspan="4" scope="row">이수학점한계</th>
          <td align="center">&nbsp;</td>
          <td align="center">19</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">19</td>
          <td align="center">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </tbody></table><p class="style6">
※ 기본소양 권장교과목 : 언어와논리(교양한문(1)), 의사소통(공학의사소통)<br>


      <p class="font13 mr20 bold style9">4학년</p>
        <table width="670" border="0" cellspacing="0" cellpadding="0" summary="교과과정테이블" style="margin-bottom:20px">
        <tbody><tr>
          <th colspan="2" rowspan="2" scope="col">이수구분</th>
          <th width="142" rowspan="2" scope="col">교과목</th>
          <th width="60" rowspan="2" scope="col">학수번호</th>
          <th height="20" colspan="2" scope="col">1학기</th>
          <th width="60" rowspan="2" scope="col">학수번호</th>
          <th colspan="2" scope="col">2학기</th>
          <th width="170" rowspan="2" scope="col">비고(변경 전 교과목 현황)</th>
        </tr>
        <tr>
          <th width="30" height="20" align="center">학점</th>
          <th width="30" align="center">시수</th>
          <th width="30" align="center">학점</th>
          <th width="30" align="center">시수</th>
        </tr>
        <tr>
          <th align="center">기본<br>소양</th>
          <th align="center">핵심<br>교양</th>
          <td>산업과 경영(6영역) <br> 공업경영</td>
          <td align="center">004184</td>
          <td align="center">3</td>
          <td align="center">3</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td rowspan="11" align="left" valign="middle">
		  <font style="font-size:11px">▶ 종합설계</font><br>
		  <font sty;e="font-size:11px">(학점변경 : 4 → 3)</font><br><br>
		  <font style="font-size:11px">▶ 분산시스템프로그래밍</font><br>
                  <font style="font-size:11px">→ 분산컴퓨팅및블록체인<br>(시수변경 : 4 → 3)</font>
		  </td>
        </tr>
        <tr>
          <th colspan="2" rowspan="1" scope="row" align="center"><p>전공 필수</p></th>
          <td>종합설계(2)</td>
          <td height="20" align="center">부학기</td>
          <td align="center">3</td>
          <td align="center">4</td>
          <td align="center">704814</td>
          <td align="center">3</td>
          <td align="center">4</td>
        </tr>
		
        <tr>
          <th colspan="2" rowspan="9" scope="row"><p align="center">&nbsp;</p>
            <p align="center">전공</p>
          <p align="center">선택</p></th> 
          <td height="20">종합설계(1)</td>
          <td align="center">704711</td>
          <td align="center">3</td>
          <td align="center">4</td>
          <td align="center">부학기</td>
          <td align="center">3</td>
          <td align="center">4</td>
        </tr>
        
        <tr>
          <td height="20">모바일 시스템 융합 및 실습</td>
          <td align="center">704817</td>
          <td align="center">3</td>
          <td align="center">3</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
        </tr>
        <tr>
          <td height="20">디지털신호처리</td>
          <td align="center">704709</td>
          <td align="center">3</td>
          <td align="center">3</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
        </tr>
        <tr>
          <td height="20">소프트웨어공학</td>
          <td align="center">704805</td>
          <td align="center">3</td>
          <td align="center">3</td>
		  <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
        </tr>
        <tr>
          <td height="20">컴퓨터보안</td>
          <td align="center">704811</td>
          <td align="center">3</td>
          <td align="center">3</td>
		  <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
        </tr>
		<tr>
          <td height="20">안드로이드프로그래밍 및 실습</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
		  <td align="center">704825</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
		<tr>
          <td height="20">분산컴퓨팅 및 블록체인</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">미정</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
        <tr>
          <td height="20">무선통신망</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">704812</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
        <tr>
          <td height="20">멀티미디어통신</td>
          <td align="center">&nbsp;</td>
          <td align="center">-</td>
          <td align="center">-</td>
          <td align="center">704813</td>
          <td align="center">3</td>
          <td align="center">3</td>
        </tr>
        <tr>
          <th height="20" colspan="3" scope="row">개설학점계</th>
          <td align="center">&nbsp;</td>
          <td align="center">21</td>
          <td align="center">23</td>
          <td align="center">&nbsp;</td>
          <td align="center">18</td>
          <td align="center">20</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th height="20" colspan="3" scope="row">일반선택학점계</th>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">1</td>
          <td align="center">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th height="20" colspan="3" scope="row">이수학점한계</th>
          <td align="center">&nbsp;</td>
          <td align="center">20</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">20</td>
          <td align="center">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </tbody></table>
<p class="style6">※ 기본소양 권장교과목 : 산업과경영(공업경영)</p><br>

	</div>
    </div>
    	<?Side::render('curriculum');?>
</div>
<!-- End Of Content -->



<!-- START Footer-->
<? Footer::render(); ?>

<script src="<?echo HOME_PATH?>/assets/vendor/jquery-1.11.3.min.js"></script>
<script src="<?echo HOME_PATH?>/assets/js/header.js"></script>
<script>
	$("#side-menu-item-a").addClass("hover");
</script>
<!-- End Of Footer-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92073995-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
