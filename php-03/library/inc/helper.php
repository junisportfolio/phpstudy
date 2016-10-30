<?

/* Get Post */
/**
 * HTTP GET 파라미터 값을 수신한다.
 * @param $key - 파라미터 이름
 * @param $def - 값이 없을 경우 사용될 기본값.
 */

function get($key, $def)
{
    //일단 기본값으로 변수 생성
    $value = $def;

    //$key를 이름으로 하는 파라미터가 존재한다면
    if(isset($_GET[$key])){
        //리턴할 변수를 HTTP GET 파라미터로 재설정
        $value = $_GET[$key];

        //배열이 아니라면?
        if(!is_array($value)){
            //앞 뒤 공백 제거
            $value = trim($value);

            //길이가 1보다 작다면
            if(mb_strlen($value) < 1 ){
                $value = $def;
            }
        }
    }

    // 최종 값 리턴
    return $value;
}

function post($key, $def)
{
    //일단 기본값으로 변수 생성
    $value = $def;

    //$key를 이름으로 하는 파라미터가 존재한다면
    if(isset($_POST[$key])){
        //리턴할 변수를 HTTP GET 파라미터로 재설정
        $value = $_POST[$key];

        //배열이 아니라면?
        if(!is_array($value)){
            //앞 뒤 공백 제거
            $value = trim($value);

            //길이가 1보다 작다면
            if(mb_strlen($value) < 1 ){
                $value = $def;
            }
        }
    }

    // 최종 값 리턴
    return $value;
}


/* Redirect */
/**
 * 메시지를 화면에 표시한 후, 저정된 페이지로 강제 이동 시킨다.
 * @param $url - 이동할 페이지 경로. FALSE로 지정한 경우 이전 페이지로 이동
 * @param $msg - 화면에 표시할 메시지. FALSE인 경우 표시 안함.
 */
function redirect($url, $msg)
{
    $html = "<!doctype html>";
    $html .= "<html>";
    $html .= "<head>";
    $html .= "<meta charset='utf-8'>";

    // 메시지가 전달된 경우
    if ($msg != FALSE) {
        $html .= "<script type='text/javascript'>alert('" . $msg . "');</script>";
    }

    // 이동할 URL이 전달된 경우
    if ($url != FALSE) {
        $html .= "<meta http-equiv='refresh' content='0; url=" . $url . "''>";
    } else {
        $html .= "<script type='text/javascript'>history.back();</script>";
    }

    $html .= "</head>";
    $html .= "<body></body>";
    $html .= "</html>";
    echo($html);
    exit();
}


function send_mail($sender, $sender_name, $receiver, $receiver_name, $subject, $content)
{
    //리턴할 결과값
    $is_mail_send_ok = FALSE;

    $inc_dir = dirname(__FILE__);
    include_once ($inc_dir.'/PHPMailer/PHPMailerAutoload.php');

    //메일 발송 기능 초기화
    //메일 발송을 위한 Gmail 서버 연동정보 설정
    $mail = new PHPMailer();
    $mail->CharSet = "utf-8";
    $mail->Encoding = "base64";
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = "true";
    $mail->Username = "junishop@gmail.com";
    $mail->Password = "coke9049";
    $mail->SMTPSecure = "ssl";
    $mail->Port = "465";
    $mail->isHTML(true);


    //보내는 사람 정보 설정
    $mail->Form = $sender;
    $mail->FormName = $sender_name;
    //받는 사람 정보 설정
    $mail->addAddress($receiver, $receiver_name);

    //제목과 내용
    $mail->Subject = $subject;
    $mail->Body = $content;

    //발송 및 발송 결과 처리
    $is_mail_send_ok = $mail->send();

    return $is_mail_send_ok;
}





?>