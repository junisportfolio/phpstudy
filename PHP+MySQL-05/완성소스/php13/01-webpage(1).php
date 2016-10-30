<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
	$msg_eng = "Hello Web Page";
	$msg_kor = "안녕하세요. 웹 페이지.";
?>
<!doctype html>
<html>
<head>
	<meta charset='utf-8' />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<title>PHP Example</title>
</head>
<body>
	<h1><? echo($msg_eng); ?></h1>
	<h1><?=$msg_kor?></h1>
</body>
</html>