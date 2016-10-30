<?
    header("Content-Type: text/html; charset=UTF-8");

    // 변수의 존재 여부를 검사
    $name = 'PHP-DEVELOPER';
    $data['name'] = 'PHP-USER';
    $chk1 = isset($name);
    $chk2 = isset($age);
    $chk3 = isset($data['name']);
    $chk4 = isset($data['age']);

    if ($chk1 == TRUE) {
        echo('<h1>name값이 존재합니다.</h1>');
    } else {
        echo('<h1>name값이 존재하지 않습니다.</h1>');
    }

    if ($chk2 == TRUE) {
        echo('<h1>age값이 존재합니다.</h1>');
    } else {
        echo('<h1>age값이 존재하지 않습니다.</h1>');
    }

    if ($chk3 == TRUE) {
        echo('<h1>data배열 안에는 name값이 존재합니다.</h1>');
    } else {
        echo('<h1>data배열 안에는 name값이 존재하지 않습니다.</h1>');
    }

    if ($chk4 == TRUE) {
        echo('<h1>data배열 안에는 age값이 존재합니다.</h1>');
    } else {
        echo('<h1>data배열 안에는 age값이 존재하지 않습니다.</h1>');
    }
?>
