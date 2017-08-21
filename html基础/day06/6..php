<?php

    //常量  const
    // define('HOST','localhost');
    // define('USER','root');
    // define('PASS','root');
    // define('DB','haligong');

    // echo USER;


    //数组的声明
    $a = array();
    $a = [];

    //数组赋值  一维数组  关联数组
    $a = array('price'=>'48','name'=>'女童法绒粉童针织打底裤','num'=>'1000','store'=>'100');

    //一维数组  索引数组
    $a = array('48','女童法绒粉童针织打底裤','1000','100');

    echo '<pre>';
        print_r($a);
    echo '</pre>';

    var_dump($a);

    echo '<br>';

    //关联数组值输出
    // echo '商品的价格：'.$a['price'].'<br>';
    // echo '商品的名字：'.$a['name'].'<br>';
    // echo '商品的点击：'.$a['num'].'<br>';
    // echo '商品的库存：'.$a['store'].'<br>';


    //索引数组值输出
    echo '商品的价格：'.$a['0'].'<br>';
    echo '商品的名字：'.$a['1'].'<br>';
    echo '商品的点击：'.$a['2'].'<br>';
    echo '商品的库存：'.$a['3'].'<br>';
