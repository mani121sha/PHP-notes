<?php
if(isset($_REQUEST['m']))
{$n1=$_REQUEST['a1'];
$n2=$_REQUEST['a2'];
printf('Add two no.:%s',$n1+$n2);echo '<br/>';}
if(isset($_REQUEST['n']))
{$n1=$_REQUEST['a1'];
$n2=$_REQUEST['a2'];
printf('Multiply two no.:%s',$n1*$n2); echo '<br/>';}if(isset($_REQUEST['o']))
{$n1=$_REQUEST['a1'];
$n2=$_REQUEST['a2'];
printf('Subtract two no.:%s',$n1-$n2); echo '<br/>';}if(isset($_REQUEST['p']))
{$n1=$_REQUEST['a1'];
$n2=$_REQUEST['a2'];
printf('Divide two no.:%s',$n1/$n2); echo '<br/>';}
?>