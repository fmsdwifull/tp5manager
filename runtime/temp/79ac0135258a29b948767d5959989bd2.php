<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"/var/www/html/tp5manager/public/../application/yyshop/view/admin/left.html";i:1512541339;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo \think\Config::get('BACK_CSS_URL'); ?>admin.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo \think\Config::get('css'); ?>bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo \think\Config::get('css'); ?>bootstrap-table.min.css" rel="stylesheet">
        <style type="text/css">
            .left{
                margin-left:0px;
                    position: absolute;
                    box-sizing: border-box;
                    width: 200px;
                    height: 100%;
                    background: #4d5e70;
                }  
        </style>
        <script type="text/javascript" src="<?php echo \think\Config::get('js'); ?>jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="<?php echo \think\Config::get('js'); ?>bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo \think\Config::get('js'); ?>bootstrap-table.min.js"></script>         
        <script language=javascript>

        </script>
    </head>
    <body>
            <div id="left" class="left" >
                <!--nav-tabs  和 nav-pills -->
            <ul id="main-nav" class="nav nav-pills nav-stacked">
                <li>
                    <a href="#systemSetting" class="nav-header collapsed" data-toggle="collapse">
                        <i class="glyphicon glyphicon-cog"></i>
                        系统管理
                        <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                    </a>
                        <ul id="systemSetting" class="nav nav-list collapse" style="height: 0px">
                            <li><a href="/tp5manager/public/index.php/yyshop/user/manager" target="right"><i class="glyphicon glyphicon-user" style="padding-left:30px"></i>用户管理</a></li>
                            <li><a href="/tp5manager/public/index.php/yyshop/user/menu"  target="right"><i class="glyphicon glyphicon-th-list" style="padding-left:30px"></i>菜单管理</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-asterisk" style="padding-left:30px"></i>角色管理</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-edit" style="padding-left:30px"></i>修改密码</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-eye-open" style="padding-left:30px"></i>日志查看</a></li>
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
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-fire"></i>
                        关于系统
                    </a>
                </li>                
            </ul>
    </body>
</html>