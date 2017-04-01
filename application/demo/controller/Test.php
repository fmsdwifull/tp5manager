<?php
namespace app\demo\controller;
use app\demo\common\BaseDemo;
use think\View;
/**
测试类
***/
class Test extends BaseDemo{
	public function index() 
	{
		//echo "-------";
		return $this->fetch();		
	} 
}