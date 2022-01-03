<?php
//wap to show local and global scpe of variable
$a=10;
echo "The value of a at global scope is : $a";
echo PHP_EOL;
function display(){
$b=200;
global $a; //get the variable from heap
echo "The value of global a at local scope is : $a";//calling from heap
echo PHP_EOL;
echo "The value of b at local scope is : $b";
echo PHP_EOL;
}
display();
echo PHP_EOL;
echo "The value of a at global scope is : $a";