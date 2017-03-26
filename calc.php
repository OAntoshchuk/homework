<?php


//http://localhost/hwork/calc.php?a=5&b=0&ch=add

$a = $_GET['a'];
$b = $_GET['b'];
$ch = $_GET['ch'];


switch ($ch) {
		case 'add':
			echo 'сумма '.$a.' и '.$b.' равна <pre>';
	 		echo (add($a,$b));
			echo '</pre>';
			break;
	


		case 'minus':
			echo $a.' минус '.$b.' равно <pre>';
	 		echo (minus($a,$b));
			echo '</pre>';
			break;

		case 'mult':
			echo $a.' умножить на '.$b.' равно <pre>';
	 		echo (mult($a,$b));
			echo '</pre>';
			break;

		case 'devide':
		if ($b == 0){
			echo "деление на 0 невозможно";
		} else {
			echo $a.' разделить на '.$b.' равно <pre>';
	 		echo (devide($a,$b));
			echo '</pre>';
			break;}
	}

function add ($a, $b ){
	return $a+$b;;
}

function minus ($a, $b ){
	return $a-$b;
}

function mult ($a, $b ){
	return $a*$b;
}

function devide ($a, $b ){
	if ($b == 0 ){
		echo "деление на 0 невозможно";
		die;
	} else {
	return $a / $b;}
}

 