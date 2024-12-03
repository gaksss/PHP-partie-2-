<?php 

$age = 14;
$gender = "Femme";


if ($age > 18){
    $majeur = " majeur";
} else {
    $majeur = " mineur";
}

echo "Vous êtes un " . $gender . " et vous êtes " . $majeur ;