<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"/Users/zyh/apache/thinkphp/public/../app/admin/view/index/groupinformation.html";i:1559145713;s:62:"/Users/zyh/apache/thinkphp/app/admin/view/common/vertical.html";i:1559136704;}*/ ?>
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



	<article class="htmleaf-content" >
		<!-- multistep form -->
		<form id="msform" action="/thinkphp/public/admin/addgroup/found" method="post" >
			<!-- fieldsets -->
			<fieldset>
				<div class="group-menu">
				<ul class="list-group">
					<li class="list-group-item">
						<label class="text-info lab-list-name">id</label>
						<input type="text" name ="group_id" value="<?php echo $group->group_id; ?>"/>
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
						<input type="text" name="group_founder" value="<?php echo $group->group_founder; ?>" />
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">简介</label>
						<textarea type="textarea" name="group_intro"id="intro" ><?php echo $group->group_intro; ?></textarea>
					</li>
				</ul>
					<button class="btn btn-success" type="submit">修改信息</button>
					<button class="btn btn-success" type="button" id="btn-clear">清空</button>

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
							<th>删除</th>
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
							<td><button type="button" class="btn btn-success btn-xs" onclick="window.location.href='/thinkphp/public/admin/addgroup/del?user_id=<?php echo $f['user_id']; ?>&group_id=<?php echo $group->group_id; ?>'"> 删除</button></td>
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
					<button class="btn action-button" type="button" onclick="window.location.href='/thinkphp/public/admin/addgroup/delgroup?group_id=<?php echo $group->group_id; ?>'">解散该群</button>
					<button type="button" class="btn action-button " onclick="window.location.href='dialog.html?type=group&link_id=<?php echo $group->group_id; ?>'">对话</button>
				</div>


			</fieldset>
		</form>
		<div class="htmleaf-container friend-container navbar-fixed-top" style="display: none">
			<button class="btn btn-primary btn-friendlist"> 关闭好友列表</button>
			<div class="content">
				<div id="jquery-accordion-menu" class="jquery-accordion-menu black">
					<div class="jquery-accordion-menu-header" id="form" style="padding: 0 10px">
						<form class="filterform">
							<input class="filterinput" id="search" >
						</form>
					</div>
					<!--input class="jquery-accordion-menu-header"id="form" oninput="searchfriend(this)" ></input-->
					<ul>
						<!--<input type="checkbox" name="friend_id" value="1" style="width: 20px">-->
						<?php $url = '/thinkphp/public/admin/addgroup/addfriend?group_id='.$group->group_id; ?>
						<li><a href="#">前往：<input class="filterinput"type="text" value="<?php echo $url; ?>" id="url" ></a></li>
						<li><a href="#" onclick="addfriend()"><i class="fa fa-user"></i>确定 </a>
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
		$("#btn-clear").click(function () {
			var edit = document.getElementsByTagName("input");
			// alert(edit[0].value);
			for(var i=0;i<4;i++){
				edit[i].removeAttribute("value");
			}
			$("#intro").val('');
		});
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
		var url = document.getElementById('url');
		function addfriend() {
			var search = document.getElementById('search');
			window.location.href=url.value+"&type=group&user_id="+search.value;
		}
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