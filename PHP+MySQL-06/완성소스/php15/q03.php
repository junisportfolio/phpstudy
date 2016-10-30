<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
    // 공통 함수 모음 파일 참조
    include_once('../inc/helper.php');

    // 파라미터 받기. 값이 없을 경우 기본값을 FALSE로 설정함
    $user_name = post('user_name', FALSE);
    $user_email = post('user_email', FALSE);
    $user_tel = post('user_tel', FALSE);
    $gender = post('gender', FALSE);

    // 하나라도 입력되지 않은 값이 있다면 처음부터 다시 시작하도록 강제 이동
    if (!$user_name || !$user_email || !$user_tel || !$gender) {
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
        <h1>3) 취미를 선택해 주세요.</h1>
    </div>
    <form method="post" action="result.php">

        <!-- 이전 화면에서 넘어온 값에 대한 상태 유지 -->
        <input type='hidden' name='user_name' value='<?= $user_name ?>'/>
        <input type='hidden' name='user_email' value='<?= $user_email ?>'/>
        <input type='hidden' name='user_tel' value='<?= $user_tel ?>'/>
        <input type='hidden' name='gender' value='<?= $gender ?>'/>

        <!-- 설문항목 -->
        <div class="checkbox">
            <label>
                <input type="checkbox" name="hobby[]" value="음악감상">
                음악감상</label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="hobby[]" value="영화감상">
                영화감상</label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="hobby[]" value="게임">
                게임</label>
        </div>

        <button type="submit" class="btn btn-primary">결과보기</button>
        
    </form>
</div>
</body>
</html>
