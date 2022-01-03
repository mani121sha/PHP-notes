<?php
//wap to show raw strings
echo 'This is a simple Raw String';
echo PHP_EOL;
echo "This is a simple Processed  String";
echo PHP_EOL;

//escape sequence
echo 'This is a \t tabbed line \n String';
echo PHP_EOL;
echo "This is a \t tabbed line \n String";
echo PHP_EOL;

//with variable
$name='ravi';
$class='B.Tech';
$roll_no='1001';

echo 'name=$name,class=$class,roll no=$roll_no,inside single quote';
echo PHP_EOL;
echo "name=$name,class=$class,roll no=$roll_no,inside Double quote";
echo PHP_EOL;
?>