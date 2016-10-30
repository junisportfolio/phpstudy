<?
    header("Content-Type: text/html; charset=UTF-8");

    // 값을 변경해서 결과를 확인하세요.
    $num = 100;

    if ($num > 300) {
        echo('<h1>값이 너무 큽니다.</h1>');
        exit();
    } else if ($num < 100) {
        die('<h1>값이 너무 작습니다.</h1>');
    }

    echo('<h1>지정된 값은 '.$num.'입니다.</h1>');
?>
