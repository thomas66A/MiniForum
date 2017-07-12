<?php
session_start();
include("../fonction/securite.php");
include("../fonction/databaseFunction.php");
include("../fonction/diversFonction.php");
include("../view/erreur/messageErreur.php");
if(!empty(isset($_SESSION['pseudo'])))
    {
            $pseudo=$_SESSION['pseudo'];
          
        if(isset($_POST['reponse']))
            {
            $message=trim($_POST['reponse']);
            if(empty($_POST['reponse']))
            {   
                header("location:../index.php?page=probleme&message=$message1");
            }
            else
            {
                $message = nettoyage($_POST['reponse']);
            }
        }
        else
        {    
            header("location:../index.php?page=probleme&message=$message1");
        }



        if(isset($_POST['titre']))
            {
            $titre=trim($_POST['titre']);
            if(!empty($_POST['titre']))
            {
            $titre = nettoyage($_POST['titre']);
            }
            else
            {    
                header("location:../index.php?page=probleme&message=$message2");
            }
            }
        else
            {
                header("location:../index.php?page=probleme&message=$message2");
            }



            $categorie = nettoyage($_POST['categorie']);
        include('model/creerDiscussion.php');
    }
else
    {
        header("location:../index.php?page=probleme&message=$message3");
    }
?>