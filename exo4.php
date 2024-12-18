<?php



// Première solution
$magnitude = 6;


switch ($magnitude) {
    case 1:
        echo "Micro-séisme impossible à ressentir.";
        break;

    case 2:
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;
    case 3:
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.
";
        break;
    case 4:
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.
";
        break;
    case 5:
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.
";
        break;
    case 6:
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.
";
        break;
    case 7:
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.
";
        break;
    case 8:
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.
";
        break;
    case 9:
        echo "Séisme capable de tout détruire sur une très vaste zone.
";
        break;
}



// Deuxième solution 



 // Changez la valeur ici pour tester différents cas

// Définir les phrases associées aux magnitudes
// $magnitudeDescriptions = [
//     1 => "Micro-séisme impossible à ressentir.",
//     2 => "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.",
//     3 => "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.",
//     4 => "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.",
//     5 => "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentant des défauts de construction. Peu de dégats sur des bâtiments modernes.",
//     6 => "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.",
//     7 => "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.",
//     8 => "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.",
//     9 => "Séisme capable de tout détruire sur une très vaste zone."
// ];

// // Vérifier si la magnitude est valide
// if (isset($magnitudeDescriptions[$magnitude])) {
//     echo $magnitudeDescriptions[$magnitude];
// } else {
//     echo "Valeur de magnitude invalide. Veuillez entrer une valeur entre 1 et 9.";
// }
