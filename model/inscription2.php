<?php
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
?>