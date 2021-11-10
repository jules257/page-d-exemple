<?php
require('connexion.php');
$nom=isset($_POST['nom'])?$_POST['nom']:"";
$prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
$prep=$jul->prepare("INSERT INTO identite(nom,prenom) values(?,?)");
$param=array($nom,$prenom);
?>