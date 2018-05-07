<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"/var/www/html/tp5manager/public/../application/yyshop/view/index/bootsptable.html";i:1512541339;s:70:"/var/www/html/tp5manager/public/../application/yyshop/view/layout.html";i:1512541339;}*/ ?>
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
$(function () {
  
 //1.初始化Table
 var oTable = new TableInit();
 oTable.Init();
 });
  
function operateFormatter(value, row, index) {
        return [
            '<a class="like" href="javascript:void(0)" title="Like">',
            '<i class="glyphicon glyphicon-heart"></i>',
            '</a> ',
            '<a class="remove" href="javascript:void(0)" title="Remove">',
            '<i class="glyphicon glyphicon-remove"></i>',
            '</a>'
        ].join('');
    }
    window.operateEvents = {
        'click .like': function (e, value, row, index) {
            alert('You click like action, row: ' + JSON.stringify(row));
        },
        'click .remove': function (e, value, row, index) {
            $table.bootstrapTable('remove', {
                field: 'id',
                values: [row.id]
            });
        }
    };
    function totalNameFormatter(index,val)
    {
        alert(index);
    }
  
 var TableInit = function () {
 var oTableInit = new Object();
 //初始化Table
 oTableInit.Init = function () {
  $('#tradeList').bootstrapTable({
  url: 'tradeList',  //请求后台的URL（*）
/*
  method: 'post',   //请求方式（*）
  toolbar: '#toolbar',  //工具按钮用哪个容器
  striped: true,   //是否显示行间隔色
    sortable: true,                     //是否启用排序
    sortOrder: "asc",                   //排序方式
  cache: false,   //是否使用缓存，默认为true，所以一般情况下需要设置一下这个属性（*）
  pagination: true,   //是否显示分页（*）
  sortable: false,   //是否启用排序
  sortOrder: "asc",   //排序方式
    showColumns: true, //显示下拉框勾选要显示的列
    showRefresh: true, //显示刷新按钮
  queryParams: oTableInit.queryParams,//传递参数（*）
  sidePagination: "server",  //分页方式：client客户端分页，server服务端分页（*）
  pageNumber:1,   //初始化加载第一页，默认第一页
  pageSize: 50,   //每页的记录行数（*）
  pageList: [10, 25, 50, 100], //可供选择的每页的行数（*）
  strictSearch: true,
  clickToSelect: true,  //是否启用点击选中行
  //height: 460,   //行高，如果没有设置height属性，表格自动根据记录条数觉得表格高度
  uniqueId: "id",   //每一行的唯一标识，一般为主键列
  cardView: false,   //是否显示详细视图
  detailView: false,   //是否显示父子表
    queryParamsType : "undefined",
    showExport: true,                     //是否显示导出
    exportDataType: "basic",              //basic', 'all', 'selected'.    
    queryParams: function queryParams(params) { //设置查询参数
    var param = {
            //这里是在ajax发送请求的时候设置一些参数 params有什么东西，自己看看源码就知道了
            pageNo: params.pageNumber,
            pageSize: params.pageSize
        };
        return param;
    },
    onLoadSuccess: function(data){ //加载成功时执行
    alert("加载成功"+data);
    },
    onLoadError: function(){ //加载失败时执行
    layer.msg("加载数据失败", {time : 1500, icon : 2});
    },
    */
    method: 'get',                      
    toolbar: '#toolbar',                
    striped: true,                      
    cache: false,                       
    pagination: true,                   
    sortable: true,                     
    sortOrder: "asc",
    sidePagination: "server",           
    pageNumber: 1,                      
    pageSize: 10,                       
    pageList: [20, 25, 50, 100],                     
    showToggle: true,                   
    showColumns: true,                  
    showRefresh: true,                  
    showFooter: true,                  
    minimumCountColumns: 2,             
    clickToSelect: true,    
    height: 500,                        
    uniqueId: "id",                     
    cardView: false,                    
    detailView: false,    
   columns: [{
       checkbox: true,
    },{
   field: 'id',
      sortable: true,
   title: '序号'
  }, {
   field: 'liushuiid',
      sortable: true,
   title: '交易编号',
      //footerFormatter:function(value)
      //{
      //    var count;
      //    for(var i in value){
      //        count = value[i].total;
       //   }
       //   return count;
     // }
  },{
   field: 'receivetime',
      sortable: true,
   title: '交易时间'
  }, {
   field: 'price',
   title: '金额',
      sortable: true
  }, {
   field: 'coin_credit',
   title: '投入硬币',
      sortable: true,
  }, {
   field: 'bill_credit',
   title: '投入纸币',
      sortable: true,
  }, {
   field: 'changes',
   title: '找零',
      sortable: true,
  }, {
   field: 'tradetype',
   title: '交易类型',
      sortable: true,
  },{
   field: 'goodmachineid',
   title: '货机号',
      sortable: true,
  },{
   field: 'inneridname',
   title: '货道号',
      sortable: true,

  },{
   field: 'goodsName',
   title: '商品名称',
      sortable: true,
      footerFormatter: totalNameFormatter
  }, {
   field: 'changestatus',
   title: '支付'
  },{
   field: 'sendstatus',
   title: '出货'
  },{
       field: 'operate',
       title: '操作',
       align: 'center',
      formatter:function(value,row,index){
        var e = '<a href="#" mce_href="#" onclick="edit(\''+ row.id + '\')">编辑</a> ';
        var d = '<a href="#" mce_href="#" onclick="del(\''+ row.id +'\')">删除</a> ';
        return e+d;
      }       
       //events: operateEvents,
       //formatter: operateFormatter
    }]
  });
 };
  
 //得到查询的参数
 oTableInit.queryParams = function (params) {
  var temp = { //这里的键的名字和控制器的变量名必须一直，这边改动，控制器也需要改成一样的
  limit: params.limit, //页面大小
  offset: params.offset, //页码
  sdate: $("#stratTime").val(),
  edate: $("#endTime").val(),
  sellerid: $("#sellerid").val(),
  orderid: $("#orderid").val(),
  CardNumber: $("#CardNumber").val(),
  maxrows: params.limit,
  pageindex:params.pageNumber,
  portid: $("#portid").val(),
  CardNumber: $("#CardNumber").val(),
  tradetype:$('input:radio[name="tradetype"]:checked').val(),
  success:$('input:radio[name="success"]:checked').val(),
  };
  return temp;
 };
 return oTableInit;
 };

</script>

<table id="tradeList"></table>
<div id="toolbar" style="padding:5px 0px 5px 480px">
    <a href="javascript:void(0)" class="easyui-linkbutton c1"  style="width:60px" onclick="deleteCardev()">删除</a>
    <a href="javascript:void(0)" class="easyui-linkbutton c5"  style="width:60px" onclick="closeCardev()">关闭</a>
</div>      
</div>
</body>

</html>