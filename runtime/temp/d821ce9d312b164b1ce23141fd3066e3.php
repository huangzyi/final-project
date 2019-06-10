<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"/Users/zyh/apache/thinkphp/public/../app/index/view/index/test.html";i:1558360473;s:62:"/Users/zyh/apache/thinkphp/app/index/view/common/vertical.html";i:1558062664;}*/ ?>
<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>约吧</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/styles1.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/default.css">
	<!-- FontAwesome -->
	<link href="http://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- Twitter Bootstrap -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-vertical-menu.css">

</head>
<body>
<!--<script type="text/javascript">-->
	<!--document.write(page1.import.body.innerHTML);-->
<!--</script>-->
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


<section class="strips">
	<article class="strips__strip"> <a href="merchant.html?favor=0&choose=0">
		<div class="strip__content">
			<h1 class="strip__title" data-name="Lorem">搜索娱乐项目</h1>
			<div class="strip__inner-text">
				<h2>搜索娱乐项目</h2>
				<p>去哪儿吃、去哪儿玩，这里应有尽有，把你喜爱的娱乐项目放进收藏夹吧</p>
			</div>

		</div></a>
	</article>
	<article class="strips__strip">
		<a href="schedule.html" onclick="sessionclear()"><div class="strip__content" >
			<h1 class="strip__title" data-name="Ipsum" >开始定制你的聚会方案</h1>
			<div class="strip__inner-text" >
				<h2>开始定制聚会方案</h2>
				<p>根据即将组织的聚会地点、人数、爱好定制你喜爱的聚会方案吧</p>
			</div>
		</div></a>
	</article>
	<article class="strips__strip">
		<a href="search.html"><div class="strip__content">
			<h1 class="strip__title" data-name="Dolor">查看已生成的聚会方案</h1>
			<div class="strip__inner-text">
				<h2>查看已生成的聚会方案</h2>
				<p>查看你已建立的聚会方案，挑选合适的分享给他人哦</p>
			</div>
		</div></a>
	</article>

	<i class="fa fa-close strip__close"></i>
</section>
<script src="jquery/dist/jquery.min.js"></script>
<script>
	var Expand = function () {
		var tile = $('.strips__strip');
		var tileLink = $('.strips__strip > .strip__content');
		var tileTitle = tileLink.find('.strip__title');
		var tileText = tileLink.find('.strip__inner-text');
		var stripClose = $('.strip__close');
		var expanded = false;

		var open = function () {
			var tile = $(this).parent();
			if (!expanded) {
				tile.addClass('strips__strip--expanded');
				tileText.css('transition', 'all .6s  cubic-bezier(0.23, 1, 0.32, 1)');
				stripClose.addClass('strip__close--show');
				stripClose.css('transition', 'all .6s  cubic-bezier(0.23, 1, 0.32, 1)');
				expanded = true;
			}
		};
		var close = function () {
			if (expanded) {
				tile.removeClass('strips__strip--expanded');
				tileText.css('transition', 'all 0.15s 0 cubic-bezier(0.23, 1, 0.32, 1)');
				stripClose.removeClass('strip__close--show');
				stripClose.css('transition', 'all 0.2s 0s cubic-bezier(0.23, 1, 0.32, 1)');
				expanded = false;
			}
		};

		var bindActions = function () {
			tileLink.on('click', open);
			stripClose.on('click', close);
		};
		var init = function () {
			bindActions();
		};
		return { init: init };
	}();
	Expand.init();
</script>
</body>

</html>