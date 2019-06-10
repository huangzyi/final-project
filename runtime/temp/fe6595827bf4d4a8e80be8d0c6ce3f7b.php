<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:67:"/Users/zyh/apache/thinkphp/public/../app/admin/view/index/show.html";i:1558263325;s:62:"/Users/zyh/apache/thinkphp/app/admin/view/common/vertical.html";i:1559136704;s:62:"/Users/zyh/apache/thinkphp/app/admin/view/common/merchant.html";i:1559139039;s:60:"/Users/zyh/apache/thinkphp/app/admin/view/common/search.html";i:1559139102;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php if($type == 'favor'): ?>
	<title>约吧-收藏夹</title>
	<?php else: ?>
	<title>约吧-分享</title>
	<?php endif; ?>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/normalize.css" />
	<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/htmleaf-demo.css">-->
	<!--<link rel="import" href="../coverticalmenu.html" id="page1"/>-->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/show.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/showfavorite.css">

	<script src="bootstrap/js/prefixfree.min.js"></script>
	<!--[if IE]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
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


<style type="text/css">
	/*.div-search{*/
		/*height: 50px;margin-top: 10px;*/
	/*}*/
</style>
	<div class="htmleaf-container" >
		<header class="htmleaf-header">
			<?php if($type == 'favor'): ?>
			<h1 class="text-lighter" style="color: white">收藏夹 </h1>
			<?php else: ?>
			<h1 class="text-lighter" style="color: white">分享 </h1>
			<?php endif; ?>
		</header>
		<div class="container">
		  <div class="tab-group" id="merform"style="" >
		    <section id="tab1" title="娱乐项目" >
				<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

	<!--<article class="htmleaf-content" >-->
		<!-- multistep form -->
		<!--<form id="merform"  action="/thinkphp/public/index/index/showmerchant" method="post">-->
			<!-- fieldsets -->
			<!--<fieldset >-->
				<ul class="list-group" >
					<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "无" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?>
					<li class="list-group-item" style="height: auto">
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

											<a href="<?php echo $m['merchant_link']; ?>" ><?php echo $m['merchant_name']; ?></a>
											<?php if($type != 'favor'): ?>
											<div class="item-eval-info clearfix">
												<span class="share_founder">分享者：<?php echo $m->share_founder; ?></span>
												<span class="share_time">分享时间：<?php echo $m->share_time; ?></span>
											</div>
											<?php endif; ?>
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
										<?php if($type != 'favor'): ?>
										<div class="i-div" >
											<p><a class="i-left" href="/thinkphp/public/admin/share/comment?type=<?php echo $type; ?>&merchant_id=<?php echo $m->merchant_id; ?>&link_id=<?php echo $link_id; ?>&share_founder=<?php echo $m->share_founder_id; ?>&comment_type=share_up"><i class="fa fa-thumbs-o-up"></i><span><?php echo $m->share_up; ?></span></a>
												<a class="i-right" href="/thinkphp/public/admin/share/comment?type=<?php echo $type; ?>&merchant_id=<?php echo $m->merchant_id; ?>&link_id=<?php echo $link_id; ?>&share_founder=<?php echo $m->share_founder_id; ?>&comment_type=share_down" ><i class="fa fa-thumbs-o-down"></i><span><?php echo $m->share_down; ?></span></a></p>
										</div>
										<?php endif; ?>
										<!--<div class="i-div" >-->
											<!--<p><a class="i-left favorite" href="/thinkphp/public/index/favorite/favorite?merchant_id=<?php echo $m['merchant_id']; ?>"><i class="fa fa-star-o"></i></a>-->
										<!---->
												<div class="i-div" >
											<p><a class="i-left favorite" href="/thinkphp/public/admin/favorite/favorite?merchant_id=<?php echo $m['merchant_id']; ?>&user_id=<?php echo $user_id; ?>"><i class="fa fa-star-o"></i></a>

												<a class="i-right"href="link.html?merchant_id=<?php echo $m['merchant_id']; ?>"> <i class="fa fa-share"></i></a></p>
										</div>
										<?php if($type != 'favor'): ?>
										<div class="div-choose"style="display: block;height: 50px" >
											<!--<input type="radio" name="merchant-choose" class="options-merchant"  value="1">-->
											<input type="button" class="action-button btn-ms"
												   style="color: white;height: auto;width: 80px;" id="<?php echo $m['merchant_id']; ?>"
												   onclick="window.location.href='/thinkphp/public/admin/share/del?type=<?php echo $type; ?>&merchant_id=<?php echo $m->merchant_id; ?>&link_id=<?php echo $link_id; ?>&share_founder=<?php echo $m->share_founder; ?>'" value="取消分享">
											<!--<button class="action-button btn-ms">取消分享</button>-->
											<!--<button class="btn btn-success" type="button" onclick="window.location.href='#'">取消分享</button>-->
										</div>
										<?php endif; ?>
										<!--只有在选择schedule的时候出现-->
										<!--<div class="div-choose">-->
											<!--&lt;!&ndash;<input type="radio" name="merchant-choose" class="options-merchant"  value="1">&ndash;&gt;-->
											<!--<input type="button" class="btn-primary btn-ms"-->
												   <!--style="width: 80px;color: white" id="<?php echo $m['merchant_id']; ?>"-->
												   <!--onclick="return getid(this.id)" value="选择">-->
										<!--</div>-->
									</div>
						</div>
					</li>
					<?php endforeach; endif; else: echo "无" ;endif; ?>

				</ul>
					<!--<input type="submit" name="submit" class="submit action-button" value="确定" />-->

			<!--</fieldset>-->
		<!--&lt;!&ndash;</form>&ndash;&gt;-->

	<!--</article>-->
	<!--<footer style="min-height: 50px;position: relative;bottom: 0">-->
		<!--&lt;!&ndash;<div style="min-width: 50px;"></div>&ndash;&gt;-->
	<!--</footer>-->
	<script>
		function getid(id){
			alert(id);
		}
	</script>
	<script src="bootstrap/register/js/jquery-2.1.1.min.js"></script>
	<script src="bootstrap/register/js/jquery.easing.min.js" type="text/javascript"></script>
	<script>
		var favorite = false;
		function checkboxOnclick(checkbox){
			if ( checkbox.id=='favorite-file'&&checkbox.checked == true){
				favorite=true;
			}else if ( checkbox.id=='favorite-file'&&checkbox.checked == false){
				favorite=false;
			}
			alert(favorite);
		}
	</script>
	<script type="text/javascript">
	$(document).ready(function(e) {
	$(".close").click(function(e) {
	$("#merform").toggle();
	});
	});

	</script>
	<script>

	$('.submit').click(function () {
	    return false;
	});
	/*
	$('.register').click(function () {

		return false;
	});*/
	</script>


</body>
</html>


		    </section>
		    <section id="tab2" title="聚会方案" >
				<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<title>带排序功能的js masonry瀑布流插件|DEMO_jQuery之家-自由分享jQuery、html5、css3的插件库</title>-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/default.css">
	<!-- FontAwesome -->
	<!--<link href="http://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">-->
	<!-- Twitter Bootstrap -->
	<!--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">-->
	<!--<link href="http://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">-->
	<!--<link rel="stylesheet" href="bootstrap/css/bootstrap-vertical-menu.css">-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/showfavorite.css">
	<link rel="stylesheet" href="bootstrap/css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Hind:400,600|Open+Sans:300,600" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap/dist/sortable.min.css">
  <script type="text/javascript" src="bootstrap/dist/sortable.min.js"></script>
</head>
<body>


		  <form class="sortable" >
		    <div class="container" style="background-color: orange">
				<!--style=" background: #f4f4f4;padding: 3%;">-->
		      <!--<div class="checkbox-favorite">-->
  					<!--<label> <input type="checkbox" id="favorite" onclick="checkboxOnclick(this)"/>  收藏夹</label>-->
			  <!--</div>-->
				<!--<div class="div-search" >-->
					<!--<input type="text" class="search-box">-->
					<!--<button class="btn btn-success" style="float: left">搜索</button>-->
				<!--</div>-->
				<div class="wrapper">


		        <div id="sortable" class="sjs-default">
					<?php if(is_array($schedule) || $schedule instanceof \think\Collection || $schedule instanceof \think\Paginator): $i = 0; $__LIST__ = $schedule;if( count($__LIST__)==0 ) : echo "暂无" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		          <div data-sjsel="flatty" >
		            <div class="card">
		              <!--<img class="card__picture" src="bootstrap/masonry/images/item-1.jpg" alt="">-->
		              <div class="card-infos">
		                <h2 class="card__title"><?php echo $vo->schedule_name; ?></h2>
		                <p class="card__text">
						  <h6>schedule_id:<?php echo $vo->schedule_id; ?></h6>
						  <?php if($type == 'favor'): ?>
						  <h6>创建者：<?php echo $vo->schedule_founder; ?></h6>
						  <h6>创建时间：<?php echo $vo->schedule_found_time; ?></h6>
						  <?php else: ?>
						  <h6>分享者：<?php echo $vo->share_founder; ?></h6>
						  <h6>分享时间：<?php echo $vo->share_time; ?></h6>
						  <?php endif; ?>
						  <h6>聚会时间:<?php echo $vo->schedule_time; ?></h6>
						  <h6>人数：<?php echo $vo->schedule_number; ?></h6>
						  <h6>城市：<?php echo $vo->city; ?></h6>
						  <h6>上午：<?php echo $vo->schedule_morning; ?></h6>
						  <h6>中饭：<?php echo $vo->schedule_noon; ?></h6>
						  <h6>下午：<?php echo $vo->schedule_afternoon; ?></h6>
						  <h6>晚饭：<?php echo $vo->schedule_dinner; ?></h6>
						  <input type="text" name="schedule_id" style="display: none" value="<?php echo $vo->schedule_id; ?>"/>
						  <?php if($type != 'favor'): ?>
						  <h5><a class="i-left" href="/thinkphp/public/admin/share/comment?type=<?php echo $type; ?>&schedule_id=<?php echo $vo->schedule_id; ?>&link_id=<?php echo $link_id; ?>&share_founder=<?php echo $vo->share_founder_id; ?>&comment_type=share_up"><i class="fa fa-thumbs-o-up"></i><span><?php echo $vo->share_up; ?></span></a>
							  <a class="i-right" href="/thinkphp/public/admin/share/comment?type=<?php echo $type; ?>&schedule_id=<?php echo $vo->schedule_id; ?>&link_id=<?php echo $link_id; ?>&share_founder=<?php echo $vo->share_founder_id; ?>&comment_type=share_down"><i class="fa fa-thumbs-o-down"></i><span><?php echo $vo->share_down; ?></span></a></h5>
						  <h1> </h1>
						  <?php endif; ?>
						  <h5><a class="i-left" href="/thinkphp/public/admin/favorite/favorite?schedule_id=<?php echo $vo->schedule_id; ?>&user_id=<?php echo $user_id; ?>"><i class="fa fa-star-o" ></i></a>
							  <a class="i-right" href="link.html?schedule_id=<?php echo $vo->schedule_id; ?>"><i class="fa fa-share"></i></a></h5>
						  <h4><button class="btn btn-success" type="button" onclick="window.location.href='schedule?schedule_id=<?php echo $vo->schedule_id; ?>'">查看详情</button></h4>
						  <?php if($type != 'favor'): ?>
						  <h4><button class="btn btn-success" type="button" onclick="window.location.href='/thinkphp/public/admin/share/del?type=<?php echo $type; ?>&schedule_id=<?php echo $vo->schedule_id; ?>&link_id=<?php echo $link_id; ?>&share_founder=<?php echo $vo->share_founder; ?>'">取消分享</button></h4>
						  <?php endif; ?>
						  </p>
		              </div>
		            </div>
		          </div>
					<?php endforeach; endif; else: echo "暂无" ;endif; ?>
		        </div>
		      </div>
		    </div>
		  </form>
		  
		

	
	<script type="text/javascript">
	    document.querySelector('#sortable').sortablejs()
	  </script>

</body>
</html>
			</section>

		  </div>
		</div>
		<footer style="min-height:50px">

		</footer>
	</div>
	
	<script src="jquery/dist/jquery.min.js" type="text/javascript"></script>
	<script>window.jQuery || document.write('<script src="jquery/dist/jquery-1.11.0.min.js"><\/script>')</script>
	<script type="text/javascript" src="jquery/dist/jquery-tab.js"></script>
	<script type="text/javascript">
		$(function(){
			// Calling the plugin
			$('.tab-group').tabify();
		})
	</script>
</body>
</html>