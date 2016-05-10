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
    <title>预定需求</title>
    <link href="/static/css/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<header class="head posi">
    <input type="button" value="" class="btn_back" onclick="window.history.back(-1);"/>
    预定需求
</header>
<ul class="list_white">
    <li>
        <h3 class="fl f14">时间：</h3>
        <span class="gray9"><?php echo $reserve_date;?></span>
    </li>
    <li>
        <h3 class="fl f14">成人数：</h3>
        <span class="gray9"><?php echo $adult_num;?>位</span>
    </li>
    <li>
        <h3 class="fl f14">儿童数：</h3>
        <span class="gray9"><?php echo $child_num;?>位</span>
    </li>
    <li>
        <h3 class="fl f14">服务城市： </h3>
        <span class="gray9"><?php echo $location[0];?></span>
    </li>
</ul>
<?php foreach($service_name as $k => $v):?>
<h2 class="h2_tit f16"><?php echo $v;?></h2>

<div class="row_white gray9">
    <p><?php echo $service_date[$k];?></p>

    <p>CNY<?php echo $normal_price[$k];?>*<?php echo count(explode(',',$service_date[$k]));?>=CNY<?php echo $normal_price[$k]*count(explode(',',$service_date[$k]));?></p>
</div>
<?php endforeach;?>
<div class="tar pad10 mat10">
    <p>CNY<span class="red"><?php echo $total_price;?></span> 合计费用</p>

    <p>CNY<span class="red"><?php echo $pre_price;?></span> 预订金</p>
</div>
<p class="tac"><span class="tip" style="color: red;" id="tip"></span></p>
<ul class="row_white box box_bot">
    <li id="btnPay">立即支付</li>
</ul>
<script type="text/javascript" src="/static/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/static/js/scale.js"></script>
<script type="text/javascript">
    $('#btnPay').click(function(){
        var post_data = {};
        post_data.adult_num = "<?php echo $adult_num;?>";
        post_data.child_num = "<?php echo $child_num;?>";
        post_data.contact_phone = "<?php echo $contact_phone;?>";
        post_data.serve_location = "<?php echo $location[0];?>";
        post_data.reserved_guide_id = "<?php echo $guide_id;?>";
        post_data.total_price = "<?php echo $total_price;?>";
        post_data.pre_price = "<?php echo $pre_price;?>";

        post_data.reserved_service = new Array();
        <?php foreach($service_name as $k => $v):?>
        post_data.reserved_service.push("<?php echo $v;?>|<?php echo $service_date[$k];?>|<?php echo $normal_price[$k]*count(explode(',',$service_date[$k]));?>");
        <?php endforeach;?>

        var options = {
            url: '/user/reserve/ajax_create_order',
            type: 'post',
            dataType: 'json',
            data: post_data,
            success: function (ret) {
                if(ret.code == 200){
                    window.location.href = "/user/pay/index?amount=<?php echo $pre_price;?>";
                }else{
                    $("#tip").html('创建订单失败');
                    return false;
                }
            }
        };

        $.ajax(options);
    });
</script>
</body>
</html>
