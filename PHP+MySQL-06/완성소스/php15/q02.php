<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
    // 공통 함수 모음 파일 참조
    include_once('../inc/helper.php');

    // 파라미터 받기. 값이 없을 경우 기본값을 FALSE로 설정함
    $user_name = post('user_name', FALSE);
    $user_email = post('user_email', FALSE);
    $user_tel = post('user_tel', FALSE);

    // 하나라도 입력되지 않은 값이 있다면 처음부터 다시 시작하도록 강제 이동
    if (!$user_name || !$user_email || !$user_tel) {
        redirect('q01.php', 
            '입력되지 않은 값이 있습니다. 다시 처음부터 다시 진행해 주세요.');
    }
?>
<!doctype html>
<html>
<head>
    <? include('../inc/head.php'); ?>
</head>
<body>
<div class='container'>
    <div class="page-header">
        <h1>2) 성별을 선택해 주세요.</h1>
    </div>
    <form method="post" action="q03.php">

        <!-- 이전 화면에서 넘어온 값에 대한 상태 유지 -->
        <input type='hidden' name='user_name' value='<?=$user_name?>'/>
        <input type='hidden' name='user_email' value='<?=$user_email?>'/>
        <input type='hidden' name='user_tel' value='<?=$user_tel?>'/>

        <!-- 설문항목 -->
        <div class="radio">
            <label>
                <input type="radio" name="gender" value="남자" checked>
                남자</label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="gender" value="여자">
                여자</label>
        </div>

        <button type="submit" class="btn btn-primary">다음단계</button>
        
    </form>
</div>
</body>
</html>
