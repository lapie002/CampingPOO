<?php

// include_once('Hebergement.php');

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
