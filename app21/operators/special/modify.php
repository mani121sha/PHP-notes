<?php
//wap to show modify operator
$x=10;
$x=$x+1;
echo "The value of x without assignment operator: $x \n";
$x=20;
$x+=1;
echo "The value of x with assignment operator: $x \n";
$y=15;
$z=$y++;
echo "The value of x using post increamemnt operator: $y and $z \n";
$x=25;
$z=++$x;
echo "The value of x using pre increamemnt operator: $x and $z \n";