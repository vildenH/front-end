<?php

    //处理前台传过来的数据

    $a = $_GET['a'];
    echo $a;

    switch ($a) {
        case 'login':
            echo '这里执行登录';

            //从数据库中查询有没此用户


            break;

        case 'reg':
            echo '这里执行注册';

            //将数据写入数据库
            break;

        default:
            echo '非法操作';
            break;
    }
