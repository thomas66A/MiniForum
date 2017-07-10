<?php
if(isset($_GET['page']))
    {
        $page=$_GET['page'];
    }
else
    {
        $page="accueil";
    }
switch($page)
    {
        case "accueil":
        include('view/accueil.php');
        break;

        case "charte":
        include('view/charte.php');
        break;

        case "sujet":
        include('view/sujet.php');
        break;

        case "connexion":
        include('view/connexion.php');
        break;

        case "inscription":
        include('view/inscription.php');
        break;

        case "recherche":
        include('view/recherche.php');
        break;

        case "probleme":
        include('view/probleme.php');
        break;

        case "oublie":
        include('view/mpOublie.php');
        break;

        default:
        include('view/accueil.php');
        break;
    }
?>