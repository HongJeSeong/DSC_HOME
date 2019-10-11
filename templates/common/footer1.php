<?php
/**
		* 하단 정보 화면 
		@package templates/common/footer.php
		@filesource
		@author GiPyeongLee <lkp0907@gmail.com>
 		@editor SeungwanJo	<wh7923@gmail.com>
		@copyright 2015 Hongik University Computer Information Communication
		@version [ 1.0.0 ]
	**/

class Footer {
	public static function render(){
			echo '<div class="footer">
						    <div class="content">
						        <div class="bar"></div>
						        <div class="logo"></div>
						        <div class="menu">
						            <div class="top">
						                <ul>
						                    <li><a href="#">ABEEK</a></li>
						                    <li><a href="/home/templates/community/bbs?select=1">커뮤니티</a></li>
						                    <li><a href="/home/templates/members/professor">구성원</a></li>
						                    <li><a href="/home/templates/curriculum/curriculum">교과과정</a></li>
						                    <li><a href="/home/templates/introduce/intro">학과소개</a></li>
						                </ul>
						            </div>
						            <!--
						            <div class="bottom">
						                <ul>
						                    <li><a href="">개인정보취급방침</a></li>
						                    <li><a href="">이용약관</a></li>
						                </ul>
						            </div>
						            -->
						        </div>
						    </div>
						</div>
						';
	}
}

