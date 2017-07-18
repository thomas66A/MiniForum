<?php
session_start();

/**
 * Alfonso: normalement les vues ne vont pas ici elles vont dans le template principale
 * et oui il faut faire l'include à chaque fois dans les templates.
 * On veut que le contrôleur accède une et qu'une seule fois le templating.
 */
include('view/top.php');
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

        case "voirPost":
        include('view/voirPost.php');
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
        case "succes":
        include('view/succes.php');
        break;

        default:
        include('view/accueil.php');
        break;
    }
include('view/bottom.php');
?>