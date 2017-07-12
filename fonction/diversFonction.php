<?php
function creationNumMenbre()
{
    $compteur= fopen('../FichierTexte/numeromenbre.txt','r+');
    $vue=fgets($compteur);
    $vue2=$vue+1;
    fseek($compteur,0);
    fputs($compteur, $vue2);
    fclose($compteur);
    return $vue2;
}
function compteurCat($lien)
{
    $compteur= fopen($lien,'r+');
    $vue=fgets($compteur);
    $vue2=$vue+1;
    fseek($compteur,0);
    fputs($compteur, $vue2);
    fclose($compteur);
    return $vue2;
}


?>