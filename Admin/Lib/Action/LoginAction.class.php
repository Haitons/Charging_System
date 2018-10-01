<?php
// 本类由系统自动生成，仅供测试用途
class LoginAction extends Action {
	public function index(){
		$this->display();
	}
	public function doLogin(){
		$adminname=$_POST['adminname'];
		$password=$_POST['password'];
		$code=$_POST['code'];
		if(md5($code)!=$_SESSION['code']){
			$this->error('验证码不正确');
		}
		$user=M('Admin');
		$where['adminname']=$adminname;
		$c['adminname']=$adminname;
		$where['password']=$password;
		$arr=$user->field('id')->where($where)->find();
		$cz=$user->field('id')->where($c)->find();
		if($arr){
			$_SESSION['adminname']=$adminname;
			$_SESSION['id']=$arr['id'];
			$this->success('用户登录成功',U('Index/index'));
		}
		else if($cz){
			$this->error('密码错误');
		}
		else{
			$this->error('管理员不存在');
		}
	}
	public function doLogout(){
			$_SESSION=array();
			if(isset($_COOKIE[session_name()])){
				setcookie(session_name(),'',time()-1,'/');
				}
			session_destroy();
			$this->redirect('Index/index');
	}
	
}
?>