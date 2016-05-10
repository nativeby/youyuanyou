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
    <title>支付</title>
    <link href="/static/css/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<header class="head posi">
    支付
</header>
<div class="row_white">
    <span class="gray9">支付金额：</span>CNY<span class="red"><?php echo $amount;?></span>
</div>
<h2 class="h2_tit f16">选择支付方式</h2>
<ul class="list_white">
    <li>
        <div class="wx fl">
            <p>微信支付</p>

            <p class="gray9">推荐微信用户使用</p>
        </div>
        <p class="fr gray9 mat15"><input type="radio" class="chk chk_blue chk_gray" name="radio" id="radio01"><label
                for="radio01">&nbsp;</label></p>
    </li>
    <li>
        <div class="zfb fl">
            <p>支付宝</p>

            <p class="gray9">推荐支付宝用户使用</p>
        </div>
        <p class="fr gray9 mat15"><input type="radio" class="chk chk_blue chk_gray" name="radio" id="radio02"><label
                for="radio02">&nbsp;</label></p>
    </li>
</ul>
<div class="pad10" id="btnPay"><input type="button" class="btn_sure" value="确定"/></div>
<script type="text/javascript" src="/static/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/static/js/scale.js"></script>
<script type="text/javascript">
    $("#btnPay").click(function () {
       /* window.location.href = "/user/pay/result";*/
        window.location.href = "/alipay/index";
    })
</script>
</body>
</html>
