<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
	function sayHello() {
		echo("안녕하세요. 웹 페이지");
	}

	function getMessage() {
		$msg = "Hello PHP";
		return $msg;
	}
?>
<!doctype html>
<html>
<head>
	<meta charset='utf-8' />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<title>PHP Example</title>
</head>
<body>
	<h1><? sayHello(); ?></h1>
	<h2>
		<?
			$msg = getMessage();
			echo($msg);
		?>
	</h2>
	<h3><?=getMessage()?></h3>
</body>
</html>