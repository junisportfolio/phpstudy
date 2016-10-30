<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
	$list = array('PHP', 'JSP', 'ASP');
?>
<!doctype html>
<html>
<head>
	<meta charset='utf-8' />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<title>PHP Example</title>
</head>
<body>
	<ul>
		<?
			for ($i=0; $i<count($list); $i++) {
				echo("<li>".$list[$i]."</li>");
			}
		?>
	</ul>
	<hr />
	<ul>
		<? for ($i=0; $i<count($list); $i++) { ?>
		<li><?=$list[$i]?></li>
		<? } ?>
	</ul>
</body>
</html>