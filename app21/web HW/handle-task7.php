<?php
define('PIE',3.13);
$name=$_REQUEST['a1'];
$area=PIE*$name*$name;
$circum=2*PIE*$name;
printf('Area Of Circle:%s',$area); echo '<br>';
printf('Circumference Of Circle:%s',$circum); echo '<br>';
?>