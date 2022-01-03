<?php
//wap to show logical operator
//using slack equality operator
$x=readline('Enter x vaslue in range');
var_dump($x>=10);//greater than 10 or equal to 10 
var_dump($x>10 || $x==10);
//x>10 xE Range[11,+infinite)
//x>10 xE Range(10,+infinite)
//x>=10 xE Range[10,+infinite)
var_dump($x<=10);
var_dump($x<10 || $x==10);
//x<10 xE Range[9,-infinite)
//x<10 xE Range(10,-infinite)
//x<=10 xE Range[10,-infinite)