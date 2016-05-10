<!--serviceMode.html-->
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
    <title>修改服务</title>
    <link href="/static/css/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<header class="head posi">
        <input type="button" class="btn_back" onclick="window.history.back(-1)" ;/>
    修改服务
</header>
<input type="hidden" value="<?php echo $service_id;?>" id="service_id"/>
<ul class="list_white">
    <li>
        <h3 class="fl f14">服务类型</h3>
        <select class="slt fr mat5" id="name">
            <option value="天" <?php echo ($service_info['name'] == '基本服务' ? 'selected' : '');?>>基本服务</option>
            <option value="天" <?php echo ($service_info['name'] == '含车服务' ? 'selected' : '');?>>含车服务</option>
            <option value="双程" <?php echo ($service_info['name'] == '特色服务' ? 'selected' : '');?>>特色服务</option>
            <option value="双程" <?php echo ($service_info['name'] == '接送机服务' ? 'selected' : '');?>>接送机服务</option>
        </select>
    </li>
    <li>
        <h3 class="fl f14">服务明细</h3>
        <select class="slt fr mat5" id="list">
            <option <?php echo ($service_info['list'] == '请选择' ? 'selected' : '');?>>请选择</option>
            <option <?php echo ($service_info['list'] == '伴有向导' ? 'selected' : '');?>>伴游向导</option>
            <option <?php echo ($service_info['list'] == '行程规划' ? 'selected' : '');?>>行程规划</option>
            <option <?php echo ($service_info['list'] == '跟拍摄像' ? 'selected' : '');?>>跟拍摄像</option>
            <option <?php echo ($service_info['list'] == '代订服务' ? 'selected' : '');?>>代订服务</option>
            <option <?php echo ($service_info['list'] == '陪同翻译' ? 'selected' : '');?>>陪同翻译</option>
            <option <?php echo ($service_info['list'] == '旅行生活服务' ? 'selected' : '');?>>旅行生活服务</option>
            <option <?php echo ($service_info['list'] == '房产' ? 'selected' : '');?>>房产</option>
            <option <?php echo ($service_info['list'] == '医疗' ? 'selected' : '');?>>医疗</option>
            <option <?php echo ($service_info['list'] == '商务' ? 'selected' : '');?>>商务</option>
        </select>
    </li>
    <li>
        <h3 class="fl f14">服务位置</h3>
        <select class="slt fr mat5" id="location">
            <option <?php echo ($service_info['location'] == '请选择' ? 'selected' : '');?>>请选择</option>
            <option <?php echo ($service_info['location'] == '纽约' ? 'selected' : '');?>>纽约</option>
            <option <?php echo ($service_info['location'] == '东京' ? 'selected' : '');?>>东京</option>
            <option <?php echo ($service_info['location'] == '香港' ? 'selected' : '');?>>香港</option>
        </select>
    </li>
</ul>
<h2 class="h2_tit f16">费用说明</h2>
<ul class="list_white list_box">
    <li>
        <h3 class="f14 long">每天服务时长</h3>
        <input type="text" placeholder="6" class="ipt_serv" id="duration" value="<?php echo $service_info['duration'];?>"/>
        <span class="">小时</span>
    </li>
    <li>
        <h3 class="f14 long">服务价格</h3>
        <input type="text" placeholder="1000" class="ipt_serv" id="normal_price" value="<?php echo $service_info['normal_price'];?>"/>
        <span class="">CYN/天</span>
    </li>
    <li>
        <h3 class="f14 long">接待人数最多</h3>
        <input type="text" placeholder="8" class="ipt_serv" id="max_people" value="<?php echo $service_info['max_people'];?>"/>
        <span class="">人</span>
    </li>
    <li>
        <h3 class="f14 long">超时服务费</h3>
        <input type="text" placeholder="400" class="ipt_serv" id="overtime_price" value="<?php echo $service_info['overtime_price'];?>"/>
        <span class="">CYN/1小时</span>
    </li>
</ul>
<h2 class="h2_tit f16">费用不包括</h2>
<ul class="list_white">
    <li>
        <h3 class="fl f14">服务消费</h3>
        <input type="text" placeholder="0" class="ipt_serv2 fr" id="serve_expense" value="<?php echo $service_info['serve_expense'];?>"/>
    </li>
    <li>
        <h3 class="fl f14">餐补费</h3>
        <input type="text" placeholder="0" class="ipt_serv2 fr" id="food_expense" value="<?php echo $service_info['food_expense'];?>"/>
    </li>
    <li>
        <h3 class="fl f14">异地住宿补贴</h3>
        <input type="text" placeholder="0" class="ipt_serv2 fr" id="live_expense" value="<?php echo $service_info['live_expense'];?>"/>
    </li>
    <li>
        <h3 class="fl f14">交通费</h3>
        <input type="text" placeholder="0" class="ipt_serv2 fr" id="travel_expense" value="<?php echo $service_info['travel_expense'];?>"/>
    </li>
</ul>
<p class="tac"><span class="tip" style="color: red;" id="tip"></span></p>
<div class="pad10">
    <input type="button" value="确定" class="btn_sure" id="modify_service"/>
</div>
<script type="text/javascript" src="/static/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/static/js/scale.js"></script>
<script type="text/javascript">
    $('#modify_service').click(function(){
        var post_data = {};
        post_data.service_id = $("#service_id").val();
        post_data.name = $("#name option:selected").text();
        if(post_data.name == ''){
            $("#tip").html('请选择服务类型');
            return false;
        }
        post_data.list = $("#list option:selected").text();
        if(post_data.list == ''){
            $("#tip").html('请选择服务明细');
            return false;
        }
        post_data.unit = $("#name option:selected").val();
        post_data.location = $("#location option:selected").text();
        post_data.duration = $("#duration").val();
        post_data.normal_price = $("#normal_price").val();
        post_data.overtime_price = $("#overtime_price").val();
        post_data.max_people = $("#max_people").val();
        post_data.serve_expense = $("#serve_expense").val();
        post_data.food_expense = $("#food_expense").val();
        post_data.live_expense = $("#live_expense").val();
        post_data.travel_expense = $("#travel_expense").val();

        var options = {
            url: '/guide/service/ajax_modify',
            type: 'post',
            dataType: 'json',
            data: post_data,
            success: function (ret) {
                window.location.href = "/guide/service/index?guide_id="+<?php echo $service_info['guide_id'];?>;
            }
        };

        $.ajax(options);
    });
</script>
</body>
</html>
