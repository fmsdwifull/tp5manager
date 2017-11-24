<?php
namespace app\yyshop\controller;
use app\yyshop\common\Base;
use think\Db;
use think\View;

class Index extends Base
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }
    public function bootspTest()
    {
        return $this->fetch();
    }
    public  function bootspList()
    {
        return $this->fetch('bootsplist');
    }
    public function bootDealData()
    {
        $act       = $_POST['act'];
        $id        = $_POST['id'];
        $user_id   = (int)$_POST['user_id'];
        $form_data = $_POST['form_data'];
        $param_arr = array();

        // 获取到的数据格式为 “foo=bar&baz=boom&cow=milk&php=hypertext+processor”
        // http_build_query 的数据形式用parse_str解析为数组格式
        parse_str($form_data, $param_arr);
        // 备注中文处理
        $param_arr['remark']  = iconv("utf-8", "gbk", trim($param_arr['remark']));
        switch($act)
        {
            case "add":
                break;
            case "edit":
                // 编辑操作
                $user_id = $param_arr['user_id'];
                // ...
                break;
            case "get":
                // 返回详细的用户信息
                // get($user_id);
                echo $ret;
                exit();
                break;
            case "del":
                // 删除
                // delete();
                break;
        }
        echo $ret > 0 ? 1 : 0;
    }
    public function getUserInfo()
    {
        $view = new View();
        $view->assign('user_id',1);
        $view->assign('name',"ddddd");
        $view->assign('address',"0000");   
        $view->assign('remark',"333333");
              
        //return $view->fetch('record');
        return $view->fetch('bootsplist');
    }
    public function bootspTable()
    {
        $view = new View();
        return $view->fetch('');
    }    
    
    public function search()
    {
        $data[0]['user_id'] = '2';     
        $data[0]['name'] = "1111111111";  
        $data[0]['address'] = "222222222222222";  
        $data[0]['remark'] = "44444444444444444";  
        
        $data[1]['user_id'] = '3';     
        $data[1]['name'] = "1111555111111";  
        $data[1]['address'] = "22222552222222222";  
        $data[1]['remark'] = "555555555555"; 
        
        echo json_encode($data,true);
        //return $view->fetch('record');
        //return $view->fetch('bootsplist');
    }
    public function getBsTableData()
    {
        $res = array(  
            array('id' => 33, 'name' => '444', 'active' => 0, 'user_id' => 1, 'no_of_reports' => 0),  
            array('id' => 29, 'name' => 'AAA', 'active' => 1, 'user_id' => 1, 'no_of_reports' => 0),  
            array('id' => 20, 'name' => 'aasdasd', 'active' => 1, 'user_id' => 1, 'no_of_reports' => 0)  
        );  

        echo json_encode($res);  
    }
    public function tradeList()
    {
       $res = array(  
            array('id' => 3, 'liushuiid' => '444', 'receivetime' => 0, 'price' => 1, 'coin_credit' => 0, 'bill_credit' => 0, 'changes' => 0, 'tradetype' => 0, 'goodmachineid' => 0, 'inneridname' => 0, 'goodsName' => 0, 'changestatus' => 0, 'sendstatus' => 0),  
            array('id' => 4, 'liushuiid' => '444', 'receivetime' => 0, 'price' => 1, 'coin_credit' => 0, 'bill_credit' => 0, 'changes' => 0, 'tradetype' => 0, 'goodmachineid' => 0, 'inneridname' => 0, 'goodsName' => 0, 'changestatus' => 0, 'sendstatus' => 0),  
            array('id' => 33, 'liushuiid' => '444', 'receivetime' => 0, 'price' => 1, 'coin_credit' => 0, 'bill_credit' => 0, 'changes' => 0, 'tradetype' => 0, 'goodmachineid' => 0, 'inneridname' => 0, 'goodsName' => 0, 'changestatus' => 0, 'sendstatus' => 0)
        );  
       $total= 3;
        $json='{"total":'.$total.',"rows":'.json_encode($res).'}';
            echo $json;   
    }
    
    public function bootspLayout()
    {
        return $this->fetch();
    }
    public function bootspLayout2()
    {
        return $this->fetch();
    }    
}
