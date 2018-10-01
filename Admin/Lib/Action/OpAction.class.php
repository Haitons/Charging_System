<?php 
class OpAction extends Action{
	
	public function user(){
		$user=M('User');
		 $arr=$user->select();
		
		 $size=count($arr);
		 for($i=0;$i<count($arr);$i++){

			foreach($arr[$i]as $k=>$value){
				if($k=='state'){
					if($value==1){
						$count++;
					}
				}
			}
		 }
		 $this->assign('data',$count);
		 $this->display();
	}
		 	
}





?>