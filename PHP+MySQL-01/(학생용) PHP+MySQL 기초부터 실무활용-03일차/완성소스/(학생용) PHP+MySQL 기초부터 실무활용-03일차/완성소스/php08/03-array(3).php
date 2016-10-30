<?
	header("Content-Type: text/html; charset=UTF-8");

	// 2차 배열의 생성
	$myarray = array(
			array("주영아", "JAVA", "PHP"),
			array("이광호", "Android", "Wordpress")
		);

	// myarray.length 는 2차 배열의 줄(행) 수
	for ($i=0; $i<count($myarray); $i++) {
		// myarray[i].length 는 i번째 줄의 칸(열) 수
		for ($j=0; $j<count($myarray[$i]); $j++) {
			echo("<h1>".$myarray[$i][$j]."</h1>");
		}
	}
?>
