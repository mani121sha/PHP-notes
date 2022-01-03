<?php
function is_homo($array=[])
{
$key_type=getType($array[0]);
for($i=0;$i<count($array);$i++){
if($key_type===getType($array[$i]))
  {
	
  }else{
		return false;
	   }
}
return true;
}
var_dump(is_homo($argv));
var_dump(is_homo(10,20,30,40.5));
?>