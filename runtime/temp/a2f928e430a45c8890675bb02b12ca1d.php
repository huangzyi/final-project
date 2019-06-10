<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"/Users/zyh/apache/thinkphp/public/../app/index/view/index/schedule.html";i:1558947377;s:62:"/Users/zyh/apache/thinkphp/app/index/view/common/vertical.html";i:1558062664;}*/ ?>
<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>约吧-制定聚会方案</title>
	<link rel='stylesheet prefetch' href='bootstrap/css/normalize.css'>
	<link rel="stylesheet" type="text/css" href="bootstrap/register/css/default.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/showfavorite.css">
	<script async>
		function fp_ready(){
			// setting custom defaults
			Flatpickr.l10n.firstDayOfWeek = 1;

			//Regular flatpickr
			document.getElementById("flatpickr-tryme").flatpickr();
			document.getElementsByClassName("calendar").flatpickr();

			var calendars = document.getElementsByClassName("flatpickr").flatpickr();

			var real_selection = document.getElementById("realdate");
			document.getElementById("alt")._flatpickr.config.onChange = function(obj, str){
				real_selection.textContent = str;
			}

			document.getElementById("disableRange").flatpickr({
				disable: [
					{
						from: "2016-08-16",
						to: "2016-08-19"
					},
					"2016-08-24",
					new Date().fp_incr(30) // 30 days from now
				],
				minDate: "today"
			});

			document.getElementById("disableOddDays").flatpickr({
				disable: [
					function(date) { return date.getDate()%2; } // disable odd days
				]
			});
			document.getElementById("enableNextSeven").flatpickr({
				enable: [
					{
						from: "today",
						to: new Date().fp_incr(7)
					}
				]
			});
			document.getElementById("enableCustom").flatpickr({
				enable: [
					function(dateObj){
						return dateObj.getDay() %6 !== 0 && dateObj.getFullYear() === 2016;
					}
				]
			});

			// Event API
			var events = document.getElementById("events");
			document.getElementById("events-api-example").flatpickr({
				minDate: "today",
				enableTime: true,
				onChange: function(dateObj, dateStr, fp) {
					console.log(fp.selectedDateObj);
					events.innerHTML += "<b>onChange</b> (<code>" + dateObj + "</code>, <code>" + dateStr + "</code> )<br>";
					events.scrollTop = events.offsetTop;
				},
				onOpen: function(dateObj, dateStr, fp){
					events.innerHTML += "<b>onOpen</b> (<code>" + dateObj + "</code>, <code>" + dateStr + "</code> )<br>";
					events.scrollTop = events.offsetTop;
				},
				onClose: function(dateObj, dateStr, fp){
					events.innerHTML += "<b>onClose</b> (<code>" + dateObj + "</code>, <code>" + dateStr + "</code> )<br>";
					events.scrollTop = events.offsetTop;
				},
				onReady: function(dateObj, dateStr, fp){
					events.innerHTML += "<b>onReady</b> (<code>" + dateObj + "</code>, <code>" + dateStr + "</code> )<br>";
					events.scrollTop = events.offsetTop;
				}
			});

			// Check in/out example
			var check_in = document.getElementById("check_in_date").flatpickr({
				altInput: true,
				altFormat: "\\C\\h\\e\\c\\k \\i\\n\\: l, F j Y",
				minDate: new Date()
			});
			var check_out = document.getElementById("check_out_date").flatpickr({
				altInput: true,
				altFormat: "\\C\\h\\e\\c\\k \\o\\u\\t: l, F j Y",
				minDate: new Date()
			});

			check_in.config.onChange = function(dateObj) {
				check_out.set("minDate", dateObj.fp_incr(1));
			};
			check_out.config.onChange = function(dateObj) {
				check_in.set("maxDate", dateObj.fp_incr(-1));
			}

			var fiscal = document.getElementById("fiscal").flatpickr({
				weekNumbers: true
			});

			// Fiscal calendar
			fiscal.getWeek = function(givenDate){
				var checkDate = new Date(givenDate.getTime());
				checkDate.setDate(checkDate.getDate() + 4 - (checkDate.getDay() || 7));
				var time = checkDate.getTime();
				checkDate.setMonth(7);
				checkDate.setDate(28);
				var week = (Math.floor(Math.round((time - checkDate) / 86400000) / 7) + 2);
				if (week < 1) {
					week = 52 + week;
				}
				return 'FW' + ("0" + week).slice(-2);
			}

			fiscal.redraw();


			// Date format
			var fpInstance = new Flatpickr(document.createElement("input")),
					formatOutput = document.getElementById("dateFormatOutput"),
					now = new Date();

			document.getElementById("dateFormatComposer").addEventListener("keyup", function(e){
				formatOutput.textContent = fpInstance.formatDate(e.target.value, now);
			});

		}
	</script>
	<script async src="bootstrap/time/dist/flatpickr.js" onload="fp_ready()"></script>
	<script async src="bootstrap/time/assets/prettify.js?skin=none" onload="prettyPrint()"></script>
	<script async src="bootstrap/time/assets/table-of-contents.js"></script>
	<script async src="bootstrap/time/assets/themer.js"></script>
	<script async id="bootstrap/time/locale_script"></script>
	<script async src="bootstrap/time/assets/localizr.js"></script>

	<link rel="stylesheet" type="text/css" href="bootstrap/time/assets/site.css">
	<link rel="stylesheet" id=cal_style type="text/css" href="bootstrap/time/dist/flatpickr.min.css">

	<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/default.css">-->
	<!--<link rel='stylesheet prefetch' href='bootstrap/register/css/reset.css'>-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<!-- FontAwesome -->
	<link href="http://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" href="bootstrap/css/bootstrap-vertical-menu.css">
	<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/schedule.css">
	<!--[if IE]>
		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
	<header class="htmleaf-header"style="padding: 0">
		<h1 class="text-lighter">开始生成聚会方案</h1>


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
		<!--js所限，不能更改Input的顺序,要加请到最后-->
		<!-- multistep form -->
		<form id="msform" action="/thinkphp/public/index/addparty/addparty" method="post">
			<!-- fieldsets -->
			<fieldset>
				<ul class="list-group">
					<li class="list-group-item">
						<label class="text-info lab-list-name">名称</label>
						<input type="text" name="schedule_name" id="name" placeholder="方案名"/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">时间</label>
						<input type="text" name="schedule_time" id="flatpickr-tryme" placeholder="请选择日期"/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">城市</label>
						<input type="text" name="city" value="<?php echo $user->user_city; ?>" id="city" placeholder="城市"/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">人数</label>
						<input type="text" name="schedule_number" id="number" placeholder="人数"/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">上午</label>
						<input type="text " class="btn btn-info btn-choose"name="schedule_morning_name" id="morning"
							   placeholder="点击选择上午的项目"  onclick="save(this.id);" readonly/>
						<input type="text" name="schedule_morning" id="morningid" style="display: none"
						/>
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">中饭</label>
						<input type="text" class="btn btn-info btn-choose"name="schedule_noon_name" id="noon"
							   placeholder="点击选择中餐"  onclick="save(this.id);" readonly/>
						<input type="text" name="schedule_noon" id="noonid" style="display: none"
							   />
					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">下午</label>
						<input type="text" class="btn btn-info btn-choose"name="schedule_afternoon_name" id="afternoon"
							   placeholder="点击选择下午的项目" onclick="save(this.id);"  readonly/>
						<input type="text" name="schedule_afternoon" id="afternoonid" style="display: none"
						/>

					</li>
					<li class="list-group-item">
						<label class="text-info lab-list-name">晚饭</label>
						<input type="text" class="btn btn-info btn-choose"name="schedule_dinner_name" id="dinner"
							   placeholder="点击选择晚餐" onclick="save(this.id);"  readonly/>
						<input type="text" name="schedule_dinner" id="dinnerid" style="display: none"
						/>

					</li>
					<input type="text" name="value" id="value"
						   value="<?php echo $value_name; ?>" data-id="<?php echo $value; ?>" style="display: none" />
					<input type="text" name="type" id="type"
						   value="<?php echo $type; ?>"
						   style="display: none"
							/>
					<input type="text" name="link" id="link"
						   value="<?php echo $link_id; ?>"
						   style="display: none"
					/>
				</ul>
				<input type="submit" name="submit" class="submit action-button" value="确定" />

			</fieldset>
		</form>

		<!--multistep form-->
	</article>

	<!--<footer style="min-height: 50px;position: relative;bottom: 0">-->
	<!--&lt;!&ndash;<div style="min-width: 50px;"></div>&ndash;&gt;-->
	<!--</footer>-->
	<script src="bootstrap/register/js/jquery-2.1.1.min.js"></script>
	<script src="bootstrap/register/js/jquery.easing.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		// var msg = document.getElementById('msg'),
		// 		text = document.getElementById('text'),
		// 		type = document.getElementById('type');
		// var schedule = document.getElementsByTagName('input');
		var schedule_name = document.getElementById('name'),
				schedule_time = document.getElementsByName('schedule_time'),
				schedule_city = document.getElementById('city'),
				schedule_number = document.getElementById('number'),
				schedule_morning = document.getElementById('morning'),
				schedule_morning_id = document.getElementById('morningid'),
				schedule_noon = document.getElementById('noon'),
				schedule_noon_id = document.getElementById('noonid'),
				schedule_afternoon = document.getElementById('afternoon'),
				schedule_afternoon_id = document.getElementById('afternoonid'),
				schedule_dinner = document.getElementById('dinner'),
				schedule_dinner_id = document.getElementById('dinnerid'),
				gen_type = document.getElementById('type'),
				link_id = document.getElementById('link');
		function save(id) {
			sessionStorage.clear();
			// var schedule = document.getElementsByTagName('input');
			var schedule_name_value =  schedule_name.value,
					schedule_time_value =  schedule_time[0].value,
					schedule_city_value =  schedule_city.value,
					schedule_number_value =  schedule_number.value,
					schedule_morning_value =  schedule_morning.value,
					schedule_morningid_value =  schedule_morning_id.value,
					schedule_noon_value =  schedule_noon.value,
					schedule_noonid_value =  schedule_noon_id.value,
					schedule_afternoon_value =  schedule_afternoon.value,
					schedule_afternoonid_value =  schedule_afternoon_id.value,
					schedule_dinner_value =  schedule_dinner.value,
					schedule_dinnerid_value =  schedule_dinner_id.value,
					schedule_now = id;
			// alert(schedule_time_value);

			sessionStorage.setItem('schedule_name', schedule_name_value);
			sessionStorage.setItem('schedule_time', schedule_time_value);
			sessionStorage.setItem('schedule_city', schedule_city_value);
			sessionStorage.setItem('schedule_number', schedule_number_value);
			sessionStorage.setItem('schedule_morning', schedule_morning_value);
			sessionStorage.setItem('schedule_id_morning', schedule_morningid_value);
			sessionStorage.setItem('schedule_noon', schedule_noon_value);
			sessionStorage.setItem('schedule_id_noon', schedule_noonid_value);
			sessionStorage.setItem('schedule_afternoon', schedule_afternoon_value);
			sessionStorage.setItem('schedule_id_afternoon', schedule_afternoonid_value);
			sessionStorage.setItem('schedule_dinner', schedule_dinner_value);
			sessionStorage.setItem('schedule_id_dinner', schedule_dinnerid_value);
			sessionStorage.setItem('schedule_now', schedule_now);
			sessionStorage.setItem('gen_type', gen_type.value);
			sessionStorage.setItem('link_id', link_id.value);
			// alert(gen_type.value);
			// alert(link_id.value);

			var url ="merchant.html?favor=0&choose=1&type="+gen_type.value+"&link_id="+link_id.value+"&city="+schedule_city_value+"&food=";
			switch (id)
			{
				case "morning":
				case "afternoon":
					window.location.href=url+"0";
					break;
				case "noon":
				case "dinner":
					window.location.href=url+"1";
					break;
				default: ;

			}

		}


		window.onload=function(){
			// var schedule = document.getElementsByTagName('input');
			// var msg = document.getElementById('msg');
			// var t = type.value;
			// if (t == 'session') {
			// 	msg.innerHTML = sessionStorage.getItem('msg');

			var nid =  sessionStorage.getItem('schedule_now');
			var value = document.getElementById('value');

			// alert(type.value);

			if(value.value!=null)
			{
				sessionStorage.setItem('schedule_'+nid,value.value);
				sessionStorage.setItem('schedule_id_'+nid,value.dataset.id);
			}
			if(sessionStorage.getItem('gen_type')!=null)		gen_type.value=sessionStorage.getItem('gen_type');
			if(sessionStorage.getItem('link_id')!=null)		link_id.value=sessionStorage.getItem('link_id');
			schedule_name.value = sessionStorage.getItem('schedule_name');
			schedule_time[0].value = sessionStorage.getItem('schedule_time');
			if(sessionStorage.getItem('schedule_city')!=null)	schedule_city.value = sessionStorage.getItem('schedule_city');
			schedule_number.value = sessionStorage.getItem('schedule_number');
			schedule_morning.value = sessionStorage.getItem('schedule_morning');
			schedule_morning_id.value = sessionStorage.getItem('schedule_id_morning');
			schedule_noon.value = sessionStorage.getItem('schedule_noon');
			schedule_noon_id.value = sessionStorage.getItem('schedule_id_noon');
			schedule_afternoon.value = sessionStorage.getItem('schedule_afternoon');
			schedule_afternoon_id.value = sessionStorage.getItem('schedule_id_afternoon');
			schedule_dinner.value = sessionStorage.getItem('schedule_dinner');
			schedule_dinner_id.value = sessionStorage.getItem('schedule_id_dinner');
			sessionStorage.clear();
		};
	</script>
	<!--<script type="text/javascript">-->
		<!--// var msg = document.getElementById('msg'),-->
		<!--// 		text = document.getElementById('text'),-->
		<!--// 		type = document.getElementById('type');-->
		<!--var schedule = document.getElementsByTagName('input');-->

		<!--function save(id) {-->
			<!--sessionStorage.clear();-->
			<!--// var schedule = document.getElementsByTagName('input');-->
			<!--var schedule_name = schedule[0].value,-->
					<!--schedule_time = schedule[1].value,-->
					<!--schedule_city = schedule[2].value,-->
					<!--schedule_number = schedule[3].value,-->
					<!--schedule_morning = schedule[4].value,-->
					<!--schedule_noon = schedule[5].value,-->
					<!--schedule_afternoon = schedule[6].value,-->
					<!--schedule_dinner = schedule[7].value,-->
					<!--schedule_now = id;-->
			<!--//alert(schedule_noon);-->
			<!--// alert("schedule_name = "+schedule[0].value+-->
			<!--// 		"schedule_time = "+schedule[1].value+-->
			<!--// 		"schedule_city = "+schedule[2].value+-->
			<!--// 		"schedule_number = "+schedule[3].value+-->
			<!--// 		"schedule_morning = "+schedule[4].value+-->
			<!--// 		"schedule_noon = "+schedule[5].value+-->
			<!--// 		"schedule_afternoon = "+schedule[6].value+-->
			<!--// 		"schedule_dinner = "+schedule[7].value+-->
			<!--// 		"schedule_now = "+id);-->
			<!--sessionStorage.setItem('schedule_name', schedule_name);-->
			<!--sessionStorage.setItem('schedule_time', schedule_time);-->
			<!--sessionStorage.setItem('schedule_city', schedule_city);-->
			<!--sessionStorage.setItem('schedule_number', schedule_number);-->
			<!--sessionStorage.setItem('schedule_morning', schedule_morning);-->
			<!--sessionStorage.setItem('schedule_noon', schedule_noon);-->
			<!--sessionStorage.setItem('schedule_afternoon', schedule_afternoon);-->
			<!--sessionStorage.setItem('schedule_dinner', schedule_dinner);-->
			<!--sessionStorage.setItem('schedule_now', schedule_now);-->
			<!--//alert(id);-->
			<!--var url ="merchant.html?favor=0&choose=1&city="+schedule_city+"&food=";-->
			<!--switch (id)-->
			<!--{-->
				<!--case "morning":-->
				<!--case "afternoon":-->
					<!--window.location.href=url+"0";-->
					<!--break;-->
				<!--case "noon":-->
				<!--case "dinner":-->
					<!--window.location.href=url+"1";-->
					<!--break;-->
				<!--default: ;-->

			<!--}-->

		<!--}-->


		<!--window.onload=function(){-->
			<!--// var schedule = document.getElementsByTagName('input');-->
			<!--// var msg = document.getElementById('msg');-->
			<!--// var t = type.value;-->
			<!--// if (t == 'session') {-->
			<!--// 	msg.innerHTML = sessionStorage.getItem('msg');-->
				<!--var nid =  sessionStorage.getItem('schedule_now');-->
				<!--//alert(schedule[0].value);-->
			<!--if(schedule[8].value!=null)		sessionStorage.setItem('schedule_'+nid,schedule[8].value);-->
			<!--schedule[0].value = sessionStorage.getItem('schedule_name');-->
			<!--schedule[1].value = sessionStorage.getItem('schedule_time');-->
			<!--schedule[2].value = sessionStorage.getItem('schedule_city');-->
			<!--schedule[3].value = sessionStorage.getItem('schedule_number');-->
			<!--schedule[4].value = sessionStorage.getItem('schedule_morning');-->
			<!--schedule[5].value = sessionStorage.getItem('schedule_noon');-->
			<!--schedule[6].value = sessionStorage.getItem('schedule_afternoon');-->
			<!--schedule[7].value = sessionStorage.getItem('schedule_dinner');-->

			<!--// {-->
			<!--// switch (nid)-->
			<!--// {-->
			<!--// 	case "morning":-->
			<!--// 		schedule[4].value  = schedule[8].value;-->
			<!--// 		//sessionStorage.setItem('schedule_morning', schedule[8].value);-->
			<!--// 		break;-->
			<!--// 	case "noon":-->
			<!--// 		schedule[5].value  = schedule[8].value;-->
			<!--// 		//sessionStorage.setItem('schedule_noon', schedule[8].value);-->
			<!--// 		break;-->
			<!--// 	case "afternoon":-->
			<!--// 		schedule[6].value  = schedule[8].value;-->
			<!--// 		//sessionStorage.setItem('schedule_afternoon', schedule[8].value);-->
			<!--// 		break;-->
			<!--// 	case "dinner":-->
			<!--// 		schedule[7].value  = schedule[8].value;-->
			<!--// 		//sessionStorage.setItem('schedule_morning', schedule[8].value);-->
			<!--// 		break;-->
			<!--//-->
			<!--// }-->
			<!--//-->
			<!--// }-->
			<!--sessionStorage.clear();-->
		<!--};-->
	<!--</script>-->

</body>
</html>