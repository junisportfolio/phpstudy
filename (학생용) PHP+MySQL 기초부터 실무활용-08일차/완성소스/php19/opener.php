<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
    include_once('../inc/helper.php');
    $is_popup = get_cookie('is_popup', 'N');
?>
<!doctype html>
<html>
<head>
    <? include('../inc/head.php'); ?>

    <!-- 쿠키값의 존재 여부에 따른 팝업창 열기 -->
    <? if ($is_popup == 'N') { ?>
    <script type='text/javascript'>
        // javascript 팝업창 열기
        window.open('child.php', 'child-win', 
            'width=350,height=300,scrollbars=no,toolbar=no,resizable=no');
    </script>
    <? }?>
</head>
<body>
<div class='container'>
    <h1 class="page-header">팝업창 열기</h1>
    <p>이 페이지는 저장된 쿠키값이 있을 경우 팝업을 열지 않습니다.</p>
</div>
</body>
</html>
