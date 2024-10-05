<?php
include "php/db.php";

class sqlobj{
    var $sql ;
    public function __construct($adocon) {
        $this->adocon = $adocon;
    }
    function valtotable($tblhead,$vals,$button){
        $sx = explode(":", $tblhead);
        $strt = "<table class='table table-striped' style='width:100%'><thead><tr>";
        foreach($sx as $vals2){
            $strt .= "<th>" . $vals2 ."</th>";
        }
        $strt .= "<td>Action</td></tr></thead><tbody>";
        
        $sx = explode("#", $vals);
        foreach($sx as $vals3){
            if(strlen($vals3) > 3 ){
                $sx2 = explode(":", $vals3);
                $strt .= "<tr>";
                foreach($sx2 as $vals4){
                    $strt .= "<td>$vals4</td>";
                }
                $bttext = "";  // Action buttons logic (optional)
                $strt .= "<td>$bttext</td></tr>";
            }
        }
        $strt .= "</tbody></table>";
        return $strt;
    }
}

$vals = $_POST["pvals"];
$myclass = new sqlobj($bdd);
$th = "item:weight:price";
$btn = array();
$tbl = $myclass -> valtotable($th, $vals, $btn);
echo $tbl;
?>

