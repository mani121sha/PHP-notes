<?php
//wap to shaow differenc b/w raw and processed in the combination
//escape character sequence
#echo ''''; //invalid single inside single
#echo """"; //invalid double inside double
echo 'The line is \n single tabbed and "\t double" tabbed';
echo PHP_EOL;
echo "The line is \n single tabbed and '\t double' tabbed";
//with variable
echo PHP_EOL;
$a=100;
echo 'The value of $a is : "$a"';
echo PHP_EOL;
echo "The value of \$a is : '$a'";
echo PHP_EOL;
echo PHP_EOL;
echo 'The value of $a is: '.$a;
echo PHP_EOL;
echo 'The value of $a is: "'.$a.'"';
echo PHP_EOL;
echo 'The value of $a is: '."'$a'";
?>