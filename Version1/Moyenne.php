<?php
// Ouvrir le fichier en mode lecture
$fichier = fopen("../notes.txt", "r");

// Initialiser la somme et le compteur
$somme = 0;
$compteur = 0;

// Lire le contenu du fichier
if ($fichier) {
    while (($ligne = fgets($fichier)) !== false) {
        // Extraire la première valeur de la ligne
        $valeur = explode(",", $ligne)[0];

        // Ajouter la valeur à la somme et incrémenter le compteur
        $somme += intval($valeur);
        $compteur++;
    }

    // Fermer le fichier
    fclose($fichier);

    // Calculer la moyenne
    $moyenne = $somme / $compteur;
    $moyenneArrondi = $moyenne * 40;
    $moyenneArrondi = ceil($moyenneArrondi);
//    // Afficher la moyenne
//    echo "La moyenne est de : " . $moyenne;
//    echo "La moyenne arrondi est de : " . $moyenneArrondi;
//} else {
//    echo "Erreur lors de l'ouverture du fichier.";
//}
}
?>

<!--div en arrière-plan qui s'allongera en fonction de la valeur de $value1-->
<div id="value">

    <!--div qui contient les étoiles-->
    <div id="glob" >
        <img id="tde_1" src="Images/Etoile.png" class="tde"/>
        <img id="tde_2" src="Images/Etoile.png" class="tde"/>
        <img id="tde_3" src="Images/Etoile.png" class="tde"/>
        <img id="tde_4" src="Images/Etoile.png" class="tde"/>
        <img id="tde_5" src="Images/Etoile.png" class="tde"/>
    </div>
</div>

<style>
    .tde {height:40px;width:40px;}
    #value {height:40px; width:<?php echo $moyenneArrondi ?>px; background:yellow;}
    #glob {display: flex;}
</style>

