<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
    include_once('../inc/helper.php');

    // 세션 유지 시간 설정 - 30분
    session_cache_expire(30);
    // 세션 데이터 사용의 시작을 알림
    session_start();

    $user_id = post('user_id', FALSE);
    $user_pw = post('user_pw', FALSE);

    if (!$user_id) { redirect(FALSE, '아이디를 입력하세요.'); }
    if (!$user_pw) { redirect(FALSE, '비밀번호를 입력하세요.'); }
    if ($user_id != 'phpuser') { redirect(FALSE, '가입된 사용자가 아닙니다.'); }
    if ($user_pw != '123qwe!@#') { redirect(FALSE, '비밀번호가 맞지 않습니다.'); }

    // 모든 조건이 통과 되었으므로 세션데이터 생성
    $_SESSION['user_id'] = $user_id;
    redirect('login.php', '안녕하세요. '.$user_id.'님');
?>
