<?php

$fp=fopen('mani.txt','r');
$txt=fgets($fp,1024);
echo $txt;
echo PHP_EOL;
echo json_encode($txt);
?>