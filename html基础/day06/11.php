<?php

    //while

    //输出0-100的奇数
    $k = 0;
    while ($k<=100) {

        //如果$K对2取余的值不等于0，则为奇数
        if ($k % 2 != 0) {
            echo $k.' ';
        }
        $k++;
    }


    //计算1-100的总和

    $num = 1;
    $sum = 0;
    while ($num <= 100) {
        $sum = $num + $sum;
        $num++;
    }

    echo $sum;