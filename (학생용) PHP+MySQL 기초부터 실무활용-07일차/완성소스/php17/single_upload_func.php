<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
    include_once("../inc/helper.php");

    /*****  텍스트 형태의 데이터 받기 *****/
    // 일반 텍스트 데이터의 처리는 변함 없음
    $comment = post('comment', FALSE);
    echo("<h1>사용자가 입력한 내용</h1>");
    printf('comment: %s<br />', $comment);

    /***** 임시폴더에 업로드된 파일의 정보 얻기 *****/
    $name = $_FILES['myfile']['name'];          // 파일의 원본 이름
    $type = $_FILES['myfile']['type'];          // 파일의 형식
    $size = $_FILES['myfile']['size'];          // 파일의 용량
    $tmp_name = $_FILES['myfile']['tmp_name'];  // 서버에 업로드된 임시파일 이름

    /***** 파일이 저장될 폴더 준비하기 *****/
    $upload_data = single_upload($name, $type, $size, $tmp_name);

    if (!$upload_data) {
        echo("<h1>업로드 실패</h1>");
    } else {
        echo("<h1>업로드 결과</h1>");
        echo("<pre>");
        print_r($upload_data);
        echo("</pre>");
    }
?>
