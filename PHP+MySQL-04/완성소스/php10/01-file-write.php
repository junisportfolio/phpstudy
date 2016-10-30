<?
	header("Content-Type: text/html; charset=UTF-8");

	// 테스트를 위한 대상 파일 이름
    $fname = date('Ymd', time()).".txt";
    // 작성할 내용
    $data = "지금은 ".date("Y-m-d H:i:s", time())." 입니다.\n";

    // 파일 쓰기를 위한 파일핸들 얻기
    $f = fopen($fname, "a");

    if ($f) {
        // 다른 접속자가 사용하지 못하도록 파일 잠금
        if (flock($f, 2)) {
            fwrite($f, $data);     // 내용 작성
            flock($f, 3);          // 잠금 해제
            printf("<h1>%s 파일이 작성되었습니다.</h1>", $fname);
        } else {
            printf("<h1>%s 파일 작성에 실패했습니다.</h1>", $fname);
        }

        // 파일 핸들 닫기
        fclose($f);
    } else {
        printf("<h1>%s 파일 작성에 실패했습니다.</h1>", $fname);
    }
?>

