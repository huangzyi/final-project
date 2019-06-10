<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"/Users/zyh/apache/thinkphp/public/../app/index/view/index/information.html";i:1558935103;s:62:"/Users/zyh/apache/thinkphp/app/index/view/common/vertical.html";i:1558062664;}*/ ?>
<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>约吧-<?php echo $user->user_name; ?>的个人信息详情</title>
	<link rel='stylesheet prefetch' href='bootstrap/css/normalize.css'>
	<link rel="stylesheet" type="text/css" href="bootstrap/register/css/default.css">
	<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/default.css">-->
	<!--<link rel='stylesheet prefetch' href='bootstrap/register/css/reset.css'>-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<!-- FontAwesome -->
	<link href="http://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/information.css">
	<!--<link rel="stylesheet" href="bootstrap/css/bootstrap-vertical-menu.css">-->
	<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">-->
	<!--[if IE]>
		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body >
	<header class="htmleaf-header"style="padding: 0">
		<h1 class="text-lighter">个人信息详情</h1>
		<!--<?php if(\think\Session::get('user')['user_sex'] == '男'): ?><h1>男</h1> <?php endif; ?>-->
<!--<h1>{dump($Think.session.user);}</h1>-->

	</header>
	<!doctype html>
<html lang="zh">
<head>
	<!--<meta charset="UTF-8">-->
	<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->
	<!--<meta name="viewport" content="width=device-width, minimal-ui,initial-scale=1.0, user-scalable=no, minimal-ui">-->
	<!--<title>超赞的CSS3和jQuery手风琴面板界面设计|DEMO_jQuery之家-自由分享jQuery、html5、css3的插件库</title>-->
	<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/normalize.css" />-->
	<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/styles1.css">-->
	<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/default.css">-->
	<!-- FontAwesome -->
	<link href="http://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- Twitter Bootstrap -->
	<!--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">-->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-vertical-menu.css">
	
</head>
<body>
<nav class="navbar navbar-vertical-left">
	    <ul class="nav navbar-nav" style="padding-left: 0;">
	      <li>
	        <a href="../index/test.html">
	          <i class="fa fa-fw fa-lg fa-home"></i> 
	          <span>主页</span>
	        </a>
	      </li>
	      </li>
	      <li>
	        <a href="../index/friend.html">
	          <i class="fa fa-fw fa-lg fa-comments-o"></i> 
	          <span>好友与组群</span>
	        </a>
	      </li>
	      <li>
	        <a href="../index/information.html">
	          <i class="fa fa-fw fa-lg fa-user"></i> 
	          <span>用户</span>
	        </a>
	      </li>
	    </ul>
	</nav>
</body>
</html>

	<!--meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1,user-scalable=no" >

<style type="text/css">
	*{
		padding: 0;
		margin: 0;
	}

	.test{
		width:300px;
		height: 200px;
		background: red;
	}

	@media screen and (max-width: 900px) and (min-width: 300px){
		.test{
			width: 100%;
			height:100px;
			background: blue;
		}
	}
</style-->



	<article class="htmleaf-content" style="height: 700px;" >
		<!-- multistep form -->
		<form id="msform" action="/thinkphp/public/index/register/register" method="post">
			<!-- fieldsets -->
			<fieldset>
				<!--<input type="text" name="id" style="display: none" value="<?php echo $user['user_id']; ?>"/>-->

				<h1 class="fs-title"><a href="show.html?type=favor"><i class="fa fa-star"></i> 收藏夹</a></h1>
				<!--<h3 class="fs-subtitle">收藏夹</h3>-->
				<ul class="list-group">
					<li class="list-group-item">
						<label class="text-info lab-list-name">id</label>
						<input type="text" name="id" value="<?php echo $user['user_id']; ?>" disabled readonly/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">用户名</label>
						<input type="text" name="uname"  disabled value="<?php echo $user['user_uname']; ?>"/>
						<!--<div class="alert alert-danger" role="alert" style="display: none;">-->
							<!--<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>-->
							<!--<span class="sr-only">Error:</span>-->
							<!--Enter a valid email address-->
						<!--</div>-->
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">密码</label>
						<input type="password" name="psw" value="<?php echo $user->user_psw; ?>"disabled/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">姓名</label>
						<input type="text" name="name"value="<?php echo $user->user_name; ?>" disabled/>
					</li>
					<li class="list-group-item">
					<label class="text text-info lab-list-name">性别</label>
					<p class="lab-list-input">
						<label class="lab-list-audio" style="float: left">
							<input type="radio" name="sex" id="man" value="男" style="width: 10px" disabled
							<?php if($user['user_sex'] == '男'): ?> checked <?php endif; ?>
							/>
							<span>男</span>
						</label>
						<label  class="lab-list-audio" style="float: right">
						<input type="radio" name="sex"  style="width: 10px"  value="女" disabled
							   <?php if($user['user_sex'] == '女'): ?> checked="checked" <?php endif; ?>
						>
						<span>女</span>
						</label>
					</p>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">年龄</label>
						<input type="text" name="age"  value="<?php echo $user->user_age; ?>"disabled/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">电话</label>
						<input type="text" name="tele"  value="<?php echo $user->user_tele; ?>" disabled/>
					</li>
					<li class="list-group-item">
						<label class="text text-info lab-list-name">城市</label>
						<input name="city" type="text"  value="<?php echo $user->user_city; ?>" disabled>
					</li>
					<li class="list-group-item">
						<label class="text text-info lab-list-name">住址</label>
						<input name="address" type="text"  value="<?php echo $user->user_address; ?>" disabled>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">邮箱</label>
						<input type="text" name="email"  value="<?php echo $user->user_email; ?>"disabled/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">微信</label>
						<input type="text" name="wechat" value="<?php echo $user->user_wechat; ?>"disabled/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">QQ</label>
						<input type="text" name="qq"  value="<?php echo $user->user_qq; ?>"disabled/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">喜欢的菜系</label>
						<input type="text" name="ffood" id="ffood" value="<?php echo $user->user_ffood; ?>"disabled/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">爱好</label>
						<input type="text" name="hobby" id="favorite" value="<?php echo $user->user_hobby; ?>"disabled/>
					</li>
				</ul>
				<footer style="min-height: 100px;">
						<!--position: relative;bottom: 0;z-index: -999;">-->
				<input type="submit" id="submit" class="btn submit action-button" style="display: none" value="确定" />
					<input type="button" id="btn-edit" class="btn edit action-button" value="修改"  />
					<!--<div style="min-width: 50px;"></div>-->
					<input type="button"  class="btn action-button" onclick="logout()" value="退出当前用户"  />
				</footer>
			</fieldset>

		</form>

	</article>


	<script src="bootstrap/register/js/jquery-2.1.1.min.js"></script>
	<script src="bootstrap/register/js/jquery.easing.min.js" type="text/javascript"></script>
	<script>

	$("#btn-edit").click(function () {
		var edit = document.getElementsByTagName("input");
		// alert(edit[0].value);
		for(var i=0;i<edit.length;i++){
			edit[i].removeAttribute("disabled");
		}
		$("#btn-edit").css('display','none');
		$("#submit").css('display','inline-block');

	});
	function logout() {
		sessionStorage.clear();
		window.location.href="/thinkphp/public/index/login/logout";
	}
	// $.ajax({        type:'POST',        data:JSON.stringify(users),        contentType :'application/json',        dataType:'json',        url :'user/saveJsonUser.do',        success :function(data) {            alert("OK");        },       error :function(e) {          alert("error");       }})     }


	/*
	$('.register').click(function () {

		return false;
	});*/
	</script>


</body>
</html>