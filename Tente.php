<?php

include_once('Hebergement.php');

class Tente extends Hebergement
{

  /* le constructeur de l'objet Code */
  public function __construct()
  {
        $this->setNbCouchage(2);
        $this->setNbWC(0);
        $this->setNbDouche(0);
        $this->setNbCuisine(0);
  }


}

$tente = new Tente();
echo "\r\n";
echo $tente->getNbCouchage();
echo "\r\n";
echo $tente->getNbWC();
echo "\r\n";
echo $tente->getNbDouche();
echo "\r\n";
echo $tente->getNbCuisine();
echo "\r\n";
