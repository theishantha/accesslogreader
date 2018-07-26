<?php



//file init
$ac_arr = file('a.log');

//getiing for array
$astring = join("<br>", $ac_arr);


$astring = preg_replace("/(\n|\r|\t)/", "", $astring);

// ([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+) ip capturing
$records = preg_split("/([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+)/", $astring, -1, PREG_SPLIT_DELIM_CAPTURE);

$sizerecs = sizeof($records);

// now split into records
$i = 1;
$each_rec = 0;
while($i<$sizerecs) {
  $ip = $records[$i];
  $all = $records[$i+1];

  // parse other fields
  // timestamp
  preg_match("/\[(.+)\]/", $all, $match);
  $access_time = $match[1];
  $all = str_replace($match[1], "", $all);
  // HTTP Version
  preg_match("/\"[A-Z]{3,7} (.[^\"]+)/", $all, $match);
  $http = $match[1];
  $link = explode(" ", $http);
  $all = str_replace("\"[A-Z]{3,7} $match[1]\"", "", $all);

  // success code 
  // there is a problem {it it getting ip characters}
  preg_match("/([0-9]{3})/", $all, $match);
  $success_code = $match[1];
  $all = str_replace($match[1], "", $all);

  preg_match("/\"(.[^\"]+)/", $all, $match);
  $ref = $match[1];
  $all = str_replace("\"$match[1]\"", "", $all);
  
  preg_match("/\"(.[^\"]+)/", $all, $match);
  $browser = $match[1];
  $all = str_replace("\"$match[1]\"", "", $all);
  preg_match("/([0-9]+\b)/", $all, $match);
  $bytes = $match[1];
  $all = str_replace($match[1], "", $all);


  print("<br>IP: $ip <br>Access Time: $access_time<br>Page: $link[0]<br>Type: $link[1]<br>Success Code: $success_code<br>Bytes Transferred: $bytes<br>Referer: $ref <br>Browser: $browser<hr>");

  // to next record
 $i = $i + 2;
 $each_rec++;
}

?>
