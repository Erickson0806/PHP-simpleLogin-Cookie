<?php
    if($_COOKIE["isLogin"]){
        echo 'Hello :'.$_COOKIE["username"].'&nbsp;&nbsp;';
        echo '<a href="login.php?action=logout">退出</a>';
    } else{

        header("Location:login.php");
        exit;
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>网站主界面</title>

    </head>
    <body>
        <p>这里显示网页主题页面</p>
    </body>
</html>