<?php

include('formulaire.php');

$formulaire = new formulaire("post", "testformulairephp.php");
$formulaire->ajouterzonetexte("Votre nom : ", "text1");
$formulaire->ajouterzonetexte("Votre code : ", "text2");
$formulaire->ajouterbouton();
$formulaire->getform();

?>