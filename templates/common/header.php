<?php

if(session_id() == '') {
    session_start();
}
include_once dirname(__FILE__).'/../../config/db.php'; // this is common library
/**
		* 상단 정보 화면 ( 메뉴들 )
		@package templates/common/header.php
		@filesource
		@author GiPyeongLee <lkp0907@gmail.com>
 		@editor SeungwanJo	<wh7923@gmail.com>
		@copyright 2015 Hongik University Computer Information Communication
		@version [ 1.0.1 ]
	*/

class Header{
	public static function render(){
		
		echo '<div class="header">
			    <div class="high-top-nav-bar">
			        <div class="high-top-nav-item"><a href="/home/templates/contact/contact/contact">CONTACT</a></div>';
		
			if(isset($_SESSION["session_id"])){
				$id = $_SESSION["session_id"];
				$query="select id from member where id='$id'";
				$result = mysql_query($query) or die('쿼리 실패 : ' . mysql_error());
				$row = mysql_fetch_array($result, MYSQL_NUM);

				echo '<div class="high-top-nav-item"><a href="'.TEMPLATES_PATH.'/login/logout">LOGOUT</a></div><div class="high-top-nav-item">'.$row[0].'님 </div>';
			}else{
				//echo '<div class="high-top-nav-item"><a href="'.TEMPLATES_PATH.'/login/login">LOGIN</a></div>';

			}
			        		echo  '</div>
			    <div class="top-nav-bar-bg"></div>
			    <div class="top-nav-bar">
			        <a href="'.HOME_PATH.'"><div class="top-nav-item logo"></div></a>
			        <ul id="navbar">
			            <li><a href="'.TEMPLATES_PATH.'/introduce/greeting">학과소개</a>
			                <ul>
			                    <li><a href="'.TEMPLATES_PATH.'/introduce/greeting">학과장 인사말</a></li>
			                    <li><a href="'.TEMPLATES_PATH.'/introduce/history">학과연혁</a></li>
			                    <li><a href="'.TEMPLATES_PATH.'/introduce/intro">학과소개</a></li>
			                    <li><a href="'.TEMPLATES_PATH.'/introduce/goals">교육목표</a></li>
			                    <li><a href="'.TEMPLATES_PATH.'/introduce/procedure">교육목표 수립 및 절차</a></li>
			                    <li><a href="'.TEMPLATES_PATH.'/introduce/employment">취업분야 및 취업률</a></li>
			                </ul>
			            </li>
			            <li><a href="'.TEMPLATES_PATH.'/curriculum/curriculum">교육과정</a>
			                <ul>
			                    <li><a href="'.TEMPLATES_PATH.'/curriculum/curriculum">교과과정</a></li>
			                    <li><a href="'.TEMPLATES_PATH.'/curriculum/courses">설계/대체 교과목</a></li>
			                    <li><a href="'.TEMPLATES_PATH.'/curriculum/required">전공/인증필수</a></li>
			                    <li><a href="'.TEMPLATES_PATH.'/curriculum/summary">전공 교과목개요</a></li>
			                    <li><a href="'.TEMPLATES_PATH.'/curriculum/standard">공학인증 졸업기준</a></li>
			                    <li><a href="'.TEMPLATES_PATH.'/curriculum/sysgraph">이수체계도</a></li>
					    <li><a href="'.TEMPLATES_PATH.'/curriculum/sysgraph">프로그램 이수내규(DownLink)</a></li>
			                </ul>
			            </li>
			            <li><a href="'.TEMPLATES_PATH.'/members/professor">구성원</a>
			                <ul>
			                    <li><a href="'.TEMPLATES_PATH.'/members/professor">교수 소개</a></li>
			                    <li><a href="'.TEMPLATES_PATH.'/members/assistant">조교 소개</a></li>
			                    <li><a href="'.TEMPLATES_PATH.'/members/schoolmember">학생회 소개</a></li>
			                    <!--<li><a href="'.TEMPLATES_PATH.'/members/student">학생회 소개</a></li>-->
			                </ul>
			            </li>
			            <li><a href="'.TEMPLATES_PATH.'/community/bbs?select=1">커뮤니티</a>
			                <ul>
			                    <li><a href="'.TEMPLATES_PATH.'/community/bbs?select=1">공지사항</a></li>
			                    <li><a href="'.TEMPLATES_PATH.'/community/bbs?select=2">학과소식</a></li>
			                    <li><a href="'.TEMPLATES_PATH.'/community/bbs?select=3">취업게시판</a></li>
			                    <li><a href="'.TEMPLATES_PATH.'/community/bbs?select=4">졸업게시판</a></li>
			                    <li><a href="'.TEMPLATES_PATH.'/community/bbs?select=5">자료실</a></li>
			                </ul>
			            </li>
			            <li><a href="#">대학원</a>
			                <ul>
			                    <li><a target="_blank" href="http://signal.hongik.ac.kr">통신 신호처리 연구실</a></li>
			                    <li><a target="_blank" href="http://unclab.hongik.ac.kr">유비쿼터스 네트워크/컨버전스 연구실</a></li>
			                    <li><a target="_blank" href="http://selab.hongik.ac.kr">소프트웨어공학 연구실</a></li>
			                    <li><a target="_blank" href="http://bcnlab.hongik.ac.kr/">광대역융합네트워크연구실</a></li>
			                    <li><a target="_blank" href="http://shinan.hongik.ac.kr/~sohwang/">정보보호 및 로보틱스 연구실</a></li>
			                    <li><a target="_blank" href="http://hpclab.hongik.ac.kr/">고성능 데이터 처리 및 분석 연구실</a></li>
			                </ul>
			            </li>
			        </ul>
			    </div>
			</div>';
			
	}
}

