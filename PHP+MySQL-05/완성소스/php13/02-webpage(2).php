<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
	$color = 'red';
?>
<!doctype html>
<html>
<head>
	<meta charset='utf-8' />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<title>PHP Example</title>
</head>
<body>
	<?
		if ($color == 'red') {
			echo("<h1 style='color: red'>Hello PHP</h1>");
		} else {
			echo("<h1 style='color: blue'>Hello PHP</h1>");
		}
	?>
	<hr />
	<? if ($color == 'red') { ?>
	<h1 style='color: red'>Hello PHP</h1>
	<? } else { ?>
	<h1 style='color: blue'>Hello PHP</h1>
	<? } ?>
</body>
</html>