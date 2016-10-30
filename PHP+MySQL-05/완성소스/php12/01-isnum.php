<?
    header("Content-Type: text/html; charset=UTF-8");

    include_once('functions.php');

    $value1 = "123.456";
    $value2 = "abcdef";

    // 문자열이 숫자 형식인지 검사한다.
    if (is_numeric($value1)) {
        // 문자열을 정수형태로 변환한다.
        $number1 = intval($value1);
        print_h1(sum($number1, 100));
    } else {
        print_h1($value1."(은)는 숫자가 아닙니다.");
    }

    // 문자열이 숫자 형식인지 검사한다.
    if (is_numeric($value2)) {
        // 문자열을 정수형태로 변환한다.
        $number2 = intval($value2);
        print_h1(sum($number2, 100));
    } else {
        print_h1($value2."(은)는 숫자가 아닙니다.");
    }
?>
