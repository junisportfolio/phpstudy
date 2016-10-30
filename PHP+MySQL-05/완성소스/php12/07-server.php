<?
    header("Content-Type: text/html; charset=UTF-8");

    function print_h1($value) {
    	echo("<h1>".$value."</h1>");
    }

    // 현재 사이트가 위치한 서버상의 위치
    print_h1("<h1>".$_SERVER['DOCUMENT_ROOT']);

    // 현재 접속자의 환경
	print_h1($_SERVER['HTTP_USER_AGENT']);

	// 접속자의 IP주소
	print_h1($_SERVER['REMOTE_ADDR']);

	// 사이트의 도메인
	print_h1($_SERVER['SERVER_NAME']);

	// 사이트의 포트 번호 
	print_h1($_SERVER['SERVER_PORT']);

	// 현재 페이지의 주소(도메인 제외)
	print_h1($_SERVER['REQUEST_URI']);

	// 현재 페이지의 주소에서 도메인과 넘겨지는 값 제외 
	print_h1($_SERVER['PHP_SELF']);
?>
