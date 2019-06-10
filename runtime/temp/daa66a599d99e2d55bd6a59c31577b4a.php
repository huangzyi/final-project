<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"/Users/zyh/apache/thinkphp/public/../app/admin/view/index/showschedule.html";i:1558263241;s:62:"/Users/zyh/apache/thinkphp/app/admin/view/common/vertical.html";i:1559017436;}*/ ?>
<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>约吧-显示聚会方案详情</title>
	<link rel='stylesheet prefetch' href='bootstrap/css/normalize.css'>
	<link rel="stylesheet" type="text/css" href="bootstrap/register/css/default.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/showfavorite.css">

	<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/default.css">-->
	<!--<link rel='stylesheet prefetch' href='bootstrap/register/css/reset.css'>-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<!-- FontAwesome -->
	<link href="http://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" href="bootstrap/css/bootstrap-vertical-menu.css">
	<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/schedule.css">
	<!--调整宽，引用便删，或使用acticle以内内容-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/showschedule.css">

	<!--[if IE]>
		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
	<header class="htmleaf-header"style="">
		<h1 class="text-lighter">聚会方案</h1>


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
	        <a href="../index/addfriend.html">
	          <i class="fa fa-fw fa-lg fa-user"></i> 
	          <span>user</span>
	        </a>
	      </li>
			<li>
				<a href="../index/information.html">
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



	<article class="schedule-details" style="padding: 0">

		<form >
			<!--style="display: none;" >-->
			<!-- fieldsets -->
			<fieldset>
		<style type="text/css">
			#msform input{
				border: white;
				height: 40px;
			}
			#msform li{
				/*border: white;*/
			}
		</style>


				<ul class="list-group" id="msform">
					<li class="list-group-item">
						<!--<a class="close" onclick="close()"><i class="fa fa-close"></i></a>-->
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">名称</label>
						<input type="text" name="schedule_name" class="edit" placeholder="方案名" value="<?php echo $schedule->schedule_name; ?>" disabled/>
						<!--<div class="alert alert-danger" role="alert" style="display: none;">-->
						<!--<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>-->
						<!--<span class="sr-only">Error:</span>-->
						<!--Enter a valid email address-->
						<!--</div>-->
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">创建者</label>
						<input type="text" name="schedule_founder" value="<?php echo $schedule->schedule_founder; ?>" disabled/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">城市</label>
						<input type="text" name="city"  value="<?php echo $schedule->city; ?>" disabled/>
					</li><li class="list-group-item">
						<label class="text-info lab-list-name">创建时间</label>
						<input type="text" name="schedule_found_time"  value="<?php echo $schedule->schedule_found_time; ?>" disabled/>
					</li>
					<li class="list-group-item">
					<label class="text-info lab-list-name">人数</label>
					<input type="text" name="schedule_number" placeholder="人数" class="edit"value="<?php echo $schedule->schedule_number; ?>" disabled/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">时间</label
						>
						<input type="text" name="schedule_time" id="flatpickr-tryme" value="<?php echo $schedule->schedule_time; ?>" disabled/>

					<!--<li class="list-group-item">-->
					<!--<label class="text text-info lab-list-name">成员</label>-->
					<!--<input name="member" placeholder="成员">-->
					<!--</li>-->


				</ul>

				<ul class="list-group"id="merform">
					<?php if(is_array($merchant) || $merchant instanceof \think\Collection || $merchant instanceof \think\Paginator): $i = 0; $__LIST__ = $merchant;if( count($__LIST__)==0 ) : echo "未选择" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?>
					<input style="display: none" value="<?php echo $m['merchant_id']; ?>" name = "merchant_id">
					<li class="list-group-item">
						<h2 class="fs-title">
							<?php switch($name=$i): case "1": ?>上午<?php break; case "2": ?>中饭<?php break; case "3": ?>下午<?php break; case "4": ?>晚饭<?php break; default: ?>错误
							<?php endswitch; ?>
						</h2>
					</li>

					<li class="list-group-item">
						<?php if($m == ''): ?>
						<h1 class="">未选择</h1>
						<?php else: ?>
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
									</div>
								</div>
								<div class="i-div">
									<p><a class="i-left favorite" href="/thinkphp/public/index/favorite/favorite?merchant_id=<?php echo $m['merchant_id']; ?>"><i class="fa fa-star-o"></i></a>
										<a class="i-right"> <i class="fa fa-share"></i></a></p>
								</div>
								<!--&lt;!&ndash;只有在选择schedule的时候出现&ndash;&gt;-->
								<!--<div class="div-choose">-->
									<!--&lt;!&ndash;<input type="radio" name="merchant-choose" class="options-merchant"  value="1">&ndash;&gt;-->
									<!--<input type="button" class="btn-primary btn-ms"-->
										   <!--style="width: 80px;color: white" id="<?php echo $m['merchant_id']; ?>"-->
										   <!--onclick="return getid(this.id)" value="选择">-->
								<!--</div>-->
							</div>
						</div>
						<?php endif; ?>
					</li>
					<?php endforeach; endif; else: echo "未选择" ;endif; ?>
					<!--<li class="list-group-item" style="height: 120px">-->
						<!--<div class="i-div">-->
						<!--<a class="i-left"><i class="fa fa-thumbs-o-up"></i><span>434</span></a>-->
						<!--<a class="i-right"><i class="fa fa-thumbs-o-down"></i><span>434</span></a>-->
						<!--</div>-->
						<!--<input type="text" name="next" class="next action-button" value="返回">-->
					<footer style="min-height: 80px;position: relative;bottom: 0;">
						<input type="button" name="button" class="submit action-button" onclick="save()"value="修改" />

							<!--<div style="min-width: 50px;"></div>-->
						</footer>
					</li>
					<li class="list-group-item">
					<!--</li>-->
				</ul>
				<!--<input type="submit" name="submit" class="submit action-button" value="确定" />-->


			</fieldset>
		</form>
	</article>



	<script>
		var schedule = document.getElementsByTagName('input');
		function save() {
			sessionStorage.clear();
			// var schedule = document.getElementsByTagName('input');
			var schedule_name = schedule[0].value,
					schedule_time = schedule[5].value,
					schedule_city = schedule[2].value,
					schedule_number = schedule[4].value,
					schedule_morning = schedule[6].value,
					schedule_noon = schedule[7].value,
					schedule_afternoon = schedule[8].value,
					schedule_dinner = schedule[9].value;
					// alert("name:"+schedule_name+
					// 		" time:"+schedule_time+
					// 		" schedule_city"+schedule_city+
					// 		" schedule_number "+schedule_number+
					// 		" schedule_morning "+ schedule[6].value+
					// 		" schedule_noon "+ schedule[7].value+
					// 		" schedule_afternoon"+ schedule[8].value+
					// 		" schedule_dinner "+ schedule[9].value);

			sessionStorage.setItem('schedule_name', schedule_name);
			sessionStorage.setItem('schedule_time', schedule_time);
			sessionStorage.setItem('schedule_city', schedule_city);
			sessionStorage.setItem('schedule_number', schedule_number);
			sessionStorage.setItem('schedule_morning', schedule_morning);
			sessionStorage.setItem('schedule_noon', schedule_noon);
			sessionStorage.setItem('schedule_afternoon', schedule_afternoon);
			sessionStorage.setItem('schedule_dinner', schedule_dinner);
			window.location.href='schedule.html';
		}
	</script>
	<script src="bootstrap/register/js/jquery-2.1.1.min.js"></script>
	<script src="bootstrap/register/js/jquery.easing.min.js" type="text/javascript"></script>



</body>
</html>