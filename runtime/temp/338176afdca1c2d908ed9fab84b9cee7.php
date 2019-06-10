<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:80:"/Users/zyh/apache/thinkphp/public/../app/admin/view/index/friendinformation.html";i:1558262386;s:62:"/Users/zyh/apache/thinkphp/app/admin/view/common/vertical.html";i:1559136704;}*/ ?>
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
	<link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- Twitter Bootstrap -->
	<!--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">-->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-vertical-menu.css">
	
</head>
<body>
<nav class="navbar navbar-vertical-left">
	    <ul class="nav navbar-nav" style="padding-left: 0;">
	      <li>
	        <a href="../index/merchant.html">
	          <i class="fa fa-fw fa-lg fa-glass"></i>
	          <span>merchant</span>
	        </a>
	      </li>
	      </li>
	      <li>
	        <a href="../index/search.html">
	          <i class="fa fa-fw fa-lg fa-calendar"></i>
	          <span>schedule</span>
	        </a>
	      </li>
	      <li>
	        <a href="../index/finduser.html">
	          <i class="fa fa-fw fa-lg fa-user"></i> 
	          <span>user</span>
	        </a>
	      </li>
			<li>
				<a href="../index/addfriend.html">
					<i class="fa fa-fw fa-lg fa-handshake-o"></i>
					<span>friend</span>
				</a>
			</li>
			<li>
	        <a href="../index/addgroup.html">
	          <i class="fa fa-fw fa-lg fa-group"></i>
	          <span>group</span>
	        </a>
	      </li>
			<li>
				<a href="../index/link.html">
					<i class="fa fa-fw fa-lg fa-comment-o"></i>
					<span>dialog</span>
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

				<!--<h3 class="fs-subtitle">收藏夹</h3>-->
				<ul class="list-group">
					<li class="list-group-item">
						<label class="text-info lab-list-name">id</label>
						<input type="text" name="id" value="<?php echo $user['user_id']; ?>" disabled readonly/>
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
						<input type="text" name="tele" value="<?php echo $user->user_tele; ?>" disabled/>
					</li>
					<li class="list-group-item">
						<label class="text text-info lab-list-name">城市</label>
						<input name="city"  value="<?php echo $user->user_city; ?>" disabled>
					</li>
					<li class="list-group-item">
						<label class="text text-info lab-list-name">住址</label>
						<input name="address"  value="<?php echo $user->user_address; ?>" disabled>
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
						<input type="text" name="favorite" id="favorite" value="<?php echo $user->user_hobby; ?>"disabled/>
					</li>
				</ul>
				<?php if($isfriend == 'true'): ?>
				<input type="button"  class="submit action-button" onclick="window.location.href='/thinkphp/public/index/addfriend/del?user_id=<?php echo $user['user_id']; ?>'" value="删除好友" />
				<?php else: ?>
					<input type="button"  class="submit action-button" onclick="window.location.href='/thinkphp/public/index/addfriend/add?user_id=<?php echo $user['user_id']; ?>'" value="添加好友" />
					<?php endif; ?>
					<!--<input type="button" id="btn-edit" class="edit action-button" value="修改"  />-->

			</fieldset>
		</form>

	</article>
	<footer style="min-height: 50px;position: relative;bottom: 0;z-index: -999;">
		<!--<div style="min-width: 50px;"></div>-->
	</footer>

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
	// $.ajax({        type:'POST',        data:JSON.stringify(users),        contentType :'application/json',        dataType:'json',        url :'user/saveJsonUser.do',        success :function(data) {            alert("OK");        },       error :function(e) {          alert("error");       }})     }


	/*
	$('.register').click(function () {

		return false;
	});*/
	</script>


</body>
</html>