<?php

// Alfonso: Les services ne sont pas sensées avoir de
// fonctions. Il faut mettre ça dans model même si c'est
// des fonctions de checking. Tu peux aussi au lieu de le
// mettre dans fonction le mettre dans un autre fichier
// checkingModel.php ou quelque chose comme ça

function voirMajeur($age)
{
    if($age<18)
    {
        $maj="mineur";
    }
    else
    {
        $maj="majeur";
    }
    return $maj;
}
?>