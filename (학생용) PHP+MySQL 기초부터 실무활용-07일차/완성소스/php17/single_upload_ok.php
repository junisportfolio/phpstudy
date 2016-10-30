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

    if (!$name || $size < 1) {
        // 파일의 이름이 없거나, 업로드된 파일 크기가 없는 경우
        echo("<h1>업로드 된 파일 없음</h1>");
    } else {
        echo("<h1>업로드 된 파일 정보</h1>");
        printf('name: %s<br />', $name);
        printf('type: %s<br />', $type);
        printf('size: %d<br />', $size);
        printf('tmp_name: %s<br />', $tmp_name);
    }

    /***** 파일이 저장될 폴더 준비하기 *****/
    // DocumentRoot 안에서의 저장폴더 경로를 구성한다.
    $upload_dir_uri = "/files/".date('Ymd', time());
    // DocumentRoot의 실제 경로를 얻어와서 전체 경로를 구성한다.
    $upload_dir_path = $_SERVER['DOCUMENT_ROOT'].$upload_dir_uri;

    // 폴더가 없으면 만든다.
    if (!is_dir($upload_dir_path)) {
        $dir_create = mkdir($upload_dir_path, 0777, true);

        if (!$dir_create) {
            die("폴더 생성 실패");
        }
    }

    /***** 파일이 저장될 경로명 준비하기 *****/
    // 파일의 확장자는 원본 이름에서 추출한다.
    $p = strrpos($name, '.');
    $l = strlen($name);
    $file_ext = strtolower(substr($name, $p, $l-$p));

    $file_name = '';        // 파일이 복사될 이름
    $upload_uri = '';       // 파일이 복사될 웹 상의 경로
    $upload_path = '';      // 파일이 복사될 전체 경로

    // 일단 무한루프
    for ($i=1; $i>0; $i++) {
        // 파일이 복사될 이름
        $file_name = time().'_'.rand(1000,9999).$file_ext;
        // 파일이 복사될 웹 상의 경로
        $upload_uri = $upload_dir_uri.'/'.$file_name;
        // 파일이 복사될 전체 경로
        $upload_path = $upload_dir_path.'/'.$file_name;

        // 같은 이름의 파일이 없다면 반복 종료
        if (!is_file($upload_path)) {
            break;
        }
    }

    /***** 파일복사하기 *****/
    $is_copy = copy($tmp_name, $upload_path);
    if ($is_copy) {
        chmod($upload_path, 0777);
        echo("<h1>업로드 성공</h1>");
        printf("서버상의 절대경로: %s<br />", $upload_path);
        printf("웹상의 절대경로: %s<br />", $upload_uri);
    } else {
        echo("<h1>업로드 실패</h1>");
    }
?>
