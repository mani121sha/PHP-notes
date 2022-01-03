<?php
$length=$_REQUEST['a1'];
$width=$_REQUEST['a2'];
$area=$length*$width;
$perimtr=2*($length+$width);
printf('Area of Rectangle:%s',$area); echo '<br/>';
printf('Perimeter of Rectangle:%s',$perimtr);
?>