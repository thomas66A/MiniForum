<?php
session_start();
include("../fonction/securite.php");
include("../fonction/databaseFunction.php");
include("../fonction/diversFonction.php");
if(!empty(isset($_SESSION['pseudo'])))
    {
            $pseudo=$_SESSION['pseudo'];
          
        if(!empty(isset($_POST['reponse'])))
            {
            $message = nettoyage($_POST['reponse']);
            }
            else
            {
                $message="En problème dans la redaction de votre message";
                header("location:../index.php?page=probleme&message=$message");
            }
        if(!empty(isset($_POST['titre'])))
            {
            $titre = nettoyage($_POST['titre']);
            }
            else
            {
                $titre="Vous n'avez pas entré de titre";
                header("location:../index.php?page=probleme&message=$message");
            }
            $categorie = nettoyage($_POST['categorie']);
            switch ($categorie)
                {
                    case 1:
                    $lien="../FichierTexte/compteurCat1.txt";
                    break;

                    case 2:
                    $lien="../FichierTexte/compteurCat2.txt";
                    break;

                    case 3:
                    $lien="../FichierTexte/compteurCat3.txt";
                    break;

                    case 4:
                    $lien="../FichierTexte/compteurCat4.txt";
                    break;
                }
            $numMessage = compteurCat($lien);
            $reponse=1;
            $date = date('Y-m-d');
            $connexion = connexion();
            $objet = $connexion->prepare('INSERT INTO discussion SET 
            titreMessage=:tm, 
            message=:ms, 
            dateMessage=:d, 
            pseudoCreateur=:ps, 
            reponseMessage=:rm, 
            categorie=:g, 
            numMessage=:nm');
            $objet->execute(array(
            'tm' => $titre,
            'ms' => $message,
            'd' => $date,
            'ps' => $pseudo,
            'rm' => $reponse,
            'g' => $categorie,
            'nm' => $numMessage
            ));
            header("location:../index.php?page=voirPost&categorie=$categorie&numMessage=$numMessage");
    }
else
    {
        $message="Vous n'étes pas logué. <br>Veuillez passer par la page connexion.<br>Merci ";
        header("location:../index.php?page=probleme&message=$message");
    }
?>