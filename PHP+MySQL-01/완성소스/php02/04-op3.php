<? 
	header("Content-Type: text/html; charset=UTF-8");

	$plus_num = 1;
	$plus_num = $plus_num + 1;
	$plus_num += 1;
	$plus_num++;
	++$plus_num;
			
	// plus_num의 결과는?
	echo("<h1>plus_num=".$plus_num."</h1>");
			
	$minus_num = 4;
	$minus_num = $minus_num - 1;
	$minus_num -= 1;
	$minus_num--;
	--$minus_num;
			
	// minus_num의 결과는?
	echo("<h1>minus_num=".$minus_num."</h1>");
?>