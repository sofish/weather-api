weather-api
===========

Licensed under: [MIT](http://en.wikipedia.org/wiki/MIT_License)

提供一个从 weather.com.cn 上根据城市接口取天气信息的方法。如果只是小网站引用，不考虑搞挂中国天气网的话，可以直接在[这里](http://service.weather.com.cn/plugin/index.shtml)选择一个官方提供的 iframe 页，如果是像 hao123 这样的大网站，你可能需要这些资源：

```ruby
i18n							# 中国以外城市
# id.js 是 cityid 与 city 名的对应
# area.js 是区域 与city 的对应[在天朝可以理解为省份]

index.php						# 演示页
weather.php						# iframe 缓存页
weather_code.php				# 中国城市代码（最主要代码）
```

API 接口 [http://m.weather.com.cn/data/城市代码.html](http://m.weather.com.cn/data/101010100.html)，请求结果是一个 JSON 对象：

```js
{
    "weatherinfo": {
        "city": "北京",
        "city_en": "beijing",
        "date_y": "2012年9月30日",
        "date": "",
        "week": "星期日",
        "fchh": "11",
        "cityid": "101010100",
        "temp1": "25℃~11℃",
        "temp2": "26℃~14℃",
        "temp3": "26℃~15℃",
        "temp4": "25℃~12℃",
        "temp5": "25℃~12℃",
        "temp6": "24℃~13℃",
        "tempF1": "77℉~51.8℉",
        "tempF2": "78.8℉~57.2℉",
        "tempF3": "78.8℉~59℉",
        "tempF4": "77℉~53.6℉",
        "tempF5": "77℉~53.6℉",
        "tempF6": "75.2℉~55.4℉",
        "weather1": "晴",
        "weather2": "晴转多云",
        "weather3": "多云转阴",
        "weather4": "晴",
        "weather5": "晴转阴",
        "weather6": "阴转多云",
        "img1": "0",
        "img2": "99",
        "img3": "0",
        "img4": "1",
        "img5": "1",
        "img6": "2",
        "img7": "0",
        "img8": "99",
        "img9": "0",
        "img10": "2",
        "img11": "2",
        "img12": "1",
        "img_single": "0",
        "img_title1": "晴",
        "img_title2": "晴",
        "img_title3": "晴",
        "img_title4": "多云",
        "img_title5": "多云",
        "img_title6": "阴",
        "img_title7": "晴",
        "img_title8": "晴",
        "img_title9": "晴",
        "img_title10": "阴",
        "img_title11": "阴",
        "img_title12": "多云",
        "img_title_single": "晴",
        "wind1": "微风",
        "wind2": "微风",
        "wind3": "微风转北风3-4级",
        "wind4": "北风3-4级转微风",
        "wind5": "微风",
        "wind6": "微风",
        "fx1": "微风",
        "fx2": "微风",
        "fl1": "小于3级",
        "fl2": "小于3级",
        "fl3": "小于3级转3-4级",
        "fl4": "3-4级转小于3级",
        "fl5": "小于3级",
        "fl6": "小于3级",
        "index": "暖",
        "index_d": "较凉爽，建议着长袖衬裤等春秋过渡装。体弱者宜着长袖衬衫和马甲。但昼夜温差较大，请适当增减衣服。",
        "index48": "暖",
        "index48_d": "较凉爽，建议着长袖衬裤等春秋过渡装。体弱者宜着长袖衬衫和马甲。但昼夜温差较大，请适当增减衣服。",
        "index_uv": "强",
        "index48_uv": "强",
        "index_xc": "适宜",
        "index_tr": "适宜",
        "index_co": "较舒适",
        "st1": "24",
        "st2": "11",
        "st3": "25",
        "st4": "15",
        "st5": "26",
        "st6": "12",
        "index_cl": "适宜",
        "index_ls": "适宜",
        "index_ag": "极易发"
    }
}
```
------------------------------------------------

Note: 多谢 [leecade](https://github.com/leecade) 提供的 i18n 支持

