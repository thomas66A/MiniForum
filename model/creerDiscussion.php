<?php
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
        ?>