<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"/Users/zyh/apache/thinkphp/public/../app/admin/view/index/dialog.html";i:1559133030;s:62:"/Users/zyh/apache/thinkphp/app/admin/view/common/vertical.html";i:1559136704;s:57:"/Users/zyh/apache/thinkphp/app/admin/view/index/link.html";i:1559182433;}*/ ?>
<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>约吧-<?php echo $type; ?>:<?php echo $link_id; ?>的对话</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/default.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link href="bootstrap/css/jquery-accordion-menu.css" rel="stylesheet" type="text/css" />
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="bootstrap/css/bootstrap-vertical-menu.css">
	<link rel="stylesheet" href="bootstrap/css/dialog.css">
	<style type="text/css">
		.content{
			margin:0 auto;
			display: none;
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
	</style>
	<!--[if IE]>
	<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
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



<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>约吧-选择好友</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/default.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link href="bootstrap/css/jquery-accordion-menu.css" rel="stylesheet" type="text/css" />
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="bootstrap/css/bootstrap-vertical-menu.css">
	<link rel="stylesheet" href="bootstrap/css/dialog.css">
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

	</style>
	<!--[if IE]>
	<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
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



<div class="htmleaf-container friend-container navbar-fixed-top" >
	<button class="btn btn-primary btn-friendlist" type="button"> 打开/关闭好友列表</button>
	<div class="content">
		<div id="jquery-accordion-menu" class="jquery-accordion-menu black">

			<div class="jquery-accordion-menu-header" id="form" style="padding: 0 10px">
				<form class="filterform">
					<input class="filterinput" id="search" placeholder="输入link_id后点击好友或组群" >
				</form>
			</div>
		<ul>
			<!--<input type="checkbox" name="friend_id" value="1" style="width: 20px">-->

			<li	style="display: none"><a href="#">前往：<input class="filterinput"type="text" value="<?php echo $url; ?>" id="url" ></a></li>
			<li><a href="#" onclick="friend()"><i class="fa fa-user"></i>好友 </a>
			</li>
			<li><a href="#" onclick="group()"><i class="fa fa-users"></i>群组 </a>

			</li>

			<div class="jquery-accordion-menu-footer">

			</div>
		</ul>
		</div>
	</div>

</div>

<!--<div class="dialog-container">-->
	<!--<form role="form">-->
		<!--<div class="form-group">-->
			<!--<div class="form-title">-->
				<!--<div class="dropdown btn-friendother">-->
					<!--<button class="btn btn-primary btn-sm dropbtn"><i class="fa fa-cog" ></i></button>-->
					<!--<ul class="dropdown-content">-->
						<!--<li><a href="groupinformation.html?user_id={user_id}">好友信息</a></li>-->
						<!--<li><a href="show.html?user_id={user_id}">分享</a></li>-->
						<!--<li><a href="schedule.html?user_id={user_id}">生成聚会方案</a></li>-->
					<!--</ul>-->
				<!--</div>-->
				<!--<label class="text-info dialog-friendname" style="text-align:center">dhueifueirs</label>-->

			<!--</div>-->
			<!--<textarea class="form-control dialog-show"  style="height:70%" readonly="true" onpropertychange="this.scrollTop = this.scrollHeight "-->
					  <!--onfocus="this.scrollTop = this.scrollHeight "></textarea>-->

			<!--<textarea class="form-control dialog-input" type="textarea" style="height:20%"></textarea>-->
			<!--<button class="btn btn-danger btn-send" style="height:10%">发送</button>-->
			<!--<footer style="min-height:50px">-->

			<!--</footer>-->
		<!--</div>-->
	<!--</form>-->
<!--</div>-->

<script src="http://libs.useso.com/js/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
<script>window.jQuery || document.write('<script src="jquery/dist/jquery.min.js"><\/script>')</script>
<script src="bootstrap/friends/js/jquery-accordion-menu.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function () {
		jQuery("#jquery-accordion-menu").jqueryAccordionMenu();

	});

	$(function(){
		//列表项背景颜色切换
		$("#demo-list li").click(function(){
			$("#demo-list li.active").removeClass("active")
			$(this).addClass("active");
		})
	})
</script>
<script type="text/javascript">
	$(document).ready(function(e) {
		$(".btn-friendlist").click(function(e) {
			$(".content").toggle();
		});
	});
		var url = document.getElementById('url');
	function friend() {
		var search = document.getElementById('search');
		window.location.href=url.value+"type=friend&link_id="+search.value;
	}
	function group() {
		var search = document.getElementById('search');
		window.location.href=url.value+"type=group&link_id="+search.value;
	}

</script>
</body>
</html>

<div class="dialog-container">
	<form role="form" action="/thinkphp/public/admin/message/send" method="post">
		<div class="form-group">
			<div class="form-title">
				<div class="dropdown btn-friendother">
					<button class="btn btn-primary btn-sm dropbtn" type="button"><i class="fa fa-cog" ></i></button>
					<ul class="dropdown-content">
						<li>
							<?php if($type == 'friend'): ?>
							<a href="information.html?user_id=<?php echo $friend->uid1; ?>"><?php echo $friend->uid1; ?>的信息</a>
							<a href="information.html?user_id=<?php echo $friend->uid2; ?>"><?php echo $friend->uid2; ?>的信息</a>
							<?php else: ?>
							<a href="groupinformation.html?group_id=<?php echo $link_id; ?>">组群信息</a>
							<?php endif; ?>
						</li>
						<li><a href="show.html?type=<?php echo $type; ?>&link_id=<?php echo $link_id; ?>">分享</a></li>
						<li><a href="schedule.html?type=<?php echo $type; ?>&link_id=<?php echo $link_id; ?>">生成聚会方案</a></li>
					</ul>
				</div>
				<label class="text-info dialog-friendname" style="text-align:center"><?php echo $type; ?>:<?php echo $link_id; ?></label>
					<input type="text" name="link_id" value="<?php echo $link_id; ?>"style="display: none">
					<input type="text" name="type" value="<?php echo $type; ?>"style="display: none">
			</div>
			<textarea class="form-control dialog-show" style="height: 70%;overflow:scroll;overflow-x:hidden;"
					  readonly="true" onpropertychange="this.scrollTop   =   this.scrollHeight " onfocus="this.scrollTop   =   this.scrollHeight "
			><?php foreach($dialog as $d): ?>

<?php echo $d['dialog_time']; ?> <?php echo $d['dialog_uid']; ?>

<?php echo $d['dialog_content']; endforeach; ?></textarea>
			<textarea class="form-control dialog-input" type="textarea" style="height:20%;overflow:scroll;
    overflow-x:hidden;" name="content"></textarea>
			<button class="btn btn-danger btn-send" style="height:10%">发送</button>
			<footer style="min-height:50px">

			</footer>
		</div>
	</form>
</div>

<script src="http://libs.useso.com/js/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
<script>window.jQuery || document.write('<script src="jquery/dist/jquery.min.js"><\/script>')</script>
<script src="bootstrap/friends/js/jquery-accordion-menu.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function () {
		jQuery("#jquery-accordion-menu").jqueryAccordionMenu();

	});

	$(function(){
		//列表项背景颜色切换
		$("#demo-list li").click(function(){
			$("#demo-list li.active").removeClass("active")
			$(this).addClass("active");
		})
	})
</script>

</body>
</html>