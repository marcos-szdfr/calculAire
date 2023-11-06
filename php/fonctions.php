<?php

$formes = filter_input(INPUT_POST, "formes");

switch ($formes) {
    case 'Carre': 
        echo include('./html/carre.html');
        break;
}