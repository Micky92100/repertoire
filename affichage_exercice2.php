<?php

echo '<pre>';
var_dump($_POST);
echo '</pre>';

// Afficher proprement les informations présentes dans $_POST via des echo
// /!\ si ça existe !

// Vérifier la taille du pseudo, le pseudo doit faire entre 4 et 14 caractères
// Si la taille du pseudo ne correspond pas, on affiche un message d'erreur

$pdo = new PDO('mysql:host=localhost;dbname=repertoire', 'root', '',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


if (isset($_POST['nom']) && isset($_POST['phone']) && isset($_POST['prenom'])) {


    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $phone = trim($_POST['phone']);
    $job = trim($_POST['job']);
    $ville = trim($_POST['ville']);
    $cp = trim($_POST['cp']);
    $adresse = trim($_POST['adresse']);
    $bd = trim($_POST['bd']);
    $sexe = trim($_POST['sexe']);
    $description = trim($_POST['description']);

    $result = $pdo->exec("INSERT INTO annuaire (nom, prenom, telephone, profession, ville, codepostal, adresse, date_de_naissance, sexe, description)
VALUES ($nom, $prenom, $phone, $job, $ville, $cp, $adresse, $bd, $sexe, $description)");


}
