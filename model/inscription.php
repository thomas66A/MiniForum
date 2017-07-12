<?php
$connexion=connexion();
        $objet = $connexion->prepare('SELECT * FROM utilisateur WHERE email=:utMail');
        $objet->execute(array('utMail'=>$lemail));
        $mails = $objet->fetch();
        $mail = $mails['email'];
        $objet->closeCursor();
?>