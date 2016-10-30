<? header("Content-Type: text/html; charset=UTF-8"); ?>
<!doctype html>
<html>
<head>
    <? include_once("../inc/head.php"); ?>
</head>
<body>
<div class="container">
    <h1 class="page-header">파일업로드</h1>
    <form method="post" action="multi_upload_func.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="myfile">파일선택</label>
            <input type="file" name="myfile[]" id="myfile" class="form-control" multiple />
        </div>
        <div class="form-group">
            <label for="comment">파일설명</label>
            <input type="text" id="comment" name="comment" class="form-control" />
        </div>
        <button type="submit" class="btn btn-primary"> Submit</button>
    </form>
</div>
</body>
</html>



