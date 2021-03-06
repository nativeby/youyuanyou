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
    <title>申请状态</title>
    <link href="/static/css/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<header class="head posi">
    申请状态
</header>
<section class="main">
    <article class="checkbg tac posi">
        <b class="pass_icon"></b>
        <h1 class="cardlogo f16">有缘游身份证</h1>
        <dl class="infor box">
            <dt style="background: url('/static/upload/<?php echo $guide_info['avatar'];?>')"></dt>
            <dd>
                <p>姓名：<span><?php echo $guide_info['name'];?></span></p>
                <p>手机号码：<span><?php echo $guide_info['mobile'];?></span></p>
                <p>身份证件：<span><?php echo $guide_info['idcard'];?></span></p>
                <p>颁发时间: <span><?php echo $guide_info['update_time'];?></span></p>
            </dd>
        </dl>
    </article>
    <p class="blue tac mat40">恭喜您获得有缘游身份证</p>

    <p class="gray9 tac mat5">看看时间表，找您的有缘人去吧</p>
    <input type="button" value="发布服务" class="btn_sure" onclick="window.location.href = '/guide/service/add?guide_id=<?php echo $guide_id;?>'" />
</section>
<script type="text/javascript" src="/static/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/static/js/scale.js"></script>
</body>
</html>
