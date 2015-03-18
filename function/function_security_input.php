<?php

	function security($string){
  	$string = strip_tags($string);
  	$string = htmlspecialchars($string);
  	$string = trim($string);
  	$string = stripslashes($string);
  	$string = mysql_real_escape_string($string);
  	return $string;
	}
	
?>
