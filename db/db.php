<?php
 $host = "localhost";
   $dbname = "building";
   $dbuser = "build";
   $dbpass = "****";
   
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }

// grant all privileges on food.* TO 'fuser'@'localhost' IDENTIFIED BY 'redhat'; 

?>
