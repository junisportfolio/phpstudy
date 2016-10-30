<? 
	header("Content-Type: text/html; charset=UTF-8");

	$num = 100;
			
	// 덧샘에 대한 단항 연산자
	$num += 5;
	echo("<h1>".$num."</h1>");
			
	// 뺄셈에 대한 단항 연산자
	$num -= 3;
	echo("<h1>".$num."</h1>");
			
	// 곱셈에 대한 단항 연산자
	$num *= 5;
	echo("<h1>".$num."</h1>");
			
	// 나눗셈에 대한 단항 연산자
	$num /= 3;
	echo("<h1>".$num."</h1>");
			
	// 나머지에 대한 단항 연산자
	$num %= 3;
	echo("<h1>".$num."</h1>");
?>
