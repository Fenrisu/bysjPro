<?php if (!defined('THINK_PATH')) exit();?><html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>用户须知</title>
  <link href="http://localhost/Application/Home/Public/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://localhost/Application/Home/Public/css/normalize.css" rel="stylesheet">
  <link href="http://localhost/Application/Home/Public/css/public.css" rel="stylesheet">
  <link href="http://localhost/Application/Home/Public/css/validator.css" rel="stylesheet">
  <link href="http://localhost/Application/Home/Public/css/completer.css" rel="stylesheet">
  <link href="http://localhost/Application/Home/Public/jedate/skin/jedate.css" rel="stylesheet">
  <link href="http://localhost/Application/Home/Public/css/date.css" type="text/css" rel="stylesheet">
  <link href="http://localhost/Application/Home/Public/css/magic-check.css" rel="stylesheet" >
  <link href="http://localhost/Application/Home/Public/css/jquery-ui.css" rel="stylesheet">  
  <link href="http://localhost/Application/Home/Public/css/index.css" rel="stylesheet">  
  <script src="http://localhost/Application/Home/Public/js/jquery-3.1.1.min.js"></script>
  <script src="http://localhost/Application/Home/Public/js/bootstrap.min.js"></script>
  <script  src="http://localhost/Application/Home/Public/js/public.js"></script>
  <script  src="http://localhost/Application/Home/Public/js/date.js"></script>
  <script  src="http://localhost/Application/Home/Public/js/jquery-validate.js"></script>
  <script  src="http://localhost/Application/Home/Public/js/validator.js"></script>
  <script  src="http://localhost/Application/Home/Public/js/index.js"></script>
  <script type="text/javascript" src="http://localhost/Application/Home/Public/jedate/jedate.js"></script>

  <!--[if lt IE 9]>
  <script type="text/javascript" src="http://www.jq22.com/jquery/jquery-ui-1.10.2.js"></script>
    <script src="http://cdn.static.runoob.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>  
  <![endif]-->
</head>
<style>
header{
  height:50px;
  margin-top:10px;
}

</style>
<body>
<header>
<div class="container">
  <span class="text-primary h3">考证管理系统注册</span><p class="text-right">返回<a href="load.html" class="h4" style="text-decoration: none;color:#8cd5ed;">注册</a>页面</p>
</div>
</header>
<div class="container" style="margin-top:20px;">
  <div class="reginfo col-sm-11 col-sm-offset-1">
    <ul class="list-group">
      <li class="list-group-item active h3">注册须知</li>
      <li class="list-group-item">1、报考考试的人员，必须先进行注册，注册后才能进行报名操作</li>
      <li class="list-group-item">2、身份证号、姓名将引用到报名信息中，手机和邮箱将作为报考人员接收相关考试信息的工具,请务必保证身份证号、姓名、手机和邮箱信息完整、准确并和本人相符</li>
      <li class="list-group-item">3、相同的身份证号和姓名只允许注册一次，请勿重复注册</li>
      <li class="list-group-item">4、用户名和密码要妥善保管，如密码丢失，可使用系统提供方式找回密码</li>
      <li class="list-group-item">5、报考人员须按要求上传电子版相关资料，否则无法完成注册</li>
    </ul>
    <form id="nexta" action="rigist.html">
    <div class="form-group col-sm-7 col-sm-offset-5" style="float:right;">
      <input type="checkbox" class="magic-checkbox" id="accept" name="accept" />
      <label for="accept" class="accept"><span>本人对所填写内容和提交材料的真实性负法律责任</span>&nbsp;<span style="color:red;">(注册时*号部分为选填项 建议填写)</span></label>
    </div>
    <button type="submit" class="btn btn-primary active col-sm-1 col-sm-offset-11" style="margin-top:20px;" id="next">下一步</button>
    </form>
  </div>
  </div>
  </body>
  </html>