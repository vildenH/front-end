<?php

    //二维数组
    $list = array(
        array('name'=>'小名'),
        array('name'=>'小白'),
        array('name'=>'小黄'),
    );

    echo '<pre>';
        print_r($list);
    echo '</pre>';

    var_dump($list);

    echo $list[2]['name'];

    //多维数组
    $list1 = [
        ['name'=>['0'=>'小苍']],
        ['name'=>['0'=>'小泽']],
    ];

    echo '<pre>';
        print_r($list1);
    echo '</pre>';

    echo $list1[1]['name']['0'];