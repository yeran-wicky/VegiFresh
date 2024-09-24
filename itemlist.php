<?php
// include 'php/db.php';
// // include 'php/data.php';
// include 'sqlobj.php';

// $myclass = new sqlobj($bdd);
// $str1 = "SELECT icode, iname FROM item";
// $sel = $myclass -> selectlist($str1,'icode');
// echo $sel;


include 'php/db.php';
include 'sqlobj.php';

$myclass = new sqlobj($bdd);

$sql = "SELECT icode, iname, iprice FROM item";
echo $sql;

$shindex = array(0,1,2,);
$valindex = array(0,1);
$button = array(
    ["head"=>"<button type='button' class='btn btn-success'>Edit</button>", "cback"=>"editroom"],
    ["head"=>"<button type='button' class='btn btn-primary'>Print</button>", "cback"=>"printroom"]
);

$tbl = $myclass -> showdatatablebtn($sql , $shindex , $valindex , $button ,'tableli');
echo $tbl;
$str1 = "SELECT icode, iname , iprice FROM item";
echo $str1;
$sel = $myclass -> selectlist($str1,'icode');
echo $sel;

?>