<?
    header("Content-Type: text/html; charset=UTF-8");

    function get_browser_name() {
    	$browser_list = array('trident', 'msie', 'chrome', 'firefox', 'iphone', 
    					'ipad', 'android', 'safari', 'none');
		$browser_name = 'none';
		$user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);

		for ($i=0; $i<count($browser_list); $i++) {
			if (strpos($user_agent, $browser_list[$i]) == TRUE){ 
				$browser_name = $browser_list[$i];
				// 반복문을 강제로 중단시킴
				break;
			}
		}

		// IE11 이상 버전의 이름은 Trident로 지정된다.
		if ($browser_name == 'trident') {
			$browser_name = "MSIE";
		}

		return $browser_name;
    }

    $mybrowser = get_browser_name();
    echo("<h1>".$mybrowser."</h1>");
?>
