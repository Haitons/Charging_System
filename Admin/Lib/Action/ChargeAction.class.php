<?php 
class ChargeAction extends Action{
	public function tcinfo(){
		$taocan=M('Taocan');
		import('ORG.Util.Page');// 导入分页
		$count=$taocan->count();
		$page=new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		$show=$page->show();// 分页显示输出
		
		$arr=$taocan->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('List',$arr);
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}
	public function edit(){
		$id=$_GET['id'];
		$m=M('Taocan');
		$arr=$m->find($id);
		$this->assign('data',$arr);
		$this->display();
	}
	public function doAdd(){
		//$username=$_POST['username'];
		//$password=$_POST['password'];
		//$workid=$_POST['workid'];
		//$credid=$_POST['credid'];
		//$telephone=$_POST['telephone'];
		//$type=$_POST['type'];
	
		$taocan=M('Taocan');
		$taocan->create();
		
		//$data['username']=$username;
		//$data['password']=$password;
		//$data['workid']=$workid;
		//$data['credid']=$credid;
		//$data['telephone']=$telephone;
		//$data['type']=$type;
		$lastid=$taocan->add($data);
		$ntaocan=M('Ntaocan');
		$ntaocan->create();
		$ntaocan->add($data);
		if($lastid){
			$this->success("添加套餐成功");
		}
		else{
			$this->error("添加套餐失败");
		}
	}
	public function update(){
		$m=M('Taocan');
		$data['id']=$_POST['id'];
		$data['tcname']=$_POST['tcname'];
		$data['type']=$_POST['type'];
		$data['tcmuch']=$_POST['tcmuch'];
		$data['week']=$_POST['week'];
		
		$count=$m->save($data);
		$n=M('Ntaocan');
		$n->save($data);
		if($count>0){
			$this->success("套餐修改成功",'tcinfo');
		}
		else{
			$this->error("套餐修改失败");
		}
	
	}
	public function del(){	
		$m=M('Taocan');
		$id=$_GET['id'];
		$count=$m->delete($id);
		$n=M('Ntaocan');
		$n->delete($id);
		if($count>0){
			$this->success('删除成功');
	
		}
		else{
			$this->error('删除失败');
		}			
	}
	
	
	public function llb(){
	    $llb=M('Llb');
		import('ORG.Util.Page');// 导入分页
		$count=$llb->count();
		$page=new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		$show=$page->show();// 分页显示输出
		
		$arr=$llb->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('List',$arr);
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}
	public function lledit(){
		$id=$_GET['id'];
		$m=M('Llb');
		$arr=$m->find($id);
		$this->assign('data',$arr);
		$this->display();
	}
	public function llupdate(){
		$m=M('Llb');
		$data['id']=$_POST['id'];
		$data['llname']=$_POST['llname'];
		$data['type']=$_POST['type'];
		$data['money']=$_POST['money'];
		$data['lldata']=$_POST['lldata'];
		$data['date']=$_POST['date'];
		$data['effect']=$_POST['effect'];
	
		$count=$m->save($data);
		if($count>0){
			$this->success("流量包修改成功",'llb');
		}
		else{
			$this->error("流量包修改失败");
		}
	
	}
	public function llbadd(){
		$this->display();
	}
	public function tcadd(){
		$this->display();
	}
	public function doLadd(){
		$llb=M('Llb');
		$llb->create();
		$lastid=$llb->add($data);
		if($lastid){
			$this->success("添加流量包成功");
		}
		else{
			$this->error("添加流量包失败");
		}
	}
	public function lldel(){
			
		$m=M('Llb');
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