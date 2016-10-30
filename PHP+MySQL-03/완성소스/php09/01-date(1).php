<?
	header("Content-Type: text/html; charset=UTF-8");

	// 테스트에 사용할 현재 시각을 timestamp로 얻기
    $now_time = time();
    echo("<h1>now_time=".$now_time."</h1>");

    // timestamp를 날짜 형식 문자열로 변환하기
    $today = date('Y-m-d H:i:s', $now_time);
    echo("<h1>today=".$today."</h1>");

    // 임의의 시간을 timestamp로 변환 - 시,분,초,월,일,년
    $target_time = mktime(13,55,32,12,24,2014);
    echo("<h1>target_time=".$target_time."</h1>");
    $target_day = date('Y-m-d H:i:s', $target_time);
    echo("<h1>target_day=".$target_day."</h1>");

    // 요일값을 의미하는 배열
    $days = array('일','월','화','수','목','금', '토');
    $day1 = date('w', $now_time);
    $day2 = date('w', $target_time);
    echo("<h1>day1=".$days[$day1]."</h1>");
    echo("<h1>day2=".$days[$day2]."</h1>");
?>







