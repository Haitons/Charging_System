<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    //判断用户是否登录过 通过session
    	
		if(isset($_SESSION['adminname']) && $_SESSION['adminname']!=''){
			$this->display();
		}else{
			$this->redirect('Login/index');
		}
    }
    
    public function user(){
    	$this->display();
    }
    public function jifei(){
    	$this->display();
    }
    public function quanxian(){
    	$this->display();
    }
    public function yunwei(){
    	$this->display();
    }
    public function yingzhang(){
    	$this->display();
    }
    public function set(){
    	$this->display();
    }
}