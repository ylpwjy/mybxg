<?php
    //根据路由导航页面
    // $urlpath='/teacher/list';
    // include('./views/'.$urlpath.'.html');
    // echo 123;
    // var_dump($_SERVER);
    $pathname='index';
    $filename='index';
    if(isset($_SERVER['PATH_INFO'])){
    $urlpath=$_SERVER['PATH_INFO'];
    $arr=explode('/',substr($urlpath,'1'));
    // var_dump($arr);
    if(count($arr)==2){
         $pathname=$arr[0];
          $filename=$arr[1];
    }
    // echo $urlpath;
    }else{
        $filename='login';
    };
   
    include('./views/'.$pathname.'/'.$filename.'.html');
?>