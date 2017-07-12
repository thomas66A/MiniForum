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
            $categorie = nettoyage($_POST['categorie']);
            $numMessage = nettoyage($_POST['numMessage']);
            $pseudoC = nettoyage($_POST['createur']);
            
            $date = date('Y-m-d');
            $connexion = connexion();
            $objet = $connexion->prepare('INSERT INTO discussion SET titreMessage=:tm, message=:ms, dateMessage=:d, pseudoCreateur=:ps, pseudoRepondeur=:pr,categorie=:g, numMessage=:nm');
            $objet->execute(array(
            'tm' => NULL,
            'ms' => $message,
            'd' => $date,
            'ps' => $pseudoC,
            'pr' => $pseudo,
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