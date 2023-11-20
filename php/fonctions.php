<?php

function carre($a, $b){
    return $a * $b;
}


function cercle($rayon){
    $r = pow($rayon, 2);
    return $r;
}


function losange($a, $b, $c){
    $a * $b = pow($c, 2); 
    return(pow($c, 2) / 2);
}


//$c = nb coté
//$b = apothème
//$a = périmètre 
function polygoneReg($a, $b, $c){
    return($b = $a / (2 * tan(180/$c)));
}


function rectangle($a, $b){
    return ($a * $b = $a + "cm^2");
}


function trapeze($petitB, $grandB, $hauteur ){
    return(($petitB + $petitB)* $hauteur / 2);
}


function triangle($hauteur, $base){
    return ($base * $hauteur) /2;
}


?>