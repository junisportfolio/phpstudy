<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
    // 공통 함수 모음 파일 참조
    include_once('../inc/helper.php');

    // 파라미터 받기. 값이 없을 경우 기본값을 FALSE로 설정함
    $user_name = post('user_name', FALSE);
    $user_email = post('user_email', FALSE);
    $user_tel = post('user_tel', FALSE);
    $gender = post('gender', FALSE);
    $hobby = post('hobby', FALSE);

    // 하나라도 입력되지 않은 값이 있다면 처음부터 다시 시작하도록 강제 이동
    if (!$user_name || !$user_email || !$user_tel || !$gender || !$hobby) {
        redirect('q01.php', 
            '입력되지 않은 값이 있습니다. 다시 처음부터 다시 진행해 주세요.');
    }

    // 취미(체크박스)는 배열이기 때문에 문자열로 합쳐야 출력 가능함.
    $hobby_str = implode(", ", $hobby);
?>
<!doctype html>
<html>
<head>
    <? include('../inc/head.php'); ?>
</head>
<body>
<div class='container'>
    <div class="page-header">
        <h1>결과보기</h1>
    </div>
    <div>
        <!-- bootstrap list-group -->
        <ul class="list-group">
            <li class="list-group-item">
                <h4 class="list-group-item-heading">이름</h4>
                <p class="list-group-item-text"><?=$user_name?></p>
            </li>
            <li class="list-group-item">
                <h4 class="list-group-item-heading">이메일</h4>
                <p class="list-group-item-text"><?=$user_email?></p>
            </li>
            <li class="list-group-item">
                <h4 class="list-group-item-heading">연락처</h4>
                <p class="list-group-item-text"><?=$user_tel?></p>
            </li>
            <li class="list-group-item">
                <h4 class="list-group-item-heading">성별</h4>
                <p class="list-group-item-text"><?=$gender?></p>
            </li>
            <li class="list-group-item">
                <h4 class="list-group-item-heading">취미</h4>
                <p class="list-group-item-text"><?=$hobby_str?></p>
            </li>
        </ul>
    </div>
</div>
</body>
</html>
