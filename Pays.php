<?php

class Pays
{

  private $_idpays;
  private $_nompays;

  /* fonction hydratation des donnees provenant de la BDD: public function hydrate(array $donnees) */
  public function hydrate($id,$nom)
  {
      // foreach($donnees as $key => $value)
      // {
      //   // On récupère le nom du setter correspondant à l'attribut.
      //   $method = 'set'.ucfirst($key);
      //   // Si le setter correspondant existe.
      //   if(method_exists($this, $method))
      //   {
      //     // On appelle le setter.
      //     $this->$method($value);
      //   }
      // }

      // $this->setIdpays($id);
      // $this->setNompays($nom);


   }
   /* le constructeur de l'objet Code */
  //  public function __construct($id,$nom){
   //
  //       //  $this->hydrate($id,$nom);
   //
  //        $this->setIdpays($id);
  //        $this->setNompays($nom);
   //
  //  }

  function Pays($id,$nom) {

      // $this->_idpays = $id;
      // $this->_nompays = $nom;

      $this->setIdpays($id);
      $this->setNompays($nom);


  }


   /* SETTERS */
   public function setIdpays($idpays)
   {
      # on pasre la valeur de l'id en INT
      $idpays = (int) $idpays;
      // On vérifie que l id superieur à zero
      if ($idpays > 0)
      {
        $this->_idpays = $idpays;
      }
   }
   public function setNompays($nompays)
   {
    # on affecte le nom a l'objet si $code est une chaine de caracteres
    if(is_string($nompays))
    {
      $this->_nompays = $nompays;
    }
   }




   /* GETTERS */
   public function getIdpays()
   {
    # retourne l'id de l'objet en question
    return $this->_idpays;
   }
   public function getNompays()
   {
    # retourne le nom de l'objet en question
    return $this->_nompays;
   }
}






echo "\r\n";
$canada = new Pays(1,'Pologne');
echo "\r\n";
echo $canada->getNompays();
echo "\r\n";
