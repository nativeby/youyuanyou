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
    <title>目的地</title>
    <link href="/static/css/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<header class="head posi head_taf">
    <input type="button" value="" class="btn_search" id="goSearch"/>
    <img src="/static/images/lunch_logo.png" class="lunch_logo"/>
</header>
<ul class="place">
    <li><img src="/static/images/place01.jpg" class="place01"/></li>
</ul>
<ul class="place" style="margin-bottom:5.3rem;">
    <?php foreach($guide_sc as $v):?>
    <li onclick="window.location.href = '/user/guide/listing?sc=<?php echo $v['service_city'];?>'">
        <img src="<?php echo $v['place_image'];?>" class="place03"/>
        <div class="place_intro">
            <span><?php echo $v['service_city'];?></span>
            <p class="have_bg"><?php echo $v['num'];?>位有缘人</p>
        </div>
    </li>
    <?php endforeach;?>
</ul>
<ul class="foot">
    <li class="select">目的地</li>
    <li id="footMessage">消息</li>
    <li id="footOrder">订单</li>
    <li id="footMy">我</li>
</ul>
<script type="text/javascript" src="/static/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/static/js/scale.js"></script>
<script type="text/javascript" src="/static/js/place.js"></script>
</body>
</html>