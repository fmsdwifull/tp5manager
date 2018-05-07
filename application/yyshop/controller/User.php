<?php
namespace app\yyshop\controller;
use app\yyshop\common\Base;
use think\Db;
use think\View;

class User extends Base
{
    function __construct(){
        parent::__construct();//先执行父类构造方法
        //layout(false); // 临时关闭当前模板的布局功能
    }
    public function index(){
        return $this -> fetch();
    }    
    public  function manager()
    {
        return $this->fetch();
    }
    public  function menu()
    {
        return $this->fetch();
    }    
}
