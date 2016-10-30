<?
	header("Content-Type: text/html; charset=UTF-8");

	$myarray = array('title' => 'PHP 연습하기',
					'content' => '배열과 배열 관련 함수');

	echo("<h1>".$myarray['title']."</h1>");
	echo("<h1>".$myarray['content']."</h1>");

	foreach($myarray as $key => $value) {
		echo("<h1>".$key.'='.$value."</h1>");
	}
?>
