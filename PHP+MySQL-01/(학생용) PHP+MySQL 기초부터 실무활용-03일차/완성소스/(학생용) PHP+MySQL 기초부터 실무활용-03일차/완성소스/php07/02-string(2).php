<?
	header("Content-Type: text/html; charset=UTF-8");

	$url = "http://www.itpaper.co.kr/index.php";
	echo("<h1>문자열 : ".$url."</h1>");

	// 도메인 얻기
	$p1 = mb_strpos($url, "/", 7);
	$domain = mb_substr($url, 7, $p1-7);
	echo("<h1>도메인: ".$domain."</h1>");

	// 파일이름 얻기
	$p2 = mb_strrpos($url, "/");
	$p3 = mb_strrpos($url, ".");
	$file = mb_substr($url, $p2+1, $p3-($p2+1));
	echo("<h1>파일이름: ".$file."</h1>");

	// 확장자 얻기
	$p4 = mb_strrpos($url, ".");
	$ext = mb_substr($url, $p4+1);
	echo("<h1>확장자: ".$ext."</h1>");
?>
