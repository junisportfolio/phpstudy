<?
	header("Content-Type: text/html; charset=UTF-8");

	/** 1) 다양한 형식의 변수 만들기 */
	// 정수형식
	$num1 = 12345;
	// 실수형식
	$num2 = 3.14;
	// 문자열 형식 (쌍따옴표나 홑따옴표를 구분없이 사용한다.)
	$msg1 = "Hello PHP";
	$msg2 = '안녕하세요. PHP';
	// boolean 형식
	$isMan = true;

	/** 2) 브라우저에 출력하기 */
	// 점(.)은 문자열과 변수를 하나의 문장으로 연결해 주는 연산자.
	echo("<h2>num1=".$num1."</h2>");
	echo("<h2>num2=".$num2."</h2>");
	// 변수가 문자열 안에 포함된 경우 값으로 변환된다.
	echo("<h2>msg1=$msg1</h2>");
	echo("<h2>msg2=$msg2</h2>");
	// boolean값의 출력
	echo("<h2>isMan=".$isMan."</h2>");
?>
