<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"/var/www/html/tp5manager/public/../application/yyshop/view/index/bootsplayout2.html";i:1536025560;s:70:"/var/www/html/tp5manager/public/../application/yyshop/view/layout.html";i:1536025560;}*/ ?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="format-detection" content="telephone=no">
    <meta charset="UTF-8">
    <meta name="description" content="Violate Responsive Admin Template">
    <meta name="keywords" content="Super Admin, Admin, Template, Bootstrap">
    <title>后台管理系统模板</title>
    <!-- CSS -->
    <link href="<?php echo \think\Config::get('css'); ?>bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo \think\Config::get('css'); ?>bootstrap-table.min.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo \think\Config::get('js'); ?>jquery-3.2.0.min.js"></script>
    <script type="text/javascript" src="<?php echo \think\Config::get('js'); ?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo \think\Config::get('js'); ?>bootstrap-table.min.js"></script>
    
</head>
<body>
<div class="container" id="content" style="margin:10px 0px 0px 10px;">

<style type="text/css">

    #main-nav {
        margin-left: 1px;
    }
    #main-nav.nav-tabs.nav-stacked > li > a {
        padding: 10px 8px;
        font-size: 12px;
        font-weight: 600;
        color: #4A515B;
        background: #E9E9E9;
        background: -moz-linear-gradient(top, #FAFAFA 0%, #E9E9E9 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FAFAFA), color-stop(100%,#E9E9E9));
        background: -webkit-linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
        background: -o-linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
        background: -ms-linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
        background: linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9');
        -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9')";
        border: 1px solid #D5D5D5;
        border-radius: 4px;
    }
    #main-nav.nav-tabs.nav-stacked > li > a > span {
        color: #4A515B;
    }
    #main-nav.nav-tabs.nav-stacked > li.active > a, #main-nav.nav-tabs.nav-stacked > li > a:hover {
        color: #FFF;
        background: #3C4049;
        background: -moz-linear-gradient(top, #4A515B 0%, #3C4049 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#4A515B), color-stop(100%,#3C4049));
        background: -webkit-linear-gradient(top, #4A515B 0%,#3C4049 100%);
        background: -o-linear-gradient(top, #4A515B 0%,#3C4049 100%);
        background: -ms-linear-gradient(top, #4A515B 0%,#3C4049 100%);
        background: linear-gradient(top, #4A515B 0%,#3C4049 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4A515B', endColorstr='#3C4049');
        -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#4A515B', endColorstr='#3C4049')";
        border-color: #2B2E33;
    }
    #main-nav.nav-tabs.nav-stacked > li.active > a, #main-nav.nav-tabs.nav-stacked > li > a:hover > span {
        color: #FFF;
    }
    #main-nav.nav-tabs.nav-stacked > li {
        margin-bottom: 4px;
    }
    /*定义二级菜单样式*/
    .secondmenu a {
        font-size: 10px;
        color: #FFAEB9;
    }
    
    .navbar-static-top {
        background-color: #212121;
        margin-bottom: 5px;
    }
    .navbar-brand {
        background: url('') no-repeat 10px 8px;
        display: inline-block;
        vertical-align: middle;
        padding-left: 50px;
        color: #fff;
    }
    
</style>


<div class="navbar navbar-duomi navbar-static-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/Admin/index.html" id="logo">配置管理系统（流量包月）
            </a>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div id="left">
        <div class="col-md-2">
            <ul id="main-nav" class="nav nav-tabs nav-stacked" style="">
                <li class="active">
                    <a href="#">
                        <i class="glyphicon glyphicon-th-large"></i>
                        首页 
                    </a>
                </li>
                <li>
                    <a href="#systemSetting" class="nav-header collapsed" data-toggle="collapse">
                        <i class="glyphicon glyphicon-cog"></i>
                        系统管理
                        <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                    </a>
                        <ul id="systemSetting" class="nav nav-list collapse" style="height: 0px;">
                            <li><a href="#one"><i class="glyphicon glyphicon-user"></i>用户管理</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-th-list"></i>菜单管理</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-asterisk"></i>角色管理</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-edit"></i>修改密码</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-eye-open"></i>日志查看</a></li>
                        </ul>
                </li>
                <li>
                    <a href="#wuliao"  class="nav-header collapsed"  data-toggle="collapse">
                        <i class="glyphicon glyphicon-credit-card"></i>
                        物料管理的 
                        <span class="pull-right glyphicon glyphicon-chevron-down"></span>                        
                    </a>
                    <ul id="wuliao" class="nav nav-list collapse" style="height: 0px;">
                            <li>
                                <a href="#wuliao2" class="nav-header collapsed secondmenu"  data-toggle="collapse">
                                   <span style="margin-left:10px" >
                                        <i class="glyphicon glyphicon-user"></i>
                                        用户管理
                                    </span>
                                    <span class="pull-right glyphicon glyphicon-chevron-down"></span> 
                                </a>    
                                    <ul id="wuliao2" class="nav nav-list collapse" style="height: 0px;">
                                        <li>
                                            <a href="#one">
                                            <span style="margin-left:30px" >
                                                <i class="glyphicon glyphicon-user"></i>我的世界就
                                            </span>   
                                            </a>    
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span style="margin-left:30px" >
                                                    <i class="glyphicon glyphicon-th-list"></i>她的世界
                                                </span>                                                   
                                            </a>
                                        </li>
                                    </ul>                                
                            </li>
                            <li>
                                <a href="#">
                                    <span style="margin-left:10px" ><i class="glyphicon glyphicon-th-list"></i>菜单管理</span>
                                </a>
                            </li>
                        </ul>    

                </li>
                <li>
                    <a href="./grid.html">
                        <i class="glyphicon glyphicon-globe"></i>
                        分发配置
                        <span class="label label-warning pull-right">5</span>
                    </a>
                </li>
                <li>
                    <a href="./charts.html">
                        <i class="glyphicon glyphicon-calendar"></i>
                        图表统计
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-fire"></i>
                        关于系统
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-10">
            主窗口
        </div>
    </div>

</div>
</body>

</html>