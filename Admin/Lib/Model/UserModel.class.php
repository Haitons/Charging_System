<?php
	class UserModel extends RelationModel{
		protected $_link=array(
				'Taocan'=> array(
						'mapping_type'=>BELONGS_TO,
						'class_name'=>'Taocan',
						'foreign_key'=>'utid',
						'mapping_name'=>'taocan',
						'mapping_fields'=>'tcname',
						'as_fields'=>'tcname',
						// 定义更多的关联属性
						……
				),			
				'Ntaocan'=> array(
						'mapping_type'=>BELONGS_TO,
						'class_name'=>'Ntaocan',
						'foreign_key'=>'ntid',
						'mapping_name'=>'ntaocan',
						
						// 定义更多的关联属性
						……
				),
				'Llb'=> array(
						'mapping_type'=>BELONGS_TO,
						'class_name'=>'Llb',
						'foreign_key'=>'ulid',
						'mapping_name'=>'llb',
				
						// 定义更多的关联属性
						……
				),
		);
			
			
	}
?>
