<?php

function selectlist($sqltest,$selid){
	// field 0 is value   field 1 is text
    $rs1 = $this->adocon->query($sqltest) or Die ("Error on $sqltest");
	$str1 ="<script type='text/javascript'> $('#$selid').empty();";
	while($row1=$rs1->fetch()){
        //$str1 .="$('#$selid').append(". '"<option value='. ."' ".  '> $row1[1] </option>"'." );  " ;
        $str1 .="$('#$selid').append(". '"<option value='. "'".$row1[0]."'>".$row1[1].'</option>");' ;
        //echo $str2; 
	}
    $str1 .="</script>";
    return $str1;	 
	}
    
?>