<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"/Users/zyh/apache/thinkphp/public/../app/index/view/index/groupinformation.html";i:1558932590;s:62:"/Users/zyh/apache/thinkphp/app/index/view/common/vertical.html";i:1558062664;}*/ ?>
<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>约吧-组群信息</title>
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
		<h1 class="text-lighter">组群信息详情</h1>


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
		<form id="msform" action="/thinkphp/public/index/addgroup/found?group_id=<?php echo $group->group_id; ?>" method="post" >
			<!-- fieldsets -->
			<fieldset>
				<div class="group-menu">
				<ul class="list-group">
					<li class="list-group-item">
						<label class="text-info lab-list-name">id</label>
						<input type="text" name ="group_id" value="<?php echo $group->group_id; ?>" disabled/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">群名</label>
						<input type="text" name="group_name" placeholder="群名" value="<?php echo $group->group_name; ?>"/>
					</li>

					<li class="list-group-item">
						<label class="text-info lab-list-name">人数</label>
						<input type="text" name="group_number" value="<?php echo $group_number; ?>" disabled/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">群主</label>
						<input type="text" name="group_founder" value="<?php echo $group->group_founder; ?>" disabled/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">简介</label>
						<textarea type="textarea" name="group_intro" value="<?php echo $group->group_intro; ?>"></textarea>
					</li>
				</ul>
					<button class="btn btn-success" type="submit">修改信息</button>
					<table class="table table-condensed table-hover table-bordered">
						<h2><caption class="text-primary">组群成员</caption></h2>
						<thead>
						<tr class="tableHeader text-primary">
							<th>id</th>
							<th>姓名</th>
							<th>性别</th>
							<th>城市</th>
							<th>电话</th>
							<th>菜系</th>
							<th>爱好</th>
							<th>详情</th>
						</tr>
						</thead>
						<tbody class="text-info">
						<?php if(is_array($member) || $member instanceof \think\Collection || $member instanceof \think\Paginator): $i = 0; $__LIST__ = $member;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($i % 2 );++$i;?>
						<tr class="dataRow">
							<td><?php echo $f['user_id']; ?></td>
							<td><?php echo $f['user_name']; ?></td>
							<td><?php echo $f['user_sex']; ?></td>
							<td><?php echo $f['user_city']; ?></td>
							<td><?php echo $f['user_tele']; ?></td>
							<td><?php echo $f['user_ffood']; ?></td>
							<td><?php echo $f['user_hobby']; ?></td>
							<td><button type="button" class="btn btn-success btn-xs" onclick="window.location.href='friendinformation?user_id=<?php echo $f['user_id']; ?>'"> 详情</button></td>
						</tr>

						<?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
						<tfoot class="tableFooter">
						<tr>
							<td colspan="9">
								<button class="btn btn-success btn-add" type="button">添加成员</button>
							</td>
						</tr>
						</tfoot>
					</table>
					<?php  $founder_id = $group->getData('group_founder');	if($id == $founder_id): ?>
					<button class="btn action-button" type="button" onclick="window.location.href='/thinkphp/public/index/addgroup/delgroup?group_id=<?php echo $group->group_id; ?>'">解散该群</button>
					<?php else: ?>
					<button type="button" class="btn action-button " onclick="window.location.href='/thinkphp/public/index/addgroup/del?group_id=<?php echo $group->group_id; ?>'">退出该群</button>
					<?php endif; ?>
				</div>


			</fieldset>
		</form>
		<div class="htmleaf-container friend-container navbar-fixed-top" style="display: none">
			<button class="btn btn-primary btn-friendlist"> 关闭好友列表</button>
			<div class="content">
				<div id="jquery-accordion-menu" class="jquery-accordion-menu black">

					<!--input class="jquery-accordion-menu-header"id="form" oninput="searchfriend(this)" ></input-->
					<div class="jquery-accordion-menu-header" id="form" style="padding: 0 10px;"></div>
					<ul>
						<!--<input type="checkbox" name="friend_id" value="1" style="width: 20px">-->

						<li><a href="#"><i class="fa fa-user"></i>好友 </a>
							<ul class="submenu" id="friend">
								<?php if(is_array($friend) || $friend instanceof \think\Collection || $friend instanceof \think\Paginator): $i = 0; $__LIST__ = $friend;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($i % 2 );++$i;?>
								<!--<li><a href="#"></a></li>-->
								<li>
									<?php $url = '/thinkphp/public/index/addgroup/addfriend?group_id='.$group->group_id; ?>
									<a href="<?php echo $url; ?>&user_id=<?php echo $f->user->user_id; ?>">
										<?php echo $f->user->user_name; ?>
									</a>
								</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</li>

					</ul>
					<div class="jquery-accordion-menu-footer">
						<!--<button type="submit" class="btn btn-primary" >确认</button>-->
					</div>
				</div>
			</div>

		</div>



	</article>
	<footer style="min-height: 50px;position: relative;bottom: 0">
		<!--<div style="min-width: 50px;"></div>-->
	</footer>

	<script src="bootstrap/register/js/jquery-2.1.1.min.js"></script>
	<script src="bootstrap/register/js/jquery.easing.min.js" type="text/javascript"></script>
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
				$(".friend-container").toggle();
			});
		});
		$(document).ready(function(e) {
			$(".btn-add").click(function(e) {
				$(".friend-container").toggle();
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