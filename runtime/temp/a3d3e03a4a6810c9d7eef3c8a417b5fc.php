<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"/Users/zyh/apache/thinkphp/public/../app/index/view/index/register.html";i:1559995297;}*/ ?>
<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>约吧-注册</title>
	<link rel='stylesheet prefetch' href='bootstrap/css/normalize.css'>
	<link rel="stylesheet" type="text/css" href="bootstrap/register/css/default.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/default.css">-->
	<link rel="stylesheet" type="text/css" href="bootstrap/register/css/styles.css">
	<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/city.css">-->
</head>
<body>
	<header class="htmleaf-header">
		<h1 >注册<span style="color: #eee">输入你的基本信息 </span> </h1>

		
	</header>
	<article class="htmleaf-content">
		<!-- multistep form -->
		<form id="msform" action="/thinkphp/public/index/register/register" method="post">
			<!-- progressbar -->
			<ul id="progressbar">
				<li class="active">账号设置</li>
				<li>个人详细信息</li>
				<li>社交账号</li>
				<li>爱好</li>
			</ul>
			<!-- fieldsets -->
			<fieldset>
				<h2 class="fs-title">创建你的账号</h2>
				<h3 class="fs-subtitle">这是第一步</h3>
				<input type="text" name="uname" placeholder="用户名" />
				<!--<input type="text" name="id" style="display: none" />-->
				<input type="password" name="psw" placeholder="密码" />
				<input type="password" name="psw_confirm" placeholder="重复密码" />
				<input type="button" name="login" class="register action-button" onclick="javascript:window.location.href='login.html'"value="登录" />
				<input type="button" name="next" class="next action-button" value="下一步" />
			</fieldset>
			<fieldset>
				<h2 class="fs-title">个人详细信息</h2>
				<h3 class="fs-subtitle">填写个人信息，方便别人认识你</h3>
				<input type="text" name="name" placeholder="姓名" style="margin-bottom:0 "/>
				<div>
				<label class="fs-subtitle" style="margin: 0"> <input type="radio" name="sex"  style="width: 10px" value="男" checked>
					男&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="sex"  style="width: 10px" value="女" >
				女</label>
				</div>
				<!--div class="col col--12 col__md--12 col__lg--6" style="border: 0;padding: 0;margin:0px;">
					<div class="demo--content-block demo--class-display" >
						<div class="form-control" >
							<select name="sex">
								<option data-display="Select">性别</option>
								<option value="male">男</option>
								<option value="female">女</option>
							</select>
						</div>
					</div>
				</div-->
				<input type="text" name="age" placeholder="年龄" />
				<input type="text" name="tele"  placeholder="电话" />
				<input type="text" name="city" placeholder="城市">
				<textarea name="address" placeholder="住址"></textarea>
				<input type="button" name="previous" class="previous action-button" value="上一步" />
				<input type="button" name="next" class="next action-button" value="下一步" />
				
			</fieldset>
			<fieldset>
				<h2 class="fs-title">填写社交账号</h2>
				<h3 class="fs-subtitle">填写你的常用社交网络账号</h3>
				<input type="text" name="email" placeholder="邮箱" />
				<input type="text" name="wechat" placeholder="微信" />
				<input type="text" name="qq" placeholder="QQ" />
				<input type="button" name="previous" class="previous action-button" value="上一步" />
				<input type="button" name="next" class="next action-button" value="下一步" />
			</fieldset>
			<fieldset>
				<h2 class="fs-title">填写爱好</h2>
				<h3 class="fs-subtitle">填写你的喜好，以便进行个性化推荐</h3>
				<input type="text" name="ffood" id="ffood" placeholder="喜欢的菜系" />
				<p>
					<input class="btn btn-default btn-recomend" type="button" value="川菜" onclick="pressfood(this);" >
					<!--<input class="btn btn-default btn-recomend" type="button" value="粤菜" onclick="pressfood(this);" >-->
					<input class="btn btn-default btn-recomend" type="button" value="火锅" onclick="pressfood(this);" >
					<!--<input class="btn btn-default btn-recomend" type="button" value="日" onclick="pressfood(this);" >-->
				</p>
				<input type="text" name="hobby" id="favorite" placeholder="爱好" />
				<p>
					<!--<input class="btn btn-default btn-recomend" type="button" value="密室逃脱" onclick="pressfavorite(this);" >-->
					<input class="btn btn-default btn-recomend" type="button" value="洗浴" onclick="pressfavorite(this);" >
					<input class="btn btn-default btn-recomend" type="button" value="影院" onclick="pressfavorite(this);" >
					<input class="btn btn-default btn-recomend" type="button" value="美发" onclick="pressfavorite(this);" >
				</p>
				<input type="button" name="previous" class="previous action-button" value="上一步" />
				<input type="submit" name="submit" class="submit action-button" value="提交" />

			</fieldset>
		</form>
	</article>
	
	<script src="bootstrap/register/js/jquery-2.1.1.min.js"></script>
	<script src="bootstrap/register/js/jquery.easing.min.js" type="text/javascript"></script>

	<!--city-->
	<!--<script src="bootstrap/js/city.js"></script>-->
	<!--<script src="bootstrap/js/method01.js"></script>-->
	<!--<script src="bootstrap/js/method02.js"></script>-->
	<!--<script src="bootstrap/js/method03.js"></script>-->
	<!--city-->

	<script>
	var current_fs, next_fs, previous_fs;
	var left, opacity, scale;
	var animating;
	$('.next').click(function () {
	    if (animating)
	        return false;
	    animating = true;
	    current_fs = $(this).parent();
	    next_fs = $(this).parent().next();
	    $('#progressbar li').eq($('fieldset').index(next_fs)).addClass('active');
	    next_fs.show();
	    current_fs.animate({ opacity: 0 }, {
	        step: function (now, mx) {
	            scale = 1 - (1 - now) * 0.2;
	            left = now * 50 + '%';
	            opacity = 1 - now;
	            current_fs.css({ 'transform': 'scale(' + scale + ')' });
	            next_fs.css({
	                'left': left,
	                'opacity': opacity
	            });
	        },
	        duration: 800,
	        complete: function () {
	            current_fs.hide();
	            animating = false;
	        },
	        easing: 'easeInOutBack'
	    });
	});
	$('.previous').click(function () {
	    if (animating)
	        return false;
	    animating = true;
	    current_fs = $(this).parent();
	    previous_fs = $(this).parent().prev();
	    $('#progressbar li').eq($('fieldset').index(current_fs)).removeClass('active');
	    previous_fs.show();
	    current_fs.animate({ opacity: 0 }, {
	        step: function (now, mx) {
	            scale = 0.8 + (1 - now) * 0.2;
	            left = (1 - now) * 50 + '%';
	            opacity = 1 - now;
	            current_fs.css({ 'left': left });
	            previous_fs.css({
	                'transform': 'scale(' + scale + ')',
	                'opacity': opacity
	            });
	        },
	        duration: 800,
	        complete: function () {
	            current_fs.hide();
	            animating = false;
	        },
	        easing: 'easeInOutBack'
	    });
	});
	// $('.submit').click(function () {
	//     return false;
	// });
	function pressfood(obj)
	{
		var func_ffood= document.getElementById("ffood");
		func_ffood.value = obj.value;
	}
	function pressfavorite(obj)
	{
		var func_favorite= document.getElementById("favorite");
		func_favorite.value = obj.value;
	}
	</script>

	<script>
		$(document).ready(function() {
			$('select:not(.ignore)').niceSelect();
			FastClick.attach(document.body);
		});
	</script>
</body>
</html>