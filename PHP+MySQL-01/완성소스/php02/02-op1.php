<?
	header("Content-Type: text/html; charset=UTF-8");
	
	// 사칙연산
	$num1 = 100 + 30;
	$num2 = 100 - 30;
	$num3 = 100 * 30;
	$num4 = 100 / 30;
	$num5 = 100 % 30;
	// 연산자 우선순위
	$num6 = 100 + 30 * (2 - 1);

	// 결과출력
	echo("<h1>num1=$num1</h1>");
	echo("<h1>num2=$num2</h1>");
	echo("<h1>num3=$num3</h1>");
	echo("<h1>num4=$num4</h1>");
	echo("<h1>num5=$num5</h1>");
	echo("<h1>num6=$num6</h1>");
?>
