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
    <title>介绍自己</title>
    <link href="/static/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/static/css/upload.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<header class="head posi">
    <input type="button" value="" class="btn_back" onclick="window.history.back(-1);"/>
    介绍自己
</header>
<input type="hidden" value="<?php echo $guide_id;?>" id="guide_id">
<section class="upload posi">
    <?php if(empty($guide_info['avatar'])):?>
        <img src="/static/images/person.jpg"/>
    <?php else :?>
        <img src="/static/upload/<?php echo $guide_info['avatar'];?>"/>
    <?php endif;?>
  <!--  <input type="button" value="点击上传生活照" class="btn_upload"/>-->
</section>
<h2 class="h2_tit f16">基本信息</h2>
<ul class="list_white">
    <li>
        <h3 class="fl f14">服务城市</h3>
        <select class="slt fr mat5" id="service_city">
            <option <?php echo ($guide_info['service_city'] == '请选择' ? 'selected' : '');?>>请选择</option>
            <option <?php echo ($guide_info['service_city']  == '纽约' ? 'selected' : '');?>>纽约</option>
            <option <?php echo ($guide_info['service_city']  == '东京' ? 'selected' : '');?>>东京</option>
            <option <?php echo ($guide_info['service_city']  == '香港' ? 'selected' : '');?>>香港</option>
        </select>
    </li>
    <li>
        <h3 class="fl f14">语言能力</h3>
        <select class="slt fr mat5" id="language">
            <option <?php echo ($guide_info['language'] == '请选择' ? 'selected' : '');?>>请选择</option>
            <option <?php echo ($guide_info['language'] == '汉语（普通话）' ? 'selected' : '');?>>汉语（普通话）</option>
            <option <?php echo ($guide_info['language'] == '汉语（广东话）' ? 'selected' : '');?>>汉语（广东话）</option>
            <option <?php echo ($guide_info['language'] == '英语' ? 'selected' : '');?>>英语</option>
            <option <?php echo ($guide_info['language'] == '日语' ? 'selected' : '');?>>日语</option>
        </select>
    </li>
    <li class="box">
        <h3 class="f14">个人介绍</h3>
        <textarea placeholder="介绍下你自己，也许有缘人下一秒就来了" class="area box-flex" id="intro"><?php echo $guide_info['intro'];?></textarea>
    </li>
    <li>
        <h3 class="fl f14">旅游相册</h3>
        <article class="fr">
            <div class="picture">
                <?php if(!empty($guide_info['travel_picture'])):?>
                <?php foreach($guide_info['travel_picture'] as $v):?>
                    <img src="/static/upload/<?php echo $v;?>"/>
                <?php endforeach;?>
                <?php endif;?>
            </div>
            <span class="btn add">
                <input id="travel_picture_upload" type="file" name="mypic">
                <input type="hidden" id="travel_pictures" value="">
             </span>
        </article>
    </li>
</ul>
<p class="tac"><span class="tip" style="color: red;" id="tip"></span></p>
<div class="pad10">
    <input type="button" value="确定" class="btn_sure" id="perfect_me"/>
</div>
<script type="text/javascript" src="/static/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/static/js/jquery.form.js"></script>
<script type="text/javascript" src="/static/js/scale.js"></script>
<script type="text/javascript">
    $(function () {
        $("#travel_picture_upload").wrap("<form id='myupload' action='/image/upload' method='post' enctype='multipart/form-data'></form>");
        $("#travel_picture_upload").change(function(){
            $("#myupload").ajaxSubmit({
                dataType:  'json',
                success: function(data) {
                    var img = data.pic;
                    $(".picture").append("<img src='/static/upload/"+img+"'/>");
                    var tps = $("#travel_pictures").val();
                    $("#travel_pictures").val(tps + img + ',');
                },
                error:function(xhr){
                    $("#tip").html('上传失败');
                }
            });
        });
    });


    $('#perfect_me').click(function(){
        var post_data = {};
        post_data.guide_id = $("#guide_id").val();
        post_data.service_city = $("#service_city option:selected").text();
        if(post_data.service_city == '请选择'){
            $("#tip").html('请选择服务城市');
            return false;
        }
        post_data.language = $("#language option:selected").text();
        if(post_data.language == '请选择'){
            $("#tip").html('请选择语言能力');
            return false;
        }
        post_data.intro = $("#intro").val();
        if(post_data.intro == ''){
            $("#tip").html('请一句话填写自我介绍');
            return false;
        }
        post_data.travel_picture = $("#travel_pictures").val();

        var options = {
            url: '/guide/apply/ajax_do_update',
            type: 'post',
            dataType: 'json',
            data: post_data,
            success: function (ret) {
                if(ret.code == 200){
                    window.location.href = "/guide/service/index?guide_id=" + post_data.guide_id;
                }
            }
        };

        $.ajax(options);
    });
</script>
</body>
</html>
