<?php
try {
	 $bdd = new PDO('mysql:host=localhost;dbname=vegifresh;charset=UTF8', 'root', '');
   } catch(Exception $e) {
       exit("Unable to connect to database.vegifresh mysql_error()");
  }
?>