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
    <title>有缘游</title>
    <link href="/static/css/style.css" rel="stylesheet" type="text/css"/>
    <style>
        body {
            background: #4abdcc;
        }

        ::-webkit-input-placeholder {
            font-size: 1.6rem;
            color: #b4e0e6;
        }

        input {
            color: #FFF;
        }
    </style>
</head>

<body>
<header class="posi head">
    <input type="button" value="" class="btn_back" onclick="window.history.back(-1)" />
</header>
<input type="hidden" id="refer" value="<?php echo $refer;?>">
<section class="main mat30">
    <input type="text" placeholder="请输入手机号" class="ipt" id="mobile"/>

    <div class="mat20 bor_white box">
        <input type="text" placeholder="短信验证码" class="iptsmall" id="captcha"/>
        <input type="button" value="点击发送验证码" class="btn_send" onclick="sms_countdown(this)"/>
    </div>
    <p class="tac"><span class="tip" style="color: red;" id="tip"></span></p>
    <input type="button" value="同意协议并登录" class="btn_login" id="do_login"/>

    <p class="lightw tac">有缘游导游隐私协议</p>
</section>
<script type="text/javascript" src="/static/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/static/js/scale.js"></script>
<script type="text/javascript" src="/static/js/place.js"></script>
<script type="text/javascript">
    /*发送验证码*/
    var countdown = 60;
    function sms_countdown(obj) {
        if (countdown == 0) {
            obj.removeAttribute("disabled");
            obj.value="点击发送验证码";
            countdown = 60;
            return;
        } else {
            obj.setAttribute("disabled", true);
            obj.value="(" + countdown + ") 秒后可重发";
            countdown--;
        }
        setTimeout(function(){sms_countdown(obj)},1000);
    }

    /*登录*/
    $('#do_login').click(function(){
        var post_data = {};
        post_data.refer = $("#refer").val();
        post_data.mobile = $("#mobile").val();
        post_data.captcha = $("#captcha").val();

        if(post_data.mobile == ''){
            $("#tip").html('请填写手机号');
            return false;
        }

        if(post_data.mobile.length != '11'){
            $("#tip").html('手机号格式不正确');
            return false;
        }

        if(post_data.captcha == ''){
            $("#tip").html('请填写验证码');
            return false;
        }

        var options = {
            url: '/login/ajax_do_login',
            type: 'post',
            dataType: 'json',
            data: post_data,
            success: function (ret) {
                if(ret.code == 200){
                    window.location.href = ret.redirect_url;
                }else{
                    $("#tip").html(ret.msg);
                }
            }
        };

        $.ajax(options);
    });
</script>
</body>
</html>
