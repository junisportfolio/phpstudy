<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
    include_once("../inc/helper.php");

    // DOCUMENT_ROOT 하위 경로 형태로 이미지 파일의 경로를 지정한다.
    // --> 업로드 된 파일의 경로를 지정
    $orgin_uri = "/files/20150827/1440656744_1034.jpg";

    // 썸네일 이미지가 저장될 경로
    $thumb_uri = "/files/20150827/thumb_1440656744_1034.jpg";

    // 각 경로를 절대경로로 변경
    $orgin_path = $_SERVER['DOCUMENT_ROOT'].$orgin_uri;
    $thumb_path = $_SERVER['DOCUMENT_ROOT'].$thumb_uri;

    // 생성될 썸네일 이미지의 가로, 세로 크기
    $width = 320;
    $height = 320;

    // 원본파일이 존재하고, 생성될 파일이 없다면?
    if (file_exists($orgin_path) && !file_exists($thumb_path)) {
        // 썸네일 이미지를 생성한다.
        smart_resize_image($orgin_path,     // 원본 파일의 경로
                false,          // 이미지를 읽어들인 바이너리 문자열 (사용안함)
                $width,         // 가로크기
                $height,        // 세로크기
                false,          // 이미지의 비율을 유지할지 여부. false일 경우 crop처리함
                $thumb_path,    // 썸네일이 생성될 경로
                false,          // 원본을 삭제할지 여부 (true=삭제함)
                false,          // 리눅스 명령어를 사용할지 여부 (사용안함)
                100             // 이미지 퀄리티(%)
            );
    }
?>
<img src="<?=$thumb_uri?>" />
<p>원본파일의 경로: <?=$orgin_uri?></p>
<p>원본파일의 절대경로: <?=$orgin_path?></p>
<p>썸네일의 경로: <?=$thumb_uri?></p>
<p>썸네일의 절대경로: <?=$thumb_path?></p>
