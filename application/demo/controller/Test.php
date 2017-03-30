<?php
namespace app\demo\controller;
use app\common\controller\BaseAdmin;
use think\View;
/**
测试类
***/
class Test extends BaseAdmin{
	public function index() 
	{
		//echo "-------";
		return $this->fetch();		
	} 
}