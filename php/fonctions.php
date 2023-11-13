<?php

$formes = filter_input(INPUT_POST, "formes");

switch ($formes) {
    case 'Carre':
        echo include('../html/carre.html');
        break;
    case 'Cercle':
        echo include('../html/cercle.html');
        break;
    case 'Losange':
        echo include('../html/losange.html');
        break;
    case 'PolygoneReg':
        echo include('../html/polygoneReg.html');
        break;
    case 'Rectangle':
        echo include('../html/rectangle.html');
        break;
    case 'Trapeze':
        echo include('../html/trapeze.html');
        break;
    case 'Triangle':
        echo include('../html/triangle.html');
        break;
}

?>