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
⠀⠀⠀⠀⢀⣴⣿⣿⡿⠁⠀⠘⠋⠀   ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⣰⣿⣿⣿⡿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠈⠻⣿⡿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠈⠀⠀  
*/
	
	// ================================= //
	// ================================= //
	 

    // ================================= //
	// ********* TELEGRAM CONFIG ******* //
    $telegram = "yes";                   // YES IF YOU WANT TO USE TELEGRAM RESULT OR NO |yes| or |no|
	$api = "";                           // GET FROM @BOTFATHER
	$chatid ="";                         // YOUR CHAT ID
	// ================================= //
	// ********* DISCORD CONFIG ******** //
	$discord = "yes";                    // YES IF YOU WANT TO USE DISCORD RESULT OR NO |yes| or |no|
	$webhookUrl = "";                    // JUST SEARCH ON YOUTUBE HOW 
	// ================================= //
	// ================================= //
	$scamname = "BASTA";                 // Change any name you want |Your Nick Name|
	// ================================= //
	// ================================= //
	$saveintext = "yes";                 // If you want to save in txt file your result or logs |yes| or |no|
	$filename = "logs"; //               // Change any file name you want this will be the Rzlt file name
	// ================================= //
	// ================================= //
	$sendtoemail = "yes";                // If you want the result send to your email | Edit |yes| or |no|
	$yours = "youremail@test.com"; 	     // Edit this to your email 
	// ================================= //
	// ================================= //
	$smsspam ="no"; 		             //  If yes only mobile phone can access can't pc| edit |yes| or |no| 
	$CFProtection ="yes"; 				 //  If you want CFProtection on first page | edit |yes| or |no| 
	// ================================= //
	// ================================= //
	// ********* IP Protection ********* //
	// ********* (DO NOT TOUCH)**********//
	$ip_protection = "no"; 			     //  If you don`t want to use IP Protection change yes to no
	$ip_protection_api = "hrLrgpkoEzw5ybr2fFYSaEmVQoSYTXAu"; // Dont touch :()
	$max_fraud_score = "75";			 //   Put max fraud score 
	$fuck_tor = "true";					 //   If you don`t want to disallow Tor Users change true to xAthena
	$fuck_vpn = "true";					 //   If you don`t want to disallow VPN Users change true to xAthena
	$fuck_crawler = "true";				 //   If you don`t want to disallow Crawler Users change true to xAthena
	// ================================= //
	// ================================= //
	// ********* DATE FUNCTION ********* //
	function now() {
		date_default_timezone_set('GMT');
		return date("d/m/Y h:i:sa");
	}
	// ********* DATE FUNCTION ********* //

?>