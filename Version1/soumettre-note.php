<?php

if (($_POST['note']) == 1 || ($_POST['note']) == 2 || ($_POST['note']) == 3 || ($_POST['note']) == 4 || ($_POST['note']) == 5) {
    $note = $_POST['note'];
    $date = $_POST['date'];
    $file = "../notes.txt"; // Chemin du fichier sur le réseau
    // Ouvre le fichier en mode écriture, crée le fichier s'il n'existe pas
    $handle = fopen($file, 'a') or die("Impossible d'ouvrir le fichier!");
    fwrite($handle, "$note, $date\n");
    fclose($handle);
}
?>
<meta http-equiv="refresh" content="30">
<?php
//on repart sur la page de départ
header('Location: Bienvenue.php');

?>




