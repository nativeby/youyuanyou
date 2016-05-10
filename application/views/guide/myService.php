<!--mySelf.html-->
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
    <title>我的</title>
    <link href="/static/css/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<section class="myhead posi">
    <img src="/static/images/myself.jpg" class="my_img"/>
    <input type="button" value="" class="btn_edit" onclick="window.location.href = '/guide/person/index?guide_id=<?php echo $guide_id;?>'"/>
</section>
<ul class="list_white">
    <li>
        <h3 class="fl f14"><?php echo $guide_info['name']; ?></h3>
        <span class="fr gray9"><?php echo $guide_info['live_city']; ?>·<?php echo $guide_info['identity']; ?>·<?php echo $guide_info['live_years']; ?></span>
    </li>
</ul>
<h2 class="h2_tit f16">基本信息</h2>
<ul class="list_white">
    <li>
        <h3 class="fl f14">服务城市</h3>
        <span class="fr gray9"><?php echo $guide_info['service_city']; ?></span>
    </li>
    <li>
        <h3 class="fl f14">语言能力</h3>
        <span class="fr gray9"><?php echo $guide_info['language']; ?></span>
    </li>
    <li class="box">
        <h3 class="f14">个人介绍</h3>

        <p class="box-flex gray9 mal10"><?php echo $guide_info['intro']; ?></p>
    </li>
    <li>
        <h3 class="fl f14">旅游相册</h3>
        <?php if(!empty($guide_info['travel_picture'])):?>
        <article class="fr">
            <div class="picture">
                <?php foreach($guide_info['travel_picture'] as $v):?>
                <img src="/static/upload/<?php echo $v;?>"/>
                <?php endforeach;?>
            </div>
            <!--<span class="add"></span>-->
        </article>
        <?php endif;?>
    </li>
</ul>
<h2 class="h2_tit f16">我的服务</h2>
<section class="part">
    <?php foreach($service_info as $k => $v):?>
    <h2 class="part_tit part_tit<?php echo $k+1;?>"><span class="arow_right<?php echo $k+1;?>"></span><?php echo $v['name'];?> CNY<span class="red"><?php echo $v['normal_price'];?></span>/<?php echo $v['unit'];?></h2>
    <div class="foldcon foldcon<?php echo $k+1;?>" style="display:none">
        <ul class="white box_my">
            <li>
                <span>服务明细</span>
                <article class="box-flex gray9">
                    <p>
                        <span><?php echo $v['list'];?></span>
                       <!-- <span>伴游向导</span>
                        <span>行程规划</span>
                        <span>跟拍摄像</span>
                        <span>待定服务</span>
                        <span>陪同翻译</span>
                        <span>旅行生活服务</span>-->
                    </p>

                </article>
            </li>
            <li>
                <span>服务位置</span>
                <article class="box-flex gray9"><span><?php echo $v['location'];?></span></article>
            </li>
            <li>
                <span>费用说明</span>
                <article class="box-flex gray9">
                    <p><span>每天服务时长<?php echo $v['duration'];?>个小时</span></p>
                    <p><span>超时服务费CNY<?php echo $v['overtime_price'];?>（1小时）</span></p>
                    <p><span>接待人数最多<?php echo $v['max_people'];?>人</span></p>
                </article>
            </li>
            <li>
                <span>费用不包括</span>
                <article class="box-flex gray9">
                    <p><span>服务消费<?php echo $v['serve_expense'];?>元</span></p>
                    <p><span>餐补费<?php echo $v['food_expense'];?>元</span></p>
                    <p><span>异地住宿补贴<?php echo $v['live_expense'];?>元</span></p>
                    <p><span>交通费<?php echo $v['travel_expense'];?>元</span></p>
                </article>
            </li>
            <li>
                <span>补充说明</span>
                <article class="box-flex gray9">
                    <span>只要您开心，什么都好说</span>
                </article>
            </li>
        </ul>
        <div class="lightbg"><input type="button" value="修改服务" class="btn_white" onclick="window.location.href='/guide/service/modify?service_id=<?php echo $v['id'];?>'" /></div>
    </div>
    <?php endforeach;?>
</section>
<div class="pad10">
    <input type="button" value="添加服务" class="btn_sure" onclick="window.location.href = '/guide/service/add?guide_id=<?php echo $guide_id;?>'" />
</div>
<script type="text/javascript" src="/static/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/static/js/scale.js"></script>
</body>
</html>
