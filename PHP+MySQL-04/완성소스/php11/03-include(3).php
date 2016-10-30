<?
    header("Content-Type: text/html; charset=UTF-8");

    $num = 100;
    echo("<h1>num=".$num."</h1>");

    include_once('inc2.php');

    $num++;
    echo("<h1>num=".$num."</h1>");
?>
