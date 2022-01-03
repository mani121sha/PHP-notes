<?php
//wap to show local and global scpe of variable
$a=10;
echo "The value of a at global scope is : $a";
echo PHP_EOL;
function display(){
$b=200;
echo "The value of global a at local scope is : $a";//undefined variable
echo PHP_EOL;
echo "The value of b at local scope is : $b";
echo PHP_EOL;
}
display();
echo PHP_EOL;
echo "The value of a at global scope is : $a";