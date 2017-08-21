<?php

    //函数   功能块

    //定义一个函数   使用function 函数名
    //形参 ：具体占位
    //实参 ：实际传递的值
    //返回值：使用return

    //计算两个值得和
    function Sum($a, $b)
    {
        //在函数内部直接输出结果集
        // echo $a + $b;

        //函数返回值
        return $a + $b;
    }

    //函数的调用，使用函数名(),这里传递的是实参
    $num = Sum(10,20);
    var_dump($num);


    //定义一个函数，1-100之间值得总和
    function Sum1($x, $y)
    {
        for ($i=$x;$i<=$y;$i++) {
            //错误抑制符
            @$sum +=$i;
        }

        return @$sum;
    }

    $num = Sum1(1,100);
    echo $num;

    //包含文件
    // include './9.php';
    require './10.php';


