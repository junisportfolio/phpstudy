<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
    include_once("../inc/helper.php");

    // 일반 텍스트 데이터의 처리는 변함 없음
    $comment = post('comment', FALSE);
    echo("<h1>사용자가 입력한 내용</h1>");
    printf('comment: %s<br />', $comment);

    // 업로드 결과가 저장될 배열
    $upload_data = do_upload('myfile');

    echo("<h1>업로드 결과</h1>");
    echo("<pre>");
    print_r($upload_data);
    echo("</pre>");
?>
