<?php
//wap to showglobal variable defined from local variable
$a=10;
echo "The value of a from global: $a";
echo PHP_EOL;
function test1(){
global $a;
echo "The value of a from global inside test1: $a";
echo PHP_EOL;
}
test1();
function test2(){
global $a;
echo "The value of a from global inside test2: $a";
echo PHP_EOL;
}
test2();