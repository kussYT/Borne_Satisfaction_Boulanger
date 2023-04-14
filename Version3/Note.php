<?php ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./StyleSheets/StyleGénéral.css">
    <link rel="stylesheet" href="./StyleSheets/Note.css">
</head>
<header>
    <img class="Logo_Boulanger" src="Images/1643879359590.jfif" alt="images">
</header>

<body>

<div class="moyenne">
    <h2>Notre moyenne :   </h2>
    <?php
    require("Moyenne.php")
    ?>
</div>

<div class="notation">
    <input type="hidden" name="note" id="note" value="">
    <span class="etoile" data-value="1">&#9733;</span>
    <span class="etoile" data-value="2">&#9733;</span>
    <span class="etoile" data-value="3">&#9733;</span>
    <span class="etoile" data-value="4">&#9733;</span>
    <span class="etoile" data-value="5">&#9733;</span>
</div>

<!--Faire une texte area ou on pourra écrire du texte-->
<div class="texte">
    <input name="texte" id="texte"></input>
</div>


<div class="boutonSubmit">
    <a class="a=texteboutonSubmit" href="soumettre-note.php">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Soumettre
</div>

<script>
    const etoiles = document.getElementsByClassName("etoile");
    for (let i = 0; i < etoiles.length; i++) {
        etoiles[i].addEventListener("click", function () {
            const note = this.getAttribute("data-value");
            document.getElementById("note").value = note;
            colorerEtoiles(note);
        });
    }

    function colorerEtoiles(note) {
        const etoiles = document.getElementsByClassName("etoile");
        for (let i = 0; i < etoiles.length; i++) {
            if (i < note) {
                etoiles[i].style.color = "orange";
            } else {
                etoiles[i].style.color = "grey";
            }
        }
    }

    const boutonSoumettre = document.querySelector('.boutonSubmit');

    boutonSoumettre.addEventListener('click', () => {
        const note = document.getElementById("note").value;
        const matricule = document.getElementById("matricule").value;
        const date = new Date().toLocaleString();

        // Envoi de la note et de la date via une requête HTTP POST
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'soumettre-note.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(`note=${note}&date=${date}`);
    });
</script>

</body>
</html>