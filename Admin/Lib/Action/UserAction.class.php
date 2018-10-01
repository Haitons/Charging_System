<?php 
class UserAction extends Action{
	public function index(){
		$this->display();
	}
	//添加新用户
	public function add(){
		$this->display();
	}
	public function checkid(){
		$workid=$_GET['workid'];
		$user=M('User');
		$where['workid']=$workid;
		$count=$user->where($where)->count();
		if($count){
			echo"该用户已存在";
		}
	}
	public function doReg(){
		$user=M('User');
		$user->create();
		$user->ustime=time();
		$lastid=$user->add($data);
		if($lastid){
			$this->success("添加用户成功");
		}
		else{
			$this->error("添加用户失败");
		}
	}
	
	public function information(){
		$user=D('User');
		import('ORG.Util.Page');// 导入分页
		$count=$user->count();
		$page=new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		$show=$page->show();// 分页显示输出
		$arr=$user->relation(true)->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('List',$arr);
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}
	public function modify(){
			$id=$_GET['id']; 
			$m=M('User');
			$arr=$m->find($id);
			$this->assign('data',$arr);
			$this->display();//显示修改页面	
	}
	public function update(){
		$m=M('User');
		$data['id']=$_POST['id'];
		$data['username']=$_POST['username'];
		$data['type']=$_POST['type'];
		$data['workid']=$_POST['workid'];
		$data['credid']=$_POST['credid'];
		$data['telephone']=$_POST['telephone'];
		$count=$m->save($data);
		if($count>0){
			$this->success("数据修改成功",'information');
		}
		else{
			$this->error("数据修改失败");
		}
	}
	public function infoModify(){
		$id=$_GET['id'];
		$m=M('User');
		$arr=$m->find($id);
		$this->assign('data',$arr);
		$this->display();
	}
	public function zhanghaoxg(){
		$m=M('User');
		$data['id']=$_POST['id'];
		$data['username']=$_POST['username'];
		$data['workid']=$_POST['workid'];
		$data['credid']=$_POST['credid'];
		$data['password']=$_POST['password'];
		$count=$m->save($data);
		if($count>0){
			$this->success("数据修改成功");
		}
		else{
			$this->error("数据修改失败");
		}
	}
	public function search(){
		$m=M('User');
		$where['workid']=$_POST['workid'];
		$arr=$m->where($where)->find();
		$this->assign('data',$arr);
		$this->display('InfoModify');
		
	}
	public function zhinfo(){
		$user=D('User');
		import('ORG.Util.Page');// 导入分页
		$count=$user->count();
		$page=new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		$show=$page->show();// 分页显示输出
		
		$arr=$user->relation(true)->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('List',$arr);
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}
	public function tcchange(){
			$id=$_GET['id']; 
			$m=M('User');
			$arr=$m->find($id);
			$this->assign('data',$arr);
			$this->display();//显示修改页面	
	}
	public function tcupdate(){
		$m=M('User');
		$data['id']=$_POST['id'];
		$data['ntid']=$_POST['ntid'];
		$time=time();
		$count=$m->save($data);
		if($count>0){
			$data['kttime']=$time;
			$m->save($data);
			$this->success("套餐变更成功",'zhinfo');
		}
		else{
			$this->error("套餐变更失败");
		}
	}
	public function account(){
		$id=$_GET['id'];
		$m=M('User');
		$arr=$m->find($id);
		$arr['state']='0';
		$count=$m->save($arr);
		if($count>0){
			$this->success("销户成功");
		}
		else{
			$this->error("销户失败");
		}
	}
	public function tent(){
		$id=$_GET['id'];
		$m=M('User');
		$arr=$m->find($id);
		$this->assign('data',$arr);
		$this->display();
	}
	public function charge(){
		$m=M('User');
		
		$id=$_POST['id'];
		$data=$m->find($id);
		$data['money']=$data['money']+$_POST['money'];
		$count=$m->save($data);
		
		$n=M('Czrecord');
		
		$rcord['workid']=$_POST['workid'];
		$rcord['money']=$_POST['money'];
		$rcord['time']=time();
		$rcord['operator']=$_POST['operator'];
		$rcord['username']=$_POST['username'];
		$n->add($rcord);
		if($count>0){
			$this->success("充值成功",'information');
		}
		else{
			$this->error("充值失败");
		}
	}
	public function tjllb(){
	    $id=$_GET['id'];
		$m=M('User');
		$arr=$m->find($id);
		$this->assign('data',$arr);
		$this->display();
	}
	public function czllb(){
		$id=$_POST['id'];
		$workid=$_POST['workid'];
		$lname=$_POST['lname'];
		$username=$_POST['username'];
		$user=M('User');
		$arr=$user->find($id);
		if($arr['llbcs']==0){
			$this->error("流量包添加次数已达限制");
		}
		$ulid=$_POST['ulid'];
		$data[id]=$id;
		$data['ulid']=$ulid;
		$user->save($data);
		$m=D('User');
		$arr=$m->relation(true)->find($id);
		$money=$arr['money'];
		$lmoney=$arr['llb']['money'];
		if(($money-$lmoney)<0){
			$this->error("您的账户余额不足");
		}
		else{
			$a=M('User');
			$llb=$a->find($id);
			$llb['llbcs']=$llb['llbcs']-1;
			$llb['money']=$llb['money']-$lmoney;
			$llb['soil']=$llb['soil']+$arr['llb']['lldata'];
			$a->save($llb);
			$b=M('Record');
			$rcord['workid']=$workid;
			$rcord['name']=$arr['llb']['llname'];
			$rcord['time']=time();
			$rcord['operator']=$lname;
			$rcord['username']=$username;
			$b->add($rcord);
			
			$c=M('Kfrecord');
			$cord['workid']=$workid;
			$cord['money']=$lmoney;
			$cord['time']=time();
			$cord['operator']=$lname;
			$cord['username']=$username;
			$cord['info']="添加流量包扣费";
			$c->add($cord);
			$this->success("流量包添加成功",'zhinfo');
		}	
	}
	public function TaocanChange(){
		$user=D('User');
		import('ORG.Util.Page');// 导入分页
		$count=$user->count();
		$page=new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		$show=$page->show();// 分页显示输出
		
		$arr=$user->relation(true)->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('List',$arr);
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}
	
	public function llbtjjl(){
		$user=D('Record');
		import('ORG.Util.Page');// 导入分页
		$count=$user->count();
		$page=new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		$show=$page->show();// 分页显示输出
		
		$arr=$user->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('List',$arr);
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}
}
	



?>