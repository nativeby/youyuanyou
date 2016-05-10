<!--service.html-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no"/>
    <meta http-equiv="expires" content="-1">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <title>添加服务</title>
    <link href="/static/css/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<header class="head posi">
    <input type="button" class="btn_back" onclick="window.history.back(-1);"/>
    添加服务
</header>
<input type="hidden" value="<?php echo $guide_id;?>" id="guide_id"/>
<ul class="list_white">
    <li>
        <h3 class="fl f14">服务类型</h3>
        <select class="slt fr mat5" id="name">
            <option value="天">基本服务</option>
            <option value="天">含车服务</option>
            <option value="次">特色服务</option>
            <option value="单程">接送机服务</option>
        </select>
    </li>
    <li>
        <h3 class="fl f14">服务明细</h3>
        <select class="slt fr mat5" id="list">
            <option>请选择</option>
            <option>伴游向导</option>
            <option>行程规划</option>
            <option>跟拍摄像</option>
            <option>代订服务</option>
            <option>陪同翻译</option>
            <option>旅行生活服务</option>
            <option>房产</option>
            <option>医疗</option>
            <option>商务</option>
        </select>
    </li>
    <li>
        <h3 class="fl f14">服务位置</h3>
        <select class="slt fr mat5" id="location">
            <option>请选择</option>
            <option>纽约</option>
            <option>东京</option>
            <option>香港</option>
        </select>
    </li>
</ul>
<h2 class="h2_tit f16">费用说明</h2>
<ul class="list_white list_box">
    <li>
        <h3 class="f14 long">每天服务时长</h3>
        <input type="text" class="ipt_serv" id="duration"/>
        <span>小时</span>
    </li>
    <li>
        <h3 class="f14 long">服务价格</h3>
        <input type="text" class="ipt_serv" id="normal_price"/>
        <span class="">CYN/天</span>
    </li>
    <li>
        <h3 class="f14 long">接待人数最多</h3>
        <input type="text" class="ipt_serv" id="max_people"/>
        <span class="">人</span>
    </li>
    <li>
        <h3 class="f14 long">超时服务费</h3>
        <input type="text" class="ipt_serv" id="overtime_price"/>
        <span class="">CYN/1小时</span>
    </li>
</ul>
<h2 class="h2_tit f16">费用不包括</h2>
<ul class="list_white">
    <li>
        <h3 class="fl f14">服务消费</h3>
        <input type="text" class="ipt_serv2 fr" value="0" id="serve_expense"/>
    </li>
    <li>
        <h3 class="fl f14">餐补费</h3>
        <input type="text" class="ipt_serv2 fr" value="0" id="food_expense"/>
    </li>
    <li>
        <h3 class="fl f14">异地住宿补贴</h3>
        <input type="text" class="ipt_serv2 fr" value="0" id="live_expense"/>
    </li>
    <li>
        <h3 class="fl f14">交通费</h3>
        <input type="text" class="ipt_serv2 fr" value="0" id="travel_expense"/>
    </li>
</ul>
<p class="tac"><span class="tip" style="color: red;" id="tip"></span></p>
<div class="pad10">
    <input type="button" value="确定" class="btn_sure" id="add_service"/>
</div>
<script type="text/javascript" src="/static/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/static/js/scale.js"></script>
<script type="text/javascript">
    $('#add_service').click(function(){
        var post_data = {};
        post_data.guide_id = $("#guide_id").val();
        post_data.name = $("#name option:selected").text();
        post_data.list = $("#list option:selected").text();
        if(post_data.list == '请选择'){
            $("#tip").html('请选择服务明细');
            return false;
        }
        post_data.unit = $("#name option:selected").val();
        post_data.location = $("#location option:selected").text();
        if(post_data.location == '请选择'){
            $("#tip").html('请选择服务位置');
            return false;
        }
        post_data.duration = $("#duration").val();
        if(post_data.duration == ''){
            $("#tip").html('请填写每天服务时长');
            return false;
        }
        post_data.normal_price = $("#normal_price").val();
        if(post_data.normal_price == ''){
            $("#tip").html('请填写服务价格');
            return false;
        }
        post_data.max_people = $("#max_people").val();
        if(post_data.max_people == ''){
            $("#tip").html('请填写接待人数');
            return false;
        }
        post_data.overtime_price = $("#overtime_price").val();
        if(post_data.overtime_price == ''){
            $("#tip").html('请填写超时服务费');
            return false;
        }
        post_data.serve_expense = $("#serve_expense").val();
        post_data.food_expense = $("#food_expense").val();
        post_data.live_expense = $("#live_expense").val();
        post_data.travel_expense = $("#travel_expense").val();

        var options = {
            url: '/guide/service/ajax_do_add',
            type: 'post',
            dataType: 'json',
            data: post_data,
            success: function (ret) {
                window.location.href = "/guide/service/index?guide_id="+<?php echo $guide_id;?>;
            }
        };

        $.ajax(options);
    });
</script>
</body>
</html>
