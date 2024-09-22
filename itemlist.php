<?php
include 'php/db.php';
include 'php/data.php';

$str1 = "SELECT icode, iname FROM item";
$sel = $myclass -> selectlist($str1,'iname');
echo $sel;

?>