<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"/Users/zyh/apache/thinkphp/public/../app/index/view/index/index.html";i:1558254282;}*/ ?>
<article class="htmleaf-content" >
	<!-- multistep form -->
	<form id="msform" action="/thinkphp/public/index/addparty/addparty" method="post">
		<!-- fieldsets -->
		<fieldset>
			<ul class="list-group">
				<li class="list-group-item">
					<label class="text-info lab-list-name">名称</label>
					<input type="text" name="schedule_name" placeholder="方案名"/>
				</li>
				<li class="list-group-item">
					<label class="text-info lab-list-name">时间</label>
					<input type="text" name="schedule_time" id="flatpickr-tryme" placeholder="请选择日期"/>
				</li>
				<li class="list-group-item">
					<label class="text-info lab-list-name">城市</label>
					<input type="text" name="city" value="<?php echo $user->user_city; ?>"/>
				</li>
				<li class="list-group-item">
					<label class="text-info lab-list-name">人数</label>
					<input type="text" name="schedule_number" placeholder="人数"/>
				</li>
				<li class="list-group-item">
					<label class="text-primary lab-list-name">上午</label>
					<input type="text" class="btn btn-info btn-choose"name="schedule_morning" id="morning"
						   placeholder="点击选择上午的项目"  onclick="save(this.id);" readonly/>

				</li>
				<li class="list-group-item">
					<label class="text-primary lab-list-name">中饭</label>
					<input type="text" class="btn btn-info btn-choose"name="schedule_noon" id="noon"
						   placeholder="点击选择中餐"  onclick="save(this.id);" readonly/>

				</li>
				<li class="list-group-item">
					<label class="text-primary lab-list-name">下午</label>
					<input type="text" class="btn btn-info btn-choose"name="schedule_afternoon" id="afternoon"
						   placeholder="点击选择下午的项目" onclick="save(this.id);"  readonly/>

				</li>
				<li class="list-group-item">
					<label class="text-primary lab-list-name">晚饭</label>
					<input type="text" class="btn btn-info btn-choose"name="schedule_dinner" id="dinner"
						   placeholder="点击选择晚餐" onclick="save(this.id);"  readonly/>

				</li>
				<input type="text" class="btn btn-info btn-choose"name="schedule_value" id="value"
					   value="<?php echo $value; ?>"   readonly/>
			</ul>
			<input type="submit" name="submit" class="submit action-button" value="确定" />

		</fieldset>
	</form>

	<!--multistep form-->
</article>
<div id="msg" style="margin: 10px 0; border: 1px solid black; padding: 10px; width: 300px;
  height: 100px;">
</div>
<input type="text" id="text" />
<select id="type">
	<option value="session">sessionStorage</option>
	<option value="local">localStorage</option>
</select>
<button onclick="save();">
	保存数据</button>
<button onclick="load();">
	读取数据</button>
<script type="text/javascript">
	// var msg = document.getElementById('msg'),
	// 		text = document.getElementById('text'),
	// 		type = document.getElementById('type');
	var schedule = document.getElementsByTagName('input');

	function save(id) {
		var schedule_name = schedule[0].value,
			 schedule_time = schedule[1].value,
			 schedule_city = schedule[2].value,
			 schedule_number = schedule[3].value,
			 schedule_morning = schedule[4].value,
			 schedule_noon = schedule[5].value,
			 schedule_afternoon = schedule[6].value,
			 schedule_dinner = schedule[7].value,
				schedule_now = id;
		sessionStorage.setItem('schedule_name', schedule_name);
		sessionStorage.setItem('schedule_time', schedule_time);
		sessionStorage.setItem('schedule_city', schedule_city);
		sessionStorage.setItem('schedule_number', schedule_number);
		sessionStorage.setItem('schedule_morning', schedule_morning);
		sessionStorage.setItem('schedule_noon', schedule_noon);
		sessionStorage.setItem('schedule_afternoon', schedule_afternoon);
		sessionStorage.setItem('schedule_dinner', schedule_dinner);
		sessionStorage.setItem('schedule_now', schedule_now);
		var url ="merchant.html?favor=0&city="+schedule_city+"&food=";
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
			default: alert('错误');

		}
		return true;
	}


	window.onload=function(){

		// var msg = document.getElementById('msg');
		// var t = type.value;
		// if (t == 'session') {
		// 	msg.innerHTML = sessionStorage.getItem('msg');
			schedule[0].value = sessionStorage.getItem('schedule_name');
			schedule[1].value = sessionStorage.getItem('schedule_time');
			schedule[2].value = sessionStorage.getItem('schedule_city');
			schedule[3].value = sessionStorage.getItem('schedule_number');
			schedule[4].value = sessionStorage.getItem('schedule_morning');
			schedule[5].value = sessionStorage.getItem('schedule_noon');
			schedule[5].value = sessionStorage.getItem('schedule_afternoon');
			schedule[7].value = sessionStorage.getItem('schedule_dinner');
			var nid =  sessionStorage.getItem('schedule_now');
		switch (nid)
		{
			case "morning":
				schedule[4].value  = schedule[8].value;
							break;
			case "noon":
				schedule[5].value  = schedule[8].value;
							break;
			case "afternoon":
				schedule[6].value  = schedule[8].value;
							break;
			case "dinner":
				schedule[7].value  = schedule[8].value;
							break;
			default: alert('错误');

		}
		return true;
	};
</script>
</body>
</html>