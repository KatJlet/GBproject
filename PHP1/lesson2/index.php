<?
echo "<h4>1) </h4>";

$a=3;
$b=-5;

if($a>=0 && $b>=0){	echo "Разность чисел: ".($a-$b);}
else if($a<0 && $b<0){	echo "Произведение чисел: ".($a*$b);}
else{	echo "Сумма чисел: ".($a-$b);}
//////////////////////////////////////////////////////////////

echo "<h4>2) </h4>";

$a = rand(0, 15);
echo "<p>Число а = $a</p>";
switch ($a) {
	case '0':
		echo "0 ";
	case '1':
		echo "1 ";
	case '2':
		echo "2 ";
	case '3':
		echo "3 ";
	case '4':
		echo "4 ";
	case '5':
		echo "5 ";
	case '6':
		echo "6 ";
	case '7':
		echo "7 ";
	case '8':
		echo "8 ";
	case '9':
		echo "9 ";
	case '10':
		echo "10 ";
	case '11':
		echo "11 ";
	case '12':
		echo "12 ";
	case '13':
		echo "13 ";
	case '14':
		echo "14 ";
	case '15':
		echo "15 ";
	default:
		'Что-то пошло не так...';
		break;
}
//////////////////////////////////////////////////////////////

echo "<h4>3) </h4>";

$x = rand(0, 10);
echo "<p></p>";
$y = rand(0, 10);
echo "<p>Числа x = $x, y = $y</p>";

function sum($x, $y){
	return $x+$y;
}
function raz($x, $y){
	return $x-$y;
}
function pr($x, $y){
	return $x*$y;
}
function del($x, $y){
	return ($y!=0)?$x/$y:"На 0 делить нельзя!";
}

function show($x, $y){
	echo "<p>Сумма чисел - ".sum($x, $y)."</p>";
	echo "<p>Разность чисел - ".raz($x, $y)."</p>";
	echo "<p>Произведение чисел - ".pr($x, $y)."</p>";
	echo "<p>Деление чисел - ".del($x, $y)."</p>";
}

show($x,$y);
//////////////////////////////////////////////////////////////

echo "<h4>4) </h4>";

$x = rand(0, 10);
echo "<p></p>";
$y = rand(0, 10);
echo "<p>Числа x = $x, y = $y</p>";

function mathOperation($arg1, $arg2, $operation){
	switch ($operation) {
		case '+':
			return sum($arg1, $arg2);
			break;
		case '-':
			return raz($arg1, $arg2);
			break;
		case '*':
			return pr($arg1, $arg2);
			break;
		case '/':
			return del($arg1, $arg2);
			break;
		default:
			return "Такой операции для чисел не выполняем...";
			break;
	}
}

echo "<p>Результат: ".mathOperation($x, $y, '/')."</p>";
//////////////////////////////////////////////////////////////

echo "<h4>5) </h4>";
//////////////////////////////////////////////////////////////

echo "<h4>6) </h4>";

$x = rand(0, 15);
echo "<p></p>";
$y = rand(-2, 8);
echo "<p>Число = $x, степень = $y</p>";

function power($val, $pow){
	if($val==0){
		return 0;
	}
	if($pow==0){
		return 1;
	}
	if($pow==1){
		return $val;
	}

	if($pow>0){
		return $val * power($val,$pow-1);
	}
	elseif ($pow <0) {
		return (1/$val) * power($val,$pow+1);
	}
	else{
		return 1;
	}
}
echo "<p>Результат: ".power($x,$y)."</p>";
//////////////////////////////////////////////////////////////

echo "<h4>7) </h4>";

$h = date('H');
$m = 05;//date('i');

function form($x,$y){
	if ($x==1 || $x==21 || $x==31 || $x==41 || $x==51){
		$rez=($y=='h')?'час':'минута';
	}
	elseif (($x>1 && $x<5) || ($x>21 && $x<25) || ($x>31 && $x<35) || ($x>41 && $x<45) || ($x>51 && $x<55)) {
		$rez=($y=='h')?'часа':'минуты';
	}
	else{
		$rez=($y=='h')?'часов':'минут';
	}

	return $rez;
}

echo "$h ".form($h,'h')." $m ".form($m,'m');
?>
