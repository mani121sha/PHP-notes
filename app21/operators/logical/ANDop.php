<?php
//wap to show logical NOT operator
$x=readline('Enter x value in range');
var_dump($x!=10);
var_dump($x>10 || $x<10);
var_dump(!(!($x<10) && !($x>10)));