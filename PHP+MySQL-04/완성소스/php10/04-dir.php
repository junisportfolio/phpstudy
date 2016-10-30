<?
	header("Content-Type: text/html; charset=UTF-8");

	// 테스트를 위한 대상 폴더 이름
    $dir = getcwd().'/'.date('Ymd', time());

    // 존재여부 검사하기
    if (!file_exists($dir)) {
        printf("<h1>%s 폴더가 존재하지 않음</h1>", $dir);

        // 폴더 만들기
        $make_ok = mkdir($dir);

        if ($make_ok) {
            printf("<h1>%s 폴더 생성 성공</h1>", $dir);
        } else {
            printf("<h1>%s 폴더 생성 실패</h1>", $dir);
        }
    } else {
        printf("<h1>%s 폴더가 이미 존재함</h1>", $dir);

        // 폴더 삭제하기
        $remove_ok = rmdir($dir);

        if ($remove_ok) {
            printf("<h1>%s 폴더 삭제 성공</h1>", $dir);
        } else {
            printf("<h1>%s 폴더 삭제 실패</h1>", $dir);
        }
    }

    if (is_dir($dir)) {
        printf("<h1>%s (은)는 폴더임</h1>", $dir);
    } else {
        printf("<h1>%s (은)는 폴더가 아니거나 존재하지 않음</h1>", $dir);
    }
?>

