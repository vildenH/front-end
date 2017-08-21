<?php

1.  函数的定义
    1.函数是什么:
        函数（function）是一段完成指定任务的已命名代码块。函数可以遵照给它的一组值或参数完成特定的任务，并且可能返回一个值。在PHP中有两种函数：自定义函数与系统函数。
    2.函数的优越性：
        控制程序设计的复杂性
        提高软件的可靠性
        提高软件的开发效率
        提高软件的可维护性
        提高程序的重用性

2.  自定义函数

    1.格式
        function 函数名([参数列表])
        {
            code...
            [return 返回值;]
        }
    2.函数名命名规则：
        由数字，字母，下划线组成，非数字开头。
    3.函数名不区分大小写
    4.函数的调用
        函数名();
    5.函数不能重复定义
    6.参数
        1.形参：在声明时定义
            function 函数名([形参1,形参2，形参n])
            {

            }
        2.实参：调用时传递
            函数名(实参1，实参2,实参N);

    7.调用函数时注意
        1.实参与形参个数相等
        2.实参多于形参
        3.形参多于实参
        4.没有传递参数

    8.返回值
        1.函数可以作为整体参加运算， 该整体的值 就是 该函数的返回值
        2.输出 函数调用， 输出函数的返回值
        3.所有的函数都有返回值， 默认 返回null
        4.函数代码中，

3.常用包含函数
    1.include( )和require( ) 函数。
        作用：将一个文件在预处理期间被导入，像把该文件粘贴到使用函数的地方。
        几乎等价，区别在于如果导入的文件不存在的
        require报解析错误，终止程序执行;
        include 报警告错误，不影响程序执行

