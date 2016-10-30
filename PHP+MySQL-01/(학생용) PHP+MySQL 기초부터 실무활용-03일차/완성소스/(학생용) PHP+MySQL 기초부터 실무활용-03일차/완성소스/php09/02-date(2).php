<?
	header("Content-Type: text/html; charset=UTF-8");

	// 현재 시점
	$now_time = time();

	// 30일 후의 날짜 구하기
	$add30day = date("Y-m-d", $now_time + (60*60*24*30));
	printf("<h1>add30day=%s</h1>", $add30day);

	// 1년 전의 날짜 구하기
	$before1year = date("Y-m-d", $now_time - (60*60*24*365));
	printf("<h1>before1year=%s</h1>", $before1year);
?>









