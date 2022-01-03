<?php
//wap in php to show case sensitive constants
define('gravity',10);
define('Gravity',8);
define('GRAVITY','Free fall');
define('GrAvIty','this is gravity');
echo gravity;
echo PHP_EOL;
echo Gravity;
echo PHP_EOL;
echo GRAVITY;
echo PHP_EOL;
echo GrAvIty;
echo PHP_EOL;?>
<?php
//CASE2:WAP TO SHOW NON CASE SENSITIVE
echo true;
echo PHP_EOL;
echo True;
echo PHP_EOL;
echo TRUE;
echo PHP_EOL;
echo TrUe;
echo PHP_EOL;
var_dump(true==TRUE);
var_dump(True==TRUE);
var_dump(true==TrUe);
?>