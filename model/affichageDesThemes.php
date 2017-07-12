<?php
$connexion = connexion();
$objet = $connexion->prepare('SELECT * FROM categorie');
$objet->execute(array());
$affiche="";
$u=1;
while($retourBase = $objet->fetch())
     {   
         
        $titre = $retourBase['nomCategorie'];
        $titreAffiche{$u} = $titre;
        $u++;
        $idCat = $retourBase['idCat'];
        include('view/affichageDesThemes.php');  
     }
$objet->closeCursor();
?>