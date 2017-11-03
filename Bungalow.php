<?php

include_once('Hebergement.php');

class Bungalow extends Hebergement
{


  /* le constructeur de l'objet Code */
  public function __construct()
  {
        $this->setNbCouchage(6);
        $this->setNbWC(1);
        $this->setNbDouche(1);
        $this->setNbCuisine(1);
  }

}

$Bungalow = new Bungalow();
echo "\r\n";
echo $Bungalow->getNbCouchage();
echo "\r\n";
echo $Bungalow->getNbWC();
echo "\r\n";
echo $Bungalow->getNbDouche();
echo "\r\n";
echo $Bungalow->getNbCuisine();
echo "\r\n";
