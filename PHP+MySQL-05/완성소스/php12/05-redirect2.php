<?
    header("Content-Type: text/html; charset=UTF-8");

    /**
     * 메시지를 화면에 표시한 후, 저정된 페이지로 강제 이동 시킨다.
     * $url - 이동할 페이지 경로. FALSE로 지정한 경우 이전 페이지로 이동
     * $msg - 화면에 표시할 메시지. FALSE인 경우 표시 안함. 
     */
    function redirect($url, $msg) {
        $html = "<!doctype html>";
        $html.= "<html>";
        $html.= "<head>";
        $html.= "<meta charset='utf-8'>";

        // 메시지가 전달된 경우
        if ($msg != FALSE) {
            $html.="<script type='text/javascript'>alert('".$msg."');</script>";
        }

        // 이동할 URL이 전달된 경우
        if ($url != FALSE) {
            $html.="<meta http-equiv='refresh' content='0; url=".$url."''>";
        } else {
            $html.="<script type='text/javascript'>history.back();</script>";
        }

        $html.= "</head>";
        $html.= "<body></body>";
        $html.= "</html>";
        echo($html);
        exit();
    }

    /** 다음의 내용을 차례대로 확인해 보세요. */
    // 뒤로가기(메시지 없음)
    //redirect(FALSE, FALSE);

    // 페이지 이동(메시지 없음)
    //redirect("http://www.naver.com", FALSE);

    // 뒤로가기(메시지 있음)
    //redirect(FALSE, "뒤로 갑니다.");

    // 페이지 이동(메시지 있음)
    redirect("http://www.naver.com", "네이버로 이동합니다.");
?>
