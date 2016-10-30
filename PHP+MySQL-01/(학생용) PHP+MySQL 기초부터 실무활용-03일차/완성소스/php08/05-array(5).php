<?
	header("Content-Type: text/html; charset=UTF-8");

	$str = 'PHP,JSP,ASP';

	// 콤마(,)를 기준으로 문자열을 잘라내서, 배열로 리턴한다.
	$data = explode(',', $str);

	for ($i=0; $i<count($data); $i++) {
		echo("<h1>".$data[$i]."</h1>");
	}
?>
