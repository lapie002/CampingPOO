<?php

// include_once('Hebergement.php');

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
