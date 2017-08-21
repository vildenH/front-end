<?php

    //二维数组的遍历
    $list = array(
        array('id'=>1,'name'=>'小松老师','size'=>'37C'),
        array('id'=>2,'name'=>'小苍老师','size'=>'39D'),
        array('id'=>3,'name'=>'小泽老师','size'=>'20C'),
        array('id'=>3,'name'=>'小泽老师','size'=>'20C'),
        array('id'=>3,'name'=>'小泽老师','size'=>'20C'),
        array('id'=>3,'name'=>'小泽老师','size'=>'20C'),
        array('id'=>3,'name'=>'小泽老师','size'=>'20C'),
        array('id'=>3,'name'=>'小泽老师','size'=>'20C'),
        array('id'=>3,'name'=>'小泽老师','size'=>'20C'),
        array('id'=>3,'name'=>'小泽老师','size'=>'20C'),
        array('id'=>3,'name'=>'小泽老师','size'=>'20C'),
        array('id'=>3,'name'=>'小泽老师','size'=>'20C'),
        array('id'=>3,'name'=>'小泽老师','size'=>'20C'),
        array('id'=>3,'name'=>'小泽老师','size'=>'20C'),
        array('id'=>3,'name'=>'小泽老师','size'=>'20C'),
    );
    echo '<pre>';
        print_r($list);
    echo '</pre>';

    //php中特殊的遍历（foreach） for  while switch

    // foreach ($list as $key=>$val) {
    //     //$key 对应的是数组的下标
    //     //$val 对应的是数组的值
    //     echo $key.'<br>';
    //     foreach ($val as $k=>$v) {
    //         echo $k.'<br>';
    //         echo $v.'<br>';
    //     }
    // }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>数据遍历</title>
</head>
<body>
    <table border="1" width="600">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Size</th>
        </tr>

        <?php foreach ($list as $val): ?>
        <tr>
            <td><?php echo $val['id'];?></td>
            <td><?php echo $val['name'];?></td>
            <td><?php echo $val['size'];?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>