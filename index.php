<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>地址发布页</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html {
            transition: opacity 0.3s ease;
        }
        
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        
        .container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            padding: 40px;
            max-width: 600px;
            width: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            opacity: 0;
            animation: fadeIn 0.5s ease forwards;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }
        
        h2 {
            color: #667eea;
            margin-bottom: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            position: relative;
            padding-bottom: 10px;
        }
        
        h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 2px;
        }
        
        .content {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
        }
        
        .content strong {
            color: #667eea;
        }
        
        .section {
            margin-bottom: 25px;
            padding: 15px;
            background: rgba(102, 126, 234, 0.05);
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .section:hover {
            background: rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }
        
        a {
            color: #667eea;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            padding: 2px 0;
        }
        
        a:hover {
            color: #764ba2;
        }
        
        a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 1px;
            background: #764ba2;
            transition: width 0.3s ease;
        }
        
        a:hover::after {
            width: 100%;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }
        
        .contact-item .icon {
            margin-right: 10px;
            color: #667eea;
            font-size: 18px;
        }
        
        .error-message {
            background: rgba(255, 99, 132, 0.1);
            border-left: 4px solid #ff6384;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
            color: #dc3545;
        }
        
        .loading {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }
        
        .loading-spinner {
            width: 40px;
            height: 40px;
            border: 4px solid rgba(102, 126, 234, 0.3);
            border-radius: 50%;
            border-top-color: #667eea;
            animation: spin 1s ease-in-out infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 30px 20px;
                margin: 20px;
            }
            
            h2 {
                font-size: 20px;
            }
            
            .content {
                font-size: 14px;
            }
            
            .section {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Define the URL to fetch content from
        $url = 'http://tavv.top/NewPage/';
        
        // Suppress errors with @ and attempt to fetch the content from the URL
        $response = @file_get_contents($url);
        if ($response === FALSE) {
            // Handle the error without displaying any warnings or errors
            echo '<h2>地址发布页(防走失)</h2>';
            echo '<div class="error-message">';
            echo '<strong>域名已经失效，请关注微信公众号获取最新信息</strong>';
            echo '</div>';
            echo '<div class="content">';
            echo '<div class="section">';
            echo '<strong>一、有效地址</strong><br>';
            echo '<div class="contact-item">';
            echo '<span class="icon">🌐</span>';
            echo '博客地址：<a href="https://Mec8.github.io" target="_blank">Mec8.github.io (固定)</a>';
            echo '</div>';
            echo '<div class="contact-item">';
            echo '<span class="icon">📱</span>';
            echo '微信公众号：Share壁纸社';
            echo '</div>';
            echo '</div>';
            echo '<div class="section">';
            echo '<strong>二、联系方式</strong><br>';
            echo '<div class="contact-item">';
            echo '<span class="icon">💬</span>';
            echo 'QQ：2258878405';
            echo '</div>';
            echo '<div class="contact-item">';
            echo '<span class="icon">💬</span>';
            echo '微信：Me825888';
            echo '</div>';
            echo '<div class="contact-item">';
            echo '<span class="icon">📧</span>';
            echo '邮箱：shop2018@qq.com';
            echo '</div>';
            echo '<div class="contact-item">';
            echo '<span class="icon">📧</span>';
            echo '邮箱：zhaogemec@163.com（不接收邮箱）';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        } else {
            // Output the fetched content
            echo $response;
        }
        ?>
    </div>
    <script>
        // 添加页面加载动画
        window.addEventListener('load', function() {
            document.body.style.opacity = '1';
        });
    </script>
</body>
</html>
