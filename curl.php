<?php

function url($site){

$url =curl_init();// cache url
curl_setopt($url, CURLOPT_RETURNTRANSFER,1);
curl_setopt($url, CURLOPT_URL, $site);
$data = curl_exec($url);  
curl_close($url);
return $data;

}

echo url("www.delfi.ee");
echo url("www.google.com");

?>