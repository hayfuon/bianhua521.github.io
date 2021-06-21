<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>遥控小车</title>
    <meta name="description" content="遥控小车">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta itemprop="image" content="/favicon/logo.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/logo.png">
    <meta name="apple-mobile-web-app-title" content="遥控小车">
    <meta name="application-name" content="遥控小车">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
<canvas class="canvas js-canvas"></canvas>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/layer/layer.js"></script>
<!--<script id="ilt" src="https://player.www.hayfuon.cn/player/js/music.js" key="HayDASQAAFQZWBJHMQ" m="1"></script>-->
<script type="text/javascript" src="assets/js/main.js"></script>
<script>
    layer.config({
      extend: 'haytoycar/style.css' //同样需要先加载新皮肤
    });
    var haydata = {
        layoutcolor: [
            "#f5883c", //左上角颜色
            "#ff9043", //左下角颜色
            "#fccf92", //右上角颜色
            "#f5aa58", //右下角颜色
        ],
        projectlist: [
            {
                name: "测试项目",
                image: [
                    "http://192.168.0.9:1000/assets/images/test.png",
                    "http://192.168.0.9:1000/assets/images/test.png",
                    "http://192.168.0.9:1000/assets/images/test.png"
                ],
                floor: "http://192.168.0.9:1000/assets/images/test.png",
                button: {
                    event: "urljump",  //跳转
                    href: "javascript:;",
                    function: function(){
                        // layer.msg("测试",{time:0});
                        layer.open({content:"内容",offset: 'b'});
                        console.log("点击测试");
                    },
                    x: -4.8,
                    y: -3,
                    halfExtents: {
                        x: 3.2,
                        y: 1.5
                    }
                },
                distinctions: [{
                    type: "fwa",
                    x: 3.95,
                    y: 4.15
                },
                {
                    type: "awwwards",
                    x: 5.6,
                    y: 4.15
                },
                {
                    type: "cssda",
                    x: 6.9,
                    y: 4.15
                },
                {
                    type: "fwa",
                    x: 9.1,
                    y: 4.15
                }]
            },
            {
                name: "测试项目2",
                image: [
                    "http://192.168.0.9:1000/assets/images/test.png",
                    "http://192.168.0.9:1000/assets/images/test.png",
                    "http://192.168.0.9:1000/assets/images/test.png"
                ],
                floor: "http://192.168.0.9:1000/assets/images/test.png",
                button: {
                    event: "function",  //跳转
                    // href: "javascript:;",
                    function: function(){
                        // layer.msg("测试",{time:0});
                        layer.open({content:"内容",offset: 'b'});
                        console.log("点击测试");
                    },
                    x: -4.8,
                    y: -3,
                    halfExtents: {
                        x: 3.2,
                        y: 1.5
                    }
                },
                distinctions: [{
                    type: "fwa",
                    x: 3.95,
                    y: 4.15
                }]
            }
        ],
        informationlist: [
            {
                href: "https://twitter.com/bruno_simon/",
                label: "http://192.168.0.9:1000/assets/images/7993174ebc2d660febbfda0dd75619b7.png"
            },
            {
                href: "https://twitter.com/bruno_simon/",
                label: "http://192.168.0.9:1000/assets/images/7993174ebc2d660febbfda0dd75619b7.png"
            },
            {
                href: "https://twitter.com/bruno_simon/",
                label: "http://192.168.0.9:1000/assets/images/7993174ebc2d660febbfda0dd75619b7.png"
            },
            {
                href: "https://twitter.com/bruno_simon/",
                label: "http://192.168.0.9:1000/assets/images/7993174ebc2d660febbfda0dd75619b7.png"
            },
            {
                href: "https://twitter.com/bruno_simon/",
                label: "http://192.168.0.9:1000/assets/images/7993174ebc2d660febbfda0dd75619b7.png"
            },
            {
                href: "https://twitter.com/bruno_simon/",
                label: "http://192.168.0.9:1000/assets/images/7993174ebc2d660febbfda0dd75619b7.png"
            }
        ]
    };
    // console.log(haydata);
</script>
</body>
</html>
