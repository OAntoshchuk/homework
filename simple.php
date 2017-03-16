<?php

$simple = array();
 
for ($i = 2; $i <= 100; $i++)
{ 
    $flag = true;
    for ($j = 2; $j <= $i/2; $j++)
		
        if( $i % $j == 0)
		{  $flag = false;
	break;}
	
    if($flag)

	{ $simple[] = $i;}
}

echo 'Список простых чисел в массиве от 1 до 100 <pre>';
var_export($simple);
echo '</pre>';

$var = $_GET['var'];
if (in_array($var, $simple)) {
	echo 'вводимое число '.$var.' простое <br>';
}else{
	echo 'вводимое число'.$var.' не простое <br>';
}

