<?php

class genrejeuvideo{

  private $ID;
  private $name;


  public function __construct($valeurs = array()){
    if(!empty($valeurs)){
      $this->affecte($valeurs);
    }
  }

  public function affecte($donnees){
    foreach($donnees as $attribut => $valeur){
      switch ($attribut){
        case 'ID': $this->setId($valeur);
            break;

        case 'name': $this->setName($valeur);
            break;

      }
    }
  }

  public function getId(){
    return $this->ID;
  }

  public function getName(){
    return $this->name;
  }



  public function setId($id){
    $this->ID=$id;
  }
  public function setName($name){
    $this->name=$name;
  }


}




?>
