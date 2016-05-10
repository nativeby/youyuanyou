<!--apply.html-->
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
    <title>有缘游向导申请表</title>
    <link href="/static/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/static/css/upload.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<header class="head posi">
    <input type="button" value="" class="btn_back" onclick="window.history.back(-1);"/>
    有缘游向导申请表
</header>
<ul class="list_white list_box">
    <li>
        <h3 class="f14 long">姓名</h3>
        <input type="text" placeholder="请输入真实姓名" class="ipt_serv f14" id="name"/>
    </li>
    <li>
        <h3 class="long f14">出生年月</h3>
        <select class="slt mat5 ipt_serv" id="birth_year">
            <option>请选择</option>
            <?php for ($i = 1960; $i < 2016; $i++): ?>
            <option><?php echo $i; ?>年</option>
            <?php endfor; ?>
        </select>
        <select class="slt mat5 ipt_serv" id="birth_month">
            <option>请选择</option>
            <?php for ($i = 1; $i <= 12; $i++): ?>
                <option><?php echo $i; ?>月</option>
            <?php endfor; ?>
        </select>
    </li>
    <li>
        <h3 class="f14 long">籍贯</h3>
        <select class="slt mat5 ipt_serv" id="origin">
            <option>请选择</option>
            <?php foreach ($provinces as $v): ?>
                <option><?php echo $v['province']; ?></option>
            <?php endforeach; ?>
        </select>
    </li>
    <li>
        <h3 class="long f14">常驻城市</h3>
        <select class="slt mat5 ipt_serv" id="live_city">
            <option>请选择</option>
            <option>纽约</option>
            <option>东京</option>
            <option>香港</option>
        </select>
    </li>
    <li>
        <h3 class="long f14">生活年限</h3>
        <select class="slt mat5 ipt_serv" id="live_years">
            <option>请选择</option>
            <?php for ($i = 1; $i <= 50; $i++): ?>
                <option><?php echo $i; ?>年</option>
            <?php endfor; ?>
        </select>
    </li>
    <li>
        <h3 class="long f14">目前身份</h3>
        <select class="slt mat5 ipt_serv" id="identity">
            <option>请选择</option>
            <option>留学生</option>
            <option>律师</option>
            <option>警察</option>
        </select>
    </li>
</ul>
<h2 class="h2_tit f16">最高学历</h2>
<div class="pad10 list_radio">
    <p><input type="radio" class="chk" name="radio_edu" id="radio01" value="本科学历" checked/><label for="radio01">本科学历</label></p>
    <p><input type="radio" class="chk" name="radio_edu" id="radio02" value="硕士学历"/><label for="radio02">硕士学历</label></p>
    <p><input type="radio" class="chk" name="radio_edu" id="radio03" value="博士学历"/><label for="radio03">博士学历</label></p>
    <p><input type="radio" class="chk fl" name="radio_edu" id="radio04" value="其他"/>
        <label for="radio04" class="fl">其他</label>
        <input type="text" class="ipt_other FL" id="edu_other"/>
    </p>
</div>

<ul class="list_white mat20 list_box">
    <li>
        <h3 class="long f14">E-mail</h3>
        <input type="text" placeholder="请填写有效E-mail" class="ipt_serv" id="email"/>
    </li>
    <li>
        <h3 class="long f14">QQ</h3>
        <input type="text" placeholder="请填写有效QQ" class="ipt_serv" id="qq"/>
    </li>
    <li>
        <h3 class="long f14">微信</h3>
        <input type="text" placeholder="请填写有效微信号" class="ipt_serv" id="wechat"/>
    </li>
    <li>
        <h3 class="long f14">手机</h3>
        <input type="text" placeholder="记得写上国家代码" class="ipt_serv" id="mobile"/>
    </li>
    <li>
        <h3 class="long f14">身份证号</h3>
        <input type="text" placeholder="请填写身份证号" class="ipt_serv" id="idcard"/>
    </li>
</ul>
<h2 class="h2_tit f16">上传本人照片</h2>

<p class="f14 gray9 pad10 matf10">注：请上传本人照片<br/>
    （照片仅用于做您有缘游人身份头像）</p>

<div class="li_white"><!--<span class="arow_gray"></span>-->请选择小于20M文件进行上传&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="btn">
        <span id="avatar_span">上传照片</span>
        <input id="avatar_upload" type="file" name="mypic">
        <input id="avatar" type="hidden" value="">
    </div>
</div>

<h2 class="h2_tit f16">上传身份证照或护照信息页</h2>

<p class="f14 gray9 pad10 matf10">注：证件上的姓名和证件号徐清晰可见
    （证件仅用于验证您的真实身份，有缘游有完善的保密
    系统，是一个安全的平台，请您放心您的隐安全</p>

<div class="li_white"><!--<span class="arow_gray"></span>-->请选择小于20M文件进行上传&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="btn">
        <span id="cert_picture_span">上传照片</span>
        <input id="cert_picture_upload" type="file" name="mypic">
        <input id="cert_picture" type="hidden" value="">
    </div>
</div>
<h2 class="h2_tit f16">是否会开车</h2>

<div class="isout clear">
    <p><input type="radio" class="chk" name="radio_cdc" id="radio05" value="1" checked/><label for="radio05">是</label></p>

    <p><input type="radio" class="chk" name="radio_cdc" id="radio06" value="0"/><label for="radio06">否</label></p>
</div>
<h2 class="h2_tit f16">汽车品牌及型号</h2>

<div class="li_white">
    <input type="text" placeholder="如：宝马530Le" class="ipt100" id="car_style"/>
</div>
<h2 class="h2_tit f16">几座汽车</h2>

<div class="pad10 list_radio">
    <p><input type="radio" class="chk" name="radio_cs" id="radio07" value="五座" checked/><label for="radio07">五座</label></p>

    <p><input type="radio" class="chk" name="radio_cs" id="radio08" value="七座"/><label for="radio08">七座</label></p>

    <p><input type="radio" class="chk" name="radio_cs" id="radio09" value="八至十二座"/><label for="radio09">八至十二座</label></p>

    <p><input type="radio" class="chk" name="radio_cs" id="radio10" value="十五座"/><label for="radio10">十五座</label></p>

    <p><input type="radio" class="chk" name="radio_cs" id="radio11" value="十八座以上"/><label for="radio11">十八座以上</label></p>
</div>
<h2 class="h2_tit f16">上传汽车照片</h2>

<div class="li_white"><!--<span class="arow_gray"></span>-->请选择小于20M文件进行上传&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="btn">
        <span id="car_picture_span">上传照片</span>
        <input id="car_picture_upload" type="file" name="mypic">
        <input id="car_picture" type="hidden" value="">
    </div>
</div>
<p class="tac"><span class="tip" style="color: red;" id="tip"></span></p>
<div class="pad10">
    <input type="button" value="提交申请" class="btn_sure" id="submit_apply"/>
</div>
<script type="text/javascript" src="/static/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/static/js/jquery.form.js"></script>
<script type="text/javascript" src="/static/js/scale.js"></script>
<script type="text/javascript">
    $(function () {
        $("#avatar_upload").wrap("<form id='myupload' action='/image/upload' method='post' enctype='multipart/form-data'></form>");
        $("#avatar_upload").change(function(){
            $("#myupload").ajaxSubmit({
                dataType:  'json',
                success: function(data) {
                    var img = data.pic;
                    $("#avatar").val(img);
                    $("#avatar_span").html("上传成功");
                },
                error:function(xhr){
                    $("#avatar_span").html("上传失败");
                }
            });
        });
    });

    $(function () {
        $("#cert_picture_upload").wrap("<form id='myupload2' action='/image/upload' method='post' enctype='multipart/form-data'></form>");
        $("#cert_picture_upload").change(function(){
            $("#myupload2").ajaxSubmit({
                dataType:  'json',
                success: function(data) {
                    var img = data.pic;
                    $("#cert_picture").val(img);
                    $("#cert_picture_span").html("上传成功");
                },
                error:function(xhr){
                    $("#cert_picture_span").html("上传失败");
                }
            });
        });
    });

    $(function () {
        $("#car_picture_upload").wrap("<form id='myupload3' action='/image/upload' method='post' enctype='multipart/form-data'></form>");
        $("#car_picture_upload").change(function(){
            $("#myupload3").ajaxSubmit({
                dataType:  'json',
                success: function(data) {
                    var img = data.pic;
                    $("#car_picture").val(img);
                    $("#car_picture_span").html("上传成功");
                },
                error:function(xhr){
                    $("#car_picture_span").html("上传失败");
                }
            });
        });
    });

    $('#submit_apply').click(function(){
        var post_data = {};
        post_data.name = $("#name").val();
        if(post_data.name == ''){
            $("#tip").html('请填写姓名');
            return false;
        }
        post_data.birth = $("#birth_year option:selected").text() + $("#birth_month option:selected").text();
        if($("#birth_year option:selected").text() == '请选择' || $("#birth_month option:selected").text() == '请选择'){
            $("#tip").html('请选择出生年月');
            return false;
        }
        post_data.origin = $("#origin option:selected").text();
        if(post_data.origin == '请选择'){
            $("#tip").html('请选择籍贯');
            return false;
        }
        post_data.live_city = $("#live_city option:selected").text();
        if(post_data.live_city == '请选择'){
            $("#tip").html('请选择常驻城市');
            return false;
        }
        post_data.live_years = $("#live_years option:selected").text();
        if(post_data.live_years == '请选择'){
            $("#tip").html('请选择生活年限');
            return false;
        }
        post_data.identity = $("#identity option:selected").text();
        if(post_data.identity == '请选择'){
            $("#tip").html('请选择目前身份');
            return false;
        }
        var edu = $('input:radio[name="radio_edu"]:checked').val();
        if(edu == '其他'){
            edu = edu + '-'+ $("#edu_other").val();
        }
        post_data.education = edu;
        post_data.email = $("#email").val();
        post_data.qq = $("#qq").val();
        post_data.wechat = $("#wechat").val();
        if(post_data.email == '' && post_data.qq == '' && post_data.wechat == ''){
            $("#tip").html('Email、QQ号、微信号请至少填写一项，方便后续联系。');
            return false;
        }
        post_data.mobile = $("#mobile").val();
        if(post_data.mobile == ''){
            $("#tip").html('请填写正确的手机号，将作为你后续登录的凭证。');
            return false;
        }
        post_data.idcard = $("#idcard").val();
        if(post_data.idcard == ''){
            $("#tip").html('请填写身份证号。');
            return false;
        }
        post_data.avatar = $("#avatar").val();
        post_data.cert_picture = $("#cert_picture").val();
        post_data.can_drive_car = $('input:radio[name="radio_cdc"]:checked').val();
        post_data.car_style = $("#car_style").val();
        post_data.car_seat = $('input:radio[name="radio_cs"]:checked').val();
        post_data.car_picture = $("#car_picture").val();

        var options = {
            url: '/guide/apply/ajax_do_add',
            type: 'post',
            dataType: 'json',
            data: post_data,
            success: function (ret) {
                if(ret.code == 200){
                    window.location.href = "/guide/check/waiting";
                }else{
                    $("#tip").html(ret.msg);
                    return false;
                }
            }
        };

        $.ajax(options);
    });
</script>
</body>
</html>