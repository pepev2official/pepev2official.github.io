<?php
/*
             __________        __   
  ____   ____\______   \ _____/  |_ 
 /    \ /  _ \|    |  _//  _ \   __\
|   |  (  <_> )    |   (  <_> )  |  
|___|  /\____/|______  /\____/|__|  
     \/              \/             
            noBot.work
*/

$apikey = "aZbSqACTdBrvOlRmEJceLgNfGoPDFUkj";
$ip = $_SERVER["REMOTE_ADDR"];
$ua = $_SERVER["HTTP_USER_AGENT"];

$url = "https://api.nobot.work/?apikey=aZbSqACTdBrvOlRmEJceLgNfGoPDFUkj&ip=$ip&ua=" . urlencode($userAgent);
$curl = curl_init();
curl_setopt_array($curl, array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true));
$result = curl_exec($curl);
curl_close($curl);

if($result == "Y")
    die(header("HTTP/1.0 404 Not Found"));

?>