<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
    include_once('../inc/helper.php');

    // 세션 유지 시간 설정 - 30분
    session_cache_expire(30);
    // 세션 데이터 사용의 시작을 알림
    session_start();

    // 세션값 가져오기. 값이 없을 경우 FALSE가 리턴됨
    $session_user_id = get_session('user_id', FALSE);
?>
<!doctype html>
<html>
<head>
    <? include_once('../inc/head.php'); ?>
</head>
<body>
<div class='container'>
<?
    // 저장된 세션 데이터가 없는 경우 로그인 폼 보여주기
    if ($session_user_id == FALSE) {
?>
    <h1 class='page-header'>로그인</h1>
    <form name="myform" method="post" action="login_ok.php" 
        class='form-inline'>
        <div class="form-group">
            <input type="text" name="user_id" id="user_id" 
                class="form-control" placeholder='user id'/>
        </div>
        <div class="form-group">
            <input type="password" name="user_pw" id="user_pw" 
                class="form-control" placeholder='password'/>
        </div>
        <button type="submit" class="btn btn-primary">로그인</button>
    </form>
<?
    } else {
?>
    <h1 class='page-header'>로그아웃</h1>
    <div>
        <p>안녕하세요. <?= $session_user_id ?>님</p>
        <a href='logout.php' class="btn btn-primary">로그아웃</a>
    </div>
<?
    } // end if
?>
</div>
</body>
</html>
