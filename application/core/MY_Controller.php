<?php
// +----------------------------------------------------------------------
// | 公共controller
// +----------------------------------------------------------------------
// | 包含一些预加载库的操作
// +----------------------------------------------------------------------
// | Author: cuida
// +----------------------------------------------------------------------
// | date: 2015-2-9
// +----------------------------------------------------------------------
class MY_Controller extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('common');
	}

}
?>