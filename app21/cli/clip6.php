<?php
$n1=readline('Enter no.1:');
$n2=readline('Enter no.2:');
echo add($n1,$n2);
function add($n1,$n2){
	return $n1+$n2;
}
printf("The result with 0 Argument= %d \n",add());
printf("The result with 1 Argument $n1=%d \n",add($n1));
printf("The result with 1 Argument $n2=%d \n",add($n2));
printf("The result with 2 Argument=%d \n",add($n1,$n2));
?>