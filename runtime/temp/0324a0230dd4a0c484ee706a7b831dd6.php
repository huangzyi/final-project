<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:82:"/Users/zyh/apache/thinkphp/public/../app/admin/view/index/merchantinformation.html";i:1559013687;s:62:"/Users/zyh/apache/thinkphp/app/admin/view/common/vertical.html";i:1559136704;}*/ ?>
<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>约吧-<?php echo $merchant->merchant_id; ?>的信息详情</title>
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
		<h1 class="text-lighter">商家信息详情</h1>
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
		<form id="msform" action="/thinkphp/public/admin/addmerchant/add" method="post">
			<!-- fieldsets -->
			<fieldset>


				<ul class="list-group">
					<li class="list-group-item">
						<label class="text-info lab-list-name">id</label>
						<input type="text" name="id" value="<?php echo $merchant['merchant_id']; ?>"  />
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">name</label>
						<input type="text" name="name"   value="<?php echo $merchant['merchant_name']; ?>"/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">链接</label>
						<input type="text" name="link" value="<?php echo $merchant->merchant_link; ?>"/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">图片</label>
						<input type="text" name="img"value="<?php echo $merchant->merchant_img; ?>" />
					</li>
					<li class="list-group-item">
						<label class="text text-info lab-list-name">城市</label>
						<input name="city" type="text"  value="<?php echo $merchant->city; ?>" >
					</li>
					<li class="list-group-item">
						<label class="text text-info lab-list-name">区域</label>
						<input name="district" type="text"  value="<?php echo $merchant->district; ?>" >
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">分类</label>
						<input type="text" name="category"  value="<?php echo $merchant->merchant_category; ?>"/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">food</label>
						<input type="text" name="food"  value="<?php echo $merchant->merchant_food; ?>"/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">评分</label>
						<input type="text" name="score" value="<?php echo $merchant->merchant_score; ?>"/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">评论数</label>
						<input type="text" name="comment"  value="<?php echo $merchant->merchant_comment; ?>"/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">均价</label>
						<input type="text" name="avgprice"  value="<?php echo $merchant->merchant_avgprice; ?>"/>
					</li>
					<li class="list-group-item">
					<label class="text-info lab-list-name">电话</label>
					<input type="text" name="tele"  value="<?php echo $merchant->merchant_telephone; ?>" />
					</li>
					<li class="list-group-item">
						<label class="text text-info lab-list-name">地址</label>
						<input name="address" type="text"  value="<?php echo $merchant->merchant_address; ?>" >
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">工作时间</label>
						<input type="text" name="worktime"  value="<?php echo $merchant->merchant_worktime; ?>"/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">纬度</label>
						<input type="text" name="latitude"  value="<?php echo $merchant->merchant_latitude; ?>"/>
					</li>
					<li class="list-group-item">
					<label class="text-info lab-list-name">经度</label>
					<input type="text" name="longitude"  value="<?php echo $merchant->merchant_longitude; ?>"/>
				</li>

				</ul>
				<footer style="min-height: 100px;">
						<!--position: relative;bottom: 0;z-index: -999;">-->
				<input type="submit" id="submit" class="btn submit action-button" value="修改" />
					<!--<input type="button" id="btn-edit" class="btn edit action-button" value="修改"  />-->
					<!--<div style="min-width: 50px;"></div>-->
					<input type="button"  id="btn-clear" class="action-button"  value="清空"  />
					<input type="button"  class="btn action-button" onclick="window.location.href='/thinkphp/public/admin/addmerchant/del?merchant_id=<?php echo $merchant['merchant_id']; ?>'" value="删除"  />
				</footer>
			</fieldset>

		</form>

	</article>


	<script src="bootstrap/register/js/jquery-2.1.1.min.js"></script>
	<script src="bootstrap/register/js/jquery.easing.min.js" type="text/javascript"></script>

	<script>

		$("#btn-clear").click(function () {
			var edit = document.getElementsByTagName("input");
			// alert(edit[0].value);
			for(var i=0;i<17;i++){
				edit[i].removeAttribute("value");
			}

		});
	</script>

</body>
</html>