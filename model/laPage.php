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
        include('view/top.php');
        include('view/accueil.php');
        include('view/bottom.php');
        break;

        case "charte":
        include('view/top.php');
        include('view/charte.php');
        include('view/bottom.php');
        break;

        case "sujet":
        include('view/top.php');
        include('view/sujet.php');
        include('view/bottom.php');
        break;

        case "connexion":
        include('view/top.php');
        include('view/connexion.php');
        include('view/bottom.php');
        break;

        case "inscription":
        include('view/top.php');
        include('view/inscription.php');
        include('view/bottom.php');
        break;

        case "recherche":
        include('view/top.php');
        include('view/recherche.php');
        include('view/bottom.php');
        break;

        case "probleme":
        include('view/top.php');
        include('view/probleme.php');
        include('view/bottom.php');
        break;

        case "oublie":
        include('view/top.php');
        include('view/mpOublie.php');
        include('view/bottom.php');
        break;
        case "succes":
        include('view/top.php');
        include('view/succes.php');
        include('view/bottom.php');
        break;

        default:
        include('view/top.php');
        include('view/accueil.php');
        include('view/bottom.php');
        break;
    }
?>