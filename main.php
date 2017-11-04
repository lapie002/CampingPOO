<?php

/*Option A : chargement de chq class*/
// include_once('Camping.php');
// include_once('Hebergement.php');
// include_once('Tente.php');
// include_once('Bungalow.php');


/*Option B : chargement de une class qui les charge toutes*/
// au lieu de charger une class apres l autre comme au dessus
// on charge le singleton Autoloader
require('class/Autoloader.php');
// on appele une methode : register de la Classe Autoloader
Autoloader::register();


echo "Mon Camping s'appelait :";
$camping = new Camping('les flots bleu');
echo "\r\n";
echo $camping->getName();
echo "\r\n";
echo "Mon Camping s'appele maintenant :";
$camping->setName('Camping Paradie');
echo "\r\n";
echo $camping->getName();
echo "\r\n";

$tente = new Tente();
echo "Ma Tente: \r\n";
echo $tente->getNbCouchage();
echo "\r\n";
echo $tente->getNbWC();
echo "\r\n";
echo $tente->getNbDouche();
echo "\r\n";
echo $tente->getNbCuisine();
echo "\r\n";

echo "Ma Bungalow: \r\n";
$Bungalow = new Bungalow();
echo $Bungalow->getNbCouchage();
echo "\r\n";
echo $Bungalow->getNbWC();
echo "\r\n";
echo $Bungalow->getNbDouche();
echo "\r\n";
echo $Bungalow->getNbCuisine();
echo "\r\n";
