<?
	header("Content-Type: text/html; charset=UTF-8");

	// 빈 배열의 생성
	$myarray = array();

	// 반복문을 통하여 배열의 칸을 확장하고 값을 저장
	for ($i=0; $i<5; $i++) {
		$myarray[$i] = $i*10;
	}

	// 배열의 크기를 조회한다.
	$size = count($myarray);
	echo("<h1>배열의 길이: ".$size."</h1>");

	// 반복문을 배열의 길이만큼 반복하도록 설정하고 값을 출력
	for ($i=0; $i < $size; $i++) {
		echo("<p>".$myarray[$i]."</p>");
	}
?>
