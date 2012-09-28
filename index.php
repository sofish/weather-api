<?php
// author: sofish, https://github.com/sofish
// licensed under: MIT
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>天气信息</title>
</head>
<body>

<iframe id="weather" src="javascript:void(0)" frameborder="0" width="160" height="20" scrolling="no"></iframe>
<select id="changecity">
<?php include dirname(__FILE__) . '/weather_code.php';
foreach($weather_code as $city => $code) { ?>
    <option value="<?= $city ?>"><?= $city ?></option>
<? } ?>
</select>

<script type="text/javascript">
~function(){
    var $ = function(id) {
            return document.getElementById(id);
        },
        changeCity =$('changecity'),
        weather  = $('weather'),
        applySrc = function(city){
            return weather.src = './weather.php?city=' + encodeURIComponent(city);
        };

    applySrc(changeCity.value);
    changeCity.onchange = function(){
        applySrc(changeCity.value);
    }
}()
</script>
</body>
</html>