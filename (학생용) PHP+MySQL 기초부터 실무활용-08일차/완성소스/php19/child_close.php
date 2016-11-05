<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
    // 공통 함수 모음 참조
    include_once('../inc/helper.php');
    // 체크박스의 값 받기.
    // --> 체크가 되지 않았다면 기본값으로 설정한 'N'가 리턴됨
    $is_popup = post('is_popup', 'N');
    // 체크박스의 값을 60초 동안 쿠키로 저장
    set_cookie('is_popup', $is_popup, 60);
?>
<script type='text/javascript'>
    // Javascript 현재 창 닫기
    window.close();
</script>
