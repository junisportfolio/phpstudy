<?
	header("Content-Type: text/html; charset=UTF-8");
	
	$a1 = 100;
	$x1 = 1;
	$y1 = $a1 + $x1++;
			
	// x1값과 y1값의 결과 확인
	echo("<h1>x1=".$x1."</h1>");
	echo("<h1>y1=".$y1."</h1>");
			
	$a2 = 100;
	$x2 = 1;
	$y2 = $a2 + ++$x2;
			
	// x2값과 y2값의 결과 확인
	echo("<h1>x1=".$x2."</h1>");
	echo("<h1>x2=".$y2."</h1>");
?>
