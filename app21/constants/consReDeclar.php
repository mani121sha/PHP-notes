<?php
//wap in php to show that re-declaration error in constant
define('gravity',10);
echo gravity;
echo PHP_EOL;
define('GRAVITY',0.8);
echo PHP_EOL;
//redefine or redeclare
//define('gravity',5);
//echo gravity;//Notice error
printf("The value of predefine constant true:%d \n",TRUE);
define('TRUE','YES');
printf("The value of predefine constant true:%d \n",TRUE);//E_NOTICE
echo PHP_EOL;
printf("The value of user-define constant gravity:%d \n",gravity);
define('gravity',8);
printf("The value of user-define constant gravity:%d \n",gravity);//E_USER_NOTICE
?>