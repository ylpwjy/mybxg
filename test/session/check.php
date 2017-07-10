<?php
    //获取用户名
    $uname=$_POST['username'];
    $pw=$_POST['password'];
    if($uname=='admin' && $pw=='123456'){
        //登陆成功
        //开启session
                session_start();
        //把数据保存在服务器中
        $_SESSION['loginInfo']=$uname;
        echo '{"flag":"1"}';

    }else{
        //登录失败
        echo '{"flag":"2"}';
    };

?>