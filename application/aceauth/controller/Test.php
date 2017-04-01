<?php
namespace app\aceauth\controller;
use app\aceauth\common\BaseAceauth;

class Test  extends BaseAceauth
{
	public function index(){
		return $this->fetch();
	}
}