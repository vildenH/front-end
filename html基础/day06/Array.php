<?php


1.数组的概述
	PHP 中的数组实际上是一个有序图。图是一种把 values 映射到 keys 的类型。此类型在很多方面做了优化，因此可以把它当成真正的数组来使用，或列表（矢量），散列表（是图的一种实现），字典，集合，栈，队列以及更多可能性。因为可以用另一个 PHP 数组作为值，也可以很容易地模拟树。

	1.1 所谓的数组下标可以视为资料内容在此数组中的识别名称，通常被称为数组下标。
	1.2 当索引值为数值时，也代表此资料内容在数组中的储存位置。
	1.3 数组中有几个索引值就被称为几维数组。
	1.4 数组分类：
		在PHP中有两种数组：索引数组和关联数组。
			1.索引（indexed）数组的索引值是整数，以0开始。当通过位置来标识东西时用索引数组。
			2.关联（associative）数组以字符串做为索引值，关联数组更像操作表。索引值为列名，用于访问列的数据。
		按照维度：
			1.一维数组、二维数组、多维数组...
			数组中有几个索引值就被称为几维数组。

2.数组的定义
	数组常用的赋值方式：
	由于 PHP 是属于弱类型数据，因此源代码中的数组并不需要经过特别的声明操作，直接将一组数值指定给某一数组元素即可。

2.1 直接赋值的方式声明数组
	1.直接赋值格式：
		$数组变量名[索引值]=资料内容
	2.其中索引值（下标）可以是一个字符串或一个整数。等价于整数（不以0开头）的字符串值被当作整数对待。
	因此，数组$array[3]与$array['3']是引用相同的元素。但是$array['03']引用的另外不同的元素。
	3.一维数组
		数组中索引值(下标)只有一个的数组称为一维数组。在数组中这是最简单的，也是最常用的了。
2.2  使用array( )语言结构新建数组

	1.格式：
	    array( [key =>] value , ... )
		$a=array(“spam@126.com “,”abuse@sohu.com”);
	2.key 可以是 integer 或者 string。如果键名是一个 integer 的标准表达方法，则被解释为整数（例如 “8” 将被解释为 8，而 “08” 将被解释为 “08”）。key 中的浮点数被取整为 integer。PHP 中没有不同的数字下标和关联下标数组，数组的类型只有一种，它可以同时包含整型和字符串型的下标。
	3.如果对给出的值没有指定键名，则取当前最大的整数索引值，而新的键名将是该值加一。如果指定的键名已经有了值，则该值会被覆盖。


	2.3  使用[ ] 定义数组 5.3后才支持
		$a=[“spam@126.com “,”abuse@sohu.com”];
	2.4  多维数组的声明

3.数组的遍历
	3.1 使用foreach语句遍历数组
		foreach (数组  as $value){}
		foreach (数组  as $key => $value){}
		Ps:foreach是最好用的数组的遍历方式
		  多维数组的遍历可以通过foreach嵌套来完成


预定义数组(超全局数据)
1  HTTP GET变量：$_GET
	通过 HTTP GET 方法传递的变量组成的数组。

2  HHTP POST变量：$_POST
	通过 HTTP POST 方法传递的变量组成的数组。
	与$_GET相似，只是方法不一样。


3  HTTP文件上传变量：$_FILES
	通过 HTTP POST 方法传递的已上传文件项目组成的数组。


4  Session变量：$_SESSION
	包含当前脚本中 session 变量的数组。

