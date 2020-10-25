<?php

class Univers{

  private $ID;
  private $name;
  private $description;
  private $image;


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

        case 'description': $this->setDescription($valeur);
            break;

        case 'image': $this->setImage($valeur);
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
  public function getDescription(){
    return $this->description;
  }
  public function getImage(){
    return $this->image;
  }


  public function setId($id){
    $this->ID=$id;
  }
  public function setName($name){
    $this->name=$name;
  }
  public function setDescription($description){
    $this->description=$description;
  }
  public function setImage($image){
    $this->image=$image;
  }

}




?>
