<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<title>管理员中心</title>
	<script type="text/javascript" src="http://localhost/Application/Admin/Public/js/jquery-3.1.1.min.js"></script>
  <script src="http://localhost/Application/Admin/Public/js/jquery.slimscroll.min.js"></script> 
  <script type="text/javascript" src="http://localhost/Application/Admin/Public/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://localhost/Application/Admin/Public/bootstrap/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="http://localhost/Application/Admin/Public/css/font-awesome.min.css"/>
</head>
<body>
<style>
* { margin: 0; padding: 0 }
body { font: 14px "微软雅黑", "FontAwesome", "Arial Narrow", HELVETICA; -webkit-text-size-adjust: 100%; }
li { list-style: none }
a { text-decoration: none; }
/* navMenu */
.navMenubox { width: 220px; height: 500px; background: #0186cb; margin: 0 auto; margin-top: 20px; overflow: hidden; }
.navMenu-top { padding: 10px; color: #fff; border-bottom: 1px solid rgba(255,255,255,.1) }
.navMenu> li { display: block; margin: 0; padding: 0; border: 0px; }
.navMenu>li>a { display: block; overflow: hidden; padding-left: 0px; line-height: 40px; color: #fff; transition: all .3s; position: relative; text-decoration: none; font-size: 17px; border-top: 1px solid #fff; border-bottom: 2px solid #fff; }
.navMenu > li:nth-of-type(1)> a { border-top: 1px solid transparent; }
.navMenu > li:last-child > a { border-bottom: 1px solid transparent; }
.navMenu>li>a>i { font-size: 20px; float: left; font-style: normal; margin: 0 5px; }
.navMenu li a .arrow:before { display: block; float: right; margin-top: 1px; margin-right: 15px; display: inline; font-size: 16px; font-family: FontAwesome; height: auto; content: "\f105"; font-weight: 300; text-shadow: none; }
.navMenu li a .arrow.open:before { float: right; margin-top: 1px; margin-right: 15px; display: inline; font-family: FontAwesome; height: auto; font-size: 16px; content: "\f107"; font-weight: 300; text-shadow: none; }
.navMenu>li>a.active, .navMenu>li>a:hover { color: #000; background: #fff; }
.navMenu>li>ul.sub-menu, .navMenu>li>ul.sub-menu>li>ul.sub-menu { display: none; list-style: none; clear: both; margin: 8px 0px 0px 10px; padding-bottom: 5px; }
.navMenu>li.active > ul.sub-menu, .navMenu>li>ul.sub-menu>li.active >ul.sub-menu { }
.navMenu>li>ul.sub-menu li { background: none; margin: 0px; padding: 0px; }
.navMenu>li>ul.sub-menu li>a {text-decoration: none; display: block; font-size: 16px; line-height: 36px; padding-left: 20px; color: #fff; clear: both; }
.navMenu>li>ul.sub-menu li>a.active, .navMenu>li>ul.sub-menu li>a:hover, .navMenu>li>ul.sub-menu>li.active >a { color: #000; background: #fff; }
.icon_1:before { content: "\f0ac"; }
.icon_2:before { content: "\f0ac"; }
.icon_3:before { content: "\f0ac"; }
.ss_nav{
  margin-top:20px;
}
#container { margin:0 auto; width:570px; }
#search_box { 
  background:-moz-linear-gradient(top, #29aae1, #29aae5); 
  background:-webkit-gradient(linear, 0 0, 0 100%, from(#29aae1), to(#29aae3)); 
  border:1px solid #29aae1; 
  border-radius:5px; 
  -moz-border-radius:5px;
  -webkit-border-radius:5px; 
  -moz-box-shadow:inset 0 1px #ffff90, inset 0 -2px 5px #ffd05d, 0 0 0 4px rgba(255,255,255,0.65);
  -webkit-box-shadow:inset 0 1px #ffff90, inset 0 -2px 5px #ffd05d, 0 0 0 4px rgba(255,255,255,0.65);
  padding:9px;
  width:570px;
}
#search_box .wrapper { 
  background:#fff; 
  border:1px solid #d9edf7;
  -moz-border-radius:2px;
  -webkit-border-radius:2px;
  -moz-box-shadow:inset 0 1px 2px rgba(0,0,0,.3), 0 1px #ff0; 
  -webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,.3), 0 1px #ff0; 
  height:50px;
  padding-left:10px; 
  position:relative;
}
#search_box input,
#search_box input:focus { border:none; color:#333; outline:none; font:bold 24px Helvetica, Arial, sans-serif; margin:12px 0; width:450px; }
#search_box button {
  background:-moz-linear-gradient(top, #453e26, #000);
  background:-webkit-gradient(linear, 0 0, 0 100%, from(#453e26), to(#000));
  border:1px solid #000;
  -moz-border-radius:2px;
  -webkit-border-radius:2px;
  -moz-box-shadow:inset 0 -2px 3px #193544, inset 0 1px #907817, 0 1px 1px rgba(0,0,0,4);
  -webkit-box-shadow:inset 0 -2px 3px #193544, inset 0 1px #907817, 0 1px 1px rgba(0,0,0,.4);
  cursor:pointer;
  height:45px; 
  position:absolute; 
  right:2px; 
  top:2px; 
  width:45px;
}
#content{
  background:#F3F0DD;
  border: #ccc;
  border-style: dashed;
   border-top-width: 1px;
   border-right-width: 0px; 
   border-bottom-width: 1px;
   border-left-width: 0px;
}
</style>
<body class="container">
<header>
<nav class="navbar navbar-default" style="background-color: #29aae1;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:#fff;">甘肃省防雷专业技术人员资格</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" style="color:#fff;">退出登录</a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
<p class="h4">管理员，欢迎您，上次登录时间：XXXX年XX月XX日</p>
<div class="row">
<div class="container">
  <div class="col-sm-3 s_nav">
    <div class="navMenubox">
      <div id="slimtest1">
        <div class="navMenu-top">
          <div id="mini" style=""><i class="fa fa-bars fa-2x"></i></div>
        </div>
        <ul class="navMenu">
          <li> <a href="<?php echo U('Index/shenhe');?>" class="afinve"> <i class="icon_1"></i> <span class="">用户审核</span></a> </li>
          <li> <a href="<?php echo U('Index/sendinfo');?>" class="afinve"> <i class="icon_1"></i> <span class="">发布通知</span></a></li>
          <li > <a href="javascript:;" class="afinve"> <i class="icon_2"></i> <span class="nav-text">考试管理</span> <span class="arrow"></span> </a>
            <ul class="sub-menu s1">
              <li><a href="<?php echo U('Index/kaoshilist');?>" ><span>考试列表</span></a></li>
              <!--<li><a href="javascript:;"><span>考试报名信息审核</span></a></li>-->
              <li><a href="<?php echo U('Index/anpaiks');?>"><span>安排考试</span></a></li>
              <li><a href="<?php echo U('Index/anpaizc');?>"><span id="anpaicuo">安排座次</span></a></li>
              <li><a href="<?php echo U('Index/chengji');?>"><span>考试成绩录入</span></a></li>
              <li><a href="<?php echo U('Index/chaxunchengji');?>"><span>考试成绩查询</span></a></li>
            </ul>
          </li>
          <li ><a href="#" class="afinve"><i class="my-icon nav-icon icon_2"></i><span>合格证管理</span><span class="arrow"></span></a> 
            <ul class="sub-menu s2">
              <li><a href="<?php echo U('Index/checkhegezheng');?>" ><span>合格证查询</span></a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--默认显示部分-->
  <!--<div class="ss_nav col-sm-9">-->
  <!--<div class="div1">-->
    <!--用户审核-->
    <!--<div class="shenhe">
    <ul class="list-group">
      <li class="list-group-item list-group-item-success">用户审核<span class="glyphicon glyphicon-menu-right"></span></li>
    </ul>
    <form action="#" id="search_box" style="margin-left:100px;">
      <div class="wrapper">
        <input type="text" id="search" name="search" placeholder="关键字" />
        <button type="submit" class="search_btn"><img src="images/search_icon.png" title="Search" /></button>
      </div>
    </form>
    <table class="table" style="margin-top:35px;">
      <tr class="info">
        <td>序号</td>
        <td>用户名</td>
        <td>真实姓名</td>
        <td>详情并审核</td>
        <td>审核状态</td>
        <td>审核不过原因</td>
        <td>删除</td>
      </tr>
      <tr class="primary">
        <td>1</td>
        <td>天天</td>
        <td>张三</td>
        <td><button class="btn btn-primary" type="button" >审核</button></td>
        <td>审核通过</td>
        <td>资料缺失</td>
        <td><button class="btn btn-primary" type="button" >删除</button></td>
      </tr>
    </table>
    <form action="#" class="form-horizontal">
      <div class="form-group" style="float:right;margin-top:20px;">
        <div class="col-sm-12 input-parent">
            <button type="submit" class="btn btn-primary">新增用户</button>
        </div>
      </div>
    </form>
    </div>-->
    <!--发布信息-->
    <!--<div class="sendmess" style="display:none;">
      <p class="alert alert-info">发布信息<span class="glyphicon glyphicon-menu-right"></span></p>
      <form action="#" class="form-horizontal" role="form" id="register-form">
      <div class="form-group">
        <label for="name" class="col-sm-2  control-label">标题 :</label>
        <div class="col-sm-10  input-parent">
          <input type="text" class="form-control vinput" id="title" name="title">
          <span></span>
        </div>
      </div>
      <div class="form-group">
        <label for="name" class="col-sm-2  control-label">内容 :</label>
        <div class="col-sm-10  input-parent">
          <textarea class="form-control vinput" id="content" name="content" rows="15" cols="110"></textarea>
        </div>
      </div>
      <div class="form-group" style="float:right;">
        <div class="col-sm-12 input-parent">
            <button type="submit" class="btn btn-primary">发布</button>
            <button type="reset" class="btn btn-default">取消</button>
        </div>
      </div>
      </form>
    </div>-->
    <!--</div>
    <div class="div2">-->
    <!--考试列表-->
    <!--<div class="shenhe" style="display:none;">
    <p class="alert alert-info">考试列表<span class="glyphicon glyphicon-menu-right"></span></p>
    <table class="table" style="margin-top:35px;">
      <tr class="info">
        <td>考试日期</td>
        <td>考试时间</td>
        <td>考试地点</td>
        <td>考试科目</td>
        <td>考试状态</td>
        <td>成绩状态</td>
      </tr>
      <tr class="primary">
        <td>2017年11月7日</td>
        <td>8:00-10:00</td>
        <td>405</td>
        <td>防雷工程检测</td>
        <td>已考试</td>
        <td>已录入</td>
      </tr>
      <tr class="primary">
        <td>2017年11月7日</td>
        <td>10:30-12:30</td>
        <td>405</td>
        <td>防雷工程检测</td>
        <td>未考试</td>
        <td>未录入</td>
      </tr>
      <tr class="primary">
        <td>2017年11月7日</td>
        <td>8:00-10:00</td>
        <td>405</td>
        <td>防雷工程检测</td>
        <td>已考试</td>
        <td>已录入</td>
      </tr>
    </table>
    </div>-->
    <!--报名人员审核-->
    <!--<div class="shenhe" style="display:none;">
    <ul class="list-group">
      <li class="list-group-item list-group-item-warning">报名审核<span class="glyphicon glyphicon-menu-right"></span></li>
    </ul>
    <form action="#" id="search_box" style="margin-left:100px;">
      <div class="wrapper">
        <input type="text" id="search" name="search" placeholder="关键字" />
        <button type="submit" class="search_btn"><img src="images/search_icon.png" title="Search" /></button>
      </div>
    </form>
    <table class="table" style="margin-top:35px;">
      <tr class="info">
        <td>序号</td>
        <td>用户名</td>
        <td>真实姓名</td>
        <td>身份证号</td>
        <td>性别</td>
        <td>联系电话</td>
        <td>职称</td>
        <td>详情并审核</td>
        <td>审核状态</td>
        <td></td>
      </tr>
      <tr class="primary">
        <td>1</td>
        <td>天天</td>
        <td>张三</td>
        <td>12345678911</td>
        <td>男</td>
        <td>12345678911</td>
        <td>助理工程师</td>
        <td><button class="btn btn-primary" type="button" >查看</button></td>
        <td>审核通过</td>
        <td><button class="btn btn-primary" type="button" >删除</button></td>
      </tr>
    </table>
    </div>-->
    <!--安排考试-->
    <!--<div class="paiexam" style="display:none;">
      <p class="alert alert-info">安排考试<span class="glyphicon glyphicon-menu-right"></span></p>
      <form action="#" class="form-horizontal" role="form" id="register-form">
      <div class="form-group">
        <label for="name" class="col-sm-2  control-label">考试科目 :</label>
        <div class="col-sm-10  input-parent">
        <select class="form-control vinput" name="lesson">
          <option value="防雷工程检测">防雷工程检测</option>
        </select>
        </div>
      </div>
      <div class="form-group">
        <label for="name" class="col-sm-2  control-label">考试时间 :</label>
        <div class="col-sm-4 input-parent">
          <select class="form-control vinput" name="year">
            <option value="2016">2016年</option>
            <option value="2017">2017年</option>
            <option value="2018">2018年</option>
            <option value="2019">2019年</option>
            <option value="2020">2020年</option>
            <option value="2021">2021年</option>
            <option value="2022">2022年</option>
            <option value="2023">2023年</option>
            <option value="2024">2024年</option>
            <option value="2025">2025年</option>
            <option value="2026">2026年</option>
            <option value="2027">2027年</option>
            <option value="2028">2028年</option>
            <option value="2029">2029年</option>
            <option value="2030">2030年</option>
            <option value="2031">2031年</option>
            <option value="2032">2032年</option>
            <option value="2033">2033年</option>
            <option value="2034">2034年</option>
            <option value="2035">2035年</option>
          </select>
        </div>
        <div class="col-sm-4 col-sm-offset-2 input-parent">
          <select class="form-control vinput" name="month">
            <option value="1">1月</option>
            <option value="2">2月</option>
            <option value="3">3月</option>
            <option value="4">4月</option>
            <option value="5">5月</option>
            <option value="6">6月</option>
            <option value="7">7月</option>
            <option value="8">8月</option>
            <option value="9">9月</option>
            <option value="10">10月</option>
            <option value="11">11月</option>
            <option value="12">12月</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="name" class="col-sm-2  control-label">考试地点 :</label>
        <div class="col-sm-10  input-parent">
          <input type="text" class="form-control vinput" id="ksplace" name="ksplace">
        </div>
      </div>
      <div class="form-group" style="float:right;margin-top:200px;">
        <div class="col-sm-12 input-parent">
            <button type="submit" class="btn btn-primary">生成考试</button>
            <button type="reset" class="btn btn-default">取消</button>
        </div>
      </div>
      </form>  
    </div>-->
    <!--安排座次-->
    <!--<div class="zuoci" style="display:none;">
      <p class="alert alert-warning">安排座次<span class="glyphicon glyphicon-menu-right"></span></p>
      <p>统计安排考试共<span id="examnum">3</span>场</p>
      <form action="" class="form-horizontal" id="paizuoci">
      </form>
    </div>-->
    <!--成绩录入-->
    <!--<div class="paiexam" style="display:none;">
      <p class="alert alert-danger">成绩录入<span class="glyphicon glyphicon-menu-right"></span></p>
      
    </div>-->
    <!--成绩查询-->
    <!--<div class="paiexam" style="display:none;">
      <p class="alert alert-success">成绩查询<span class="glyphicon glyphicon-menu-right"></span></p>
      
    </div>
    </div>
    <div class="div3">-->
    <!--合格证核发-->
    <!--<div class="paiexam" style="display:none;">
      <ul class="list-group">
      <li class="list-group-item list-group-item-warning">合格证核发<span class="glyphicon glyphicon-menu-right"></span></li>
      </ul>
      <form action="#" id="search_box" style="margin-left:100px;">
      <div class="wrapper">
        <input type="text" id="search" name="search" placeholder="关键字" />
        <button type="submit" class="search_btn"><img src="images/search_icon.png" title="Search" /></button>
      </div>
    </form>
    <table class="table" style="margin-top:35px;">
      <tr class="info">
        <td>合格证名称</td>
        <td>合格证编号</td>
        <td>持有人照片</td>
        <td>姓名</td>
        <td>性别</td>
        <td>考试科目</td>
        <td>考试日期</td>
        <td>成绩</td>
        <td>签发时间</td>
        <td>电子印章</td>
        <td>证书生成</td>
      </tr>
      <tr class="primary">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><button class="btn btn-primary" type="button" >生成证书</button></td>
      </tr>
    </table>
    </div>
    </div>-->
  <!--</div><!--ss_nav-->
 <!--</div>-->
<!--</div>-->
<!--<br><br><br><br>
<footer>
  <nav class="navbar-default text-center navbar-fixed-bottom">
      Copyright xxx Gan su Meteorological Society<br>
      甘肃省气象学会 &copy;版权所有
  </nav>
</footer>-->
</body>
</html>
<script>
  $(function(){
     var $placeholder = $('input[name=search]');
        if ($placeholder.length > 0) {
            var attrPh = $placeholder.attr('placeholder');
            $placeholder.attr('value', attrPh)
              .bind('focus', function () {
                  var $this = $(this);
                  if ($this.val() === attrPh)
                      $this.val('').css('color', '#171207');
              }).bind('blur', function () {
                  var $this = $(this);
                  if ($this.val() === '')
                      $this.val(attrPh).css('color', '#333');
              });
        }
   $('.navMenu li a').on('click',function(){
       var parent = $(this).parent().parent();//获取当前页签的父级的父级
       var labeul =$(this).parent("li").find(">ul")  
             if ($(this).parent().hasClass('open') == false) {
                //展开未展开
           parent.find('ul').slideUp(300);
           parent.find("li").removeClass("open")
           parent.find('li a').removeClass("active").find(".arrow").removeClass("open")
                  $(this).parent("li").addClass("open").find(labeul).slideDown(300);
          $(this).addClass("active").find(".arrow").addClass("open")
            }else{
         $(this).parent("li").removeClass("open").find(labeul).slideUp(300);
          if($(this).parent().find("ul").length>0){
          $(this).removeClass("active").find(".arrow").removeClass("open")
          }else{
          $(this).addClass("active") 
          }
        }
      
    });
  });
</script>

<div class="shenhe col-sm-9" style="margin-top:20px;">
    <p class="alert alert-info">考试列表<span class="glyphicon glyphicon-menu-right"></span></p>
    <table class="table" style="margin-top:35px; margin-bottom:100px;">
      <tr class="info">
        <td>考试日期</td>
        <td>考试时间</td>
        <td>考试地点</td>
        <td>考试科目</td>
        <td>考试状态</td>
      </tr>
      <tr class="primary">
        <td>2017年11月7日</td>
        <td>8:00-10:00</td>
        <td>405</td>
        <td>防雷工程检测</td>
        <td>已考试</td>
      </tr>
      <tr class="primary">
        <td>2017年11月7日</td>
        <td>10:30-12:30</td>
        <td>405</td>
        <td>防雷工程检测</td>
        <td>未考试</td>
      </tr>
      <tr class="primary">
        <td>2017年11月7日</td>
        <td>8:00-10:00</td>
        <td>405</td>
        <td>防雷工程检测</td>
        <td>已考试</td>
      </tr>
    </table>
</div>
</div>
</div>
<footer>
  <nav class="navbar text-center navbar-fixed-bottom">
      Copyright xxx Gan su Meteorological Society<br>
      甘肃省气象学会 &copy;版权所有
  </nav>
</footer>