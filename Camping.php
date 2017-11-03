<?php

class Camping
{

   private $_name;

   /* le constructeur de l'objet Code */
   public function __construct($nom){

         $this->setName($nom);

   }



   /* SETTERS */
   public function setName($nom)
   {
    # on affecte le nom a l'objet si $code est une chaine de caracteres
    if(is_string($nom))
    {
      $this->_name = $nom;
    }
   }


   /* GETTERS */
   public function getName()
   {
    # retourne le nom de l'objet en question
    return $this->_name;
   }

}

echo "\r\n";
$camping = new Camping('les flots bleu');
echo "\r\n";
echo $camping->getName();
echo "\r\n";
$camping->setName('Camping Paradie');
echo "\r\n";
echo $camping->getName();
echo "\r\n";
