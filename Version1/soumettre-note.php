<?php

if (($_POST['note']) == 1 || ($_POST['note']) == 2 || ($_POST['note']) == 3 || ($_POST['note']) == 4 || ($_POST['note']) == 5) {
    $note = $_POST['note'];
    $date = $_POST['date'];
    $file = fopen('notes.txt', 'a');
    fwrite($file, "$note, $date\n");
    fclose($file);
}

//on repart sur la page de départ
header('Location: Bienvenue.html');

?>



