<?php
//wap to find perfect number using recursion or ternary operator
$n=readline('Enter a value');
if(is_perfect($n)){
echo "$n is Perfect";
}else{	
echo "$n is not perfect";
}
function is_perfect($n,$i=1,$sum=0){
if($i==$n){
	return false;
}else{
	if($n % $i==0){
		$sum=$sum+$i;
	}
	if($sum==$n){
		return true;
		}
	return is_perfect($n,$i+1,$sum);
}
}