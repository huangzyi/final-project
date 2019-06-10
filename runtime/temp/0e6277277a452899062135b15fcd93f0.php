<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"/Users/zyh/apache/thinkphp/public/../app/index/view/index/addgroup.html";i:1559183003;s:62:"/Users/zyh/apache/thinkphp/app/index/view/common/vertical.html";i:1558062664;}*/ ?>
<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>约吧-添加组群</title>
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
		<h1 class="text-lighter">添加组群</h1>


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
		<form id="msform" action="/thinkphp/public/index/index/addgroup" method="post" >
			<!-- fieldsets -->
			<fieldset>
				<div class="div-search" style="padding-top: 20px" >
				<input type="text" class="search-box" id = "search" name="s"placeholder="请输入组群id或组群名" style="border: 1px solid #ccc">
				<button class="btn btn-primary"  type="submit" style="right:0;">搜索</button>
			</div>
				<div class="group-menu">


					<table class="table table-condensed table-hover table-bordered">
						<h1><caption class="text-primary">查询结果</caption></h1>
						<thead>

						<tr class="tableHeader text-primary">
							<th>id</th>
							<th>组群名</th>
							<th>简介</th>
							<th>添加</th>
						</tr>
						</thead>
						<tbody class="text-info">
						
						<!--<tr>-->
							<!--<td colspan="6">-->
								<!--<h3	class="text-info">无结果</h3>-->
							<!--</td>-->
						<!--</tr>-->
						
							<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($i % 2 );++$i;?>
						<tr class="dataRow">
							<td><?php echo $f['group_id']; ?></td>
							<td><?php echo $f['group_name']; ?></td>
							<td><input class="table-hover text-info" type="text" value="<?php echo $f['group_intro']; ?>"style="width: 100%;font-size:small;height: 10px;color: #31708f" disabled></td>
							<td><button type="button" class="btn btn-success btn-xs" onclick="window.location.href='/thinkphp/public/index/Addgroup/add?group_id=<?php echo $f['group_id']; ?>'"> 添加</button></td>
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