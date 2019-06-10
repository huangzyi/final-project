<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"/Users/zyh/apache/thinkphp/public/../app/admin/view/index/addfriend.html";i:1559140590;s:62:"/Users/zyh/apache/thinkphp/app/admin/view/common/vertical.html";i:1559995409;}*/ ?>
<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>约吧-查找好友</title>
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

</style>
<body>
	<header class="htmleaf-header"style="padding: 0">
		<h1 class="text-lighter">查找好友</h1>


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
	          <span>娱乐项目</span>
	        </a>
	      </li>
	      </li>
	      <li>
	        <a href="../index/search.html">
	          <i class="fa fa-fw fa-lg fa-calendar"></i>
	          <span>聚会方案</span>
	        </a>
	      </li>
	      <li>
	        <a href="../index/finduser.html">
	          <i class="fa fa-fw fa-lg fa-user"></i> 
	          <span>用户</span>
	        </a>
	      </li>
			<li>
				<a href="../index/addfriend.html">
					<i class="fa fa-fw fa-lg fa-handshake-o"></i>
					<span>好友</span>
				</a>
			</li>
			<li>
	        <a href="../index/addgroup.html">
	          <i class="fa fa-fw fa-lg fa-group"></i>
	          <span>组群</span>
	        </a>
	      </li>
			<li>
				<a href="../index/link.html">
					<i class="fa fa-fw fa-lg fa-comment-o"></i>
					<span>会话</span>
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
		<form id="msform" action="/thinkphp/public/admin/index/addfriend" method="post" >
			<!-- fieldsets -->
			<fieldset>

				<div class="div-search" style="padding-top: 20px" >
					<!--<button class="btn btn-primary" style="float: left" type="button" onclick="window.location.href='information'">添加</button>-->
					<input type="text" class="search-box"  name="link_id" placeholder="link_id" style="border: 1px solid #ccc">
					<input type="text" class="search-box"  name="friend_id"placeholder="friend_id" style="border: 1px solid #ccc">
				<button class="btn btn-primary"  type="submit" style="right:0;">搜索</button>
			</div>
				<div class="group-menu">


					<table class="table table-condensed table-hover table-bordered">
						<h1><caption class="text-primary">查询结果</caption></h1>
						<thead>

						<tr class="tableHeader text-primary">
							<th>link_id</th>
							<th>uid1</th>
							<th>uid2</th>
							<th>删除</th>
							<th>对话</th>
						</tr>
						</thead>
						<tbody class="text-info">
						
						<!--<tr>-->
							<!--<td colspan="6">-->
								<!--<h3	class="text-info">无结果</h3>-->
							<!--</td>-->
						<!--</tr>-->
						
							<?php if(is_array($friend) || $friend instanceof \think\Collection || $friend instanceof \think\Paginator): $i = 0; $__LIST__ = $friend;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($i % 2 );++$i;?>
						<tr class="dataRow">
							<td><?php echo $f['link_id']; ?></td>
							<td><?php echo $f['uid1']; ?></td>
							<td><?php echo $f['uid2']; ?></td>
							<td><button type="button" class="btn btn-success btn-xs" onclick="window.location.href='/thinkphp/public/admin/addfriend/del?link_id=<?php echo $f['link_id']; ?>'"> 删除</button></td>
							<td><button type="button" class="btn btn-success btn-xs" onclick="window.location.href='dialog?type=friend&link_id=<?php echo $f['link_id']; ?>'"> 对话</button></td>
						</tr>

							<?php endforeach; endif; else: echo "" ;endif; ?>
						
						</tbody>

					</table>


				</div>
				<footer style="min-height: 50px;position: relative;bottom: 0">
					<!--<div style="min-width: 50px;"></div>-->
				</footer>

			</fieldset>

		</form>






</body>
</html>