<?php

include("fonction/databaseFunction.php");
include("fonction/diversFonction.php");
$tab=0;
if((isset($_GET['categorie'])) && (isset($_GET['numMessage'])))
    {
        $categorie=$_GET['categorie'];
        $numMessage=trim(intval($_GET['numMessage']));
        $tab=1;
    }
/***
 * Alfonso: il faudrait faire une fonction de l'appel en base de données
 * et l'html que tu génère devrait être une un template ( une vue).
 */

if($tab==1)
    {
        $connexion = connexion();
$objet = $connexion->prepare('SELECT * FROM discussion WHERE categorie=:cat AND numMessage=:mes');
$objet->execute(array(
    'cat' => $categorie,
    'mes' => $numMessage
));
$affiche="";
$pseudo="";
$pseudoR="";
while($retourBase = $objet->fetch())
     {   
          $message=$retourBase['message'];
          $pseudo=$retourBase['pseudoCreateur'];
          $pseudoR=$retourBase['pseudoRepondeur'];
          $date=$retourBase['dateMessage'];
        $affiche = $affiche . "<h4 id=\"g\">" . $pseudo . ". Reponse de:".$pseudoR."<h4><h4 id=\"d\">" . $date . "</h4><hr class=\"ligne\"><p>" . $message ."</p><hr>"; 
     }
$objet->closeCursor();
    }
$affiche = $affiche . "<button class=\"carre2\" id=\"repond\">REPONDRE</button>";
?>