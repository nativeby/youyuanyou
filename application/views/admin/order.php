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
    <form method="get" action="/admin/order/index">
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
                        <th>用户 ID</th>
                        <th>成人数</th>
                        <th>儿童数</th>
                        <th>联系电话</th>
                        <th>预订导游</th>
                        <th>预订服名</th>
                        <th>预订服务日期</th>
                        <th>预订服务价格</th>
                        <th>服务城市</th>
                        <th>总价格(RMB)</th>
                        <th>预付款(RMB)</th>
                        <th>下单时间</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($all_order_info as $k => $v): ?>
                        <tr>
                            <td><?php echo $v['id']; ?></td>
                            <td><?php echo $v['user_id']; ?></td>
                            <td><?php echo $v['adult_num']; ?></td>
                            <td><?php echo $v['child_num']; ?></td>
                            <td><?php echo $v['contact_phone']; ?></td>
                            <td><?php echo $v['reserved_guide_id']; ?></td>
                            <td><?php echo $v['service_name']; ?></td>
                            <td><?php echo $v['service_date']; ?></td>
                            <td><?php echo $v['normal_price']; ?></td>
                            <td><?php echo $v['serve_location']; ?></td>
                            <td><?php echo $v['total_price']; ?></td>
                            <td><?php echo $v['pre_price']; ?></td>
                            <td><?php echo $v['create_time']; ?></td>
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
