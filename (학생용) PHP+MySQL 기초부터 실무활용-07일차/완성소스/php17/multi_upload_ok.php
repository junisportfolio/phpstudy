<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
    include_once("../inc/helper.php");

    // 일반 텍스트 데이터의 처리는 변함 없음
    $comment = post('comment', FALSE);
    echo("<h1>사용자가 입력한 내용</h1>");
    printf('comment: %s<br />', $comment);

    // 업로드 결과가 저장될 배열
    $upload_data = array();

    // $_FILES에 전달된 파일이름이 배열인 경우의 처리
    if (is_array($_FILES['myfile']['name'])) {
        for ($i=0; $i<count($_FILES['myfile']['name']); $i++) {
            $name = $_FILES['myfile']['name'][$i];
            $type = $_FILES['myfile']['type'][$i];
            $size = $_FILES['myfile']['size'][$i];
            $tmp_name = $_FILES['myfile']['tmp_name'][$i];
            // 함수 처리 결과를 배열에 저장한다.
            $upload_data[$i] = single_upload($name, $type, $size, $tmp_name);
        }
    }

    echo("<h1>업로드 결과</h1>");
    echo("<pre>");
    print_r($upload_data);
    echo("</pre>");
?>
