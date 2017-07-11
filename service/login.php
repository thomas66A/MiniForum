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
if(isset($_POST['mdp']))
{
    $mdp=trim($_POST['mdp']);
}

/*
 * Alfonso: bien joué pour la création des fonctions dans le dossiers fonctions
 * Il faut continuer sur cette lancée est faire de cet appel en base de donné
 * une fonction
 * En clair il ne faut pas voir un "SELECT * FROM utilisateur" Dans un service
 * mais dans une fonction dans fonction.php. C'est à dire dans le model
 * */

$connexion = connexion();
$objet = $connexion->prepare('SELECT * FROM utilisateur WHERE email=:utMail');
$objet->execute(array('utMail'=>$lemail));
$retourBase = $objet->fetch();
$mail = $retourBase['email'];
$mdp2 = $retourBase['motDePasse'];
$avatar = $retourBase['lienAvatar'];
$grade = $retourBase['grade'];
$valid = $retourBase['utilisateurValid'];
$objet->closeCursor();
if(($mail==$lemail)&&($mdp==$mdp2))
    {

    /*Alfonso: $_SESSION['uid'] suffira à mon avis et le pseudo également
    * pas de mot de passe dans la session!
     * */
    // $_SESSION['mail']=$mail;
    // $_SESSION['mp']=$mdp2;
    // $_SESSION['avatar']=$avatar;
    // $_SESSION['grade']=$grade;
    // $_SESSION['valid']=$valid;
    header('location:../index.php?page=sujet');
    }
else
    {
        /*Alfonso: pas de message long dans les paramètre d'un get juste
        * un code message court. Ces messages long seront dans une view
         * */
        $message="Votre mot de passe ne correspond pas.<br>Veuillez recommencer, ou demandez en un nouveau.";
            header("location:../index.php?page=probleme&message=$message&showbutton=1");
    }

?>