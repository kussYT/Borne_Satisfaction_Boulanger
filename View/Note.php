<?php ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../View/StyleSheets/StyleGénéral.css">
    <link rel="stylesheet" href="../View/StyleSheets/Note.css">
</head>
<header>
    <img class="Logo_Boulanger" src="Images/Boulanger_Long.png" alt="images">
</header>

<body>

<div class="notation">
    <input type="hidden" name="note" id="note" value="">
    <span class="etoile" data-value="1">&#9733;</span>
    <span class="etoile" data-value="2">&#9733;</span>
    <span class="etoile" data-value="3">&#9733;</span>
    <span class="etoile" data-value="4">&#9733;</span>
    <span class="etoile" data-value="5">&#9733;</span>
</div>

<div id="afficherNote"></div>




<!--
Pour transférer des données d'un fichier PHP vers un Google Sheet, vous pouvez utiliser l'API Google Sheets.

Voici les étapes générales à suivre:

Créer un projet dans le Google Cloud Console et activer l'API Google Sheets.
Créer des identifiants d'authentification (OAuth2) pour votre projet.
Installer la bibliothèque client Google API PHP sur votre serveur.
Utiliser les identifiants d'authentification pour obtenir un jeton d'accès et un rafraîchissement de jeton.
Utiliser la bibliothèque client Google API PHP pour établir une connexion avec Google Sheets API et envoyer les données vers votre feuille de calcul Google Sheet.
Voici un exemple de code qui utilise la bibliothèque client Google API PHP pour se connecter à Google Sheets API et envoyer des données à une feuille de calcul Google Sheet:

Assurez-vous de remplacer les informations suivantes dans le code avec les informations spécifiques à votre projet:

Nom de votre application
Chemin vers votre fichier de credentials JSON
ID de votre feuille de calcul Google Sheet
Feuille1!A1 (emplacement de départ où les données seront insérées)
-->
<?php
//require_once __DIR__ . '/vendor/autoload.php'; // Chargement de la bibliothèque client Google API PHP
//
//// Configuration de l'authentification
//$client = new Google_Client();
//$client->setApplicationName('Nom de votre application');
//$client->setScopes(Google_Service_Sheets::SPREADSHEETS);
//$client->setAuthConfig('chemin/vers/votre/fichier_de_credentials.json');
//
//// Obtention d'un jeton d'accès
//$accessToken = $client->fetchAccessTokenWithAssertion()['access_token'];
//
//// Création de l'objet service pour Google Sheets API
//$service = new Google_Service_Sheets($client);
//
//// ID de votre feuille de calcul Google Sheet
//$spreadsheetId = 'ID_DE_VOTRE_FEUILLE_DE_CALCUL';
//
//// Création des données à envoyer
//$values = [
//    ["Nom", "Email", "Téléphone"],
//    ["John Doe", "john@example.com", "555-1234"],
//    ["Jane Doe", "jane@example.com", "555-5678"],
//];
//
//// Création de l'objet ValueRange pour les données à envoyer
//$dataRange = new Google_Service_Sheets_ValueRange([
//    'values' => $values
//]);
//
//// Envoi des données à la feuille de calcul Google Sheet
//$result = $service->spreadsheets_values->append(
//    $spreadsheetId,
//    'Feuille1!A1',
//    $dataRange,
//    ['valueInputOption' => 'USER_ENTERED']
//);
//
//// Affichage du résultat de l'envoi
//printf("%d lignes ont été insérées.", $result->getUpdates()->getUpdatedRows());
?>



</body>

</html>

<script>
    function colorerEtoiles(note) {
        var etoiles = document.getElementsByClassName("etoile");
        for (var i = 0; i < etoiles.length; i++) {
            if (i < note) {
                etoiles[i].style.color = "orange";
            } else {
                etoiles[i].style.color = "white";
            }
        }
    }
    var etoiles = document.getElementsByClassName("etoile");
    for (var i = 0; i < etoiles.length; i++) {
        etoiles[i].addEventListener("click", function () {
            var note = this.getAttribute("data-value");
            document.getElementById("note").value = note;
            document.getElementById("afficherNote").innerHTML = "Note : " + note; // Ajoutez cette ligne pour afficher la note
            colorerEtoiles(note);
        });
    }
</script>