<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/20
 * Time: 13:22
 */
//整数、浮点数、字符串、数组、对象、NULL、逻辑。

$x=5466;
var_dump($x);
echo '<br>';
$x=-234;
var_dump($x);
echo '<br>';
$x=0x8C;
var_dump($x);
echo '<br>';
$x=047;
var_dump($x);
/*
 * int 5466
 * int -234
 * int 140
 * int 39
*/
$x = 10.365;
var_dump($x);
echo "<br>";
$x = 2.4e3;
var_dump($x);
echo "<br>";
$x = 8E-5;
var_dump($x);
/*
    float 10.365
    float 2400
    float 8.0E-5
*/
$cars=array("Volvo","BMW","SAAB");
var_dump($cars);
/*array (size=3)
  0 => string 'Volvo' (length=5)
  1 => string 'BMW' (length=3)
  2 => string 'SAAB' (length=4)*/
$x="Hello world!";
$x=null;
var_dump($x);
class Car{
    var $color;
    function Car($color='green'){
        $this->color=$color;
    }
    function what_color(){
        return $this->color;
    }
}
?>