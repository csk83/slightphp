<?php
/*
  +----------------------------------------------------------------------+
  | PHP Version 5                                                        |
  +----------------------------------------------------------------------+
  | Copyright (c) 1997-2008 The PHP Group                                |
  +----------------------------------------------------------------------+
  | This source file is subject to version 3.01 of the PHP license,      |
  | that is bundled with this package in the file LICENSE, and is        |
  | available through the world-wide-web at the following url:           |
  | http://www.php.net/license/3_01.txt                                  |
  | If you did not receive a copy of the PHP license and are unable to   |
  | obtain it through the world-wide-web, please send a note to          |
  | license@php.net so we can mail you a copy immediately.               |
  +----------------------------------------------------------------------+
  | Authors: Hetal <hetao@hetao.name>                                    |
  |          SlightPHP <admin@slightphp.com>                             |
  |          http://www.slightphp.com                                    |
  +----------------------------------------------------------------------+
*/

require_once(dirname(__FILE__).DIRECTORY_SEPARATOR."smarty/Smarty.class.php");
class SGui extends Smarty{
	public function SGui(){
		parent::__construct();

		array_push($this->plugins_dir,"plugins_slightphp");
		$this->compile_dir	= SlightPHP::$appDir.DIRECTORY_SEPARATOR."templates_c";
		$this->template_dir = SlightPHP::$appDir.DIRECTORY_SEPARATOR."templates";

		$this->left_delimiter = "{{{";
		$this->right_delimiter = "}}}";

	}
	public function render($tpl,$parames=array()){
		foreach($parames as $key=>$value){
			$this->assign($key,$value);
		}
		return $this->fetch($tpl);
		
	}
}
?>