<!--applyUser.html-->
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
    <title>填写申请</title>
    <link href="/static/css/style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" media="screen" type="text/css" href="/static/datepicker/css/datepicker.css"/>
</head>

<body>
<header class="head posi head_taf">
    <img src="/static/images/lunch_logo.png" class="lunch_logo"/>
    - <?php echo $guide_info['name']; ?> - 填写申请
</header>
<h2 class="h2_tit f16">预订人信息</h2>

<form action="/user/reserve/result" method="post" id="formid">
    <ul class="list_white">
        <li>
            <h3 class="fl f14">成人数</h3>
            <select class="slt fr mat5" name="adult_num" id="adult_num">
                <option>请选择</option>
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <option><?php echo $i; ?></option>
                <?php endfor; ?>
            </select>
        </li>
        <li>
            <h3 class="fl f14">儿童数</h3>
            <select class="slt fr mat5" name="child_num" id="child_num">
                <option>请选择</option>
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <option><?php echo $i; ?></option>
                <?php endfor; ?>
            </select>
        </li>
        <li>
            <h3 class="fl f14">+86中国</h3>
            <input type="text" class="ipt_serv100 fl" name="contact_phone" id="contact_phone">
        </li>
    </ul>
    <input type="hidden" name="guide_id" value="<?php echo $guide_id; ?>">
    <h2 class="h2_tit f16">选择服务<span class="blue">（<?php echo $guide_info['name']; ?>）</span></h2>

    <?php foreach ($service_info as $k => $v): ?>
        <div class="part_tit applyuser_tit">
            <span class="fr">CNY<b class="red"><?php echo $v['normal_price']; ?></b>/<?php echo $v['unit']; ?></span>
            <input type="checkbox" class="chk chk_blue" id="checkbox0<?php echo $k + 1; ?>" value="<?php echo $v['normal_price']; ?>">
            <label for="checkbox0<?php echo $k + 1; ?>"><?php echo $v['name']; ?></label>
            <input type="hidden" id="ischecked0<?php echo $k + 1; ?>" name="is_checked[]" value="0">
            <input type="hidden" name="service_name[]" value="<?php echo $v['name']; ?>">
            <input type="hidden" name="normal_price[]" value="<?php echo $v['normal_price']; ?>">
        </div>
        <div class="row_white">
            <h3 class="fl f14">预计天数</h3>
            <input type="text" id="inputDate0<?php echo $k + 1; ?>" value="" readonly="readonly" class="slt fr mat5"/>
        </div>
        <p class="padtblr10">
            <input type="text" id="showDate0<?php echo $k + 1; ?>" name="service_date[]" value="<?php echo date('Y-m-d',time());?>" readonly="readonly" style="width: 100%"/>
        </p>

        <div class="row_white"><h3 class="f14 fl">服务城市</h3>

            <p class="fl mal10 gray9">
                <label><?php echo $v['location']; ?></label>
                <input type="hidden" name="location[]" value="<?php echo $v['location']; ?>">
            </p>
        </div>
    <?php endforeach; ?>

    <p class="tar mat10 par10">总费用：CNY<span class="red" id="total_price_show">0</span></p>
    <input type="hidden" name="total_price" id="total_price" value="">

    <h2 class="h2_tit f16">向有缘人打个招呼</h2>
    <textarea placeholder="将您的行程计划或需求告知对方" class="area2"></textarea>

    <h2 class="h2_tit f16">预订须知</h2>

    <div class="row_white lh18">
        <p class="f14">关于预订金</p>

        <p class="gray9 f13">在平台支付预定金一般不低于总服务费用的20%</p>

        <p class="mat10 f14">取消政策</p>

        <p class="gray9 f13">根据有缘人的设置，服务开始5天前取消预定，可全部退还预定金</p>
    </div>
    <p class="tac"><span class="tip" style="color: red;" id="tip"></span></p>
    <ul class="row_white box box_bot">
        <li>预订金：CNY<span class="red" id="pre_price_show">0</span></li>
        <input type="hidden" name="pre_price" id="pre_price" value="">
        <li id="btnReserve">提交申请</li>
    </ul>
</form>

<script type="text/javascript" src="/static/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/static/js/scale.js"></script>
<script type="text/javascript" src="/static/datepicker/js/jquery.js"></script>
<script type="text/javascript" src="/static/datepicker/js/datepicker.js"></script>
<script type="text/javascript" src="/static/datepicker/js/eye.js"></script>
<script type="text/javascript">
    function getCurrentDate() {
        var mydate = new Date();
        var year = mydate.getFullYear(); //获取完整的年份(4位,1970-????)
        var month = mydate.getMonth() + 1; //获取当前月份(0-11,0代表1月)
        var date = mydate.getDate(); //获取当前日(1-31)

        return year + '-' + month + '-' + date;
    }

    var current = getCurrentDate();
    <?php foreach($service_info as $k => $v):?>
    $("#inputDate0<?php echo $k+1?>").DatePicker({
        format: 'Y-m-d',
        date: current,
        current: current, //$('#inputDate1').val(),
        starts: 0,   // 从周日开始
        position: 'r',
        calendars: 1,
        mode: 'multiple',
        /*onBeforeShow: function(){
         $('#inputDate').DatePickerSetDate($('#inputDate').val(), true);
         },*/
        onChange: function (formated, dates) {
            $("#showDate0<?php echo $k+1?>").val(formated);
            /*$('#inputDate').DatePickerHide();*/
        }
    });
    <?php endforeach;?>

    $('#btnReserve').click(function () {
        var post_data = {};
        post_data.adult_num = $("#adult_num option:selected").text();
        if (post_data.adult_num == '请选择') {
            $("#tip").html('请选择成人数');
            return false;
        }
        post_data.child_num = $("#child_num option:selected").text();
        if (post_data.child_num == '请选择') {
            $("#tip").html('请选择儿童数');
            return false;
        }
        post_data.contact_phone = $("#contact_phone").val();
        if (post_data.contact_phone == '') {
            $("#tip").html('请填写联系人手机号');
            return false;
        }

        var total_price = 0;
        <?php foreach ($service_info as $k => $v): ?>
        if($("#checkbox0<?php echo $k+1;?>").attr('checked')){
            var count = $("#showDate0<?php echo $k+1;?>").val().split(",").length;
            total_price = total_price + $("#checkbox0<?php echo $k+1;?>").val() * count;
            $("#ischecked0<?php echo $k+1;?>").val(1);
        }
        <?php endforeach;?>
        $("#total_price_show").html(total_price);
        $("#total_price").val(total_price);
        $("#pre_price_show").html((total_price * 0.2).toFixed(2));
        $("#pre_price").val((total_price * 0.2).toFixed(2));

        if(total_price == '0'){
            $("#tip").html('请选择服务！');
            return false;
        }

        if(window.confirm("请核实总费用和预定金，确认吗?")){
            $("#formid").submit();
        }
    });
</script>
</body>
</html>