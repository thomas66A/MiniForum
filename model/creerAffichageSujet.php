<?php
include("fonction/databaseFunction.php");
include("fonction/diversFonction.php");

/***
 * Alfonso: fait des fonctions! On s'y perd sinon on ne peut pas voir clairement ce que fait le services
 * Encore une fois la vue doit être dans un template c'est à dire dans une vue
 */

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
         $affiche = $affiche . "<a href=\"index.php?page=sujet&showSujet=$idCat\" class=\"carre3\" >" . $titre . "</a>";   
     }
$objet->closeCursor();


if(isset($_GET['showSujet']))
    {
        $showSujet=$_GET['showSujet'];
    
$connexion1 = connexion();
$objet1 = $connexion1->prepare('SELECT d.*,c.* FROM color.discussion AS d
 left JOIN color.categorie AS c ON c.idCat = d.categorie where d.categorie =:cate');
$objet1->execute(array('cate'=> $showSujet));
$affiche1="";
$i=0;
while($retourBase1 = $objet1->fetch())
     {
        
         $titre1 = $retourBase1['titreMessage'];
         $categorie = $retourBase1['categorie'];
         $numMessage = $retourBase1['numMessage'];
         if($retourBase1['reponseMessage']==1)
         {
         $affiche1 = $affiche1 . "<a href=\"index.php?page=voirPost&categorie=$categorie&numMessage=$numMessage\"> - " . $titre1 ."<a><br><hr>";
         }
         $i++;
         
     }
$objet1->closeCursor();
    }

?>