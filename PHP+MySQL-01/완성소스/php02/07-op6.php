<?
	header("Content-Type: text/html; charset=UTF-8");
	
    $a = 100;
    $b = 200;
    $x = 5;
    $y = 3;
    
    // 논리연산에 대한 결과는 boolean형이다.
    $result1 = $a != $b || $a == $b;
    $result2 = $a < $b || $x > $y;
    $result3 = $a < $b || $x < $y;
    $result4 = $a > $b || $x > $y;
    $result5 = $a > $b || $x < $y;
    
    echo("<h1>result1=".$result1."</h1>");
    echo("<h1>result2=".$result2."</h1>");
    echo("<h1>result3=".$result3."</h1>");
    echo("<h1>result4=".$result4."</h1>");
    echo("<h1>result5=".$result5."</h1>");
    
    // $값 끼리는 논리연산이 가능하다.
    $r1 = $a >= $b;
    $r2 = $x >= $y;
    $result6 = $r1 && $r2;
    $result7 = $r1 || $r2;
    echo("<h1>result6=".$result6."</h1>");
    echo("<h1>result7=".$result7."</h1>");

    $success = true;
    $fail = !$success;
    echo("<h1>fail=".$fail."</h1>");
?>
