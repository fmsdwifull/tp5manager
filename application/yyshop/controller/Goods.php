<?php
namespace app\yyshop\controller;
use app\yyshop\common\Base;
use think\Db;
use think\View;


//为什么GoodsOrigin http://116.236.115.125:9000/tp5manager/public/index.php/yyshop/GoodsOrigin访问不到呢
class Goods extends Base
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }
    public function getGoodDetail()
    {
        return $this->fetch();		
    }
    public function catchGoodInfo()
    {
        //trace($_POST);
        
        $url = $_POST['url'];
        $html = new simple_html_dom();

        // 从url中加载
        $html->load_file($url);
        //$html = file_get_contents($url);
        echo iconv('GB2312','UTF-8',$html);
    }
    public function record()
    {
        $ret = Db::table('tb_remote_store')->select();
        //var_dump($ret);
        $view = new View();
        $view->assign('list',$ret);
        return $view->fetch('record');		
    }
    public function addRecord()
    {
	
        trace($_POST['xxx']);
        \Think\Log::write($_POST['xxx'],"-------------dddddddddddddd---------------------");
        return true;
    }
}
