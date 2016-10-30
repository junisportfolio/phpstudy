<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
    include_once("../inc/helper.php");

    // 원본경로
    $orgin_uri = "/files/20150827/1440656744_1034.jpg";
    $orgin_path = $_SERVER['DOCUMENT_ROOT'].$orgin_uri;

    // 크롭이미지 경로
    $crop_uri = "/files/20150827/crop_1440656744_1034.jpg";
    $crop_path = $_SERVER['DOCUMENT_ROOT'].$crop_uri;

    // 리사이즈 이미지 경로
    $resize_uri = "/files/20150827/resize_1440656744_1034.jpg";
    $resize_path = $_SERVER['DOCUMENT_ROOT'].$resize_uri;

    // 생성될 썸네일 이미지의 가로, 세로 크기
    $width = 320;
    $height = 320;

    // 이미지 축소판 생성하기
    image_crop($orgin_path, $crop_path, $width, $height);
    image_resize($orgin_path, $resize_path, $width, $height);
?>
<img src="<?=$crop_uri?>" />
<img src="<?=$resize_uri?>" />