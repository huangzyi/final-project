<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"/Users/zyh/apache/thinkphp/public/../app/index/view/index/foundgroup.html";i:1558262352;s:62:"/Users/zyh/apache/thinkphp/app/index/view/common/vertical.html";i:1558062664;}*/ ?>
<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>约吧-建立组群</title>
	<link rel='stylesheet prefetch' href='bootstrap/css/normalize.css'>
	<link rel="stylesheet" type="text/css" href="bootstrap/register/css/default.css">
	<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/default.css">-->
	<!--<link rel='stylesheet prefetch' href='bootstrap/register/css/reset.css'>-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<!-- FontAwesome -->
	<link href="http://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-vertical-menu.css">
	<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/information.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/groupinformation.css">
	<link href="bootstrap/css/jquery-accordion-menu.css" rel="stylesheet" type="text/css" />
	<!--<link rel="stylesheet" href="bootstrap/css/dialog.css">-->
	<!--[if IE]>
		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>
<style type="text/css">
	.content{margin:0 auto;
	}
	.filterinput{
		background-color:rgba(249, 244, 244, 0);
		border-radius:15px;
		width:100%;
		height:30px;
		border:thin solid #FFF;
		text-indent:0.5em;
		font-weight:bold;
		color:#FFF;
	}
	#demo-list a{
		overflow:hidden;
		text-overflow:ellipsis;
		-o-text-overflow:ellipsis;
		white-space:nowrap;
		width:100%;
	}
	/*input{*/
		/*border: 1px solid #ccc;*/
	/*}*/
</style>
<body>
	<header class="htmleaf-header"style="padding: 0">
		<h1 class="text-lighter">新建组群</h1>


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



	<article class="htmleaf-content" >
		<!-- multistep form -->
		<form id="msform" action="/thinkphp/public/index/addgroup/found" method="post" >
			<!-- fieldsets -->
			<fieldset>
				<div class="group-menu">
				<ul class="list-group">
					<li class="list-group-item">
						<label class="text-info lab-list-name">群名</label>
						<input type="text" name="group_name" placeholder="群名" style="border: 1px solid #ccc"/>
					</li>

					<li class="list-group-item">
						<label class="text-info lab-list-name">简介</label>
						<textarea type="textarea" name="group_intro" placeholder="群简介"style="border: 1px solid #ccc"></textarea>
					</li>
				</ul>
					<button class="btn action-button" type="submit">确定</button>


				</div>


			</fieldset>
		</form>



		</div>
	</article>
	<footer style="min-height: 50px;position: relative;bottom: 0">
		<!--<div style="min-width: 50px;"></div>-->
	</footer>




</body>
</html>