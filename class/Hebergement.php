<?php

class Hebergement
{

   protected $nbCouchage;
   protected $nbWC;
   protected $nbDouche;
   protected $nbCuisine;

   /* le constructeur de l'objet Code */
   public function __construct($nbC,$nbW,$nbD,$nbCsn){

         $this->setNbCouchage($nbC);
         $this->setNbWC($nbW);
         $this->setNbDouche($nbD);
         $this->setNbCuisine($nbCsn);

   }

   /* SETTERS */
   public function setNbCouchage($nbCouchage)
   {
    # on pasre la valeur de nb en INT
    $nbCouchage = (int) $nbCouchage;
    // On vérifie que le nombre est superieur à zero
    if($nbCouchage >= 0)
    {
      $this->nbCouchage = $nbCouchage;
    }
   }

   public function setNbWC($nbW)
   {
    # on pasre la valeur de nb en INT
    $nbW = (int) $nbW;
    // On vérifie que le nombre est superieur à zero
    if($nbW >= 0)
    {
      $this->nbWC = $nbW;
    }
   }

   public function setNbDouche($nbD)
   {
    # on pasre la valeur de nb en INT
    $nbD = (int) $nbD;
    // On vérifie que le nombre est superieur à zero
    if($nbD >= 0)
    {
      $this->nbDouche = $nbD;
    }
   }

   public function setNbCuisine($nbCsn)
   {
    # on pasre la valeur de nb en INT
    $nbCsn = (int) $nbCsn;
    // On vérifie que le nombre est superieur à zero
    if($nbCsn >= 0)
    {
      $this->nbCuisine = $nbCsn;
    }
   }


   /* GETTERS */
   public function getNbCouchage()
   {
    # retourne le nbCouchage de l'objet en question
    return $this->nbCouchage;
   }

   public function getNbWC()
   {
    # retourne le nbWC de l'objet en question
    return $this->nbWC;
   }

   public function getNbDouche()
   {
    # retourne le nbDouche de l'objet en question
    return $this->nbDouche;
   }

   public function getNbCuisine()
   {
    # retourne le nbCuisine de l'objet en question
    return $this->nbCuisine;
   }

   //Methodes
   public function Nettoyer()
   {
     echo "Herbegement nettoyé";
   }

   public function Occuper()
   {
     echo "Herbegement occupé";
   }

   public function Reserver()
   {
     echo "Herbegement réservé";
   }

}
