<?php
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
         $createur = $retourBase1['pseudoCreateur'];
         if($retourBase1['reponseMessage']==1)
         {
         include('view/affichageDesSujets.php');
         }
         $i++;
         
     }
$objet1->closeCursor();
    }
    ?>