<?php

$curl_handle = curl_init();
curl_setopt($curl_handle, CURLOPT_URL, 'http://wvbr.com/get_live365.php5');
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
$buffer = curl_exec($curl_handle);
curl_close($curl_handle);

if($buffer){
  echo $buffer;
}else{
  echo "There was a problem retrieving the live playlist.";
}

?>