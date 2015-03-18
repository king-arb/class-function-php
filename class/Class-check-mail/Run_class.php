<?php

/**
 *	mail_ckeck_class - USE example;
 *
 * DNS & Syntax checking
 * @version 0.1
 * @copyright 2004
 **/
require("mail_check_class.php");
$check = new mail_check_global;			// initiate class
$check -> email = "admin@ra7at.com";		// REQUIRED --> address to check
$check -> debug = 1;					// OPTIONAL --> default is 0; values: 0 / 1
$check -> system_OS = "win"; 			// OPTIONAL --> default is WINDOWS; values: win / linux

// USE: if($check -> final_mail_check()) ------------------ your action here --------;

// USE example:
if ($check -> final_mail_check()){
	
	echo "<font style='color:green; font-weight:bold'>Email address IS VALID!</font>";
	
}else{
	
	echo "<font style='color:red; font-weight:bold'>The address is NOT VALID!</font>";
	
}
$check -> debug_address();			// debuging purposes

?>
