<? header("Content-Type: text/html; charset=UTF-8"); ?>
<!doctype html>
<html>
<head>
    <? include('../inc/head.php'); ?>
</head>
<body>
<div class='container'>
    <h1 class="page-header">팝업창</h1>
    <p>opener.php에 의해서 열려진 팝업창 입니다.</p>

    <form name="myform" method="post" action="child_close.php"
     class='form-inline'>
        <div class="checkbox">
            <label>
                <input type="checkbox" name='is_popup' value='Y'> 
                1분간 창 열지 않음</label>
        </div>
        <button type="submit" class="btn btn-default">닫기</button>
    </form>
</div>
</body>
</html>
