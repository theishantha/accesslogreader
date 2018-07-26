<?php 

$accesslog = file('access.log');

$ac_arr = array($accesslog);
$astring = join(" ", $ac_arr);

print_r($ac_arr);

// print_r(array_values($ac_arr));
// print_r(array_keys($ac_arr));

// $sdarr = array_map($ac_arr);
// // print_r($sdarr);

// $sdarray = array_column($ac_arr,0,*);
// print_r($sdarray);

// $userAgent = array($astring);
// sort($userAgent);
// foreach ($userAgent as $key => $val) {
//     echo "userAgent[" . $key . "] = " . $val . "\n";
// }





?>