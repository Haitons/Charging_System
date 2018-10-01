<?php 
class PowerAction extends Action{
		public function info(){
		$a=D('Admin');
		import('ORG.Util.Page');// 导入分页
		$count=$a->count();
		$page=new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		$show=$page->show();// 分页显示输出
		
		$arr=$a->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('List',$arr);
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
		}
		
		public function modify(){
			$id=$_GET['id'];
			$m=M('Admin');
			$arr=$m->find($id);
			$this->assign('data',$arr);
			$this->display();//显示修改页面
		}
		
		public function update(){
			$m=M('Admin');
			$data['id']=$_POST['id'];
			$data['adminname']=$_POST['adminname'];
			$data['level']=$_POST['level'];
			$data['mail']=$_POST['mail'];
			$data['credid']=$_POST['credid'];
			$data['telephone']=$_POST['telephone'];
			$count=$m->save($data);
			if($count>0){
				$this->success("数据修改成功",'info');
			}
			else{
				$this->error("数据修改失败");
			}
		}
		
		public function add(){
			$this->display();
		}
		public function doReg(){
			//$username=$_POST['username'];
			//$password=$_POST['password'];
			//$workid=$_POST['workid'];
			//$credid=$_POST['credid'];
			//$telephone=$_POST['telephone'];
			//$type=$_POST['type'];
		
			$a=M('Admin');
			$a->create();
			
			//$data['username']=$username;
			//$data['password']=$password;
			//$data['workid']=$workid;
			//$data['credid']=$credid;
			//$data['telephone']=$telephone;
			//$data['type']=$type;
			$lastid=$a->add($data);
			if($lastid){
				$this->success("添加管理员成功");
			}
			else{
				$this->error("添加管理员失败");
			}
		}
		public function checkid(){
			$adminname=$_GET['adminname'];
			$user=M('Admin');
			$where['adminname']=$adminname;
			$count=$user->where($where)->count();
			if($count){
				echo"该用户已存在";
			}
		}
		public function del(){
				
			$m=M('Admin');
			$id=$_GET['id'];
			$count=$m->delete($id);
		
			if($count>0){
				$this->success('删除成功');
		
			}
			else{
				$this->error('删除失败');
			}
				
		}
	
	
	
	
	
	
}









?>