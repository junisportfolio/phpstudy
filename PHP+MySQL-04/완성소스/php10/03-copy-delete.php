<?
    header("Content-Type: text/html; charset=UTF-8");

    $src = date('Ymd', time()).".txt";      // 복사할 파일 원본
    $dsc = date('Ymd', time())."_copy.txt"; // 복사될 파일

    $ok1 = copy($src, $dsc);    // 파일 복사하기
    if ($ok1) {
        printf("<h1>%s(을)를 %s(으)로 복사 성공</h1>", $src, $dsc);
    } else {
        printf("<h1>%s(을)를 %s(으)로 복사 실패</h1>", $src, $dsc);
    }

    $ok2 = chmod($dsc, 0777);   // 권한변경
    if ($ok2) {
        printf("<h1>%s 퍼미션 변경 성공</h1>", $dsc);
    } else {
        printf("<h1>%s 퍼미션 변경 실패</h1>", $dsc);
    }

    $ok3 = unlink($dsc);        // 파일삭제
    if ($ok3) {
        printf("<h1>%s 삭제 성공</h1>", $dsc);
    } else {
        printf("<h1>%s 삭제 실패</h1>", $dsc);
    }
?>

