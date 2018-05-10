<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>注册 - 视频共享</title>
    <link rel="shortcut icon"href="/Public/Home/pic/ico.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="/Public/Home/css/signup.css">
  </head>
  <body>
      <div class="body">
        <div class="logo"><img src="/Public/Home/pic/signup_logo.png"/></div>
        <div class="info_box">
          <h2>加入我们</h2>
          <form action="<?php echo U('Passport/doReg');?>" method="POST">
            <div class="input_box">
              <input type="text" name="name" placeholder="用 户 名"/>
              <p class="tip">支持中文、字母、数字、“-”“_”的组合，2-20个字符</p>
            </div>
            <div class="input_box">
              <input type="password" name="pwd" placeholder="设 置 密 码"/>
              <p class="tip">建议使用字母、数字和符号两种及以上的组合，6-20个字符</p>
            </div>
            <div class="input_box ">
              <input type="password" id="rePwd" name="rePwd" placeholder="确 认 密 码"/>
              <p class="tip">请再次输入密码</p>
            </div>
            <div class="form-agreen">
                  <input type="checkbox" name="agreen" id="agreen" checked="checked">
                  <label for="agreen">我已阅读并同意<a href="javascript:;" id="protocol">《用户注册协议》</a></label>
            </div>
            <button type="submit" id="submit_btn" class="btn-reg">立即注册</button>
          </form>
        </div>
      <div>
      <script src="/Public/Home/js/jquery-2.1.4.js"></script>
      <script type="text/javascript">
        $(function(){
          var $agreenCheckbox = $('#agreen');
          var $rePwd = $('#rePwd');
          var $submitBtn = $('#submit_btn');
          $agreenCheckbox.change(function(){
            if($agreenCheckbox.is(':checked')){
              $submitBtn.removeAttr('disabled');
            }else{
              $submitBtn.attr('disabled','disabled');
            }
          });
          /*$submitBtn.click(function(){
            if($rePwd.val() == ''){
                $rePwd.attr("class", "error");
            }
          });*/
        });
      </script>
  </body>
</html>