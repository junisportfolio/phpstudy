<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<!doctype html>
<html>
<head>
    <?include '../inc/head.php'; ?>
</head>
<body>
<div class='container'>
    <?
        // 저장되어 있는 쿠키 데이터의 출력 --> 최초 실행시 데이터 없음
        if (isset($_COOKIE['mycookie'])) {
            echo('<h1>mycookie='.urldecode($_COOKIE['mycookie']).'</h1>');
        } else {
            echo('<h1>mycookie값 없음</h1>');
        }
    ?>
    <form method="post" action="02-cookie_save.php">
        <div class="form-group">
            <label for="user_input">쿠키저장하기</label>
            <input type="text" name="user_input" id="user_input" 
                class="form-control"/>
        </div>
        <button type="submit" class="btn btn-primary">쿠키저장</button>
    </form>
</div>
</body>
</html>
