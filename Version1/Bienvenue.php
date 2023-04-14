<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./StyleSheets/StyleGénéral.css">
    <link rel="stylesheet" href="./StyleSheets/Bienvenue.css">
</head>
<header>
    <img class="Logo_Boulanger" src="Images/Boulanger_Long.png" alt="images">
</header>
<body>
<!--Fichier de départ qui propose de laisser son avis sur le service donné par le comptoir-->

<div class="screen_accueil">
    <h1 >Bienvenue au comptoir du <span class="#4623"> 4623 </span></h1>
    <h1
                class="txt-rotate"
                data-period="2000"
                data-rotate='["Tu souhaites noter les services qui te sont apportés ?", "As-tu trouvé ce que tu voulais ?", "Mets un avis sur le service apporté !", "Tout en restant anonyme !" , "Cela nous aiderait grandement pour améliorer nos services"]'>
    </h1>
</div>

<div class="Bouton_bienvenue" >
    <a class="a=texte_bouton_bienvenue" href="Note.php">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        C'est parti !
    </a>
</div>

</body>

<div class="moyenne">
    <h2>Notre moyenne :   </h2>
        <?php
    require("Moyenne.php")
    ?>
</div>


</html>
<script src="./JavaScript/Message.js"></script>