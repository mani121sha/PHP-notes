<?php
//wap to show hereDoc String Syntax
$a=100;
echo <<<BLOCK
This is Here Doc String, $a \n
	"This is again New Line string "$a""
'This string is inside \$a single Quote \t tabbed'=$a
BLOCK;
						//OR

$a=100;
echo <<<"BLOCK"
This is Here Doc String, $a \n
	"This is again New Line string "$a""
'This string is inside \$a single Quote \t tabbed'=$a
BLOCK;
						//OR

$code = <<<BLOCK
This is Here Doc String, $a \n
	"This is again New Line string "$a""
'This string is inside \$a single Quote \t tabbed'=$a
BLOCK;

echo $code;

							//OR
							
$html = <<<ravi
This is Here Doc String, $a \n
	"This is again New Line string "$a""
'This string is inside \$a single Quote \t tabbed'=$a
ravi;

echo $html;
?>