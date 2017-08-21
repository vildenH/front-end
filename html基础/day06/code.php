<?php

    header("Content-Type:text/html;Charset=utf-8");

    //GD库

    //验证码的高
    $h = 60;
    //验证码的宽
    $w = 200;
    //字体文件
    $fontFile = './font/simkai.ttf';

    //字体大小
    $fontSize = 60;

    //验证码类型
    $type = 3;    //1.纯小写英文字符   2. 纯数字    3.数字、字母组合

    //验证码的长度
    $lenght = 4;

    //1.创建画布
    $img = imagecreatetruecolor($w, $h);

    //2.绘制过程
    //2.1分配颜色
    $bgcolor = imagecolorallocate($img, mt_rand(100,255), mt_rand(100,255), mt_rand(100,255));


    //2.2填充
    imagefill($img, 0, 0, $bgcolor);

    switch ($type) {
        case 1:
            $list = range('a','z');
            break;
        case 2:
            $list = range('0','9');
            break;
        case 3:
            $list1 = range('a','z');
            $list2 = range('1','9');
            $list3 = range('A','Z');

            //将所有数组合并成一个
            $list = array_merge($list1,$list2,$list3);
            break;
    }

    //将组建好的数组打乱
    shuffle($list);

    //循环800次干扰点
    for ($i=0; $i<200; $i++) {

        //每画一个点随机一个颜色
        $tmpColor = imagecolorallocate($img, mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
        //每次都要更换点的坐标
        imagesetpixel($img,mt_rand(0,$w),mt_rand(0,$h),$tmpColor);
    }

    //干扰线
    for ($i=0; $i<18; $i++) {
        //线的随机颜色
        $tmpColor = imagecolorallocate($img, mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
        imageline($img, mt_rand(0,$w),mt_rand(0,$h),mt_rand(0,$w),mt_rand(0,$h),$tmpColor);
    }


    for ($i = 0; $i< $lenght; $i++) {

        //字体角度
        $angle = mt_rand(-45,45);

        //字体坐标x
        $x = 20;
        $x = $fontSize + ($i*$fontSize);
        $x = ($w-$fontSize*$lenght)/2 + ($i * $fontSize);
        //字体坐标y
        $y = 30;
        //字体颜色
        $fontColor = imagecolorallocate($img, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));

        imagettftext($img, $fontSize, $angle, $x, $y, $fontColor, $fontFile, $list[$i]);
    }


    //准备后缀
    $sub = 'jpeg';

    //3.保存输出
    header('Content-Type:image/'.$sub);

    //输出
    //准备一个变量函数
    $funcName = 'image'.$sub;

    //imagegif    imagepng ......
    $funcName($img);


    //4.释放资源
    imagedestroy($img);

//把这个验证码封装成函数，宽高是默认的，也可以是动态的，
//要求：1.验证码长度
//      2.字符类型
