<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
    include_once('../inc/helper.php');

    $user_input = post('user_input', FALSE);

    $msg = '';
    if ($user_input != FALSE) {
        // 전송된 값이 있는 경우 저장 (혹은 덮어쓰기)
        setcookie('mycookie', urlencode($user_input), time() + 60, '/');
        $msg = '쿠키 저장 완료';
    } else {
        // 전송된 값이 없는 경우 쿠키 삭제
        setcookie('mycookie', '', time() - 60, '/');
        $msg = '쿠키 삭제 완료';
    }

    redirect('01-cookie.php', $msg);
?>
