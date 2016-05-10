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
    <title>导游列表</title>
    <link href="/static/css/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<header class="head posi head_taf">
<!--    <input type="button" value="" class="btn_search"/>-->
    <img src="/static/images/lunch_logo.png" class="lunch_logo" id="btnLogo"/>
    - <?php echo $service_city;?>
</header>

<ul class="list_guide" id="listGuide">
    <li><img src="/static/images/pic01.jpg"/><span class="time" id="showTime">12:23:43</span></li>

    <?php foreach($guide_service_info as $v):?>
    <li onclick="window.location.href = '/user/guide/detail?guide_id=<?php echo $v['guide_id'];?>'">
        <img src="/static/images/pic02.jpg"/><span class="heart_white"></span>
    </li>
    <li class="pad10">
        <h3 class="fl f16"><?php echo $v['gname'];?></h3>
        <span class="fr f14">CNY<b class="red"><?php echo $v['normal_price'];?></b>/<?php echo $v['unit'];?>（基本服务）</span>
        <div class="clear"></div>
        <p class="f14"><?php echo $v['live_city'];?>·<?php echo $v['identity'];?>·生活<?php echo $v['live_years'];?></p>
    </li>
    <?php endforeach;?>
<!--    <li class="choose mat10">
        <img src="/static/images/pic03.jpg"/>
        <span class="heart_red"></span>
    </li>-->
</ul>
<!--<div class="bot_bg">
    <input type="button" value="筛选条件" class="btn_sure" id="btnChoose"/>
</div>-->
<script type="text/javascript" src="/static/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/static/js/scale.js"></script>
<script type="text/javascript">
    setInterval("qi()",1000);//每一秒执行一次
    //创建补0函数
    function p(s) {
        return s < 10 ? '0' + s : s;
    }
    function qi()//
    {
        var toDay = new Date();//创建时间对象
       /* var Year = toDay.getFullYear();//年
        var Month = toDay.getMonth()+1;//月
        var day = toDay.getDate();//日*/
        var Hours = toDay.getHours();//时
        var Mi = p(toDay.getMinutes());//分
        var Sec = p(toDay.getSeconds());//秒
        /*var time = Year1+"年"+Month1+"月"+day1+"日"+Hours1+":"+Mi1+":"+Sec1*/
        var time = Hours + ":" + Mi + ":" + Sec;
        document.getElementById("showTime").innerText = time;
    }
</script>
</body>
</html>
