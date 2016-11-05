<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
    // 세션 유지 시간 설정 - 30분
    session_cache_expire(30);
    // 세션 데이터 사용의 시작을 알림
    session_start();
?>
<!doctype html>
<html>
<head>
    <? include('../inc/head.php'); ?>
</head>
<body>
<div class='container'>
    <?
        // 저장되어 있는 세션 데이터의 출력 --> 최초 실행시 데이터 없음
        if (isset($_SESSION['mysession'])) {
            echo('<h1>mysession=' . $_SESSION['mysession'] . "</h1>");
        } else {
            echo('<h1>mysession값 없음</h1>');
        }
    ?>
    <form name="myform" method="post" action="02-session_save.php">
        <div class="form-group">
            <label for="user_input">세션저장하기</label>
            <input type="text" name="user_input" id="user_input" 
                class="form-control"/>
        </div>
        <button type="submit" class="btn btn-primary">세션저장</button>
    </form>
</div>
</body>
</html>
