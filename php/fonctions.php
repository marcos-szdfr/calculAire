<?php

function carre($a){
    return pow($a, 2);
}


function cercle($rayon){
    return pow($rayon, 2)*PI();
}


function losange($diagonale1, $diagonale2){
    return ($diagonale1 * $diagonale2) / 2;
}


//$b = apothème
//$a = périmètre 
function polygoneReg($a, $b){
    return 1/2 * $a * $b;
}


function rectangle($a, $b){
    return ($a * $b);
}


function trapeze($petitB, $grandeB, $hauteur ){
    return((($petitB + $grandeB) * $hauteur) / 2);
}


function triangle($hauteur, $base){
    return ($base * $hauteur) /2;
}


?>