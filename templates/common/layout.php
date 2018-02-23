<?php
	/*
		@class Layout
		
	*/
	// Common Library
	include_once "meta.php";
	include_once "header.php";
	include_once "footer.php"; 	 
	include_once "side.php"; 

	
	// Page
	include_once PATH_L_MAIN;
	include_once PATH_L_CONTACT;
	

	/**
		* 전체 레이아웃 렌더링전 초기화만 처리함 
		@package templates/common/layout.php
		@filesource
		@author GiPyeongLee <lkp0907@gmail.com>
		@copyright 2015 Hongik University Computer Information Communication
		@version [ 1.0.0 ]
	*/
	class Layout {
		public $meta;
		public $header;
		public $side;
		public $footer;
		public $mainContent;
				
		function __construct($type=0){
			$this->header = new Header();
			$this->footer = new Footer();
			$this->side = new Side($type);
		}

	}