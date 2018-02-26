<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/home/config/config.php';
	include_once PATH_VIEW;

	session_start();

	/**
		헤더정보 스타일 및 공통스크립트 추가 ( jquery, header )
		@package templates/common/meta.php
		@filesource
		@author GiPyeongLee <lkp0907@gmail.com>
		@editor SeungwanJo	<wh7923@gmail.com>
		@editor JeSeongHong <howl78@naver.com>
		@copyright 2018 Hongik University Department of Software and Communications Engineering
		@version [ 1.0.0 ]
	**/
	class Meta {
		private $begin;
		private $end;
		// 생성자
		function __construct($type=0) {
			$this->begin = '<!DOCTYPE HTML>
				<html>
				<head>
				    <meta charset="UTF-8">
				    <meta name="viewport" content="width=1182, initial-scale=1">
				    <title>소프트웨어융합학과</title>
				    <link rel="stylesheet" type="text/css" href="assets/css/default.css">
				    <link rel="stylesheet" type="text/css" href="assets/css/header.css">
				    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
				    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
				</head>';
				
			$this->end = '
					<script src="assets/vendor/jquery-1.11.3.min.js"></script>
					<script src="assets/js/header.js"></script>';

			if($type==L_CONTACT){
				$this->end .= '<script type="text/javascript" src="http://openapi.map.naver.com/openapi/naverMap.naver?ver=2.0&key=fb7470e10686951605a945f029e43bc0"></script>
				<script src="assets/js/contact.js"></script>
				';
			}
			
			$this->end.='</body>
					</html>';

					
	    }
		public function setBeginMetaData(){
			echo $this->begin;
		}
		public function setEndMetaData(){
			echo $this->end;
		}
	}

