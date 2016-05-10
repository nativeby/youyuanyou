<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <link href="/assets/css/css.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="/assets/js/jquery-2.0.3.min.js"></script>
</head>

<body>
<div class="centerDiv">
    <div class="login_left">
        <img src="/assets/images/gallery/thumb-4.jpg" alt="有缘游LOGO" />
        <!--  <p><span style="font-size:14px">请选择系统&nbsp;&nbsp;</span>
              <SELECT id=c style="DISPLAY: " name=c>
                  <option value="OSS" selected>subsystem</option>
                  <option value="OSS">OSS</option>
                  <option value="CRM">CRM</option>
                  <option value="Building">GMT</option>
                  <option value="CMS">CMS</option>
              </SELECT><br />
          </p>-->
        <p><input type="checkbox" id="remember" checked="checked"/>
            是否记住用户名</p>
    </div>
    <div class="login_mid"><img src="/assets/images/login_line.gif" width="6" height="340"/></div>
    <div class="login_right">
        <form name="">
            <p><span>用户名：</span><input type="text" class="font_s" name="username" placeholder="" id="Username"
                                       value=<?php echo $remName; ?>></p>

            <p><span>密&ensp;&ensp;码：</span><input class="font_s" name="password" type="password" placeholder=""
                                                  id="Password" onpaste="return false"></p>
            <!-- <p><span>验证码：</span><input class="login_y" name="verify" id="verify" type="text" /><img id="verifyImg" name="verify" onClick="changeVerify()" src='/index/user/verify' ></p>-->
            <p>
                <button type="button" id="login" class="button"><span>登录</span></button>
            </p>
        </form>
        <span id="empty" style="color: red; display: none;">用户名和密码不匹配，请重新输入！</span>
    </div>
</div>
<div class="hiddenDiv"></div>

<style type="text/css">
    .footer {
        width: 100%;
        height: 50px;
        text-align: center;
        color: #666;
        font-size: 12px;
        font-family: Arial, Helvetica, sans-serif;
        border-top: 1px solid #cdcdcd;
        padding-top: 15px;
    }
</style>
<script language="JavaScript">
    function changeVerify() {
        var timenow = new Date().getTime();
        document.getElementById('verifyImg').src = '/index/user/verify?time=' + timenow;
    }

    $("#login").click(function(){
        var userName = $("#Username").val();
        var password = $("#Password").val();
      /*  var verify   = $("#verify").val();*/
        if($('#remember').is(':checked')){
            var remember = 'yes';
        }else{
            var remember = 'no';
        }
        if(userName =='' || password == ''){
            $("#empty").fadeIn(1000);
            $("#empty").fadeOut(2000);
            return false;
        }

        $.post("login/do_login",{userName:userName,password:password},
            function(ret){
                if(ret.code != 1){
                    //alert(ret.msg);
                    $("#empty").fadeIn(1000);
                    $("#empty").fadeOut(2000);
                }else{
                    window.location.href = "home/index";
                }
                return false;
            },"json");
    })

</script>
<div class="footer">
    版权所有 © 2015 YOUYUANYOU METWORK CO.LCD ALL RIGHTS RESERVED. ICP备11023195号-3
    <p>技术支持：有缘游研发中心</p>
</div>

</body>
</html>
