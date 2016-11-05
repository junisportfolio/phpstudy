<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
    include_once('../inc/helper.php');

    // 세션 유지 시간 설정 - 30분
    session_cache_expire(30);
    // 세션 데이터 사용의 시작을 알림
    session_start();

    $user_input = post('user_input', FALSE);

    $msg = '';
    if ($user_input != FALSE) {
        // 전송된 값이 있는 경우 저장 (혹은 덮어쓰기)
        $_SESSION['mysession'] = $user_input;
        $msg = '세션 저장 완료';
    } else {
        // 전송된 값이 없는 경우 세션 삭제
        unset($_SESSION['mysession']);
        $msg = '세션 삭제 완료';
    }

    redirect('01-session.php', $msg);
?>
