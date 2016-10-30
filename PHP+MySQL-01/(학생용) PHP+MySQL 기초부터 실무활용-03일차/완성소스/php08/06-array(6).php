<?
	header("Content-Type: text/html; charset=UTF-8");

	function print_array($arr) {
		echo('<pre>');
		print_r($arr);
		echo('</pre>');
	}

	$card1 = array(1,3,5);
	$card2 = array(2,4);

	if(is_array($card1) && is_array($card2)) {
		$result = array_merge($card1, $card2);
		print_array($result);
		sort($result);
		print_array($result);
		rsort($result);
		print_array($result);
	}
?>
