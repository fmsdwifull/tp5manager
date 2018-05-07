<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"/var/www/html/tp5manager/public/../application/aceauth/view/test/index.html";i:1506404368;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>bjyadmin管理后台</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?php echo \think\Config::get('css'); ?>bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo \think\Config::get('css'); ?>ace.min.css" />
    <link rel="stylesheet" href="<?php echo \think\Config::get('css'); ?>font-awesome.min.css" />

    <script src="<?php echo \think\Config::get('js'); ?>jquery-3.2.0.min.js"></script>
    <script src="<?php echo \think\Config::get('js'); ?>bootstrap.min.js"></script>

    <script src="<?php echo \think\Config::get('js'); ?>ace.min.js"></script>

    <script type="text/javascript">
        $(function(){
            // 导航点击事件
            $('.b-nav-li').click(function(event) {
                $('.active').removeClass('active');
                var ulObj=$(this).parents('.b-has-child').eq(0);
                $(this).addClass('active');
                // alert(2);
                if(ulObj.length!=0){
                    $(this).parents('.b-has-child').eq(0).addClass('active');
                }
            });
            // 动态调整iframe的高度以适应不同高度的显示器
            $('.page-content,.main-content').height($(window).height());
            $('.page-content').css('padding-bottom',50);

            // 左侧菜单自动适应高度
            $('#sidebar .nav-list').height($(window).height());
        })
    </script>
</head>

<body style="overflow-y: hidden;">
<div class="navbar navbar-default" id="navbar">
    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <small>
                    <i class="icon-leaf"></i>
                    管理后台
                </small>
            </a><!-- /.brand -->
        </div>
        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="<?php echo \think\Config::get('img'); ?>user.jpg" alt="Jason's Photo" />
                        <span class="user-info">
                            <small>欢迎光临,</small>
                            admin
                        </span>
                        <i class="icon-caret-down"></i>
                    </a>
                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <i class="icon-off"></i>
                                退出
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>

        <div class="sidebar" id="sidebar">
            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
            </script>

            <ul class="nav nav-list">
                <li class="active">
                    <a href="index.html">
                        <i class="icon-dashboard"></i>
                        <span class="menu-text"> 控制台 </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-desktop"></i>
                        <span class="menu-text"> UI 组件 </span>
                        <b class="arrow icon-angle-down"></b>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="elements.html">
                                <i class="icon-double-angle-right"></i>
                                组件
                            </a>
                        </li>
                    </ul>   
                </li>            
            </ul>
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
            </div>
        </div>
        <div class="main-content">
            <div class="page-content">
            </div>
        </div>
    </div>
</div>
</body>
</html>

