<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>地址发布页</title>
        <style>
			a{
				color: red;
				text-decoration: none;
			}
		</style>
	</head>
	<body style="background: linear-gradient(to bottom right, #ffcc00, #ff6699);">
		<div style="display: flex;
            justify-content: center; /* 水平居中 */
            align-items: center;    /* 竖向居中 */
            height: 100vh;          /* 使容器全屏 */
            border: 0px solid #ccc; /* 仅用于可视化边框 */">
            
			<div style="padding: 45px 25px; 
            border: 3px solid #ccc;
            background-color: rgba(255, 255, 255, 0.5); /* 半透明白色 */
            border-radius: 5%;
            ">
            <?php
// Define the URL to fetch content from
$url = 'http://tavv.top/NewPage/';

// Suppress errors with @ and attempt to fetch the content from the URL
$response = @file_get_contents($url);
if ($response === FALSE) {
    // Handle the error without displaying any warnings or errors
    echo '<h2>地址发布页(防走失) </h2>';
    echo '<pre style="font-size: 18px;">
<strong>域名已经失效，请关注微信公众号获取最新信息</strong>

<strong>一、有效地址</strong>
博客地址：<a href="Mec8.github.io">Mec8.github.io (固定)</a>
微信公众号：Share壁纸社
    
<strong>二、联系方式</strong>
QQ：2258878405
微信：Me825888
邮箱：shop2018@qq.com
邮箱：zhaogemec@163.com（不接收邮箱）
</pre>';
} else {
    // Output the fetched content
    echo $response;
}
?>
            </div>
		</div>
	</body>
</html>
