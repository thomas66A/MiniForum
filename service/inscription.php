<?php
include("../fonction/securite.php");
include("../fonction/databaseFunction.php");
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
        $message="Un email à ce nom existe deja. <br>Veuillez utiliser la page \"CONNEXION\", afin de vous loguer.<br> 
Si vous avez perdu votre mot de passe, demandez-en un de nouveau.";
        header("location:../index.php?page=probleme&message=$message");
}
else
{
        if(isset($_POST['nom']))
            {
                $nom = securite_bdd($_POST['nom']);
                $tag=1;
            }
        if(isset($_POST['prenom']))
            {
                $nom = securite_bdd($_POST['prenom']);
                $tag++;
            }
        if(isset($_POST['telephone']))
            {   $tele = preg_replace("#\. #","-",$_POST['telephone']);
                $teleBon=controleTelephone($tele);
                if($teleBon==true)
                    {
                        $telephone = securite_bdd($tele);
                        $tag++;
                    }
                else
                    {
                        $message="Il y a un probleme dans votre numéro de téléphone.<br>Veuillez recommencer";
                        header("location:../index.php?page=probleme&message=$message&showbutton=1");
                    }
            }
        if($tag!=3)
            {
                $message="Il y a un probleme dans vos coordonées.<br>Veuillez recommencer,SVP";
                header("location:../index.php?page=probleme&message=$message&showbutton=1");
            }
}


?>