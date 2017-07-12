<?php
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
?>