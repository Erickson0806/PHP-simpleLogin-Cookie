<?php
header("Content-type: text/html; charset=utf-8");
    //声明一个删除Cookie的函数，调用时清除在客户端设置的所有Cookie
    function clearCookies(){
        setcookie("username",time()-3600);
        setcookie("isLogin",time()-3600);

    }

    if($_GET["action"]=="login"){
        clearCookies();
        //检查用户是否是admin，并且密码是否等于123456
        if($_POST["username"]=="admin"&&$_POST["password"]=="123456"){
            //想Cookie中设置标识符为username，值是表单中提交的，期限为一周
            setcookie('username',$_POST['username'],time()+60*60*24*7);
            //想Cookie中设置标识符为isLogin，用来在其他页面检查是否登录
            setcookie("isLogin",'1',time()+60*60*24*7);
            header("Location:index.php");//登录成功，跳转到首页

        }else {
            header("Location:test1.php");//登录失败，跳转到test1.php

//            die("用户名或密码错误");
        }
    }else if($_GET["action"]=="logout"){
        clearCookies();
    }
?>

<html>
    <head><title>用户登录</title></head>
    <body>
        <table border="1" width="300" align="center" cellpadding="5" cellspacing="0">
            <caption><h1>用户登录</h1></caption>
            <form action="login.php?action=login" method="post">
                <tr>
                    <th>用户名</th>
                    <td><input type="text" name="username" size="25"></td>
                </tr>
                <tr>
                    <th>密&nbsp;&nbsp;码</th>
                    <td><input type="password" name="password" size="25"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="登录">
                        <input type="reset" value="重置">

                    </td>
                </tr>
            </form>

        </table>
    </body>
</html>