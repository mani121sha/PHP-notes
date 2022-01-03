<?php
//wap to show super global variable
$a=20;//$GLOBAL
$b=30;
print_r($GLOBAL);
function display(){
$a=100;//local
$b=200;//local
echo PHP_EOL;
echo "The value of a from local :$a";
echo PHP_EOL;
echo "The value of b from local :$b";
echo PHP_EOL;
echo "The value of a from global using Super Global:{$GLOBALS['a']}";
echo PHP_EOL;
echo "The value of b from global using Super Global:{$GLOBALS['b']}";
$a=$GLOBALS['a'];//without using global keyword
$b=$GLOBALS['b'];//without using global keyword
echo PHP_EOL;
echo "The value of a from global without global keyword:$a";
echo PHP_EOL;
echo "The value of b from global without global keyword:$b";
echo PHP_EOL;
global $a,$b;//using global keyword
echo PHP_EOL;
echo "The value of a from global using global keyword:$a";
echo PHP_EOL;
echo "The value of b from global using global keyword:$b";
}
display();