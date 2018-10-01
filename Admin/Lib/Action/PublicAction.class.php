<?php
	class PublicAction extends Action{
		public function code(){
			import('ORG.Util.Image');
    		Image::buildImageVerify(4,1,'png',30,30,'code');
		}
	}
?>
