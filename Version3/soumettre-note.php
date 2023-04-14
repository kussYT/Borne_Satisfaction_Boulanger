<?php

if (($_POST['note']) == 1 || ($_POST['note']) == 2 || ($_POST['note']) == 3 || ($_POST['note']) == 4 || ($_POST['note']) == 5) {
    $note = $_POST['note'];
    $date = $_POST['date'];
    $file = "//sam/sam$/Deploiement_Install/Borne_Comptoire/note.txt"; // Chemin du fichier sur le réseau
    // Ouvre le fichier en mode écriture, crée le fichier s'il n'existe pas
    $handle = fopen($file, 'a') or die("Impossible d'ouvrir le fichier!");
    fwrite($handle, "$note, $date,");
    fclose($handle);
}

//on repart sur la page de départ
header('Location: Matricule.php');

?>




