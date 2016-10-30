<?
    header("Content-Type: text/html; charset=UTF-8");

    $value = "안녕하세요.";
    $number = 1234567890;

    // 값의 형태를 변경하는 함수들
    $enc = urlencode($value);
    $dec = urldecode($enc);
    $format = number_format($number);

    echo("<h1>".$enc."</h1>");
    echo("<h1>".$dec."</h1>");
    echo("<h1>".$format."</h1>");
?>
