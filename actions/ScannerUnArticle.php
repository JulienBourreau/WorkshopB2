<?php

$id_pays=filter_input(INPUT_POST, "id_pays");
$id_variete=filter_input(INPUT_POST, "id_variete");
$saison=filter_input(INPUT_POST,"saison");
$bio=filter_input(INPUT_POST,"bio");
$distance=filter_input(INPUT_POST,"distance");

require_once "../config.php";
$db = new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASE,Config::USER,Config::MDP);

$r=$db->prepare("insert into pays_variete (id_pays,id_variete,saison,bio,distance) values (:id_pays,:id_variete,:saison,:bio,:distance)");
$r->bindParam(":id_pays",$id_pays);
$r->bindParam(":id_variete",$id_variete);
$r->bindParam(":saison",$saison);
$r->bindParam(":bio",$bio);
$r->bindParam(":distance",$distance);
$r->execute();

header("Location: ../index.php");
?>