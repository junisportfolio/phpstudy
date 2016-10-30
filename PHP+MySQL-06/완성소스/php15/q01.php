<? header("Content-Type: text/html; charset=UTF-8"); ?>
<!doctype html>
<html>
<head>
    <? include('../inc/head.php'); ?>
</head>
<body>
<div class='container'>
    <div class="page-header">
        <h1>1) 개인정보를 입력해 주세요.</h1>
    </div>
    <form method="post" action="q02.php">
        <div class="form-group">
            <label for="user_name">이름</label>
            <input type="text" name="user_name" id="user_name" 
                class="form-control"/>
        </div>

        <div class="form-group">
            <label for="user_email">이메일</label>
            <input type="email" name="user_email" id="user_email" 
                class="form-control"/>
        </div>

        <div class="form-group">
            <label for="user_tel">연락처</label>
            <input type="tel" name="user_tel" id="user_tel" 
                class="form-control"/>
        </div>

        <button type="submit" class="btn btn-primary">다음단계</button>
    </form>
</div>
</body>
</html>
