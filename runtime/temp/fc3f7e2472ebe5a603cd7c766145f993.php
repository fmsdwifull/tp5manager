<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:80:"/var/www/html/tp5manager/public/../application/yyshop/view/index/bootsptest.html";i:1536025560;s:70:"/var/www/html/tp5manager/public/../application/yyshop/view/layout.html";i:1536025560;}*/ ?>
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

<script>
    // update表单
    function update_info(id)
    {
        var id = id;
        //复杂一点的json的另一种形式  
        var value2 = {"user_id":"123456","username":"coolcooldool"}; 
        // $('input[name=username]').removeAttr("readonly");//去除input元素的readonly属性
         var obj2 = eval(value2);  
         // alert(obj2);
        // 赋值
        $("#user_id").val(obj2.user_id);
        $("#user_name").val(obj2.username);
        $("#act").val("edit");

        // 将input元素设置为readonly
        $('#user_id').attr("readonly","readonly")

    }

    // 添加入库操作
    function add_info()
    {
        var form_data = $("#form_data").serialize();
        alert(form_data);

    }
</script>

<h2>创建模态框（Modal）</h2>
<!-- 按钮触发模态框 -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    添加
</button>
<button class="btn btn-primary btn-lg" onclick="update_info(8)" data-toggle="modal" data-target="#myModal">
    编辑
</button>
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    模态框（Modal）标题
                </h4>
            </div>
            <form id="form_data">
            <div class="modal-body">
                user_id: <input type="text" id="user_id" name="user_id"/>
                name: <input type="text" id="user_name" name="user_name"/>
                <input type="hidden" id="act" value="add" name="act"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
                <button type="button" onclick="add_info()" class="btn btn-primary">
                    提交更改
                </button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

</div>
</body>

</html>