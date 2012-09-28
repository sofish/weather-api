<?php
// author: sofish, https://github.com/sofish
// licensed under: MIT

include dirname(__FILE__) . '/weather_code.php';
$city = $weather_code[$_GET['city']];
$weather = file_get_contents('http://m.weather.com.cn/data/' .  $city . '.html');
?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>用以缓存的页</title>
	<style>
	*{padding:0;margin:0;}
	#weather{font:12px/28px Arial, sans-serif;color:#666;}
	</style>
</head>
<body>
<div id="weather"></div>
<script>
	~function(){
		'use strict'
		var text = document.getElementById('weather'),
			weather = <?= $weather ?>;
		weather && weather['weatherinfo'] && (function(){
			var detail = weather['weatherinfo'],
				city = detail['city'],
				temp = detail['temp4'],
				description = detail['weather4'];
			text.innerHTML = city + ' ' + temp + ' ' + description;
		})();
	}();
</script>
</body>
</html>