
// 作用域链图中很明确的表示出：
// 在变量解析过程中首先查找局部的作用域，然后查找上层作用域。
// 在代码一的函数当中没有定义变量i，于是查找上层作用域（全局作用域），
// 进而进行输出其值。
// 但是在代码二的函数内定义了变量i
// （无论是在alter之后还是之前定义变量，都认为在此作用域拥有变量i），
// 于是不再向上层的作用域进行查找，直接输出i。
var pet = 'cat'

function play_with_pets() {
    console.log(pet);
    var pet = 'dog';
    console.log(pet);
}
play_with_pets();
console.log(pet);

//这主要是Js中没有用var声明的变量都是全局变量，而且是顶层对象的属性。
//相当于 
// var a = 3;
// b = 3;
//相当于控制上层作用域的变量
var a, b;
(function () {
    console.log(a);
    console.log(b);
    var a = b = 3;
    console.log(a);
    console.log(b);
})();
console.log(a);
console.log(b);


name = "Hello";

function t() {
    var name = "world";

    function s() {
        var name = "welcome";
        console.log(name);
    }

    function ss() {
        console.log(name);
    }
    s();
    ss();
}
t();