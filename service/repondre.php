<?php
session_start();
include("../fonction/securite.php");
include("../fonction/databaseFunction.php");
include("../fonction/diversFonction.php");
include("../view/erreur/messageErreur.php");
if(!empty(isset($_SESSION['pseudo'])))
    {
            $pseudo=$_SESSION['pseudo'];

        if(!empty(isset($_POST['reponse'])))
            {
            $message = nettoyage($_POST['reponse']);
            }
            else
            {
                
                header("location:../index.php?page=probleme&message=$message1");
            }
            $categorie = nettoyage($_POST['categorie']);
            $numMessage = nettoyage($_POST['numMessage']);
            $pseudoC = nettoyage($_POST['createur']);
            
            $date = date('Y-m-d');
            include('../model/repondre.php');
            header("location:../index.php?page=voirPost&categorie=$categorie&numMessage=$numMessage");
    }
else
    {
        
        header("location:../index.php?page=probleme&message=$message3");
    }
?>