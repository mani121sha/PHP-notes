<?php
//Ques:wap to find teh sum,of all teh arguments supplied from command line and average:
//Hint:$argv,$argc=count($argc) 
//$sum=0;$sum=$sum+$argv[i];$avg=$sum/($argv-1)
print_r($argv);
$sum=0;
$avg=0;
for($i=1;$i<$argc;$i++)
{
$sum=$sum+(int)$argv[$i];
}
printf("The sum is:%d \n",$sum);
$avg=$sum/($argc-1);
printf("The average is:%d \n",$avg);
?>