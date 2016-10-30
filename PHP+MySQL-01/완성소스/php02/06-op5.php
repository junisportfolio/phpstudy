<?
	header("Content-Type: text/html; charset=UTF-8");
	
	$num1 = 123;
    $num2 = 456;

    // 비교연산에 대한 결과는 boolean값이다.
    $result1 = $num1 == $num2;	// FALSE --> 출력되지 않는다.
    $result2 = $num1 != $num2;	// TRUE --> 1이 출력된다.
    $result3 = $num1 > $num2;	// FALSE --> 출력되지 않는다.
    $result4 = $num1 <= $num2;	// TRUE --> 1이 출력된다.

    echo("<h1>result1=".$result1."</h1>");
    echo("<h1>result2=".$result2."</h1>");
    echo("<h1>result3=".$result3."</h1>");
    echo("<h1>result4=".$result4."</h1>");
?>
