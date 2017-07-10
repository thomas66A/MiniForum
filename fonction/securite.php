<?php
    

    function securite_bdd($string)

    {
        // On regarde si le type de string est un nombre entier (int)
        if(ctype_digit($string))
        {
            $string = intval($string);
        }
        // Pour tous les autres types
        else
        {
            $string = mysql_real_escape_string($string);
            $string = addcslashes($string, '%_');
        }
        return $string;
    }
	


function nettoyage($chaine)

{
    setlocale(LC_ALL, 'fr_FR');
    $chaine = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $chaine);
    $chaine = preg_replace('#[^0-9a-z]+#i', ' ', $chaine);
    while(strpos($chaine, '--') !== false)
    {
        $chaine = str_replace('--', '-', $chaine);
    }
    return $chaine;
}

function controleEmail($lemail)
{
if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $lemail)) 
{
    $bon=true;
} else {
    $bon=false;
}
return $bon;
}
function controleTelephone($tele)
    {
        if (preg_match("#^0[0-9]([ .-]?[0-9]{2}){4}$#",$tele )):
            {
                $telebon=true;
            }
        else
            {
                $telebon=false;
            }
        return $telebon;
    }

?>