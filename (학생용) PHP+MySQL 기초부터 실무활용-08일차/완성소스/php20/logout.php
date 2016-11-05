<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
    include_once('../inc/helper.php');

    // 세션 유지 시간 설정 - 30분
    session_cache_expire(30);
    // 세션 데이터 사용의 시작을 알림
    session_start();

    // 모든 세션 파괴
    session_destroy();

    redirect('login.php', '안녕히 가세요.');
?>
