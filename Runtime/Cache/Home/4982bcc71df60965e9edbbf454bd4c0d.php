<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<title>用户登录</title>
	<script type="text/javascript" src="http://localhost/bysj/Application/Home/Public/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="http://localhost/bysj/Application/Home/Public/bootstrap/js/bootstrap.min.js"></script>
  <script src="http://localhost/bysj/Application/Home/Public/js/verificationNumbers.js" tppabs="js/verificationNumbers.js"></script>
  <script src="http://localhost/bysj/Application/Home/Public/js/Particleground.js" tppabs="js/Particleground.js"></script>
  <script type="text/javascript" src="http://localhost/bysj/Application/Home/Public/js/jquery-validate.js"></script>
  <link rel="stylesheet" type="text/css" href="http://localhost/bysj/Application/Home/Public/css/style.css" tppabs="css/style.css" />
</head>
<style>
*{
  padding:0px;
  margin:0px;
}
header{
  height:45px;
  width:100%;
  background-color: #000;
  color:#fff;
}
header p{
  text-align: left;
  line-height: 45px;
  font-size: 24px;
  margin-left:20px;
}
footer nav{
  width:100%;
  position: fixed;
  bottom:15px;
}
body{height:100%;background:#16a085;overflow:hidden;}
canvas{z-index:-1;position:absolute;}
.admin_login dt{
color:#fff;
}
</style>
<script>
$(document).ready(function() {
  //粒子背景特效
  $('body').particleground({
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });
  //验证码
  createCode();
  //测试提交，对接程序删除即可
  $('#load_form').submit(function(){
    if(1==2){
      alert("用户名或密码不能为空！");
      return false;
    }else if(validate()==false){
            alert("请您填写正确的验证码！");
            return false;
    }
  })
  $(".rgbtn").click(function(){
    location.href="acrigist.html"/*tpa=http://***index.html*/;
    });
});
</script>
<body>
<header>
<p>考试安排系统</p>
</header>
  <!--<div class="main_load">
    <form method="post" action="">
      用户名:&nbsp;&nbsp;<input type="text" class="name"/><br>
      密  &nbsp;&nbsp;码:&nbsp;&nbsp;<input type="password" class="pwd"/><br>
      验证码:&nbsp;&nbsp;<input type="text" class="code" /><br/>
      <button type="submit" class="btn1" onclick="window.location.href='load.html'">登录</button>
      <button type="button" onclick="window.location.href='rigist.html'">注册</button>
    </form>
  </div>-->
<dl class="admin_login">
<form action="<?php echo U('Load/load');?>" id="load_form" method="POST">
 <dt>
  <strong>考试管理系统</strong>
  <em>Login Page</em>
 </dt>
 <dd class="user_icon">
  <input type="text" placeholder="账号" class="login_txtbx" id="name" name="name"/>
 </dd>
 <dd class="pwd_icon">
  <input type="password" placeholder="密码" class="login_txtbx" id="pwd" name="password"/>
 </dd>
 <dd class="val_icon">
  <div class="checkcode">
    <input type="text" id="J_codetext" placeholder="验证码" maxlength="4" class="login_txtbx">
    <canvas class="J_codeimg" id="myCanvas" onclick="createCode()">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>
  </div>
  <input type="button" value="验证码核验" class="ver_btn" onClick="validate();">
 </dd>
 <dd>
  <input type="submit" value="立即登陆" class="submit_btn upbtn"/>
  <input type="button" value="注册" class="submit_btn rgbtn"/>
 </dd>
 </form>
</dl>
<!-- <footer>
  <nav>
      <p style="text-align: center;">Copyright xxx Gan su Meteorological Society</p>
      <p style="text-align: center;">甘肃省气象学会 &copy;版权所有<p>
  </nav>
</footer> -->
</body>
</html>