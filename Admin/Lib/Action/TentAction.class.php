<?php 
class TentAction extends Action{
	public function reCharge(){
		$this->display();
	}

	public function search(){
		$m=M('User');
		$where['workid']=$_POST['workid'];
		$arr=$m->where($where)->find();
		$this->assign('data',$arr);
		$this->display('reCharge');
	}
	public function charge(){
		$m=M('User');
		$workid=$_POST['workid'];
		$money=$_POST['money'];
		$time=time();
		$operator=$_POST['operator'];
		$id=$_POST['id'];
		$data=$m->find($id);
		$data['money']=$data['money']+$_POST['money'];
		$count=$m->save($data);
		$n=M('Czrecord');
		$rcord['workid']=$workid;
		$rcord['money']=$money;
		$rcord['time']=$time;
		$rcord['operator']=$operator;
		$rcord['username']=$_POST['username'];
		$n->add($rcord);
		if($count>0){
			$this->success("充值成功");
		}
		else{
			$this->error("充值失败");
		}
	}
	public function czInfo(){
		$c=D('Czrecord');
		import('ORG.Util.Page');// 导入分页
		$count=$c->count();
		$page=new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		$show=$page->show();// 分页显示输出
		
		$arr=$c->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('List',$arr);
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}
	public function kfInfo(){
		$c=D('Kfrecord');
		import('ORG.Util.Page');// 导入分页
		$count=$c->count();
		$page=new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		$show=$page->show();// 分页显示输出
		
		$arr=$c->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('List',$arr);
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}

}
?>