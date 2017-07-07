<?php
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