<?php
//wap to show newDoc String Syntax
$a=50;
echo <<<'BLOCK'
This is new Doc String, $a \n
	'This is again New Line string ''$a''
"This string is inside \$a single Quote \t tabbed"=$a
BLOCK;

									//OR


$code=<<<'BLOCK'
This is new Doc String, $a \n
	'This is again New Line string ''$a''
"This string is inside \$a single Quote \t tabbed"=$a
BLOCK;

echo $code;
?>