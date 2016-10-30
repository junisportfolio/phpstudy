<?
    header("Content-Type: text/html; charset=UTF-8");

    // 테스트를 위한 대상 파일 이름
    $fname = date('Ymd', time()).".txt";
    // 읽은 내용을 저장하기 위한 변수
    $read = '';

    // 파일이 존재할 경우에 읽는다.
    if (file_exists($fname)) {
        $f = fopen($fname, "r");    // 파일 읽기를 위한 파일핸들 얻기
        if ($f) {
            $read = fread($f, filesize($fname)); // 파일의 내용을 읽는다.
            fclose($f); // 파일 핸들 닫기
        } else {
            printf("<h1>%s 파일 읽기에 실패했습니다.</h1>", $fname);
        }
    }

    // 읽은 내용이 존재할 경우 내용을 출력하기
    if ($read != '') {
        $content = nl2br(htmlspecialchars($read));
        echo($content);
    } else {
        echo("읽은 내용이 없습니다.");
    }
?>

