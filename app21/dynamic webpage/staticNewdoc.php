<?php
$data=array(
'name'=>'Manisha',
'class'=>'M.Sc',
'rollNo'=>1002,
);
echo <<<'FORM'
<h1>Student Form</h1><hr/>
<form>
<p>Name:<input type="text" value="{$data['name']}"></p>
<p>class:<input type="text" value="{$data['class']}"></p>
<p>rollNo:<input type="number" value="{$data['rollNo']}"></p>
</form>
FORM;