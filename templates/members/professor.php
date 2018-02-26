<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/home/library/common.php';
// this is common library
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
			.main-container {
				position: absolute;
				background-color: #EFEEED;
				width: 1182px;
				height: 4650px;  /*330px 추가 삭제 하면 됨*/
				margin-left: -591px;
				top: 124px;
				left: 50%;
			}

			.footer {
				position: absolute;
				background-color: #EFEEED;
				width: 1182px;
				height: 124px;
				margin-left: -591px;
				left: 50%;
				top: 4770px; /*330px 추가삭제하면됨 */
			}
		</style>
	</head>
	<body>

		<!-- End Of Footer -->
		<? Header::render(); ?>
		<!-- START Content-->

		<div class="main-container">
			<div class="curriculum-content" >
				<div class="main_text">
					<h3>교수 소개</h3>
					<div id="ur_text">

						<p class="mr20 color4 font13">
							<strong>김장한 교수</strong>
						</p>
						<table width="670" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<th width="158" rowspan="8" scope="row"><img src="img/교수_김장한.jpg" alt="김장한 교수" width="138" height="176"></th>
									<td width="97" height="33">담당과목</td>
									<td width="407" height="33">통신이론, 디지털통신</td>
								</tr>

								<tr>
									<td>전공분야</td>
									<td height="25">통신시스템(Communication System)</td>
								</tr>
								<tr>
									<td>최종학위</td>
									<td height="25">홍익대학교 전자공학과, 공학박사</td>
								</tr>
								<tr>
									<td>전공연구실</td>
									<td height="25">통신 및 신호처리 연구실(Commuication &amp; Signal Processing Lab.)</td>
								</tr>
								<tr>
									<td>교수연구실</td>
									<td height="25">D401, Tel : 044-860-2592</td>
								</tr>
								<tr>
									<td>이메일</td>
									<td height="25"><a href="mailto:jkim1@hongik.ac.kr">jkim1@hongik.ac.kr</a><a href="mailto:hosung@hongik.ac.kr"></a></td>
								</tr>
								<tr>
									<td height="18">홈페이지</td>
									<td height="25">&nbsp;</td>
								</tr>
							</tbody>
						</table>
						<p class="mr05">
							&nbsp;
						</p>
						<p class="mr20 color4 font13">
							<strong>안홍영 교수</strong>
						</p>
						<table width="670" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<th width="158" rowspan="8" scope="row"><img src="img/교수_안홍영.jpg" alt="안홍영 교수" width="138" height="176"></th>
									<td width="97" height="33">담당과목</td>
									<td width="407" height="25">데이타통신, 컴퓨터네트워크</td>
								</tr>
								<tr>
									<td>전공분야</td>
									<td height="40">데이타통신 및 컴퓨터네트워크(Data Communication &amp; Computer Network</td>
								</tr>
								<tr>
									<td>최종학위</td>
									<td height="35">University of Florida, Dept. of Electrical &amp; Computer Engineering, 공학박사</td>
								</tr>
								<tr>
									<td>전공연구실</td>
									<td height="25">차세대 네트워크 연구실(Next Generation Networks Lab)</td>
								</tr>
								<tr>
									<td>교수연구실</td>
									<td height="25">D403, Tel : 044-860-2583</td>
								</tr>
								<tr>
									<td>이메일</td>
									<td height="25"><a href="mailto:hyahn@hongik.ac.kr">hyahn@hongik.ac.kr</a><a href="mailto:hosung@hongik.ac.kr"></a></td>
								</tr>
								<tr>
									<td height="18">홈페이지</td>
									<td height="25">&nbsp;</td>
								</tr>
							</tbody>
						</table>
						<p class="mr05">
							&nbsp;
						</p>
						<p class="mr20 color4 font13">
							<strong>지인호 교수 (과학기술대학장)</strong>
						</p>
						<table width="670" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<th width="158" rowspan="8" scope="row"><img src="img/교수_지인호.jpg" alt="지인호 교수" width="138" height="176"></th>
									<td width="97" height="37">담당과목</td>
									<td width="407" height="30">신호 및 시스템, 디지탈 신호처리</td>
								</tr>

								<tr>
									<td>전공분야</td>
									<td height="25">통신 및 신호처리(Commucation &amp; Signal Processing)</td>
								</tr>
								<tr>
									<td>최종학위</td>
									<td height="25">Polytechnic Univercity, Dept. of Electrical &amp; Computer Engineering</td>
								</tr>
								<tr>
									<td>전공연구실</td>
									<td height="25">통신 및 신호처리 연구실(Communication &amp; Signal Processing Lab.)</td>
								</tr>
								<tr>
									<td>교수연구실</td>
									<td height="25">D402, Tel : 044-860-2596</td>
								</tr>
								<tr>
									<td>이메일</td>
									<td height="25"><a href="mailto:ijee@hongik.ac.kr">ijee@hongik.ac.kr</a><a href="mailto:hosung@hongik.ac.kr"></a></td>
								</tr>
								<tr>
									<td height="18">홈페이지</td>
									<td height="25"><a href="http://signal.hongik.ac.kr" target="_black">http://signal.hongik.ac.kr/</a><a onclick="window.open('http://shinan.hongik.ac.kr/~Mmcl','',position='')" href="#"></a></td>
								</tr>
							</tbody>
						</table>
						<p class="mr05">
							&nbsp;
						</p>
						<p class="mr20 color4 font13">
							<strong>김영철 교수</strong>
						</p>
						<table width="670" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<th width="158" rowspan="8" scope="row"><img src="img/교수_김영철.jpg" alt="김영철 교수" width="138" height="176"></th>
									<td width="97" height="37">담당과목</td>
									<td width="407" height="30">소프트웨어공학, 데이타베이스</td>
								</tr>

								<tr>
									<td>전공분야</td>
									<td height="25">소프트웨어공학 및 데이타베이스(Software Engineering &amp; Database)</td>
								</tr>
								<tr>
									<td>최종학위</td>
									<td height="25">IIT, Dept. of Computer Science, 이학박사</td>
								</tr>
								<tr>
									<td>전공연구실</td>
									<td height="25">소프트웨어공학 연구실 (Software Engineering Lab.)</td>
								</tr>
								<tr>
									<td>교수연구실</td>
									<td height="25">D406, Tel : 044-860-2477</td>
								</tr>
								<tr>
									<td>이메일</td>
									<td height="25"><a href="mailto:bob@hongik.ac.kr">bob@hongik.ac.kr</a><a href="mailto:hosung@hongik.ac.kr"></a></td>
								</tr>
								<tr>
									<td height="18">홈페이지</td>
									<td height="25"><a href="http://selab.hongik.ac.kr" target="_black">http://selab.hongik.ac.kr/</a><a onclick="window.open('http://shinan.hongik.ac.kr/~Mmcl','',position='')" href="#"></a></td>
								</tr>
							</tbody>
						</table>
						<p class="mr05">
							&nbsp;
						</p>
						<p class="mr20 color4 font13">
							<strong>주복규 교수</strong>
						</p>
						<table width="670" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<th width="158" rowspan="8" scope="row"><img src="img/부교수_주복규.jpg" alt="주복규 교수" width="138" height="176"></th>
									<td width="97" height="37">담당과목</td>
									<td width="407">자료구조 및 프로그래밍, 소프트웨어 공학</td>
								</tr>

								<tr>
									<td>전공분야</td>
									<td height="25">소프트웨어공학(Software Engineering)</td>
								</tr>
								<tr>
									<td>최종학위</td>
									<td height="25">University of Maryland, Dept. of Computer Science, 공학박사</td>
								</tr>
								<tr>
									<td>전공연구실</td>
									<td height="25">소프트웨어공학 연구실 (Software Engineering Lab.)</td>
								</tr>
								<tr>
									<td>교수연구실</td>
									<td height="25">D405, Tel : 044-860-2547</td>
								</tr>
								<tr>
									<td>이메일</td>
									<td height="25"><a href="mailto:bkjoo@hongik.ac.kr">bkjoo@hongik.ac.kr</a><a href="mailto:hosung@hongik.ac.kr"></a></td>
								</tr>
								<tr>
									<td height="18">홈페이지</td>
									<td height="25">&nbsp;</td>
								</tr>
							</tbody>
						</table>
						<p class="mr05">
							&nbsp;
						</p>
						<p class="mr20 color4 font13">
							<strong>안병구 교수 (학과장, 산업기술연구소장)</strong>
						</p>
						<table width="670" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<th width="158" rowspan="8" scope="row"><img src="img/부교수_안병구.jpg" alt="안병구 부교수" width="138" height="176"></th>
									<td width="97" height="33">담당과목</td>
									<td width="407">인터넷공학, 컴퓨터네트워크</td>
								</tr>

								<tr>
									<td>전공분야</td>
									<td height="35">컴퓨터네트워크 및 모바일 무선네트워크(Computer Networks &amp; Mobile Wireless Network)</td>
								</tr>
								<tr>
									<td>최종학위</td>
									<td height="35">New Jersey Institute of Technology(NJIT), Dept. of Electrical &amp; Computer   Engineering, 공학박사</td>
								</tr>
								<tr>
									<td>전공연구실</td>
									<td height="35">유비쿼터스 네트워크 및 컨버젼스 연구실(Ubiquitous Network &amp; Convergence Lab.)</td>
								</tr>
								<tr>
									<td>교수연구실</td>
									<td height="25">D404, Tel : 044-860-2243</td>
								</tr>
								<tr>
									<td>이메일</td>
									<td height="25"><a href="mailto:beongku@hongik.ac.kr">beongku@hongik.ac.kr</a><a href="mailto:hosung@hongik.ac.kr"></a></td>
								</tr>
								<tr>
									<td height="18">홈페이지</td>
									<td height="25"><a href="http://unclab.hongik.ac.kr" target="_black">http://unclab.hongik.ac.kr</a></td>
								</tr>
							</tbody>
						</table>
						<p class="mr05">
							&nbsp;
						</p>

						<p class="mr20 color4 font13">
							<strong>임찬숙 부교수 (전산부장)</strong>
						</p>
						<table width="670" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<th width="158" rowspan="8" scope="row"><img src="img/부교수_임찬숙.jpg" alt="임찬숙 부교수" width="138" height="176"></th>
									<td width="97" height="30">담당과목</td>
									<td width="407">알고리즘, 디지털공학</td>
								</tr>

								<tr>
									<td>전공분야</td>
									<td height="25">모바일 네트워크(Mobile Network)</td>
								</tr>
								<tr>
									<td>최종학위</td>
									<td height="25">University of Southern California, Dept. of Computer Science, 이학박사</td>
								</tr>
								<tr>
									<td>전공연구실</td>
									<td height="25">멀티미디어 통신 연구실(Telematique Lab)</td>
								</tr>
								<tr>
									<td>교수연구실</td>
									<td height="25">D504, Tel : 044-860-2549</td>
								</tr>
								<tr>
									<td>이메일</td>
									<td height="25"><a href="mailto:chansooklim@hongik.ac.kr">chansooklim@hongik.ac.kr</a><a href="mailto:hosung@hongik.ac.kr"></a></td>
								</tr>
								<tr>
									<td height="18">홈페이지</td>
									<td height="25">&nbsp;</td>
								</tr>
							</tbody>
						</table>
						<p class="mr05">
							&nbsp;
						</p>

						<p class="mr20 color4 font13">
							<strong>김병서 부교수 (대학원 교학부장)</strong>
						</p>
						<table width="670" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<th width="158" rowspan="8" scope="row"><img src="img/pro_kimbyungseo.jpg" alt="김병서 부교수" width="138" height="176"></th>
									<td width="97" height="33">담당과목</td>
									<td width="407">신호 및 시스템, 프로그래밍 언어</td>
								</tr>

								<tr>
									<td>전공분야</td>
									<td height="25">무선 네트워크(Wireless Networks)</td>
								</tr>
								<tr>
									<td>최종학위</td>
									<td height="35">University of Florida, Dept. of Electrical &amp; Computer Engineering, 공학박사</td>
								</tr>
								<tr>
									<td>전공연구실</td>
									<td height="25">광대역융합네트워크연구실</td>
								</tr>
								<tr>
									<td>교수연구실</td>
									<td height="25">D203, Tel : 044-860-2539</td>
								</tr>
								<tr>
									<td>이메일</td>
									<td height="25"><a href="mailto:jsnbs@hongik.ac.kr">jsnbs@hongik.ac.kr</a><a href="mailto:hosung@hongik.ac.kr"></a></td>
								</tr>
								<tr>
									<td height="18">홈페이지</td>
									<td height="25"><a href="http://shinan.hongik.ac.kr/~jsnbs" target="_black">shinan.hongik.ac.kr/~jsnbs</a></td>
								</tr>
							</tbody>
						</table>
						<p class="mr05">
							&nbsp;
						</p>
						<p class="mr20 color4 font13">
							<strong>황성운 부교수</strong>
						</p>
						<table width="670" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<th width="158" rowspan="8" scope="row"><img src="img/부교수_황성운.jpg" alt="황성운 부교수" width="138" height="176"></th>
									<td width="97" height="29">담당과목</td>
									<td width="407">알고리즘, 소프트웨어공학, 정보보호</td>
								</tr>

								<tr>
									<td>전공분야</td>
									<td height="25">정보보호, 로보틱스, 계산이론, 바이오인포매틱스</td>
								</tr>
								<tr>
									<td>최종학위</td>
									<td height="25">한국과학기술원 전자전산학과, 공학박사</td>
								</tr>
								<tr>
									<td>전공연구실</td>
									<td height="25">Information Security &amp; Robotics Lab</td>
								</tr>
								<tr>
									<td>교수연구실</td>
									<td height="25">D205, Tel : 044-860-2298</td>
								</tr>
								<tr>
									<td>이메일</td>
									<td height="25"><a href="mailto:sohwang@hongik.ac.kr">sohwang@hongik.ac.kr</a><a href="mailto:hosung@hongik.ac.kr"></a></td>
								</tr>
								<tr>
									<td height="18">홈페이지</td>
									<td height="25"><a href="http://shinan.hongik.ac.kr/~sohwang" target="_black">http://shinan.hongik.ac.kr/~sohwang</a></td>
								</tr>
							</tbody>
						</table>
						<p class="mr05">
							&nbsp;
						</p>
										

						<p class="mr20 color4 font13">
							<strong>정은성 조교수</strong>
						</p>
						<table width="670" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<th width="158" rowspan="8" scope="row"><img src="img/assistan_professor_jung.jpg" alt="" width="138" height="176"></th>
									<td width="97" height="29">담당과목</td>
									<td width="407">자료구조 및 프로그래밍, 디지털 공학,  객체지향 설계</td>
								</tr>

								<tr>
									<td>전공분야</td>
									<td height="25">고성능 컴퓨팅(High-performance computing), 컴퓨터 네트워크 (Computer networks), 실시간 시스템 및 운영체제 (Real-time systems and operating systems)</td>
								</tr>
								<tr>
									<td>최종학위</td>
									<td height="25">University of Florida, Dept.of Computer and Information Science&amp;Engr.공학박사</td>
								</tr>
								<tr>
									<td>전공연구실</td>
									<td height="25"><a href="" target="_black"></a>High-Performane Data Processing and Analysis Lab.</td>
								</tr>
								<tr>
									<td>교수연구실</td>
									<td height="25">D110, Tel : 044-860-2128</td>
								</tr>
								<tr>
									<td>이메일</td>
									<td height="25"><a href="mailto:ejung@hongik.ac.kr">ejung@hongik.ac.kr</a><a href="mailto:ejung@hongik.ac.kr"></a></td>
								</tr>
								<tr>
									<td height="18">홈페이지</td>
									<td height="25"><a href="http://hpclab.hongik.ac.kr " target="_black">http://hpclab.hongik.ac.kr </a></td>
								</tr>
							</tbody>
						</table>
						<p class="mr05">
							&nbsp;
						</p>

						<p class="mr20 color4 font13">
							<strong>장호성 교수 (명예교수)</strong>
						</p>
						<table width="670" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<th width="159" rowspan="8" scope="row"><img src="img/교수_장호성.jpg" alt="장호성 교수" width="138" height="176"></th>
									<td width="96"> 담당과목</td>
									<td width="407" height="30">디지털 공학, 전자회로</td>
								</tr>

								<tr>
									<td>전공분야</td>
									<td height="25">컴퓨터 음성인식(Computer Speech Recongnition)</td>
								</tr>
								<tr>
									<td>최종학위</td>
									<td height="25">단국대학교 전자공학과, 공학박사</td>
								</tr>
								<tr>
									<td>전공연구실</td>
									<td height="25">멀티미디어 통신 연구실(Telematique Lab)</td>
								</tr>
								<tr>
									<td>교수연구실</td>
									<td height="25">D301, Tel : 044 - 860 - 2591</td>
								</tr>
								<tr>
									<td>이메일</td>
									<td height="25"><a href="mailto:hosung@hongik.ac.kr">hosung@hongik.ac.kr</a></td>
								</tr>
								<tr>
									<td height="26">홈페이지</td>
									<td height="26">&nbsp;</td>
								</tr>
							</tbody>
						</table>
						<p class="mr05">
							&nbsp;
						</p>
 <p class="mr20 color4 font13">
                                                        <strong>유철희 교수(초빙교수)</strong>
                                                </p>
                                                <table width="670" border="0" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                        <tr>
                                                                <th width="159" rowspan="8" scope="row"><img src="img/pro_yuch.jpg" alt="유철희 교수" width="138" height="176"></th>
                                                                <td width="96"> 담당과목</td>
                                                                <td width="407" height="30">컴퓨터정보통신공학 개론</td>
                                                        </tr>

                                                        <tr>
                                                                <td>전공분야</td>
                                                                <td height="25">NCW, 상호운용성</td>
                                                        </tr>
                                                        <tr>
                                                                <td>최종학위</td>
                                                                <td height="25">공학박사</td>
                                                        </tr>
                                                        <tr>
                                                                <td>전공연구실</td>
                                                                <td height="25"></td>
                                                        </tr>
                                                        <tr>
                                                                <td>교수연구실</td>
                                                                <td height="25"></td>
                                                        </tr>
                                                        <tr>
                                                                <td>이메일</td>
                                                                <td height="25"><a href="mailto:chulhiyu@hanmail.net">chulhiyu@hanmail.net</a></td>
                                                        </tr>
                                                        <tr>
                                                                <td height="26">홈페이지</td>
                                                                <td height="26">&nbsp;</td>
                                                        </tr>
                                                        </tbody>
                                                </table>
						<p class="mr05">
                                                        &nbsp;
                                                </p>

							 <p class="mr20 color4 font13">
                                                        <strong>변옥환 교수 (초빙교수)</strong>
                                                </p>
                                                <table width="670" border="0" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                                <tr>
                                                                        <th width="159" rowspan="8" scope="row"><img src="img/professor_beon.jpg" alt="변옥환 교수" width="138" height="176"></th>
                                                                        <td width="96"> 담당과목</td>
                                                                        <td width="407" height="30">UML기반 객체지향 모델링ICT융합특론</td>
                                                                </tr>

                                                                <tr>
                                                                        <td>전공분야</td>
                                                                        <td height="25">컴퓨터네트워크, ICT융합시스템</td>
                                                                </tr>
                                                                <tr>
                                                                        <td>최종학위</td>
                                                                        <td height="25">경희대학교 전자공학과, 공학박사</td>
                                                                </tr>
                                                                <tr>
                                                                        <td>전공연구실</td>
                                                                        <td height="25"></td>
                                                                </tr>
                                                                <tr>
                                                                        <td>교수연구실</td>
                                                                        <td height="25">D206-1, Tel:044-860-2622</td>
                                                                </tr>
                                                                <tr>
                                                                        <td>이메일</td>
                                                                        <td height="25"><a href="">ohbyeon@hongik.ac.kr</a></td>
                                                                </tr>
                                                                <tr>
                                                                        <td height="26">홈페이지</td>
                                                                        <td height="26">&nbsp;</td>
                                                                </tr>
                                                        </tbody>
                                                </table>
                                                <p class="mr05">
                                                        &nbsp;
                                                </p>

           
					</div>
				</div>
			</div>
			<? Side::render('members'); ?>
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
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] ||
				function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

			ga('create', 'UA-66909995-1', 'auto');
			ga('send', 'pageview');

		</script>
	</body>
</html>
