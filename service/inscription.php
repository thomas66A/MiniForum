<?php
include("../fonction/securite.php");
include("../fonction/databaseFunction.php");
include("../fonction/diversFonction.php");
if(isset($_POST['email']))
{
    $lemail=trim($_POST['email']);
    if (controleEmail($lemail)) 
        {
            $bon=true;
        } 
    else 
        {
            $message="Il ya un problème dans votre email";
            header("location:../index.php?page=probleme&message=$message&showbutton=1");
        }
}

if($bon==true)
{
        $connexion=connexion();
        $objet = $connexion->prepare('SELECT * FROM utilisateur WHERE email=:utMail');
        $objet->execute(array('utMail'=>$lemail));
        $mails = $objet->fetch();
        $mail = $mails['email'];
        $objet->closeCursor();
}

if($mail==$lemail)
{
        $message="Un email à ce nom existe deja. <br>Veuillez utiliser la page \"CONNEXION\", afin de vous loguer.<br> Si vous avez perdu votre mot de passe, demandez-en un de nouveau.";
        header("location:../index.php?page=probleme&message=$message");
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
                        $message="Il y a un probleme dans votre numéro de téléphone.<br>Veuillez recommencer, SVP";
                        header("location:../index.php?page=probleme&message=$message&showbutton=1");
                    }
            }
        if($tag!=3)
            {
                $message="Il y a un probleme dans vos coordonnées.<br>Veuillez recommencer, SVP";
                header("location:../index.php?page=probleme&message=$message&showbutton=1");
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
                $connexion=connexion();
                $pdo = $connexion->prepare('INSERT INTO utilisateur SET nom=:nom1, prenom=:prenom1, email=:email1, dateInscription=:date1, motDePasse=:password, telephone=:tele, grade=:grade1, nombrePost=:nbpost, utilisateurValid=:utValid, lienAvatar=:avatar, pseudo=:pseudo1');
                    $pdo->execute(array(     
                    'nom1' =>$nom,
                    'prenom1'=>$prenom,
                    'email1'=> $lemail,
                    'date1'=> $dateCreation,
                    'password' => $mdp,
                    'tele' => $telephone,
                    'grade1' => $grade,
                    'nbpost' => $nombrePost,
                    'utValid' => $utilisateurValid,
                    'avatar' => $lienAvatar,
                    'pseudo1' => $pseudo
                    ));
                $messagemail = "Voici vos coordonnées de connexion au forum: COLOR.\r\nLogin: votre email.\r\nMot de passe: $mdp.\r\nNous vous souhaitons une bonne journée.";
                mail($lemail, 'Color: Vos coordonnées de connexion.', $messagemail);

                $messagemail2 = "Un nouveau inscrit: $nom  $prenom\r\n $lemail";
                mail("thomas.ohare@laposte.net", 'Color: Un nouvel inscrit.', $messagemail2);

                $message="Votre compte a était créé avec succes.<br> Vous recevrez par mail vos coordonnées de connexion.<br><br>Nous vous remercions de votre intéret.<br>L'administrateur du site.";
                header("location:../index.php?page=succes&message=$message");

            }
        
}


?>