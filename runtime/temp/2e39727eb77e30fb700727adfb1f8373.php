<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"/Users/zyh/apache/thinkphp/public/../app/admin/view/index/merchant.html";i:1559182213;s:62:"/Users/zyh/apache/thinkphp/app/admin/view/common/vertical.html";i:1559995409;}*/ ?>
<!doctype html>
<html lang="zh">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>约吧-查看娱乐项目</title>
	<link rel='stylesheet prefetch' href='bootstrap/css/normalize.css'>
	<link rel="stylesheet" type="text/css" href="bootstrap/register/css/default.css">
	<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/default.css">-->
	<!--<link rel='stylesheet prefetch' href='bootstrap/register/css/reset.css'>-->

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<!-- FontAwesome -->
	<link href="http://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-vertical-menu.css">
	<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/showfavorite.css">
	<!--[if IE]>
		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>
<!--修改文件名showfavorite为merchant,并挪到common-->
<body>
	<header class="htmleaf-header"style="padding: 0">
		<h1 class="text-lighter">查看娱乐项目</h1>


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
		<form id="merform"  action="/thinkphp/public/admin/index/merchant" method="post">
			<!-- fieldsets -->
			<fieldset>
				<ul class="list-group">
					<li class="list-group-item">

				<h2 class="text-primary" style="display: none;">娱乐项目选择</h2>
						<!--<button class="btn btn-primary" style="float: right" type="button">添加</button>-->
				<!--<input style="display: none"  name = "favor">-->
				<div class="div-search">
					<!--<input type="text" class="search-box"  name="merchant_id"placeholder="merchant_id">-->
					<input type="text" class="search-box" id = "search" name="s"placeholder="搜索内容">
					<input type="text" class="search-box" id = "city" name="city"placeholder="城市" value="重庆">
					<button class="btn btn-primary" style="float: left" type="submit">搜索</button>
				</div>

					<!--<div><h3 class="fs-subtitle">点击图片或标题查看详情</h3></div>-->
					<div><h3 class="fs-subtitle"></h3></div>
					</li>
					<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "无" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?>
					<li class="list-group-item">
						<div data-poiid="2" data-cateid="1"  >

									<div class="default-card">
										<div class="default-list-item clearfix">

											<div class="list-item-img">
										<a href="<?php echo $m['merchant_link']; ?>">
										<img src="<?php echo $m['merchant_img']; ?>" class="image">
										</a>
									</div>
									<div class="list-item-desc">
										<div class="list-item-desc-top">

											<a href="<?php echo $m['merchant_link']; ?>" ><?php echo $m['merchant_id']; ?> <?php echo $m['merchant_name']; ?></a>
											<div class="item-eval-info clearfix">
												<span class="avg-price">人均¥<!-- --><?php echo $m['merchant_avgprice']; ?>|</span><span class="score" title="score-five">评价<?php echo $m['merchant_score']; ?>分|</span><span class="highlight comment"><?php echo $m['merchant_comment']; ?>人评论|</span>
												<span class="telephone">电话：<?php echo $m['merchant_telephone']; ?></span>
											</div>
											<div class="item-site-info clearfix">
												<div class="address-info clearfix">
													<span class="cate-info ellipsis">
														<span title="<?php echo $m['merchant_category']; ?>"><?php echo $m['merchant_category']; ?></span><span title="<?php echo $m['district']; ?>">|<!-- --><?php echo $m['district']; ?></span></span>
													<span
														title="<?php echo $m['merchant_address']; ?>"
														class="address ellipsis">地址：<?php echo $m['merchant_address']; ?></span></div>

											</div>
											<div class="item-bottom-info clearfix">
												<div class="item-worktime-info">

													<span class="worktime"><?php echo $m['merchant_worktime']; ?></span>

												</div>
											</div>
										</div>
										<input style="display: none" value="<?php echo $m['merchant_id']; ?>" name = "merchant_id">

									</div>
										</div>
										<div class="i-div">
											<p>
												<!--<a class="i-left favorite" href="/thinkphp/public/index/favorite/favorite?merchant_id=<?php echo $m['merchant_id']; ?>"><i class="fa fa-star-o"></i></a>-->
												<a class="i-right share" href="link.html?merchant_id=<?php echo $m['merchant_id']; ?>"> <i class="fa fa-share"></i></a></p>
										</div>
										<div class="div-choose" style="display: block">
											<!--<input type="radio" name="merchant-choose" class="options-merchant"  value="1">-->
											<input type="button" class="btn-primary btn-ms"
												   style="width: 80px;color: white" id="<?php echo $m['merchant_id']; ?>"
												   onclick="javascrtpt:window.location.href='merchantinformation.html?merchant_id=<?php echo $m['merchant_id']; ?>'" value="修改">
										</div>

									</div>
						</div>
					</li>
					<?php endforeach; endif; else: echo "无" ;endif; ?>

				</ul>
					<!--<input type="submit" name="submit" class="submit action-button" value="确定" />-->

			</fieldset>
		</form>

	</article>
	<!--<footer style="min-height: 50px;position: relative;bottom: 0">-->
		<!--&lt;!&ndash;<div style="min-width: 50px;"></div>&ndash;&gt;-->
	<!--</footer>-->
	<script>

	</script>
	<script src="bootstrap/register/js/jquery-2.1.1.min.js"></script>
	<script src="bootstrap/register/js/jquery.easing.min.js" type="text/javascript"></script>



</body>
</html>