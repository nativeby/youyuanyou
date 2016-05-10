<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>管理列表页</title>

    <meta name="description" content="Static &amp; Dynamic Tables"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- basic styles -->

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css"/>

    <!--[if IE 7]>
    <link rel="stylesheet" href="/assets/css/font-awesome-ie7.min.css"/>
    <![endif]-->

    <!-- page specific plugin styles -->

    <!-- fonts -->

    <link rel="stylesheet" href="/assets/css/ace-fonts.css"/>

    <!-- ace styles -->

    <link rel="stylesheet" href="/assets/css/ace.min.css"/>
    <link rel="stylesheet" href="/assets/css/ace-rtl.min.css"/>
    <link rel="stylesheet" href="/assets/css/ace-skins.min.css"/>

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/assets/css/ace-ie.min.css"/>
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->

    <script src="/assets/js/ace-extra.min.js"></script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="/assets/js/html5shiv.js"></script>
    <script src="/assets/js/respond.min.js"></script>
    <![endif]-->
    <style>
        th {
            text-align: center
        }

        td {
            text-align: center
        }
    </style>
</head>

<body style="background: #fff">

<div class="page-content">
    <!-- PAGE CONTENT BEGINS -->
    <h3 class="header smaller lighter blue">查询条件</h3>
    <!--搜索模块-->
    <form method="get" action="/admin/user/index">
        <div class="row">
            <div class="col-xs-12">
                <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                    <tr>
                        <td width="30%">
                            <label class="col-sm-4 control-label no-padding-right" for="form-field-1">手机号</label>

                            <div class="col-sm-8">
                                <input type="text" id="form-field-1" placeholder="登录手机号" class="col-xs-10 col-sm-10"
                                       name="code" value="<?php if (!empty($code)) {
                                    echo $code;
                                } ?>"/>
                            </div>
                        </td>
                        <td>
                            <div><input type="submit" class="btn btn-success" value="查询"/></div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
    <!--搜索模块end-->
    <div class="hr hr-18 dotted hr-double"></div>
    <h3 class="header smaller lighter blue">查询结果</h3>

    <div class="row">
        <div class="col-xs-12">
            <div class="table-responsive">
                <table id="sample-table-1" class="table table-striped table-bordered table-hover" align="center">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>姓名</th>
                        <th>用户手机号</th>
                        <th>身份证号</th>
                        <th>头像</th>
                        <th>认证照片</th>
                        <th>审核状态</th>
                        <th>操作</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($all_user_info as $k => $v): ?>
                        <tr>
                            <td><?php echo $v['id']; ?></td>
                            <td><?php echo $v['name']; ?></td>
                            <td><?php echo $v['mobile']; ?></td>
                            <td><?php echo $v['idcard']; ?></td>
                            <td><a href="">点击查看</a></td>
                            <td><a href="">点击查看</a></td>
                            <td><?php if($v['audit_status']==1){echo "审核通过";}elseif($v['audit_status']==0){echo "待审核";}else{echo "审核未通过";}?></td>
                            <td><button type='button' class='btn btn-xs btn-success' onclick="editStatus('<?php echo $v['id']; ?>')">审核</button></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /span -->
    </div>
    <!-- /row -->
    <!-- PAGE CONTENT ENDS -->
    <?php echo $page; ?>
</div>
<!-- /.page-content -->
</body>
</html>
<!--[if !IE]> -->
<style>

    /*dialog_width{width:5000px;}*/


</style>
<script type="text/javascript">
    window.jQuery || document.write("<script src='/assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>" + "<" + "/script>");
</script>
<script type="text/javascript">
    function createurl(a, b, c) {
        window.parent.CreateDiv(a, b, c);
    }
</script>
<![endif]-->
<script type="text/javascript">
    if ("ontouchend" in document)
        document.write("<script src='/assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/typeahead-bs2.min.js"></script>

<!-- page specific plugin scripts -->

<script src="/assets/js/jquery-ui-1.10.3.full.min.js"></script>
<script src="/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="/assets/js/date-time/daterangepicker.min.js"></script>
<script src="/assets/js/date-time/moment.min.js"></script>
<!-- ace scripts -->

<script src="/assets/js/ace-elements.min.js"></script>
<script src="/assets/js/ace.min.js"></script>
<script src="/assets/js/bootbox.min.js"></script>
<script type="text/javascript">
    function createurl(a, b, c) {
        window.parent.CreateDiv(a, b, c);
    }
</script>
<script type="text/javascript">
    jQuery(function ($) {
        $('#timer').daterangepicker(
            {
                format: 'YYYY/MM/DD'

            }
        );
    });

    function editStatus(id) {
        var is_check = 'checked';
        var is_check1 = '';
        var is_check2 = '';

        bootbox.dialog({
            message: "<div class='center'>" +
            "<input type='radio'  name='prioritys' value='N' " + is_check + ">审核通过&nbsp;&nbsp;&nbsp;&nbsp;" +
            "<input type='radio' name='prioritys' value='Y' " + is_check1 + ">审核不通过&nbsp;&nbsp;&nbsp;&nbsp;" +
            "<input type='radio' name='prioritys'  value='B' " + is_check2 + ">待审核" +
            "</div><div >理由：<textarea rows='5' cols='60' id='examine_reason'></textarea></div>\n\<div align='center' style='margin-top:15px'><input type='button' value='确定' class='btn-sm btn-success' id='examine_yes'/></div>"
        });
        $("#examine_yes").click(function () {
            var list = $('input:radio[name="prioritys"]:checked').val();
            var examine_reason = $("#examine_reason").val();
            if (list == null) {
                alert('请选择要更改的角色!');
                return;
            }
            if (examine_reason == '') {
                alert('请输入变更理由!');
                return;
            }

            var options = {
                async: false,
                url: '/seller/priority/editStatus',
                type: 'post',
                data: {id: id, examine_reason: examine_reason, prioritys: prioritys},
                dataType: 'json',
                cache: false,
                success: function (data) {
                    //     alert(data);return;
                    if (data.code == 200) {
                        alert(data.message);
                        window.location.reload();
                    } else {
                        alert(data.message);
                    }
                }
            };
            $.ajax(options);
        });
    }

    function showRecord(code) {
        var options = {
            async: false,
            url: '/seller/priority/showRecord',
            type: 'post',
            data: {code: code},
            dataType: 'json',
            cache: false,

            success: function (data) {
                if (data.code == 201) {
                    alert(data.message);
                    return;
                }
                var strs = "<table id='newtab' class='a table table-striped table-bordered table-hover' align='center' '>" +
                    "<tr>" +
                    "<th>供应商编码</th>" +
                    "<th>供应商名称</th>" +
                    "<th>操作</th>" +
                    "<th>操作时间</th>" +
                    "<th>操作人</th>" +
                    "<th>理由</th>" +
                    "</tr>";

                $.each(data, function (i, item) {
                    var operation = '';
                    if (item.now_status == 'B') {
                        var operation = '改为补充兜底供货商';
                    }
                    if (item.now_status == 'Y') {
                        var operation = '改为兜底供货商';
                    }
                    if (item.now_status == 'N') {
                        var operation = '改为普通供货商';
                    }
                    strs += "<tr id='tr_module' class='class_module'><Td td width='10%'>" + item.code + "</td><td td width='10%'>" + item.name + "</td><td td width='10%'>" + operation + "</td>" +
                        "<td td width='10%'>" + item.addtime + "</td><td width='10%'>" + item.operator + "</td><td style='word-break: break-all;'>" + item.reason + "</td>" +
                        "</tr>";

                });
                strs += "</table>";
                bootbox.dialog({
                    message: strs
                });
            }
        };
        $.ajax(options);
        $("#newtab").parent('.bootbox-body').css('width', '100%');
        $("#newtab").parent().parent().parent('.modal-content').css('width', '1080px');
        $("#newtab").parent().parent().parent('.modal-content').css('margin-left', '-50%');
    }


</script>
