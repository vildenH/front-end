<?php

    /*
        变量类型：
            四种标量类型：
                布尔型（boolean）
                整型（integer）
                浮点型（float）（浮点数，也作double）
                字符串（String）
            两种复合类型：
                数组（Array）
                对象Object）
            最后是两种特殊类型：
                资源（Resource）
                空  NULL
     */

    //布尔型
    $a = true;

    $a = 111;

    $a = 1.11;

    $a = '伦哥';

    $a = array();

    class Demo
    {
        public $name = '伦哥';
    }

    $a = new Demo();

    //照妖镜
    var_dump($a);


