<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"/var/www/html/tp5manager/public/../application/yyshop/view/goods/record.html";i:1536025560;s:70:"/var/www/html/tp5manager/public/../application/yyshop/view/layout.html";i:1536025560;}*/ ?>
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

<script type="text/javascript">
    $(function(){
        var $btn=$("#btn");
        $btn.on(
            "click",function(){            
                 var formData=$("#googff").serialize();
                 var submitData=decodeURIComponent(formData,true);

                 //alert(formData);
                 //alert(submitData);
                 $.ajax({
                     url:"addRecord",
                     data:{"xxx":submitData},
                     type:"post",
                    success:function(data){
                        //alert("----------");
                        //window.location.reload(true);
                        $('#googdlg').modal('hide');
                    }
                  })
        })
    })
</script>
<table class="table table-hover">
  <caption>其他平台宝贝精选</caption>
  <thead>
    <tr>
      <th>编号</th>
      <th>商品货号</th>
      <th>平台</th>
      <th>宝贝名称</th>
      <th>宝贝地址</th>
      <th>上架时间</th>
      <th>备注</th>
    </tr>
  </thead>
  <tbody>
      <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo $data['tbr_id']; ?></td>
                <td><?php echo $data['tbr_goodno']; ?></td>
                <td><?php echo $data['tbr_platform']; ?></td>
                <td><?php echo $data['tbr_name']; ?></td>
                <td><?php echo $data['tbr_url']; ?></td>
                <td><?php echo $data['tbr_time']; ?></td>
                <td><?php echo $data['tbr_remark']; ?></td>              
            </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </tbody>
</table>
<div style='margin-left:1000px'>
    <!--
    <button type="button"  onclick="addGood()"  class="btn btn-primary btn-sm">添加</button>
    -->
    <button type="button"   class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#googdlg">添加</button>
</div>
<div class="modal fade" id="googdlg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">添加宝贝库存</h4>
            </div>
            <div class="modal-body">
                
                <form class="form-horizontal" id="googff"  role="form ">
                   <!--
                    <div class="form-group">
                      <label for="name">名称</label>
                      <input type="text" class="form-control" id="name" placeholder="请输入名称">
                    </div>
                    <div class="form-group">
                      <label for="inputfile">文件输入</label>
                      <input type="file" id="inputfile">
                      <p class="help-block">这里是块级帮助文本的实例。</p>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">请打勾
                      </label>
                    </div>
                    <button type="submit" class="btn btn-default">提交</button>
                -->
                    <div class="form-group ">
                      <label  class="col-sm-2 control-label" >货号</label>
                       <div class="col-sm-10">
                            <input type="text" class="form-control" name="tbr_goodno" id="tbr_goodno" placeholder="请输入货号">
                        </div>    
                    </div>
                    <div class="form-group">
                      <label  class="col-sm-2 control-label">货源平台</label>
                        <div class="col-sm-10">
                            <select  name="tbr_platform" class="form-control ">
                                  <option value="淘宝">淘宝</option>
                                  <option value="拼多多">拼多多</option>
                                  <option value="京东">京东</option>
                                  <option value="蘑菇街">蘑菇街</option>
                            </select>
                        </div>  
                    </div>
                    <div class="form-group">
                      <label  class="col-sm-2 control-label">宝贝名称</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="tbr_name"    id="tbr_name" placeholder="请输入宝贝名称">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">宝贝链接</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="tbr_url"   id="tbr_url" placeholder="请输入宝贝链接">
                        </div>    
                    </div>
                    <div class="form-group">
                      <label  class="col-sm-2 control-label">备注</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="tbr_remark" id="tbr_remark" placeholder="请输入备注">
                      </div>
                    </div>             
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" id="btn"  class="btn btn-primary">提交更改</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>


</div>
</body>

</html>