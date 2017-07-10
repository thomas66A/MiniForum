<?php
function connexion()
{
include("../admin1964/photocompte.php");
$pdo = new PDO('mysql:host=localhost; dbname=color; charset=UTF8', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
return $pdo;
}
?>