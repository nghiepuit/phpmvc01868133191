<?php
	
class Error extends Controller{
	
	public function index(){
		$msg = "Không tìm thấy trang";
		$this->view->msg = $msg;	
		$this->view->render("error/index");
	}
	
}
	
?>