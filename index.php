<?php
session_start();
include('model/laPage.php');


/*
 * Alfonso: Thomas je pense que j'aurais garder le switch
 * ici.
 * Le controller dans notre cas index.php est sensé gérer
 * tout les switch et les appels de variables.
 *
 * Pour le SQL:
 * Il faudrait lier les tables par un id clé primaire plutôt que par
 * un pseudo!
 * aussi n'oublie pas de faire un contrainte
 * FOREIGN KEY (userId) REFERENCES user(id)
 * Il te manque cette ligne quelque part
 * */

?>