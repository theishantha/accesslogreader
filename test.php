<?php

$samples = array(

	0 => '175.157.199.39 - - [12/Jul/2018:09:58:08 +0530] "GET /wp-content/plugins/wp-job-manager/assets/js/jquery-deserialize/jquery.deserialize.js?ver=1.2.1 HTTP/1.1" 200 1832 "https://jobpal.lk/submit-resume/" "Mozilla/5.0 (Linux; Android 7.0; HUAWEI VNS-L31 Build/HUAWEIVNS-L31; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/59.0.3071.125 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/175.0.0.40.97;]"',

	1 => '175.157.199.39 - - [12/Jul/2018:09:58:08 +0530] "GET /wp-includes/js/wp-embed.min.js?ver=4.7.11 HTTP/1.1" 200 1187 "https://jobpal.lk/submit-resume/" "Mozilla/5.0 (Linux; Android 7.0; HUAWEI VNS-L31 Build/HUAWEIVNS-L31; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/59.0.3071.125 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/175.0.0.40.97;]"',

	2 => '69.162.124.231 - - [12/Jul/2018:09:58:12 +0530] "HEAD / HTTP/1.1" 301 249 "http://www.efuturetech.com" "Mozilla/5.0+(compatible; UptimeRobot/2.0; ',

	3 => '123.231.111.231 - - [12/Jul/2018:09:58:16 +0530] "POST /wp-admin/admin-ajax.php HTTP/1.1" 200 739 "https://jobpal.lk/wp-admin/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36"',

	4 => '112.134.122.131 - - [12/Jul/2018:09:58:25 +0530] "GET /wp-content/plugins/jetpack/modules/wpgroho.js?ver=4.7.11 HTTP/1.1" 200 925 "https://jobpal.lk/foreign_job_country/maldives/" "Mozilla/5.0 (iPhone; CPU iPhone OS 11_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.0 Mobile/15E148 Safari/604.1"',

	5 => '112.134.122.131 - - [12/Jul/2018:09:58:27 +0530] "GET /wp-content/plugins/jetpack/modules/sharedaddy/sharing.js?ver=5.0 HTTP/1.1" 200 4601 "https://jobpal.lk/foreign_job_country/maldives/" "Mozilla/5.0 (iPhone; CPU iPhone OS 11_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.0 Mobile/15E148 Safari/604.1"',

	6 => '112.134.122.131 - - [12/Jul/2018:09:58:26 +0530] "GET /wp-includes/js/wp-embed.min.js?ver=4.7.11 HTTP/1.1" 200 1187 "https://jobpal.lk/foreign_job_country/maldives/" "Mozilla/5.0 (iPhone; CPU iPhone OS 11_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.0 Mobile/15E148 Safari/604.1"',

	7 => '61.245.161.216 - - [12/Jul/2018:09:59:35 +0530] "GET /wp-content/plugins/easy-facebook-likebox/public/assets/popup/magnific-popup.css?ver=4.3.0 HTTP/1.1" 200 2374 "https://jobpal.lk/submit-resume/" "Mozilla/5.0 (Linux; Android 6.0.1; HTC_D530u Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/65.0.3325.109 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/179.0.0.44.83;]"'

);

foreach ($samples as $var)
{

	preg_match_all('/"(?:\\\\.|[^\\\\"])*"|\S+/', $var, $matches);
	print_r($matches);

}

?>