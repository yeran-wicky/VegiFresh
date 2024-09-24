<?php
include "php/db.php";
include "sqlobj.php";
$myclass = new sqlobj($bdd);

$cno = $myclass -> maxacno("customer",array(),"cno");

$vals=$_POST["pvals"];
/*print_r($vals);
$str1="SELECT * from hotels order by hid desc";
$rs1=$bdd->query($str1) or die('error on $str1');
$row1=$rs1->fetch();
$hid=$row1[0]+1;*/
$str1="INSERT into customer values($cno,'$vals[0]','$vals[1]','$vals[2]')";
/*$ts1=$bdd->query($str1) or die('error on $str1');*/
$myclass -> adddata($str1);
echo "complete";

?>