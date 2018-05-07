<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:80:"/var/www/html/tp5manager/public/../application/yyshop/view/index/bootsplist.html";i:1512541339;s:70:"/var/www/html/tp5manager/public/../application/yyshop/view/layout.html";i:1512541339;}*/ ?>
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
    // 提交表单
    function delete_info(id)
    {
        if (!id)
        {
            alert('Error！');
            return false;
        }
        // var form_data = new Array();
        $.ajax(
        {
             url: "action/user_action.php",
             data:{"id":id, "act":"del"},
             type: "post",
             beforeSend:function()
             {
                $("#tip").html("<span style='color:blue'>正在处理...</span>");
                return true;
              },
              success:function(data)
              {
                if (data > 0)
                {
                alert('操作成功');
                $("#tip").html("<span style='color:blueviolet'>恭喜，删除成功！</span>");
                // document.location.href='world_system_notice.php'
                location.reload();
                }
                else
                {
                $("#tip").html("<span style='color:red'>失败，请重试</span>");
                alert('操作失败');
                }
                },
                error:function()
                {
                alert('请求出错');
                },
                complete:function()
                {
                // $('#tips').hide();
                }
        });
        return false;
    }

    // 编辑表单
    function getCurrentRow(row)
    {
        var currentRow = row.parentNode.parentNode.rowIndex;
        var recId = $("#tb tr:eq(" + currentRow + ") td:eq(1)").html()
        $('#user_id').val(recId);
        var recName = $("#tb tr:eq(" + currentRow + ") td:eq(2)").html()
        $('#user_name').val(recName);
        var recAddress = $("#tb tr:eq(" + currentRow + ") td:eq(3)").html()
        $('#address').val(recAddress);
        $('#remark').val(recAddress);
        $('#user_id').attr("readonly","readonly")
        //alert("ddddddddddddddddddddddddddddddd");
    }
    // var form_data = new Array();


    // 提交表单
    function check_form()
    {
        alert("xxx");
    var user_id = $.trim($('#user_id').val());
    var act = $.trim($('#act').val());
    if (!user_id)
    {
    alert('用户ID不能为空！');
    return false;
    }
    var form_data = $('#form_data').serialize();
    // 异步提交数据到action/add_action.php页面
    $.ajax(
    {
    url: "bootDealData",
            data:{"form_data":form_data, "act":act},
            type: "post",
            beforeSend:function()
            {
            $("#tip").html("<span style='color:blue'>正在处理...</span>");
            return true;
            },
            success:function(data)
            {
            if (data > 0)
            {

            var msg = "添加";
            if (act == "edit") msg = "编辑";
            $("#tip").html("<span style='color:blueviolet'>恭喜，" + msg + "成功！</span>");
            // document.location.href='system_notice.php'
            alert(msg + "OK！");
            location.reload();
            }
            else
            {
            $("#tip").html("<span style='color:red'>失败，请重试</span>");
            alert('操作失败');
            }
            },
            error:function()
            {
            alert('请求出错');
            },
            complete:function()
            {
            $('#acting_tips').hide();
            }
    });
    return false;
    }

    function search()
    {
        $.ajax(
        {
            url: "search",
            type: "post",
            success: function(data){
                $("#tb tbody").html("");
                data = JSON.parse(data);
                //data = JSON.stringify(data);
                //alert(data[0].name);
                $.each(data, function(index, val) {  
                var $tr = $("<tr>"+
               "<td><input type=\"checkbox\"   name=\"ck[]\" onclick=\"doCheck(this)\"></td>"+
        "<td style=\"display:none;\">"+val.user_id+"</td>"+
        "<td>"+val.name+"</td>"+
        "<td>"+val.address+"</td>"+
                "<td>"+val.remark+"</td>"+
                "<td>"+
                    "<button type=\"button\" class=\"btn btn-info\" data-toggle=\"modal\" onclick=\"getCurrentRow(this)\" data-target=\"#addUserModal\">编辑</button>&nbsp;&nbsp;"+
                     "<button type=\"button\" class=\"btn btn-danger\" onclick=\"return delete_info({id})\">删除</button>"+
                 "</td>"
        +"</tr>");
                     $("#tb").append($tr);  
                });              
            },
            error:function(){}
        });       
    }
    function doCheck(r)
    {
         if($(r).attr("checked"))  
         {
            $(r).removeAttr("checked");        
        }else{
           $(r).attr("checked",'true');  
       }
        //console.info(r.parentNode.parentNode.rowIndex);
    }
    function getAllRows()
    {
    $("#tb").find("tr").each(function(index,val){
        //alert(index);
        console.info(val);
        alert($(val).find("input").eq(0).attr('checked'));
        //$('#tb).find("tr").eq(index).find("td").eq(1).html();
        //var tdArr = $(this).children();
        //console.info(tdArr);
        
        //var history_income_type = tdArr.eq(0).find('input').val();//收入类别
        //var history_income_money = tdArr.eq(1).find('input').val();//收入金额
        //var history_income_remark = tdArr.eq(2).find('input').val();//    备注
        
        //alert(history_income_type);
        //alert(history_income_money);
        //alert(history_income_remark);
        
    });
    }
    
</script>
<div class="container" style="min-width: 1200px;">
    <h1>
        用户列表
    </h1>
    <div>
        <div class="input-group col-md-3" style="margin-top:0px; positon:relative">  
            <input type="text" class="form-control" placeholder="请输入字段名" />  
            <span class="input-group-btn">  
               <button class="btn btn-info btn-search"  id="refresh_button" onclick="search()">查找</button>  
               <button class="btn btn-info btn-search"  data-toggle="modal"  data-target="#addUserModal" style="margin-left:3px">添加</button>  
               <button class="btn btn-info "  data-toggle="modal"  onclick="getAllRows()" style="margin-left:3px">获取</button>  
            
            </span>  
        </div>  
        <!--<div class="form-group ">
            <form  id="googff"  role="form">
                 <div class="col-sm-6">
                      <input type="text" class="form-control" name="tbr_goodno" id="tbr_goodno" placeholder="">
                 </div>    
                 <div class="col-sm-2">
                     <input type="submit" class="btn btn-default" value="搜索" />
                 </div>  
            </form>    
            <div class="col-sm-2">
                <button class="btn btn-primary btn-sm" data-toggle="modal"  data-target="#addUserModal">
                     添加用户
                 </button>
             </div>
        </div>
        -->
    </div>
    <br/>
    <table class="table table-hover table-bordered" id="tb" >
        <thead>
            <tr>
                <th><input type="checkbox" id="registCheckbox" onclick="doCheck(this)"></th>
                
                <th style="display:none;">用户id</th>
                <th>用户名</th>
                <th>地址</th>
                <th>备注</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <!-- BEGIN list -->
            <tr>
                <td><input type="checkbox" name="ck[]" value="<?php echo $user_id; ?>"  checked="checked"  onclick="doCheck(this)"></td>
                <td  style="display:none;"><?php echo $user_id; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $address; ?></td>
                <td><?php echo $remark; ?></td>
                <td>
                    <button type="button" class="btn btn-info" data-toggle="modal" onclick="return get_edit_info({user_id})" data-target="#addUserModal">编辑</button>
                    &nbsp;&nbsp;
                    <button type="button" class="btn btn-danger" onclick="return delete_info({id})">删除</button>
                </td>
            </tr>
        </tbody>
    </table>
    {page_str} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="" class="form-horizontal" role="form" id="form_data" onsubmit="return check_form()" style="margin: 20px;">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            用户信息
                        </h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="user_id" class="col-sm-3 control-label">用户ID</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="user_id" name="user_id" value="{user_id}"
                                           placeholder="请输入用户ID">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lastname" class="col-sm-3 control-label">用户名</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="user_name" value="" id="user_name"
                                           placeholder="用户名">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="col-sm-3 control-label">地址</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="address" value="" id="address"
                                           placeholder="地址">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="remark" class="col-sm-3 control-label">备注</label>
                                <div class="col-sm-9">
                                    <textarea  class="form-control"  name="remark" value="{remark}" id="remark"
                                               placeholder="备注">

                                    </textarea>
                                </div>
                            </div>
                            <input type="hidden" id="act" value="add" name="act"/>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                        </button>
                        <button type="submit" class="btn btn-primary">
                            提交
                        </button><span id="tip"> </span>
                    </div>
                </form>                        
            </div>
        </div>
    </div>
</div>

</div>
</body>

</html>