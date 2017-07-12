<?php
include("../fonction/securite.php");
include("../fonction/databaseFunction.php");
include("../fonction/diversFonction.php");
include("../view/erreur/messageErreur.php");
if(isset($_POST['email']))
{
    $lemail=trim($_POST['email']);
    if (controleEmail($lemail)) 
        {
            $bon=true;
        } 
    else 
        {
            header("location:../index.php?page=probleme&message=$message4&showbutton=1");
        }
}

if($bon==true)
{
        include('../model/inscription.php');
}

if($mail==$lemail)
{
        header("location:../index.php?page=probleme&message=$message5");
}
else
{
        if(isset($_POST['nom']))
            {
                $nom = nettoyage($_POST['nom']);
                $tag=1;
            }
        if(isset($_POST['prenom']))
            {
                $prenom = nettoyage($_POST['prenom']);
                $tag++;
            }
        if(isset($_POST['telephone']))
            {   $tele = preg_replace("#[^0-9]#","", $_POST['telephone']);
                $teleBon=controleTelephone($tele);               
                if($teleBon==1)
                    {
                        $telephone = $tele;
                        $tag++;
                    }
                else
                    {
                        
                        header("location:../index.php?page=probleme&message=$message6&showbutton=1");
                    }
            }
        if($tag!=3)
            {
                
                header("location:../index.php?page=probleme&message=$message7&showbutton=1");
            }
            else
            {
                $mdp=creationMdp();
                $dateCreation=date("Y-m-d");
                $grade=1;
                $nombrePost=0;
                $utilisateurValid=1;
                $lienAvatar="../image/apprenti.jpg";
                $id=creationNumMenbre();
                $pseudo=$nom.$id;
                include('../model/inscription.php');
                $messagemail = "Voici vos coordonnées de connexion au forum: COLOR.\r\nLogin: votre email.\r\nMot de passe: $mdp.\r\nNous vous souhaitons une bonne journée.";
                mail($lemail, 'Color: Vos coordonnées de connexion.', $messagemail);
                
                $messagemail2 = "Un nouveau inscrit: $nom  $prenom\r\n $lemail";
                mail("thomas.ohare@laposte.net", 'Color: Un nouvel inscrit.', $messagemail2);
                header("location:../index.php?page=succes&message=$message8");

            }
        
}


?>