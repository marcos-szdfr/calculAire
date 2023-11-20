<?php

$formes = filter_input(INPUT_POST, "formes", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$btn = filter_input(INPUT_POST, "calculer", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if ($formes == null) {
    include("html/choix.html");
} else if (false == $btn) {
    switch ($formes) {
        case 'Carre':
            include 'html/carre.html';
            break;
        case 'Cercle':
            include('html/cercle.html');
            break;
        case 'Losange':
            include('html/losange.html');
            break;
        case 'PolygoneReg':
            include('html/polygoneReg.html');
            break;
        case 'Rectangle':
            include('html/rectangle.html');
            break;
        case 'Trapeze':
            include('html/trapeze.html');
            break;
        case 'Triangle':
            include('html/triangle.html');
            break;
    }
}

var_dump($formes);






//Les dimensions doivent être nettoyées et validées avec les filtres adéquats 
//(en utilisant la fonction filter_input).
$cote = filter_input(INPUT_POST, 'Cote1', FILTER_VALIDATE_INT);
$cote2 = filter_input(INPUT_POST, 'Cote2', FILTER_VALIDATE_INT);

$rayon = filter_input(INPUT_POST, "Rayon", FILTER_VALIDATE_INT);

$base = filter_input(INPUT_POST, "baseTriangle", FILTER_VALIDATE_INT);
$hauteur = filter_input(INPUT_POST, "htrTriangle", FILTER_VALIDATE_INT);

$ptBase = filter_input(INPUT_POST, "petiteBaseTrpz", FILTER_VALIDATE_INT);
$grandeBase = filter_input(INPUT_POST, "grandeBaseTrpz", FILTER_VALIDATE_INT);
$hauteurTrap = filter_input(INPUT_POST, "htrTrpz", FILTER_VALIDATE_INT);


$longueur = filter_input(INPUT_POST, "longueurRec", FILTER_VALIDATE_INT);
$largeur = filter_input(INPUT_POST, "largeurRec", FILTER_VALIDATE_INT);

$permietre = filter_input(INPUT_POST, "Permietre", FILTER_VALIDATE_INT);
$apotheme = filter_input(INPUT_POST, "Apotheme", FILTER_VALIDATE_INT);



//Si les dimensions ne sont pas des chiffres valides, un message d’erreur en informera 
//l’utilisateur.
//if($cote == false){
//    echo "Veuillez entrer une valeur numérique.";
//}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalulAire</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


</body>

</html>