<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"/Users/zyh/apache/thinkphp/public/../app/admin/view/index/search.html";i:1559020536;s:62:"/Users/zyh/apache/thinkphp/app/admin/view/common/vertical.html";i:1559995409;s:60:"/Users/zyh/apache/thinkphp/app/admin/view/common/search.html";i:1559139102;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>约吧-查看生成的聚会方案</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/default.css">
	<!-- FontAwesome -->
	<link href="http://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- Twitter Bootstrap -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link href="http://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-vertical-menu.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/showfavorite.css">
	<link rel="stylesheet" href="bootstrap/css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Hind:400,600|Open+Sans:300,600" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap/dist/sortable.min.css">
  <script type="text/javascript" src="bootstrap/dist/sortable.min.js"></script>
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


<header class="htmleaf-header"style="padding: 0">
	<h1 class="text-lighter" style="color: white">schdule</h1>
	<!--<?php if(\think\Session::get('user')['user_sex'] == '男'): ?><h1>男</h1> <?php endif; ?>-->
	<!--<h1>{dump($Think.session.user);}</h1>-->

</header>
<div class="htmleaf-container" >
<div	style="min-height: 20px;padding: 10px 50px">
<form id="merform"  action="/thinkphp/public/admin/index/search" method="post">
<div class="div-search">
	<input type="text" class="search-box"  name="schedule_id"placeholder="schedule_id">
	<input type="text" class="search-box"  name="schedule_founder"placeholder="schedule_founder">
	<!--<input type="text" class="search-box" id = "city" name="city"placeholder="城市" value="重庆">-->
	<button class="btn btn-primary" style="float: left" type="submit">搜索</button>
</div>
</form>
</div>
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
<footer style="min-height:50px">

</footer>
</div>
</body>
</html>